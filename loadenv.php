<?php
function loadEnv($filePath){
    if (!file_exists($filePath)) {
        throw new Exception('.env file not found.');
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Split each line into key and value
        list($name, $value) = explode('=', $line, 2);

        // Remove quotes from the value
        $value = trim($value, '"');
        
        // Set the environment variable if not already set
        if (!getenv($name)) {
            putenv("$name=$value");
            $_ENV[$name] = $value;  // Optionally populate the $_ENV array
            $_SERVER[$name] = $value; // Optionally populate the $_SERVER array
        }
    }
}
?>