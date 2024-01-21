<?php
  session_start();
  session_destroy();
  echo "<script>window.alert('Sukses Keluar dari system.');
				window.location='administrator/view_login'</script>";
	die();
		

?>