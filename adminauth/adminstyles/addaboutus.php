<?php


if (isset($_POST['addabout'])) {
    $targetDir = "uploads/";
    $allowTypes = array('jpg', 'png', 'jpeg');
    $about = htmlspecialchars($_POST['editor2']);
    $fileNames = array_filter($_FILES['images']['name']);

    if (empty($about)) {
        echo "<script>
toastr.error('About us Required!');
</script>";
    } elseif (empty($fileNames)) {
        echo "<script>
toastr.error('About image are required', 'Images required!');
</script>";
    }elseif(mysqli_num_rows($getaboutus)>0){
        echo "<script>
toastr.error('About Us has already been added', 'Consider updating');
</script>";
    } else {


            foreach ($_FILES['images']['name'] as $key => $val) {
// File upload path
                $fileName = basename($_FILES['images']['name'][$key]);
                $targetFilePath = $targetDir . $fileName;

// Check whether file type is valid
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                if (in_array($fileType, $allowTypes)) {
// Upload file to server
                    if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFilePath)) {
// Image db insert sql
                        $insertValuesSQL = "insert into aboutus set image='$fileName',aboutus='$about',created_at=NOW()";
                        if (mysqli_query($conn, $insertValuesSQL)) {
                            echo "<script>
toastr.success('Content added successfully!', 'Success!');
window.location.href='aboutus.php'
</script>";
                        }



                }
            }

        }
    }
}


if (isset($_POST['update_about'])) {
    $targetDir = "uploads/";
    $allowTypes = array('jpg', 'png', 'jpeg');
    $about = htmlspecialchars($_POST['editor2']);
    $fileNames = array_filter($_FILES['images']['name']);
$abtid=$_POST['abtid'];
    if (empty($about)) {
        echo "<script>
toastr.error('About us Required!');
</script>";
    } elseif (empty($fileNames)) {
        $updateabt = "update  aboutus set aboutus='$about',updated_at=NOW() where  id='$abtid'";
        if (mysqli_query($conn,$updateabt)>0){
            echo "<script>
toastr.success('About Us updated successfully', 'Changes success');
window.location.href='aboutus.php'
</script>";
        }
    }else {

        foreach ($_FILES['images']['name'] as $key => $val) {
// File upload path
            $fileName = basename($_FILES['images']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
unlink($targetDir.getaboutimage($abtid));
// Check whether file type is valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            if (in_array($fileType, $allowTypes)) {
// Upload file to server
                if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFilePath)) {
// Image db insert sql
                    $insertValuesSQL = "update  aboutus set image='$fileName',aboutus='$about',updated_at=NOW() where id='$abtid'";
                    if (mysqli_query($conn, $insertValuesSQL)) {
                        echo "<script>
toastr.success('Content updated successfully!', 'Success!');
window.location.href='aboutus.php'
</script>";
                    }


                }
            }

        }
    }
}