<?php if (!isset($RUN)) { exit(); }?>

<?php
//$page=$_GET['page']; variabel untuk memanggil halaman
$page=$_GET['page'];
//switch($_GET['sect']){default: adalah variabel menampilkan isi
//halaman 'page' tabel karyawan secara default dengan memanggil url 'sect'
switch($_GET['sect']){
default:
//query join 3 table yaitu karyawan, struktur jabatan & tbldepdartement di tabel karyawan
$selectkaryawan=$db->prepare("SELECT * FROM karyawan
  /*-query join jabatan menampilkan jabatan karyawan-*/
    JOIN struktur_jabatan ON struktur_jabatan.id_jabatan = karyawan.id_jabatan

    /*-query join tabel tipe_karyawan menampilkan tipe karyawan -*/
    JOIN tipe_karyawan ON tipe_karyawan.id_tipekaryawan = karyawan.id_tipekaryawan

    /*-query join tabel cabang tabel menampilkan cabang -*/
    JOIN cabang ON cabang.id_cabang = karyawan.id_cabang

    /*-query join lokasi tabel menampilkan lokasi -*/
    JOIN lokasi ON lokasi.id_lokasi = karyawan.id_lokasi

    /*-query join tabel departement dengan karyawan menampilkan divi atau departement-*/
    JOIN tbldepartments ON tbldepartments.id_departement = karyawan.id_departement

    /*-query join tabel golongan dengan tebel karyawan menampilkan golongan karyawan-*/
    JOIN golongan ON golongan.id_golongan = karyawan.id_golongan

WHERE status_karyawan = '1' ORDER BY id_karyawan ASC");

$selectkaryawan->execute();

$selectmp=$db->prepare("SELECT * FROM karyawan
  /*-query join jabatan menampilkan jabatan karyawan-*/
    JOIN struktur_jabatan ON struktur_jabatan.id_jabatan = karyawan.id_jabatan

    /*-query join tabel tipe_karyawan menampilkan tipe karyawan -*/
    JOIN tipe_karyawan ON tipe_karyawan.id_tipekaryawan = karyawan.id_tipekaryawan

    /*-query join tabel cabang tabel menampilkan cabang -*/
    JOIN cabang ON cabang.id_cabang = karyawan.id_cabang

    /*-query join lokasi tabel menampilkan lokasi -*/
    JOIN lokasi ON lokasi.id_lokasi = karyawan.id_lokasi

    /*-query join tabel departement dengan karyawan menampilkan divi atau departement-*/
    JOIN tbldepartments ON tbldepartments.id_departement = karyawan.id_departement

    /*-query join tabel golongan dengan tebel karyawan menampilkan golongan karyawan-*/
    JOIN golongan ON golongan.id_golongan = karyawan.id_golongan

WHERE status_karyawan = '1' ORDER BY id_karyawan ASC");

$selectmp->execute();
break;

//case "form": untuk menetukan halaman form yg akan tampil dihalaman tmp_karyawan.php
case "form":

  // Buat query untuk menampilkan departemnt pada Combobox departement
  $sqlt = $db->prepare("SELECT * FROM tipe_karyawan ORDER BY id_tipekaryawan");
  $sqlt->execute(); // Eksekusi querynya

  // Buat query untuk menampilkan departemnt pada Combobox departement
  $sql = $db->prepare("SELECT * FROM tbldepartments INNER JOIN tipe_karyawan ON tbldepartments.id_tipekaryawan = tipe_karyawan.id_tipekaryawan");
  $sql->execute(); // Eksekusi querynya

  // query untuk menampilkan inner join untuk menampilkan jabatan
  $sqljbt = $db->prepare("SELECT * FROM struktur_jabatan INNER JOIN tbldepartments ON struktur_jabatan.id_departement = tbldepartments.id_departement ORDER BY id_jabatan");
  $sqljbt->execute();

  //query menampilkan cabang
  $sqlc = $db->prepare("SELECT * FROM cabang");
  $sqlc->execute(); // Eksekusi querynya

  // Buat query untuk menampilkan departemnt pada Combobox departement
  $sqll = $db->prepare("SELECT * FROM lokasi INNER JOIN cabang ON lokasi.id_cabang = cabang.id_cabang");
  $sqll->execute(); // Eksekusi querynya

  //query menampilkan golongan karyawan
  $sqlg = $db->prepare("SELECT * FROM golongan");
  $sqlg->execute(); // Eksekusi querynya


//generate nik_karyawan
$selectnik=$db->prepare("SELECT max(nik_karyawan) as last_nik FROM karyawan");
$selectnik->execute();
$sn=$selectnik->fetch(PDO::FETCH_ASSOC);

//tahun sekarang
$cyear=date("Y");

//nomor urut
$sort=substr($sn['last_nik'],-4);

//nomor urut baru
$newsort=$sort+1;

//nik_baru
$newnik=$cyear.sprintf("%04d", $newsort);

  if($_GET['id']){
      $actpage='edit';
      //query menampilkan data yang akan di edit berdasarkan id_karyawan
      $selectkaryawan=$db->prepare("SELECT * FROM karyawan WHERE id_karyawan = :id_karyawan");
      $selectkaryawan->execute(array(':id_karyawan'=>$_GET['id']));
      $dk=$selectkaryawan->fetch(PDO::FETCH_ASSOC);
    }else{
    $actpage='input';
    }
break;
}
?>
