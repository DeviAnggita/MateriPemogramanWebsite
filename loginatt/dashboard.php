<?php
include "koneksi.php";
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$query = "SELECT * from user where id = '$id'";
$query_exec = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($query_exec)) :
?>
	<?php	echo "Selamat Datang, ", $row['nama']," :)";
	?>
	</br>	
	<?php echo "Anda adalah ", $row['role'],".";?>
	<?php endwhile; ?>
    </br>	
	<a href="logout.php">Logout</a>