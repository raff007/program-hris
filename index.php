<?php
ob_start();
require_once 'Config/Config.php';
require_once 'Config/func.php';

$RUN = 1;
if(!$_SESSION["user_login"])	//check condition user login not direct back to index.php page
{
	header("location:login.php");
       exit;
}

else{
	//parameter halaman, $d_link adalah parameter untuk membuat link dengan page nama
	//yg terdeklarasikan di query sql untuk memanggil link_modul yang ada di tabel modul
	$d_link=$_GET['page'];

	try
	{
		//query halaman yg ada di tabel database
		$select_stmt=$db->prepare("SELECT * FROM modul WHERE id_levelusers=:level AND link_modul=:link");
		//$d_link adalah parameter url  untuk memanggil field link_modul pada tabel modul
		$select_stmt->execute(array(':level'=>$_SESSION['level'],':link'=>$d_link));
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

	}catch(PDOExcetion $e)
	{
		$e->getMessage();
	}

	if($select_stmt->rowCount() >0){
		$modul_action = "modul/mod_$d_link/act_$d_link.php";
		$modul_controller = "modul/mod_$d_link/cont_$d_link.php";
		//modul adalah nama folder, dan  mod_$d_link disesuikan dengan nama folder tmp_$d_link
		$modul_view = "modul/mod_$d_link/tmp_$d_link.php";
		//['name_modul'] adalah nama modul halaman yg ada di field tabel database
		define("TITLE",$row['name_modul']);
	}
	else{
		//menampilkan halaman default saat login pertama
		define ("TITLE".'Home');
		$modul_action = "";
		$modul_controller = "modul/mod_home/cont_home.php";
		$modul_view = "modul/mod_home/tmp_home.php";
	}

	include "tmp/index_tmp.php";
}
ob_end_flush();
?>
