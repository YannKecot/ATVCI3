<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link href="<?= base_url('sb-admin-2/') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('sb-admin-2/') ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>css1/styles.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.7/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.7/datatables.min.js" defer></script>
    
    <!-- Hapus atau comment semua referensi DataTables lainnya -->
	
	
</head>
<?php
										$pesan=$this->session->flashdata('pesan');
										if ($pesan=="")
										{
											echo "";	
										}
										else
										{
									
										?>
										
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
									   <button type="button" class="btn btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close">
									  </button>
										<?php echo $pesan; ?>                        
										</div>
										
										<?php
										}
										?>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: orange;">
    
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    
    <!-- Navbar Right Items -->
    <ul class="navbar-nav ms-auto me-3 me-lg-4">  <!-- Ensure this has ms-auto to align items to the right -->
       
	  <!-- Navbar-->
	  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Ubah Akun</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('dashboard/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
</nav>
<br>
<br>


    <div id="wrapper">
        <!-- Sidebar -->
		
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
                <div class="sidebar-brand-text mx-3">ATV Tour</div>
            </a>
			<?php
							$Level=$this->session->userdata('Level');
							if($Level=="Admin")
							{
                              
                                echo '<span class="text-warning">Admin</span>';
                               
                                
							}
							else
							{
								echo "Kasir";	
							}
							?>

			
							
            <hr class="sidebar-divider my-0">
			

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
		
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
               ATV
            </div>
            <?php
							if($Level=="Admin")
							{
							?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('atvmerek') ?>">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Data Merk</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('atv') ?>">
                    <i class="fas fa-fw fa-car-alt"></i>
                    <span>Data ATV</span>
                </a>
            </li>
			<?php
							}
						   ?>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
               Pemesan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pemesan') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Pemesan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pemesan') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Pemesan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('#') ?>">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Data Jenis Bayar</span>
                </a>
            </li>
            
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Pesanan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('#') ?>">
                    <i class="fas fa-fw fa-street-view"></i>
                    <span>Data Perjalanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('#') ?>">
                    <i class="fas fa-fw fa-receipt"></i>
                    <span>Data Pesanan</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Pengaturan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('#') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manajemen Akun</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
			
			
        </ul>
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">
                        <hr>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data ATV</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> ATV</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-car fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Pemesan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Pemesan</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-xl-3 col-md-6 mb-4">
  								  <div class="card border-left-info shadow h-100 py-2">
       								 <div class="card-body">
         								   <div class="row no-gutters align-items-center">
             								   <div class="col mr-2">
                								    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pesanan</div>
                								    <div class="h5 mb-0 font-weight-bold text-gray-800">Pesanan</div> <!-- Directly aligning 'Pesanan' here -->
                								</div>
                							<div class="col-auto">
                  							  <i class="fas fa-receipt fa-2x text-gray-300"></i>
               								 </div>
            								</div>
        								</div>
    								</div>
								</div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Akun</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> Akun</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
						if(empty($konten))
						{
							echo "";	
						}
						else
						{
							echo $konten;	
						}
						?>
                        <br>
                        <br>
                        <?php
						if(empty($table))
						{
							echo "";	
						}
						else
						{
							echo $table;	
						}
						?>
                      
                    </div>
				
                </div>
            </div>
			
        </div>
        <!-- End Content Wrapper -->
		

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
    <script>
    $(document).ready( function () {
    $('#tabel-responsif').DataTable();
    } );
    </script>
    <script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('sb-admin-2/') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('sb-admin-2/') ?>/js/sb-admin-2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url(); ?>assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>js/datatables-simple-demo.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	
</body>
</html>
