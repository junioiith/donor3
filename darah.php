<?php
    //autoload class
    spl_autoload_register(function ($class_name) {
      include 'kelas/'.$class_name.'.php';
    });

    $darah = new darah();
    $data_darah = $darah->show();

    if(isset($_GET['hapus_darah']))
    {
        $kd_darah = $_GET['hapus_darah'];
        $status_hapus = $darah->delete($kd_darah);
        if($status_hapus)
        {
            header('Location: darah.php');
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PMI Cilacap</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>PMI</span>CILACAP</a>

			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<?php include "sidebar.php"; ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Darah</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
        <div class="container-fluid">
          <h2 class="no-margin-bottom" align="center">Data Darah</h2>
        </div>
			</div>
		</div><!--/.row-->

    <section class="tables">
          <div class="col-lg-12">
            <div class="card-body">
              <a href="darahtambah.php" class="btn btn-success">Tambah</a>
              <hr/>
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Darah</th>
                      <th>Golongan Darah</th>
                      <th>Rhesus</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach($data_darah as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['kd_darah']."</td>";
                        echo "<td>".$row['gol_darah']."</td>";
                        echo "<td>".$row['rhesus']."</td>";
                        echo "<td><a class='btn btn-info' href='darahubah.php?kd_darah=".$row['kd_darah']."'>Ubah</a>
                        <a class='btn btn-danger' onclick=\"myFunction('$row[kd_darah]')\"'>Hapus</a>
                        </td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </section>

    <script type="text/javascript">
        function myFunction(kode)
        {
            var x;
            var r = confirm("Yakin Menghapus data ini ?");
            if (r == true)
            {
                window.location.assign("?page=darah&hapus_darah=" + kode);
            }
        }
    </script>

	</div>	<!--/.main-->

	 <?php include "linkjs.php"; ?>

</body>
</html>
