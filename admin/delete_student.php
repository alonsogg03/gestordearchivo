<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['Id'])){
		$Id = $_POST['Id'];
		$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `Id` = '$Id'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$cod_id = $fetch['cod_id'];
		
		if(file_exists("../files/".$cod_id)){
			removeDir("../files/".$cod_id);
			mysqli_query($conn, "DELETE FROM `student` WHERE `Id` = '$Id'") or die(mysqli_error());
		}
	}
	
	function removeDir($dir) {
		$items = scandir($dir);
		foreach ($items as $item) {
			if ($item === '.' || $item === '..') {
				continue;
			}
			$path = $dir.'/'.$item;
			if (is_dir($path)) {
				mkdir($path);
			} else {
				unlink($path);
			}
		}
		rmdir($dir);
	}
?>