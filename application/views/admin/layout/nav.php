<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a  href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <!-- Menu user -->
            <li>
                <a href="#"><i class="fa fa-tag"></i> Sekolah<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/sekolah') ?>">Data Sekolah</a></li>
                    <li><a href="<?php echo base_url('admin/sekolah/tambah') ?>">Tambah Sekolah</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-flag"></i> Presentasi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/presentasi') ?>">Data Presentasi</a></li>
                    <li><a href="<?php echo base_url('admin/presentasi/tambah') ?>">Tambah Presentasi</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> Team<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/team') ?>">Data Team</a></li>
                    <li><a href="<?php echo base_url('admin/team/tambah') ?>">Tambah Team</a></li>
                </ul>
            </li>  
            <li>
                <a href="#"><i class="fa fa-user"></i> User/Admin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/user') ?>">Data User</a></li>
                    <li><a href="<?php echo base_url('admin/user/tambah') ?>">Tambah User</a></li>
                </ul>
            </li> 
        </ul>
        <br/>
    </div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             <h2><?php echo $title ?></h2>   
         </div>
     </div>
     <!-- /. ROW  -->
     <hr />

     <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo $title ?>
               </div>
               <div class="panel-body">
                <div class="table-responsive">