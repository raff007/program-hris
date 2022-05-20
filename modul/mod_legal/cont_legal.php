<?php if (!isset($RUN)) { exit(); }?>

<?php
//$page=$_GET['page']; variabel untuk memanggil halaman
$page=$_GET['page'];
//switch($_GET['sect']){default: adalah variabel menampilkan isi
//halaman 'page' tabel karyawan secara default dengan memanggil url 'sect'
switch($_GET['sect']){
default:

//menampilkan tabel karyawan
case "tabel_karyawan":
    //query menampilkan karyawan DKM saja
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

break;

  //menampilkan halaman atau bagian porfil karyawan DKM
  case "profil":

  //query menampilkan tabel kontrak karyawan DKM dan join tabel kontrak dengan logic:
  // ambil data karyawan berdasarkan id_karyawan lalu join tabel kontrak
  //setelah id_karyawan dari tabel karyawan  dijoin dengan tabel kontrak maka.
  //tabel kontrak bisa di input berdasarkan id_karyawan
  $tabelkontrak=$db->prepare(" SELECT * FROM karyawan JOIN kontrak ON kontrak.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan = :id_karyawan ORDER BY id_kontrak ASC");
  $tabelkontrak->execute(array(':id_karyawan' =>$_GET['id'])); //eksekusi id_karyawan

  if($_GET['id']){
      $actpage='edit';
      //query menampilkan data yang akan di edit berdasarkan id_karyawan
      $selectkontrak=$db->prepare("SELECT * FROM kontrak WHERE id_kontrak = :id_kontrak");
      $selectkontrak->execute(array(':id_kontrak'=>$_GET['id']));
      $dk=$selectkontrak->fetch(PDO::FETCH_ASSOC);
    }else{
    $actpage='input';
    }





  //query menampilkan usia dan detail profil karyawan DKM dihalaman detail profil karyawan
  $selectprofil=$db->prepare("SELECT nama_karyawan,photo_pp,pendidikan,short_name,telp,email,alamat_lokasi,tanggal_lahir, timestampdiff(year, tanggal_lahir, curdate()) AS umur FROM karyawan

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

      WHERE karyawan.id_karyawan = :id_karyawan");

      $selectprofil->execute(array(':id_karyawan' =>$_GET['id']));
      $sp=$selectprofil->fetch();

      break;

        //halaman manpower
        case "manpower":

        //query menampilkan grid view dihalaman manpower
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
