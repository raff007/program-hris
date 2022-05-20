<?php

$id=$_GET['id'];


switch($_GET['sect']){
//homepage
  default:

  case "form":

    $id_karyawan=$_REQUEST['id_karyawan'];
    $nik_karyawan=$_REQUEST['nik_karyawan'];
    $nama_karyawan=$_REQUEST['nama_karyawan'];

    $id_tipekaryawan=$_REQUEST['id_tipekaryawan'];
    $id_jabatan=$_REQUEST['id_jabatan'];
    $id_departement=$_REQUEST['id_departement'];

    //convert tanggal
    //$eawal=explode("/",$awalmasuk);
    //$awal_masukpt=$eawal[2]."-".$eawal[0]."-".$eawal[1];
    //convert tanggal

    //kondisi if menuju query input
      if($_GET['act'] == 'input'){

    //query input PDO
    $insert_karyawan=$db->prepare("INSERT INTO karyawan(nik_karyawan,status_karyawan,nama_karyawan,id_tipekaryawan,
                                                        id_jabatan,id_departement) VALUES
                                    (:nik_karyawan,:status_karyawan,:nama_karyawan,:id_tipekaryawan,:id_jabatan,:id_departement)");

     $insert_karyawan->execute(array(
       ':nik_karyawan' => $nik_karyawan,
       ':status_karyawan' => '1',
       ':nama_karyawan' => $nama_karyawan,

       //input array foto profil
       ':photo_pp' => $fotobaru,
       //input array foto ktp
       ':foto_ktp' => $fotoktpbaru,

       ':id_tipekaryawan' => $id_tipekaryawan,
       ':id_jabatan' => $id_jabatan,
       ':id_departement' => $id_departement,

       ':no_kk' => $no_kk,
       ':no_ktp' => $no_ktp,
       ':id_cabang' => $id_cabang,
       ':id_lokasi' => $id_lokasi,

       ':id_golongan' => $id_golongan,
       ':jenis_kelamin' => $jenis_kelamin,
       ':st_pernikahan' => $st_pernikahan,
       ':anak' => $anak,

       ':st_keluarga' => $st_keluarga,

       ':awal_masukpt' => $awal_masukpt,
       ':tgl_keluarpt' => $tgl_keluarpt,
       ':tipe_kontrak' => $tipe_kontrak,
       ':bpjstk' => $bpjstk,
       ':bpjsks' => $bpjsks,
       ':npwp' => $npwp,
       ':bank' => $bank,
       ':norek' => $norek,
       ':tempat_lahir' => $tempat_lahir,
       ':tanggal_lahir' => $tanggal_lahir,
       ':alamat' => $alamat,
       ':email' => $email,
       ':agama' => $agama,
       ':pendidikan' => $pendidikan


      ));

     echo"<script>alert('Input data berhasil'); window.location = ('?page=$page')</script>";
}
else if($_GET['act'] == 'edit'){

  $selectkaryawan2=$db->prepare("SELECT * FROM karyawan WHERE id_karyawan = :id_karyawan");
  $selectkaryawan2->execute(array(':id_karyawan'=>$id_karyawan));
  $dk2=$selectkaryawan2->fetch(PDO::FETCH_ASSOC);

if($_FILES['photo_pp']['name'] == ""){
  $fotobaru = $dk2['photo_pp'];
} else {
  $photo_pp = $_FILES['photo_pp']['name'];
  $tmp = $_FILES['photo_pp']['tmp_name'];
  $fotobaru = date('dmYHis').$photo_pp;
  $path = "upload/".$fotobaru;

  move_uploaded_file($tmp, $path);

}

if($_FILES['foto_ktp']['name'] == ""){
   $fotoktpbaru = $dk2['foto_ktp'];

} else {

  $foto_ktp = $_FILES['foto_ktp']['name'];
  $tmp_ktp = $_FILES['foto_ktp']['tmp_name'];
  $fotoktpbaru = date('dmYHis').$foto_ktp;
  $path_ktp = "upload/ktp/".$fotoktpbaru;

  move_uploaded_file($tmp_ktp, $path_ktp);
}

    $data=[
      ':id_karyawan' => $id_karyawan,
      ':nik_karyawan' => $nik_karyawan,
      ':nama_karyawan' => $nama_karyawan,

      //edit foto profil
      ':photo_pp' => $fotobaru,
      //edit scan foto ktp
      ':foto_ktp' => $fotoktpbaru,

      ':id_tipekaryawan' => $id_tipekaryawan,
      ':id_jabatan' => $id_jabatan,
      ':id_departement' => $id_departement,

      ':no_kk' => $no_kk,
      ':no_ktp' => $no_ktp,
      ':id_cabang' => $id_cabang,
      ':id_lokasi' => $id_lokasi,

      'id_golongan' => $id_golongan,
      ':jenis_kelamin' => $jenis_kelamin,
      ':st_pernikahan' => $st_pernikahan,
      ':anak' => $anak,

      ':st_keluarga' => $st_keluarga,

      ':awal_masukpt' => $awal_masukpt,
      ':tgl_keluarpt' => $tgl_keluarpt,
      ':tipe_kontrak' => $tipe_kontrak,
      ':bpjstk' => $bpjstk,
      ':bpjsks' => $bpjsks,
      ':npwp' => $npwp,
      ':bank' => $bank,
      ':norek' => $norek,
      ':tempat_lahir' => $tempat_lahir,
      ':tanggal_lahir' => $tanggal_lahir,
      ':alamat' => $alamat,
      ':email' => $email,
      ':agama' => $agama,
      ':pendidikan' => $pendidikan

    ];

    $sqlekaryawan = "UPDATE karyawan SET nik_karyawan=:nik_karyawan,nama_karyawan=:nama_karyawan,id_tipekaryawan=:id_tipekaryawan,
                    id_jabatan=:id_jabatan,id_departement=:id_departement,no_kk=:no_kk,no_ktp=:no_ktp,id_cabang=:id_cabang,id_lokasi=:id_lokasi,id_golongan=:id_golongan,
                    jenis_kelamin=:jenis_kelamin,st_pernikahan=:st_pernikahan,anak=:anak,st_keluarga=:st_keluarga,awal_masukpt=:awal_masukpt,tgl_keluarpt=:tgl_keluarpt,tipe_kontrak=:tipe_kontrak,
                    bpjstk=:bpjstk,bpjsks=:bpjsks,npwp=:npwp,bank=:bank,norek=:norek,tempat_lahir=:tempat_lahir,tanggal_lahir=:tanggal_lahir,alamat=:alamat,email=:email,agama=:agama,pendidikan=:pendidikan,photo_pp=:photo_pp,foto_ktp=:foto_ktp WHERE id_karyawan=:id_karyawan";
    $ekaryawan= $db->prepare($sqlekaryawan);
    $ekaryawan->execute($data);

    echo"<script>alert('edit berhasil'); window.location = ('?page=$page')</script>";


  }else if($_GET['act'] == 'hapus'){

    //query hapus data tabel databse dengan metode PHP PDO
    $dkaryawan=$db->prepare("DELETE FROM karyawan WHERE id_karyawan =:id");
    $dkaryawan->bindParam(':id',$id);
    $dkaryawan->execute();

    echo"<script>alert('Hapus Berhasil'); window.location = ('?page=$page')</script>";
  }

  break;

}
?>
