<?php


if (isset($_POST['apply'])) {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $flnamed = $fname . ' ' . $lname;
    $flname=ucwords($flnamed);
    $email = trim($_POST['email']);
    $tel = trim($_POST['tel']);
    $campus = trim($_POST['campus']);
    $course = trim($_POST['course']);
    $sdate = trim($_POST['sdate']);
    $edate = trim($_POST['edate']);
    $file = $_FILES['letter'];
    $filename = $file['name'];
    $filetmp = $file['tmp_name'];
    $appid = applicationid();

    // Check if all required fields are filled
    if (empty($fname) || empty($lname) || empty($campus) || empty($course) || empty($email) || empty($tel) || empty($appid)) {
        echo "<script>
            toastr.error('All fields are required', 'Details required!')
        </script>";
    } elseif (checkifAttrequested($email, $tel)) {
        echo "<script>
            toastr.warning('We have received your Application. We shall get in touch with you shortly', 'Received')
        </script>";
    } else {
        // File upload handling



            // Define the directory where the files will be stored
            $uploadDirectory = 'uploads/';

            // Generate a unique filename to prevent collisions
            $uniqueFilename = $appid. '_' . $filename;


            $filePath = $uploadDirectory . $uniqueFilename;

            // Move the uploaded file to the desired location
            if (move_uploaded_file($filetmp, $filePath)) {

                if (addapplication($appid, $flname, $email, $tel, $campus, $course, $sdate, $edate,$filePath)) {
//                    notifyapplicant($flname, $email, $appid);
                    sendnotifysms($tel,$flname);
                    echo "<script>
                        toastr.success('Application was successful. We will get in touch with you.', 'Success')
                    </script>";
                } else {
                    echo "<script>
                        toastr.error('An error occurred', 'Error')
                    </script>";
                }
            } else {
                echo "<script>
                    toastr.error('Error moving uploaded file', 'Error')
                </script>";
            }

    }
}

