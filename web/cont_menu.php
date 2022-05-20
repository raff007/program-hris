<?php

$selectmodul=$db->prepare("SELECT * FROM modul WHERE id_levelusers = '$_SESSION[level]' ORDER BY urutan_modul ASC");
$selectmodul->execute();

?>
