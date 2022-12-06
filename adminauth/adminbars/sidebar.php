<aside class="main-sidebar  border-right border-dark sidebar-dark-primary">
    <div class="bg-dark">
        <a href="dashboard.php" class="brand-link">

            <span class="brand-text font-weight-bolder">InspireHub</span>
        </a>
    </div>
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name=<?= $_SESSION['Anames'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block text-capitalize"><?= $_SESSION['role'] ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link <?php active('dashboard.php'); ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Overview

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="clients.php" class="nav-link <?php
                    active('prospects.php');
                    active('clients.php');
                    active('prospect.php');?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                             Clients

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="addreports.php" class="nav-link <?php active('reports.php');
                    active('engagements.php');
                    active('addreport.php');
                    active('viewreport.php');
                    active('report.php');
                    active('addreports.php'); ?>">
                        <i class="nav-icon far fa-file-pdf"></i>
                        <p>
                            Reports

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="users.php" class="nav-link <?php active('users.php'); ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                     Users

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="mailings.php" class="nav-link <?php
                    active('sendmail.php');
                    active('mailings.php'); ?>">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                        <p>
                     Mail List

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="quotationrequests.php" class="nav-link <?php active('quotationrequests.php'); ?>">
                        <i class="nav-icon fas fa-quote-left"></i>
                        <p>
                     Quotation Request

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="management.php" class="nav-link <?php
                    active('viewproducts.php');
                    active('management.php');
                    active('aboutus.php');?>">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Web  Management
                        </p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>