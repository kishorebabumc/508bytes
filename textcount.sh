#!/bin/bash
# running this script will give file names contains greater than one times
# Directory containing the files
DIRECTORY="/home/cabox/workspace/508bytes"

# Text to search for
SEARCH_TEXT="session.php"

# Loop through each file in the directory
for file in "$DIRECTORY"/*; do
  if [[ -f "$file" ]]; then
    # Count the number of occurrences of SEARCH_TEXT in the file
    COUNT=$(grep -o "$SEARCH_TEXT" "$file" | wc -l)
    if (( COUNT > 1 )); then
      echo "File: $(basename "$file") - Count of '$SEARCH_TEXT': $COUNT"
    fi
    # echo "File: $(basename "$file") - Count of '$SEARCH_TEXT': $COUNT"
  fi
done