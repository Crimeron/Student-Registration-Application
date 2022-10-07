<?php
$host = "localhost";
$dbname = "ogrenci_kayit";
$username = "root";
$password = "";


$conn = new mysqli($host, $username, $password, $dbname);
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $conn->query("DELETE FROM ogrenciler WHERE id=$id") or die($conn->error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ogrenci_Kayit</title>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script href="assets/css/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 class="text-center text-primary">Student registration application</h1>
    <div class="container">
        <div class="row">
            <div class="students">
                <form action="form-action.php" method="post">
                    <div class="form-group">
                        <input type="text" name="isim" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="soyisim" class="form-control" placeholder="Surname">
                    </div>
                    <div class="form-group">
                        <input type="number" name="user_no" class="form-control" placeholder="Student No">
                    </div>
                    <div class="form-group">
                        <select name="sinif" class="form-control">
                            <option value="" disabled selected style="text-weight=600">Please select one class</option>
                            <option value="9">9. Grade</option>
                            <option value="10">10. Grade</option>
                            <option value="11">11. Grade</option>
                            <option value="12">12. Grade</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <a href="index.php"><input type="submit" value="Save" class="btn btn-primary"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <hr>
		<h4 class="text-center text-danger"><b>Current Class List</b></h4>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-bordered table-striped">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Surname</th>
					<th width="75">Student No</th>
					<th width="100">Class</th>
					<th width="100"></th>
				</thead>
                <tbody>
                <?php
                $sqlQuery = ("SELECT * FROM ogrenciler");
                $select_all=mysqli_query($conn,$sqlQuery);
                while ($ogrList = mysqli_fetch_assoc($select_all)) {
                ?>
                <tr>
                    <td><?=$ogrList['id'];?></td>
                    <td><?=$ogrList["isim"];?></td>
                    <td><?=$ogrList["soyisim"];?></td>
                    <td><?=$ogrList["user_no"];?></td>
                    <td><?=$ogrList["sinif"];?></td>
                    <td><a href="index.php?id=<?=$ogrList['id'];?>" class="btn btn-default" data-dismiss="modal" class="text-center">Delete</a></td>
                </tr>
                    <?php } ?>
                   
                    
</body>
</html>