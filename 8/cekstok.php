<?php 

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "7" ;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['pinjam'])){
	$id = $_POST['id'];
	echo $id;

	$sql = "SELECT stok FROM books WHERE id='$id' limit 1";

	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($result)) {
           $stok = $row["stok"];
    }

	if($stok > 0){
		$stok = $stok-1;

		$sql = "UPDATE books SET stok = '$stok' WHERE id='$id'";
	}

	if ($conn->query($sql)){
		echo "<script>alert('Pinjam Berhasil') </script>";
	    //echo "<script>window.location.href = \"index.php\" </script>";
	}else{
		echo mysqli_error($conn);
	}
}

?>