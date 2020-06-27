<?php
    //autoload class
    spl_autoload_register(function ($class_name) {
      include 'kelas/'.$class_name.'.php';
    });

    $darah = new darah();

    if(isset($_GET['kd_darah'])){
        $kd_darah = $_GET['kd_darah'];
        $data_darah = $darah->get_by_id($kd_darah);
    }
    else
    {
        header('Location: darah.php');
    }

    if(isset($_POST['tombol_ubah'])){
        $kd_darah = $_POST['kd_darah'];
        $gol_darah = $_POST['gol_darah'];
        $rhesus = $_POST['rhesus'];

        $status_update = $darah->update($kd_darah,$gol_darah,$rhesus);
        if($status_update)
        {
            header('Location:darah.php');
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

    <div class="panel panel-default">
      <div class="panel-heading">Tambah Data Darah</div>
      <div class="panel-body">
        <div class="col-md-12">
          <form role="form" method="post" action="">
            <div class="form-group has-success">
              <label>Kode Darah</label>
              <input class="form-control" name="kd_darah" id="kd_darah" value="<?php echo $data_darah['kd_darah']; ?>" placeholder="Kode Darah">
            </div>
            <div class="form-group has-success">
              <label>Golongan Darah</label>
              <input class="form-control" name="gol_darah" id="gol_darah" value="<?php echo $data_darah['gol_darah']; ?>" placeholder="Golongan Darah">
            </div>
            <div class="form-group">
										<label>Rhesus</label>
										<select class="form-control" name="rhesus" value="<?php echo $data_darah['rhesus']; ?>">
											<option>Positif</option>
											<option>Negatif</option>
										</select>
									</div>
              <input type="submit" value="Simpan" name="tombol_ubah" id="tombol_ubah" class="btn btn-primary">
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /.panel-->


	</div>	<!--/.main-->

	 <?php include "linkjs.php"; ?>

</body>
</html>
