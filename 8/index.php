<?php
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "7" ;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM books";
$sql2 = "SELECT * FROM categories";

if (isset($_POST['pilih'])){
	$Kategori = $_POST['kategori'];
	if($Kategori != 0){
		$sql = "SELECT * FROM books WHERE category_id = '$Kategori'";
	}else{
		$sql = "SELECT * FROM books";
	}
	
	if ($conn->query($sql)){
		echo "";
	}else{
		echo mysqli_error($conn);
	}
}

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
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
	  <a class="navbar-brand" href="#">Perpustakaan Dumb Ways</a>
	</nav>

	<div class="container">

	<div class="row">
		<div class="card" style="margin:20px; width:20%; height: 10%">
		  <a href="addbook.php" class="btn btn-dark btn-sm">Tambah Buku</a>
		</div>

		<div class="card" style="margin-top:20px; width:20%; height: 10%">
		  <a href="addcategories.php" class="btn btn-dark btn-sm">Tambah Kategori</a>
		</div>

		<form method="post"  class="input-group" style="margin:20px; width:20%; height: 10%">
		  <select class="custom-select" name="kategori">
		    <option selected>Semua Kategori</option>
		    <?php
      		  while($rss = $result2->fetch_array(MYSQLI_ASSOC)) {
    	 	?>
		    <option value="<?php echo $rss['id'];?>"><?php echo $rss['name'];?></option>
		    <?php } ?>
		  </select>
		  <div class="input-group-append">
		    <input name="pilih" type="submit" class="btn btn-outline-secondary" value="Pilih">
		  </div>
		</form>
    </div>

    <form method="post" action="cekstok.php">
	<div class="row">
		 <?php
      		while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    	 ?>
    	 <a href="detail.php?id=<?php echo $rs['id'];?>">
		 <div class="card bg-dark text-white" style="max-width: 14rem; max-height:30rem; margin: 2.5rem;">
		  <img style="max-height:15rem;" src="<?php echo $rs['image'];?>" class="card-img" alt="...">
		  <div class="card-img-overlay">
		  	<div style="margin-top: 140px">
			   <input type="submit" name="pinjam" value="Pinjam" class="btn btn-primary btn-sm" style="margin-top: 5px; width:100%;">
			   <input type="submit" name="kembalikan" value="Kembalikan" class="btn btn-success btn-sm" style="margin-top: 5px; width:100%;">
			   <input type="hidden" name="id" value="<?php echo $rs['id'];?>">
			 </div>
		  </div>
		  <div class="card-body">
		  	<p class="card-text">Judul : <?php echo $rs['name'];?></p>
    		<p class="card-text">Stok : <?php echo $rs['stok'];?></p>
    	  </div>
		</div>
	    </a>
		<?php } ?>
    </div>
    </div>
    <form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
