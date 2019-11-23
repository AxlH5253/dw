<?php
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "7" ;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM categories";

if (isset($_POST['simpan'])){
	$name = $_POST['name'];
	$stok = $_POST['stok'];
	$image = $_POST['image'];
	$deskripsi = $_POST['deskripsi'];
	$category_id = $_POST['category_id'];

	$sql = "INSERT INTO books (name,stok,image,deskripsi,category_id) VALUES('$name','$stok','$image','$deskripsi','$category_id')";


	if ($conn->query($sql)){
		echo "<script>alert('Tambah Buku berhasil') </script>";
	    echo "<script>window.location.href = \"index.php\" </script>";
	}else{
		echo mysqli_error($conn);
	}
}

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
	  <a class="navbar-brand" href="#">Tambah Buku</a>
	</nav>

	<div class="container">
	<form method="post" action="">
	    <div class="form-group" style="max-width: 30rem; margin-top: 30px;">
	      <label >Judul Buku</label>
	      <input type="text" class="form-control" name="name">
	    </div>

	    <div class="form-group" style="max-width: 30rem; margin-top: 30px;">
	      <label >Stok</label>
	      <input type="number" class="form-control" name="stok">
	    </div>

	    <div class="form-group" style="max-width: 30rem; margin-top: 30px;">
	    <label >Kategori</label>
	    <select class="form-control" name="category_id">
		    <?php
      		  while($rss = $result2->fetch_array(MYSQLI_ASSOC)) {
    	 	?>
		    <option value="<?php echo $rss['id'];?>"><?php echo $rss['name'];?></option>
		    <?php } ?>
		 </select>
		 </div>

		 <div class="form-group" style="max-width: 50rem; margin-top: 30px;">
	      <label >Deskripsi</label>
	      <textarea class="form-control" name="deskripsi"></textarea>
	    </div>

	    <div class="form-group" style="max-width: 50rem; margin-top: 30px;">
	      <label >Link Gambar</label>
	      <textarea class="form-control" name="image"></textarea>
	    </div>

	    <div class="card" style="width:20%; height: 10%; margin-top: 30px;">
		  <input type="submit" name="simpan" class="btn btn-dark btn-sm" value="Simpan Buku">
		</div>
    </form>

	
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>