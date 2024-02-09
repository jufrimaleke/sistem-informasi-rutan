<?php 
require_once "../_config/config.php";
require_once "../_asset/libs/vendor/autoload.php";


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsafisfiedDependencyExeption;


if (isset($_POST['submit'])) {
	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama_user']));
	$username = trim(mysqli_real_escape_string($con, $_POST['username']));
	$pass = trim(mysqli_real_escape_string($con, $_POST['password']));
	$role = $_POST['role'];


	$query = mysqli_query($con, "INSERT INTO tb_user (id_user, nama_user, username, password, pass, level) VALUES ('$uuid', '$nama', '$username', sha1('$pass'), '$pass', '$role')");

	if ($query) {
		header("location:data.php");
	} else {
		echo "ERROR, tidak berhasil". mysqli_error($con);
	}
}

elseif (isset($_POST['edit'])) {
	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$role = $_POST['role'];

	$query = mysqli_query($con, "UPDATE tb_user SET 
		nama_user = '$nama', 
		username = '$username', 
		password = sha1('$pass'), 
		pass = '$pass', 
		level = '$role' 
		WHERE id_user = '$id_user'");

	if ($query) {
		echo "<script>alert('Data behasil diubah');</script>";
		header("location:data.php");
	} else {
		echo "ERROR, tidak berhasil". mysqli_error($con);
	}
}

elseif ($_GET['act'] == 'delete') {
	$id_user = $_GET['id'];

	$query = mysqli_query ($con, "DELETE FROM tb_user WHERE id_user = '$id_user'");

	if ($query) {
		header("location:data.php");
	} else {
		echo "ERROR, data gagal dihapus". mysqli_error($con);
	}

	mysqli_close($con);
}
?>