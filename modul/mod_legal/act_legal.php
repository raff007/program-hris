<?php

$id=$_GET['id'];


switch($_GET['sect']){
//homepage
  default:

  case "profil":

      if($_GET['act'] == 'input'){

        $id_karyawan=$_REQUEST['id_karyawan'];
        $nomor_kontrak=$_REQUEST['nomor_kontrak'];
        $code=$_REQUEST['code'];

        $bln_thn=$_REQUEST['bln_thn'];
        $awal_kontrak=$_REQUEST['awal_kontrak'];
        $durasi=$_REQUEST['durasi'];

        $akhir_kontrak=$_REQUEST['akhir_kontrak'];


        //query input PDO
        $insert_kontrak=$db->prepare("INSERT INTO kontrak(id_karyawan,nomor_kontrak,code,bln_thn,awal_kontrak,durasi,akhir_kontrak) VALUES
                                        (:id_karyawan,:nomor_kontrak,:code,:bln_thn,:awal_kontrak,:durasi,:akhir_kontrak)");

          $insert_kontrak->execute(array(
          ':id_karyawan' => $id_karyawan,
          ':nomor_kontrak' => $nomor_kontrak,
          ':code' => $code,
          ':bln_thn' => $bln_thn,
          ':awal_kontrak' => $awal_kontrak,
          ':durasi' => $durasi,
          ':akhir_kontrak' => $akhir_kontrak
        ));

          echo"<script>alert('Input data berhasil'); window.location = ('?page=$page&sect=profil&id=$id_karyawan')</script>";


          }else if($_GET['act'] == 'hapus'){

              $dkontrak=$db->prepare("DELETE FROM kontrak WHERE id_kontrak =:id");
              $dkontrak->bindParam(':id',$_GET['id']);
              $dkontrak->execute();

              echo"<script>alert('Hapus Berhasil'); window.location = ('?page=$page&sect=profil&id=$_GET[idk]')</script>";
}

else if ($_GET['act'] == 'edit') {

  $data=[
    ':id_karyawan' => $id_karyawan,
    ':id_kontrak' => $id_kontrak,
    ':nomor_kontrak' => $nomor_kontrak,
    ':code' => $code,
    ':bln_thn' => $bln_thn,
    ':awal_kontrak' => $awal_kontrak,
    ':durasi' => $durasi,
    ':akhir_kontrak' => $akhir_kontrak

  ];

  $sqlekontrak = "UPDATE kontrak SET id_karyawan=:id_karyawan,nomor_kontrak=:nomor_kontrak,code=:code,bln_thn=:bln_thn,awal_kontrak=:awal_kontrak,durasi=:durasi,akhir_kontrak=:akhir_kontrak WHERE id_kontrak=:id_kontrak";
  $ekontrak= $db->prepare($sqlekontrak);
  $ekontrak->execute($data);

  //echo"<script>alert('edit berhasil'); window.location = ('?page=$page&sect=profil&id=$_GET[idk]')</script>";


}

  break;

}
?>
