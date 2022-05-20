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

    $no_kk=$_REQUEST['no_kk'];
    $no_ktp=$_REQUEST['no_ktp'];
    $id_cabang=$_REQUEST['id_cabang'];
    $id_lokasi=$_REQUEST['id_lokasi'];

    $id_golongan=$_REQUEST['id_golongan'];
    $jenis_kelamin=$_REQUEST['jenis_kelamin'];
    $st_pernikahan=$_REQUEST['st_pernikahan'];

    if(!$_REQUEST['anak']){
    $anak=0;
    }else{
    $anak=$_REQUEST['anak'];
    }

    $st_keluarga=$_REQUEST['st_keluarga'];


    $awal_masukpt=$_REQUEST['awal_masukpt'];

    $tgl_keluarpt=$_REQUEST['tgl_keluarpt'];
    $tipe_kontrak=$_REQUEST['tipe_kontrak'];
    $bpjstk=$_REQUEST['bpjstk'];
    $bpjsks=$_REQUEST['bpjsks'];
    $npwp=$_REQUEST['npwp'];
    $bank=$_REQUEST['bank'];
    $norek=$_REQUEST['norek'];
    $tempat_lahir=$_REQUEST['tempat_lahir'];
    $tanggal_lahir=$_REQUEST['tanggal_lahir'];
    $alamat=$_REQUEST['alamat'];
    $email=$_REQUEST['email'];
    $agama=$_REQUEST['agama'];
    $pendidikan=$_REQUEST['pendidikan'];
    $telp=$_REQUEST['telp'];

    //convert tanggal
    //$eawal=explode("/",$awalmasuk);
    //$awal_masukpt=$eawal[2]."-".$eawal[0]."-".$eawal[1];


    //convert tanggal

    //kondisi if menuju query input
      if($_GET['act'] == 'input'){

        //query input untuk nik karyawan
        // Buat query untuk menyeleksi nik dalam database
        $sqlk = $db->prepare("SELECT nik_karyawan FROM karyawan WHERE nik_karyawan = '$nik_karyawan'");
        $sqlk->execute(); // Eksekusi querynya

        //fungsi PDO untuk meanghitung querynya
        if ($sqlk->rowcount()>0){
          echo"<script>alert('Input gagal, NIK Karyawan sudah terdaftar'); window.location = ('?page=$page&sect=form')</script>";
        }else{

        // Set path folder tempat menyimpan fotonya
        $photo_pp = $_FILES['photo_pp']['name'];
        $tmp = $_FILES['photo_pp']['tmp_name'];

        // Set path folder tempat menyimpan fotonya
        $foto_ktp = $_FILES['foto_ktp']['name'];
        $tmp_ktp = $_FILES['foto_ktp']['tmp_name'];

        // Rename nama fotonya dengan menambahkan tanggal dan jam upload
        $fotobaru = date('dmYHis').$photo_pp;
        // Rename nama foto ktp dengan menambahkan tanggal dan jam upload
        $fotoktpbaru = date('dmYHis').$foto_ktp;

        // Set path folder tempat menyimpan fotonya
        $path = "upload/".$fotobaru;
        // Set path folder tempat menyimpan foto ktp
        $path_ktp = "upload/ktp/".$fotoktpbaru;

        // fungsi untuk memindahkan foto ke folder yg di tuju (pas foto)
        move_uploaded_file($tmp, $path);

        // fungsi untuk memindahkan foto ke folder yg di tuju (foto ktp)
        move_uploaded_file($tmp_ktp, $path_ktp);

    //query input PDO
    $insert_karyawan=$db->prepare("INSERT INTO karyawan(nik_karyawan,status_karyawan,nama_karyawan,id_tipekaryawan,
                                                        id_jabatan,id_departement,no_kk,no_ktp,id_cabang,id_lokasi,id_golongan,jenis_kelamin,st_pernikahan,anak,st_keluarga,awal_masukpt,tgl_keluarpt,
                                                        tipe_kontrak,bpjstk,bpjsks,npwp,bank,norek,tempat_lahir,tanggal_lahir,alamat,email,agama,pendidikan,telp,photo_pp,foto_ktp) VALUES
                                    (:nik_karyawan,:status_karyawan,:nama_karyawan,:id_tipekaryawan,:id_jabatan,:id_departement,:no_kk,:no_ktp,:id_cabang,:id_lokasi,:id_golongan,
                                      :jenis_kelamin,:st_pernikahan,:anak,:st_keluarga,:awal_masukpt,:tgl_keluarpt,:tipe_kontrak,:bpjstk,:bpjsks,:npwp,:bank,:norek,:tempat_lahir,:tanggal_lahir,:alamat,:email,:agama,:pendidikan,:telp,:photo_pp,:foto_ktp)");

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
       ':pendidikan' => $pendidikan,
       ':telp' => $telp


      ));

     echo"<script>alert('Input data berhasil'); window.location = ('?page=$page')</script>";
   }

}
else if($_GET['act'] == 'edit'){

  //query karyawan berdasarkan id
  $selectkaryawan2=$db->prepare("SELECT * FROM karyawan WHERE id_karyawan = :id_karyawan");
  $selectkaryawan2->execute(array(':id_karyawan'=>$id_karyawan));
  $dk2=$selectkaryawan2->fetch(PDO::FETCH_ASSOC);

  //query untuk edit nik
  //qwuery untuk validasi edit karyawan berdasarkan nik_karyawan
  $sqlk = $db->prepare("SELECT nik_karyawan FROM karyawan WHERE nik_karyawan = '$nik_karyawan'");
  $sqlk->execute(); // Eksekusi querynya

  //kondisi nik_karyawan tidak dirubah
  if ($dk2['nik_karyawan'] == $nik_karyawan){
    $kond_jml=1;//triger untuk menyatakan kondisi nik_karyawan tidak berubah

  }else if ($dk2['nik_karyawan'] != $nik_karyawan){
    //kondisi nik_karyawan berubah
    $kond_jml=0;//triger untuk menyatakan kondisi nik_karyawan berubah
  }

  //fungsi PDO untuk menghitung querynya, pesan alert jika edit gagal karna nik_karyawan suda ada
  if ($sqlk->rowCount() > $kond_jml){
    echo"<script>alert('Edit gagal, NIK Karyawan sudah terdaftar'); window.location = ('?page=$page&sect=form&id=$id_karyawan')</script>";
  }else{


  //scrip sama sama yg diatas
  //$selectkaryawan2=$db->prepare("SELECT * FROM karyawan WHERE id_karyawan = :id_karyawan");
  //$selectkaryawan2->execute(array(':id_karyawan'=>$id_karyawan));
  //$dk2=$selectkaryawan2->fetch(PDO::FETCH_ASSOC);


//query logic kondisi foto tanpa diganti atau di replace 
if($_FILES['photo_pp']['name'] == ""){
  $fotobaru = $dk2['photo_pp'];
} else {
  //script edit gambar dengan mereplace gambar baru
  $photo_pp = $_FILES['photo_pp']['name'];
  $tmp = $_FILES['photo_pp']['tmp_name'];
  $fotobaru = date('dmYHis').$photo_pp;
  $path = "upload/".$fotobaru;

  //unlink adalah fungsi delete gambar
  unlink('upload/'.$dk2['photo_pp']);
  //move_uploaded_file adalah fungsi upload gambar
  move_uploaded_file($tmp, $path);

}

if($_FILES['foto_ktp']['name'] == ""){
   $fotoktpbaru = $dk2['foto_ktp'];

} else {
//script edit gambar ktp dengan mereplace gambar ktp baru
  $foto_ktp = $_FILES['foto_ktp']['name'];
  $tmp_ktp = $_FILES['foto_ktp']['tmp_name'];
  $fotoktpbaru = date('dmYHis').$foto_ktp;
  $path_ktp = "upload/ktp/".$fotoktpbaru;

  //unlink adalah fungsi delete dan replace gambar ktp lama ke baru
  unlink('upload/ktp/'.$dk2['foto_ktp']);
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
      ':pendidikan' => $pendidikan,
      ':telp' => $telp

    ];

    $sqlekaryawan = "UPDATE karyawan SET nik_karyawan=:nik_karyawan,nama_karyawan=:nama_karyawan,id_tipekaryawan=:id_tipekaryawan,
                    id_jabatan=:id_jabatan,id_departement=:id_departement,no_kk=:no_kk,no_ktp=:no_ktp,id_cabang=:id_cabang,id_lokasi=:id_lokasi,id_golongan=:id_golongan,
                    jenis_kelamin=:jenis_kelamin,st_pernikahan=:st_pernikahan,anak=:anak,st_keluarga=:st_keluarga,awal_masukpt=:awal_masukpt,tgl_keluarpt=:tgl_keluarpt,tipe_kontrak=:tipe_kontrak,
                    bpjstk=:bpjstk,bpjsks=:bpjsks,npwp=:npwp,bank=:bank,norek=:norek,tempat_lahir=:tempat_lahir,tanggal_lahir=:tanggal_lahir,alamat=:alamat,email=:email,agama=:agama,pendidikan=:pendidikan,telp=:telp,photo_pp=:photo_pp,foto_ktp=:foto_ktp WHERE id_karyawan=:id_karyawan";
    $ekaryawan= $db->prepare($sqlekaryawan);
    $ekaryawan->execute($data);

    echo"<script>alert('edit berhasil'); window.location = ('?page=$page')</script>";
}

  }else if($_GET['act'] == 'hapus'){

    // query get data karyawan untuk hapus foto
    $selectkaryawan=$db->prepare("SELECT * FROM karyawan WHERE id_karyawan = :id_karyawan");
    $selectkaryawan->execute(array(':id_karyawan'=>$_GET['id']));
    $dk=$selectkaryawan->fetch(PDO::FETCH_ASSOC);

    //query hapus data tabel databse dengan metode PHP PDO
    $dkaryawan=$db->prepare("DELETE FROM karyawan WHERE id_karyawan =:id");
    $dkaryawan->bindParam(':id',$id);
    $dkaryawan->execute();

    //printah hapus photo pp
    unlink('upload/'.$dk['photo_pp']);
    //printah hapus photo ktp
    unlink('upload/ktp/'.$dk['foto_ktp']);

    echo"<script>alert('Hapus Berhasil'); window.location = ('?page=$page')</script>";
  }

  break;

}
?>
