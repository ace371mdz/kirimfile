<?php 
include 'operasi.php';

$files = bacaFile();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>

<body class="bg bg-dark">
    <div class="container">
    	<br><br>
        <h1 style="text-align: center;">Daftar File</h1>
        <br>
        <br>
        <br>
        <table class="table table-dark table-stripped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama File</th>
		      <th colspan="2" scope="col" style="text-align: center;">Aksi</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=1; foreach($files as $file){  ?>
		  		
		  		<?php if($file != '.' && $file!='..'){ ?>
		  			<tr>
				      <th scope="row"><?= $i ?></th>
				      <td><?= $file ?></td>
				      <td><a href="file/<?= $file ?>" download>Download</a></td>
				      <td><a href="file/<?= $file ?>" target="_blank">Lihat</a></td>
				    </tr>
		  		<?php } ?>
		    <?php $i++; } ?>
		  </tbody>
		</table>

		<br>
		<br>
		<br>
		<br>
    </div>

    <script src="./assets/jquery-2.1.4.min.js"></script>
    <script src="./assets/popper.min.js"></script>
    <script src="./assets/bootstrap.min.js"></script>
</body>

</html>