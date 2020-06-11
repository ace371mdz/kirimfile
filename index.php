<?php 
include 'operasi.php';

if(isset($_POST['submit'])){
    kirimFile();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim File</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>

<body class="bg bg-dark">
    <div class="container">
        <div style="text-align: right;">
            <a href="file.php" class="btn btn-success btn-lg mt-3">File</a>
        </div>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form style="margin-top: 13rem;" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Input File</label>
                        <input type="file" name="file[]" class="form-control-file" id="exampleFormControlFile1" multiple>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Kirim</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="./assets/jquery-2.1.4.min.js"></script>
    <script src="./assets/popper.min.js"></script>
    <script src="./assets/bootstrap.min.js"></script>
</body>

</html>