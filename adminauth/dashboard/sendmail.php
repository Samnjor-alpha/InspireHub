<?php include '../../database/config.php';
include '../admincontrollers/authcontrollers.php';
include '../admincontrollers/helper.php';
include '../admincontrollers/session.php';
include '../admincontrollers/subscribers.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Email</title>
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

                <h4>Mailing  List</h4>
                <div class="row">
                    <?php include '../adminbars/mailistbar.php' ?>
                    <div class="col-7 col-sm-9">

                        <div class="mt-3">
                            <div class="">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <fieldset class="form-group">
                                                <span class="item-text small"><label for="all"><i class="fas fa-users fa-2x"></i></label></span>
                                                <input class="all" type="checkbox"  checked title="send to all" name="send_" value="all" />

                                            </fieldset>

                                        </div>
                                        <div class="col-6">
                                        <?php if (checknewsubscriber()){ ?>
                                            <fieldset class="dn">
                                                <span class="item-text small"><label for="new"><i class="fas fa-user-tag fa-2x"></i></label></span>
                                                <input class="new" type="checkbox" title="send to New" name="send_" value="new" />
                                            </fieldset>
                                        <?php } ?>
                                    </div>
                                    </div>

                                    <div id="to" class="form-group">
                                        <label for="to">All Subscribers</label>
                                        <input id="to"  type="text"
                                               name="emails[]"
                                               data-role="tagsinput"
                                               required
                                               value="<?php

                                                   echo implode(',',getallmails());
                                                   ?>"
                                               class="form-control"
                                               placeholder="To:">
                                    </div>
                                    <?php if (checknewsubscriber()){ ?>
                                    <div id="new_add" style="display:none" class="form-group">
                                        <label for="to">New Subscribers</label>
                                        <input id="to"  type="text"
                                               name="emails[]"
                                               data-role="tagsinput"
                                               required
                                               value="<?php

                                               echo implode(',',getnewmails());
                                               ?>"
                                               class="form-control"
                                               placeholder="To:">
                                    </div>
                                    <?php  }else{?>
                                        <div id="new_add" style="display:none" class="form-group">
                                            <label for="to">Recipients</label>
                                            <input id="to"  type="text"
                                                   name="emails[]"
                                                   data-role="tagsinput"
                                                   required

                                                   class="form-control"
                                                   placeholder="To:">
                                        </div>

                                    <?php } ?>
                                    <div class="form-group">
                                        <input class="form-control" name="subject"   placeholder="Subject:">
                                    </div>
                                    <div class="form-group">
                                        <label for="editor2">Message</label>
                                        <textarea id="editor2" name="email_msg" class="form-control" placeholder="Compose...."></textarea>
                                    </div>
                                    <button type="submit" name="sendmail" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send Email</button>
                                </form>
                            </div>
                        </div>
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
include '../admincontrollers/addreport.php';
include '../admincontrollers/sendmailer.php';
?>
<script>

    CKEDITOR.config.height='100px';

    $("#to").show();
    $(".all").click(function() {
        if($(this).is(":checked")) {
            $(".new").prop("checked", false);
            $("#new_add").hide()
            $("#to").show();
        }else {
            $(".new").prop("checked", true);
            $("#new_add").show()
            $("#to").hide();

        }
    });
    $(".new").click(function() {
        if($(this).is(":checked")) {
            $("#to").hide();
            $("#new_add").show()
            $(".all").prop("checked", false);
        } else {
            $("#to").show();
            $("#new_add").hide();
            $(".all").prop("checked", true);

        }
    });
</script>
</body>
</html>
