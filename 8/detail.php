<?php
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "7" ;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM books WHERE id = '$id'";

	
if ($conn->query($sql)){
	echo "";
}else{
	echo mysqli_error($conn);
}

$result = $conn->query($sql);
$conn->close();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Perpustakaan Dumb Ways</title>
    <style>
		.masthead {
		  height: 50vh;
		  min-height: 300px;
		  background-image: url('https://cdn.pixabay.com/photo/2016/09/01/19/53/pocket-watch-1637394_960_720.jpg');
		  background-size: cover;
		  background-position: center;
		  background-repeat: no-repeat;
		}

    </style>
  </head>
  <body>
  	<header class="masthead">
      <div class="container h-10">
        <div class="row h-100 align-items-center"></div>
      </div>
    </header>
	<nav class="navbar navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Detail Buku </a>
	</nav>

	<div class="container">

	<div class="row">
		 <?php
      		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    	 ?>
		 <div class="card " style="margin-left: 20rem; margin-top: 10rem;">
		  <img style="max-height:20rem;" src="<?php echo $rs['image'];?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $rs['name'];?></h5>
		    <p class="card-text"><?php echo $rs['deskripsi'];?></p>
		  </div>
		</div>
		<?php } ?>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>