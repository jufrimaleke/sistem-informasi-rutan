<?php 
require_once "../_config/config.php";
require_once "../_asset/libs/vendor/autoload.php";


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsafisfiedDependencyExeption;



// if (isset($_POST['add'])) {
// 	$uuid = Uuid::uuid4()->toString();
// 	$nip = trim(mysqli_real_escape_string($con, $_POST['nip']));
// 	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
// 	$tempatLahir = trim(mysqli_real_escape_string($con, $_POST['tempatLahir']));
// 	$tglLahir = trim(mysqli_real_escape_string($con, $_POST['tglLahir']));
// 	$jk = trim(mysqli_real_escape_string($con, $_POST['jk']));
// 	$alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
// 	$pangkat = trim(mysqli_real_escape_string($con, $_POST['pangkat']));
// 	$email = trim(mysqli_real_escape_string($con, $_POST['email']));
// 	$noTelpon = trim(mysqli_real_escape_string($con, $_POST['noTelpon']));
// 	$foto = trim(mysqli_real_escape_string($con, $_POST['foto']));

// 	mysqli_query($con, "INSERT INTO tb_pegawai (nip, nama_pegawai, tmp_lahir, tgl_lahir, jk, alamat, pangkat, email, no_telpon, foto) VALUES ('$uuid', '$nip', '$nama', '$tempatLahir', '$tglLahir', '$jk', '$alamat', '$pangkat', '$email', '$noTelpon', '$foto')") or die(mysqli_error($con));
// 	echo "<script>window.location='data.php';</script>";
// } else if (isset($_POST['edit'])) {
	
// }

if (isset($_POST['add'])) {

	$nama_file = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../img/".$nama_file);


	$uuid = Uuid::uuid4()->toString();
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$tempatLahir = $_POST['tempatLahir'];
	$tglLahir = $_POST['tgl_Lahir'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$pangkat = $_POST['pangkat'];
	$email = $_POST['email'];
	$noTelpon = $_POST['noTelpon'];
	$foto = $_POST['foto'];
	

	$query = mysqli_query($con, "INSERT INTO tb_pegawai (id_pegawai, nip, nama_pegawai, tmp_lahir, tgl_lahir, jk, alamat, pangkat, email, no_telpon, foto) VALUES ('$uuid', '$nip', '$nama', '$tempatLahir', '$tglLahir', '$jk', '$alamat',  '$pangkat', '$email', '$noTelpon', '$nama_file')");

	if ($query) {
		header("location:data.php");
	} else {
		echo "ERROR, tidak berhasil". mysqli_error($con);
	}
}
elseif (isset($_POST['update'])) {

	$file = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];

	if (!empty($file)) {
	move_uploaded_file($lokasi, "../img/".$file);

	
	$id_pegawai = $_POST['id_pegawai'];

	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$tempatLahir = $_POST['tempatLahir'];
	$tglLahir = $_POST['tglLahir'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$pangkat = $_POST['pangkat'];
	$email = $_POST['email'];
	$noTelpon = $_POST['noTelpon'];
	
	$query = mysqli_query($con, "UPDATE tb_pegawai SET 
		nip = '$nip', 
		nama_pegawai = '$nama', 
		tmp_lahir = '$tempatLahir', 
		tgl_lahir = '$tglLahir', 
		jk = '$jk', 
		alamat = '$alamat', 
		pangkat = '$pangkat', 
		email = '$email', 
		no_telpon = '$noTelpon',
		foto = '$file'
		WHERE id_pegawai = '$id_pegawai'");
		if ($query) {
			echo "<script>alert('Data behasil diedit');</script>";
			header("location:data.php");

		} else {
			echo "ERROR, data gagal diedit". mysqli_error($con);
		}
	} else {

		$id_pegawai = $_POST['id_pegawai'];

		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$tempatLahir = $_POST['tempatLahir'];
		$tglLahir = $_POST['tglLahir'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$pangkat = $_POST['pangkat'];
		$email = $_POST['email'];
		$noTelpon = $_POST['noTelpon'];
		
		$query = mysqli_query($con, "UPDATE tb_pegawai SET 
		nip = '$nip', 
		nama_pegawai = '$nama', 
		tmp_lahir = '$tempatLahir', 
		tgl_lahir = '$tglLahir', 
		jk = '$jk', 
		alamat = '$alamat', 
		pangkat = '$pangkat', 
		email = '$email', 
		no_telpon = '$noTelpon'
		WHERE id_pegawai = '$id_pegawai'"); 

		if ($query) {
			echo "<script>alert('Data behasil diubah');</script>";
			header("location:data.php");
		} else {
			echo "ERROR, data gagal diupdate". mysqli_error($con);
		}
	}
}


elseif ($_GET['action'] == 'delete') {
	$id_pegawai = $_GET['id'];

	$query = mysqli_query($con, "DELETE FROM tb_pegawai WHERE id_pegawai = '$id_pegawai'");

	if ($query) {
		header("location:data.php");
	} 
	else {
		echo "ERROR, Data gagal dihapus". mysqli_error($con);
	}
	mysqli_close($con);
}






