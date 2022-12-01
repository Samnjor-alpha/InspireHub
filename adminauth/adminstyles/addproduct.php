<?php


if (isset($_POST['addproduct'])) {
    $targetDir = "uploads/";
    $allowTypes = array('jpg', 'png', 'jpeg');
    $pname = trim($_POST['pname'], '');
    $pcateg = trim($_POST['pcateg'], '');
    $pdesc = htmlspecialchars($_POST['editor2']);
    $purl = trim($_POST['purl'], '') ?? null;
    $fileNames = array_filter($_FILES['images']['name']);

    if (empty($pname) || empty($pcateg) || empty($pdesc)) {
        echo "<script>
toastr.error('Product Name,Category and description are required', 'Details required!');
</script>";
    } elseif (empty($fileNames)) {
        echo "<script>
toastr.error('Product images are required', 'Images required!');
</script>";
    }elseif(checkproductexists($pname,$pcateg)){
        echo "<script>
toastr.error('Product already added', 'Product exists');
</script>";
    } else {
        $addproduct = "insert into products set pname='$pname',pcateg='$pcateg',purl='$purl',pdesc='$pdesc'";
        if (mysqli_query($conn, $addproduct)) {
            $pid = mysqli_insert_id($conn);

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
                        $insertValuesSQL = "insert into p_images set images='$fileName',p_id='$pid'";
                        if (mysqli_query($conn, $insertValuesSQL)) {
                            echo "<script>
toastr.info('Image uploaded successfully!', 'Success!');
</script>";
                        }

                    }

                }
            }
            echo "<script>
toastr.success('Product added successfully!', 'Success!');
</script>";
        }
    }
}