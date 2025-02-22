<?php
include('session.php');

include("header.php");
include("config.php");

if (!isset($_SESSION['Email'])) {
    header("location: login.php");
}
$query = "SELECT * FROM emp_attendance";
$res = mysqli_query($connection, $query);

?>
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Profile Details </h4>
            <div class="profile-img d-flex justify-content-center pb-5 mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </div>
        </div>
    </section>
</div>
<section id="tabs" class="project-tab">
    <div class="container">

        <div class="col-md-12">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Attendance</a>
                    <!-- <a class="nav-item nav-link" id="stage-2-tab" data-toggle="tab" href="#stage-2" role="tab" aria-controls="stage-2" aria-selected="false">Interviewed</a> -->
                    <!-- <a class="nav-item nav-link" id="stage-3-tab" data-toggle="tab" href="#stage-3" role="tab" aria-controls="stage-3" aria-selected="false">Short Listed</a> -->
                    <!-- <a class="nav-item nav-link" id="stage-4-tab" data-toggle="tab" href="#stage-4" role="tab" aria-controls="stage-4" aria-selected="false">Final Candidates</a> -->
                    <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Others</a> -->
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <!-- <h2>Scan QR Code</h2>
                <div id="reader" style="width: 300px;"></div>
                <p>Result: <span id="result">Waiting...</span></p> -->
                <!--  -->


                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Date</label>
                        <div class="col-sm-2">
                            <input id="date" type="date" name="" class="form-control" value="" readonly>
                        </div>
                        <label class="col-sm-1 col-form-label">Time</label>
                        <div class="col-sm-2">
                            <input id="time" type="time" name="" class="form-control" value="" readonly>
                        </div>
                        <div class="col-sm-4">
                            <!-- <button class="btn button-style" type="button" onclick="emp_present()">Submit</button> -->
                            <button id="scan-btn" class="btn button-style mb-3">Open Camera</button>
                        </div>
                    </div>
                </div>
                <h2 id="heading" style="display: none;">QR Code Scanner</h2>
                <div id="scanner-container" style="display: none;">
                    <div id="reader" style="width: 300px; margin-bottom:20px;"></div>
                </div>

                <p id="result-container" style="display: none;">Result: <span id="result"></span></p>

            </div>
            <div class="row">
                <h3>Employee Attendance</h3>
            </div>
            <table class="table  mt-3">
                <thead>
                    <th scope="col">si.no</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Attendance</th>
                    <th scope="col">IN Time</th>
                    <th scope="col">Out Time</th>
                </thead>
                <tbody>
                    <?php $i = 0;
                    while ($row = mysqli_fetch_assoc($res)) {
                        $i++;
                    ?>
                        <tr>
                           <td> <?php echo $i; ?></td>
                           <td> <?php echo  $row['emp_id']; ?></td>
                           <td> <?php echo $row['date']; ?></td>
                           <td> <?php echo $row['in_time']; ?></td>
                           <td> <?php echo $row['out_time']; ?></td>
                        </tr>
                        <!-- <tr><?php // echo $row['date'] ; 
                                    ?></tr> -->
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</section>
<?php
include("footer.php");
?>
<script src="https://unpkg.com/html5-qrcode"></script>
<script>
    // for date 
    const currentDate = new Date();
    const formattedDate = currentDate.toISOString().split('T')[0];
    document.getElementById('date').value = formattedDate;
    // console.log(formattedDate)
    // for date END
    // for time 
    function updateTime() {
        // Create a new Date object to get the current time
        const currentTime = new Date();

        // Format the time (HH:MM:SS)
        const hours = String(currentTime.getHours()).padStart(2, '0');
        const minutes = String(currentTime.getMinutes()).padStart(2, '0');
        const seconds = String(currentTime.getSeconds()).padStart(2, '0');

        // Combine the formatted hours, minutes, and seconds
        const timeString = `${hours}:${minutes}:${seconds}`;

        // Display the time in the <p> element with id="time"
        document.getElementById('time').value = timeString;
    }

    // Update the time every 1000 milliseconds (1 second)
    setInterval(updateTime, 1000);

    // 
    function emp_present(emp_id) {
        let date = document.getElementById('date').value;
        let time = document.getElementById('time').value;
        $.ajax({
            url: 'emp_attendance_submit.php',
            type: 'POST',
            data: {
                date,
                time,
                emp_id
            },
            success: function(res) {
                // document.getElementById('list_table').innerHTML= res;
                //     alert(res);
                //     window.location.reload();
                    // console.log(emp_id);
                    window.location.reload();
            }
        });

    }

    // 
    // function onScanSuccess(qrCodeMessage) {
    //     document.getElementById('result').innerText = qrCodeMessage;
    // }

    // function onScanError(errorMessage) {
    //     // Handle scan errors (optional)
    //     console.warn(errorMessage);
    // }

    // let qrScanner = new Html5Qrcode("reader");
    // qrScanner.start({
    //         facingMode: "environment"
    //     }, // Use the back camera if available
    //     {
    //         fps: 10,
    //         qrbox: 250
    //     },
    //     onScanSuccess,
    //     onScanError
    // );
    let scanner;

    document.getElementById('scan-btn').addEventListener('click', function() {
        if (confirm("Do you want to allow camera access for QR scanning?")) {
            startScanner();
        }
    });

    function startScanner() {
        document.getElementById('heading').style.display = "block"; // Show heading
        document.getElementById('scanner-container').style.display = "block"; // Show scanner
        document.getElementById('result-container').style.display = "none"; // Hide previous result

        scanner = new Html5Qrcode("reader");

        scanner.start({
                facingMode: "user"
            }, {
                fps: 10,
                qrbox: 250
            },
            (qrCodeMessage) => {
                document.getElementById('result').innerText = qrCodeMessage;
                stopScanner();
                emp_present(qrCodeMessage);
                
            },
            (errorMessage) => {
                console.warn(errorMessage);
            }
        );
    }

    function stopScanner() {
        scanner.stop().then(() => {
            document.getElementById('scanner-container').style.display = "none"; // Hide scanner
            document.getElementById('result-container').style.display = "block"; // Show result
            document.getElementById('heading').style.display = "none"; // Hide heading

            // Hide result after 15 seconds
            setTimeout(() => {
                document.getElementById('result-container').style.display = "none";
            }, 15000);
        }).catch(err => console.error("Scanner stop error: ", err));
    }
</script>