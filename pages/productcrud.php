<?php
require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Products CRUD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="dashboard.php" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="../assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="../assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="../assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
        <!-- Notifications Dropdown Menu -->
        <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"></a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="action-logout.php" class="dropdown-item">Log Out </a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link">
        <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Mirza Ferdi</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="product.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Product
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="productarray.php" class="nav-link ">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>
                  Product Array
                </p>
              </a>
            </li>
          <li class="nav-item">
            <a href="productcrud.php" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Product CRUD
              </p>
            </a>
          </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Product CRUD</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Product CRUD</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                      <div class="input-group">
                          <?php
                          $kata_kunci="";
                          if (isset($_POST['kata_kunci'])) {
                              $kata_kunci=$_POST['kata_kunci'];
                          }
                          ?>
                          <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control form-control-md" placeholder="Cari...">
                          <div class="input-group-append">
                              <button type="submit" name="cari" class="btn btn-md btn-default">
                                  <i class="fa fa-search"></i>
                              </button>
                          </div>
                      </div>
                  </form>
                  <button type="button" class="btn btn-primary btn-tambah"  data-toggle="modal" data-target="#modal-tambah">
                      Tambah Produk
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-hover text-center">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Id Kategori</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th>Diskon</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php  
                      
                    $batas = 3;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
            
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
                    
                    $data = mysqli_query($koneksi,"select * from products");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
                    
                    $data_product = "select * from products limit $halaman_awal, $batas";
                    $nomor = $halaman_awal+1;

                    if (isset($_POST['kata_kunci'])) {
                      $kata_kunci=trim($_POST['kata_kunci']);
                      $sql="SELECT * FROM products WHERE category_id LIKE '%".$kata_kunci."%' OR product_name LIKE '%".$kata_kunci."%' OR product_code LIKE '%".$kata_kunci."%' OR description LIKE '%".$kata_kunci."%'";
                    }else {
                      $sql=$data_product;
                      // die;
                    }
                  ?>
                  <tbody>
                    <?php
                    $result=mysqli_query($koneksi,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                    // while ($row = $produk->fetch_assoc()) {
                    ?>
                  <tr>
                    <td name="idTab" ><?php echo $row['id']?></td>
                    <td><?php echo $row['category_id']?></td>
                    <td><?php echo $row['product_code']?></td>
                    <td><?php echo $row['product_name']?></td>
                    <td><?php echo $row['description']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['unit']?></td>
                    <td><?php echo $row['discount_amount']?></td>
                    <td><?php echo $row['stock']?></td>
                    <td><?php echo ('<img width="75px" height="auto" src="../assets/image/produk/'.( $row['image'] ).'"/>')?></td>
                    <td>
                      <div class="container">
                        <div class="row  justify-content-center">
                          <div class="col-6">
                            <a href="#" class="btn btn-danger btn-sm " name="btn-hapus" data-toggle="modal" data-target="#modal-hapus">
                              <i class="fas fa-trash-alt"></i>
                            </a>
                          </div>
                          <div class="col-6">
                            <a href="#" class="btn btn-sm bg-teal" name="btn-edit" data-toggle="modal" data-target="#modal-edit">
                              <i class="fas fa-edit"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                        <!-- <div class="text-center">
                        </div> -->
                    </td>
                  </tr>

                    <?php } ?>
                  </tbody>
                  </tfoot>
                </table>
                <nav>
                  <ul class="pagination pt-3 justify-content-end">
                    <li class="page-item">
                      <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$total_halaman;$x++){
                      ?> 
                      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                      <?php
                    }
                    ?>				
                    <li class="page-item">
                      <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
      <!-- /.content -->
    </div>

    <!-- MODAL TAMBAH -->
    <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="modal-tambahLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title fs-5" id="modal-tambahLabel">Tambah Produk</h3>
          </div>
          <form id="form" action="action-tambah.php" method="post" >
            <div class="modal-body ">
              <div class="mb-2">
                <label for="namaProduk" class="form-label">Nama Produk<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="namaProduk" name="product_name" required>
              </div>

              <div class="mb-2">
                <label for="nomorKategori" class="form-label">Id Kategori<span style="color: red;">(1-3)*</span></label>
                <input type="number" class="form-control" id="nomorKategori" name="category_id" min="1" max="3" required>
              </div>

              <div class="mb-2">
                <label for="kodeProduk" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kodeProduk" name="product_code">
              </div>


              <div class="mb-2">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="description"></textarea>
              </div>

              <div class="mb-2">
                <label for="harga" class="form-label">Harga<span style="color: red;">*</span></label>
                <input type="number" class="form-control" id="harga" name="price" required>
              </div>

              <div class="mb-2">
                <label for="satuan" class="form-label">Satuan<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="satuan" name="unit" required>
              </div>

              <div class="mb-2">
                <label for="diskon" class="form-label">Diskon<span style="color: red;">*</span></label>
                <input type="number" class="form-control" id="diskon" name="discount_amount" required>
              </div>

              <div class="mb-2">
                <label for="stok" class="form-label">Stok<span style="color: red;">*</span></label>
                <input type="number" class="form-control" id="stok" name="stock" required>
              </div>

              <div class="mb-2">
                <label for="gambar" class="form-label">Foto Produk</label>
                <input type="file" class="form-control border-0" id="gambar" name="image">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL EDIT -->
    <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modal-editLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title fs-5" id="modal-editLabel">Edit Produk</h3>
          </div>
          <form action="action-edit.php" method="post" >
          <div class="modal-body">
              <div class="mb-2">
                <label for="idProduk" class="form-label">id<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="idProduk" value="" name="id" readonly>
              </div>

              <div class="mb-2">
                <label for="namaProduk" class="form-label">Nama Produk<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="namaProduk" name="product_name">
              </div>

              <div class="mb-2">
                <label for="nomorKategori" class="form-label">Id Kategori<span style="color: red;">(1-3)*</span></label>
                <input type="number" class="form-control" id="nomorKategori" name="category_id">
              </div>

              <div class="mb-2">
                <label for="kodeProduk" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kodeProduk" name="product_code">
              </div>


              <div class="mb-2">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="description"></textarea>
              </div>

              <div class="mb-2">
                <label for="harga" class="form-label">Harga<span style="color: red;">*</span></label>
                <input type="number" class="form-control" id="harga" name="price">
              </div>

              <div class="mb-2">
                <label for="satuan" class="form-label">Satuan<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="satuan" name="unit">
              </div>

              <div class="mb-2">
                <label for="diskon" class="form-label">Diskon<span style="color: red;">*</span></label>
                <input type="number" class="form-control" id="diskon" name="discount_amount">
              </div>

              <div class="mb-2">
                <label for="stok" class="form-label">Stok<span style="color: red;">*</span></label>
                <input type="number" class="form-control" id="stok" name="stock">
              </div>

              <div class="mb-2">
                <label for="gambar" class="form-label">Foto Produk</label>
                <input type="file" class="form-control border-0" id="gambar" name="image">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" name="edit" class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div> 
    
    <!-- MODAL HAPUS -->
    <div class="modal fade" id="modal-hapus" tabindex="-1" aria-labelledby="modal-hapusLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title fs-5" id="modal-hapusLabel">Hapus Produk</h3>
          </div>
          <form action="action-delete.php" method="post">
            <div class="modal-body">
              <input type="hidden" class="form-control idProduk" id="idProduk" name="id" value="">
              <h6>Apakah anda ingin menghapus produk ini?</h6>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="" name="hapus" class="btn btn-primary">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>

                     


    <footer class="main-footer">
      <strong>Copyright &copy; 2023 MirzaFerdi </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../assets/plugins/jszip/jszip.min.js"></script>
  <script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../assets/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script src="../assets/js/crud.js"></script>
</body>

</html>