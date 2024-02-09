<?php 
require_once "_config/config.php";
if (isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url('_dashboard')."';</script>";
} else {
echo "<script>window.location='".base_url('_auth/login.php')."';</script>";
}
?>



