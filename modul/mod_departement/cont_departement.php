<?php if(!isset($RUN)) { exit(); } ?>
<?php
//halaman sekarang menampilkan tabel departement
$page=$_GET['page'];

switch($_GET['sect']){
default:
$selectdepartement=$db->prepare("SELECT * FROM tbldepartments");
$selectdepartement->execute();


    if($_GET['id']){
        $actpage='edit';
        $selectdepartement=$db->prepare("SELECT * FROM tbldepartments WHERE id_departement=:id_departement");
        $selectdepartement->execute(array(':id_departement'=>$_GET['id']));
        $dp=$selectdepartement->fetch(PDO::FETCH_ASSOC);
    }else{
    $actpage='input';

    }
break;

}
?>
