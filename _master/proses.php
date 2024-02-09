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

	$uuid = Uuid::uuid4()->toString();
	$namaRuangan = $_POST['namaRuangan'];
	$noRuangan = $_POST['nomorRuangan'];

	$query = mysqli_query($con, "INSERT INTO tb_ruangan (id_ruangan, nama_ruangan, no_ruangan) VALUES ('$uuid', '$namaRuangan', '$noRuangan')") or die(mysqli_error($con));

	if ($query) {
		header("location:data.php");
	} else {
		echo "ERROR, tidak berhasil". mysqli_error($con);
	}
} elseif (isset($_POST['update'])) {

	$id_ruangan = $_POST['id_ruangan'];
	$namaRuangan = $_POST['namaRuangan'];
	$noRuangan = $_POST['nomorRuangan'];

	$query = mysqli_query($con, "UPDATE tb_ruangan SET
		nama_ruangan = '$namaRuangan',
		no_ruangan = '$noRuangan'
		WHERE id_ruangan = '$id_ruangan'");
	
	if ($query) {
		header("location:data.php");
	} else {
		echo "ERROR, tidak berhasil". mysqli_error($con);
	}
}






