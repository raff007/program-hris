<?php if (!isset($RUN)) { exit(); }?>

<?php
//$page=$_GET['page']; variabel untuk memanggil halaman
$page=$_GET['page'];
//switch($_GET['sect']){default: adalah variabel menampilkan isi
//halaman 'page' tabel karyawan secara default dengan memanggil url 'sect'
switch($_GET['sect']){
default:
//query join 3 table yaitu karyawan, struktur jabatan & tbldepdartement di tabel karyawan
$legalkaryawan=$db->prepare("SELECT * FROM karyawan
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

$legalkaryawan->execute();
break;

//case "form": untuk menetukan halaman form yg akan tampil dihalaman tmp_karyawan.php
case "tabel_karyawan":

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

    WHERE nama_tipekaryawan='DKM' ORDER BY id_karyawan ASC");
    $selectkaryawan->execute();
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

  //case "form": untuk menetukan halaman form yg akan tampil dihalaman tmp_karyawan.php
  case "profil":

  //$tabelkontrak=$db->prepare(" SELECT * from karyawan join kontrak on kontrak.id_kontrak = karyawan.id_kontrak WHERE status_karyawan = '1' ORDER BY id_karyawan ASC");
//  $tabelkontrak->execute();

  $selectprofil=$db->prepare("SELECT nama_karyawan,photo_pp,pendidikan,short_name,telp,email,alamat_lokasi,no_skt,nk,
                                    code,bln_thn,durasi,tanggal_lahir, timestampdiff(year, tanggal_lahir, curdate()) AS umur FROM karyawan

    /*-query join jabatan menampilkan jabatan karyawan-*/
      JOIN struktur_jabatan ON struktur_jabatan.id_jabatan = karyawan.id_jabatan

      /*-query join tabel tipe_karyawan menampilkan tipe karyawan -*/
      JOIN tipe_karyawan ON tipe_karyawan.id_tipekaryawan = karyawan.id_tipekaryawan

      /*-query join tabel cabang tabel menampilkan cabang -*/
      JOIN cabang ON cabang.id_cabang = karyawan.id_cabang

      /*-query join lokasi tabel menampilkan lokasi -*/
      JOIN lokasi ON lokasi.id_lokasi = karyawan.id_lokasi

      JOIN kontrak ON kontrak.id_kontrak = karyawan.id_kontrak

      /*-query join tabel departement dengan karyawan menampilkan divi atau departement-*/
      JOIN tbldepartments ON tbldepartments.id_departement = karyawan.id_departement

      /*-query join tabel golongan dengan tebel karyawan menampilkan golongan karyawan-*/
      JOIN golongan ON golongan.id_golongan = karyawan.id_golongan

      WHERE id_karyawan = :id_karyawan");

      $selectprofil->execute(array(':id_karyawan' =>$_GET['id']));
      $sp=$selectprofil->fetch();

      if($_GET['id']){
          $actpage='edit';
      //query menampilkan data yang akan di edit berdasarkan id_karyawan
      //$selectprofil=$db->prepare("SELECT * FROM karyawan WHERE id_karyawan = :id_karyawan");
      //$selectprofil->execute(array(':id_karyawan'=>$_GET['id']));
      //$pk=$selectprofil->fetch(PDO::FETCH_ASSOC);
      //}else{
      //$actpage='input';
      }

      break;

        //case "form": untuk menetukan halaman form yg akan tampil dihalaman tmp_karyawan.php
        case "manpower":

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
}
?>
