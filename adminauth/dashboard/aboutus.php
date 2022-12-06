<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
include '../admincontrollers/addaboutuscontroller.php';

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <?php include '../adminstyles/css.php' ?>
    </head>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include '../adminbars/topbar.php' ?>


        <!-- Main Sidebar Container -->
        <?php include "../adminbars/sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Overview</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Overview</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <?php include '../adminbars/managementbars.php'?>
                    <div class="row mt-3">
                        <div class="offset-3 col-9 col-sm-7">
                            <form method="POST" action="" class="g-3 mb-4" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="tags">About Us</label>
                                    <textarea id="tags" name="editor2" required><?= html_entity_decode($row['aboutus']) ?? null ?></textarea>

                                </div>

                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <label class="upload__btn">
                                            Upload image <i class="fas fa-images"></i>
                                            <input type="file"  accept="image/*" name="images[]" class="upload__inputfile" >
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                </div>

<?php if (mysqli_num_rows($getaboutus)<1){ ?>

    <div class="text-center">
        <button name="addabout" class="btn btn-primary">Add About us</button>
    </div>
<?php }else{ ?>
<input type="hidden" value="<?= $row['id'] ?>" name="abtid" >
    <div class="text-center">
        <button name="update_about" class="btn btn-primary">Update About us</button>
    </div>
    <?php } ?>

                            </form>
                        </div>



                    </div>

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>


    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php include '../adminstyles/scripts.php';
    include '../adminstyles/addaboutus.php';
    ?>
    <script>
        jQuery(document).ready(function () {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function () {
                $(this).on('change', function (e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function (f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function (e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>
    </body>
    </html>
<?php
