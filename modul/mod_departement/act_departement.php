<?php

$id=$_GET['id'];


switch($_GET['sect']){
//homepage
  default:

if($_GET['act'] == 'hapus'){

    $ddepartement=$db->prepare("DELETE FROM tbldepartments WHERE id_departement =:id");
    $ddepartement->bindParam(':id',$id);
    $ddepartement->execute();

    echo"<script>alert('Hapus Berhasil'); window.location = ('?page=$page')</script>";
  }

    $nama_departement =$_REQUEST['nama_departement'];
    $short_name=$_REQUEST['short_name'];
    $id_departement=$_REQUEST['id_departement'];

  if($_GET['act'] == 'input'){


    //query input departement
    $insert_departement=$db->prepare("INSERT INTO tbldepartments (nama_departement,short_name) VALUES
    																(:nama_departement,:short_name)"); 		//sql insert query

    	$insert_departement->execute(array(
    	  ':nama_departement' => $nama_departement,
        ':short_name' => $short_name
        ));
    		echo"<script>alert('Input data berhasil'); window.location = ('?page=$page')</script>";

  }else if ($_GET['act'] == 'edit'){

    $data=[
      'nama_departement' => $nama_departement,
      'id_departement' => $id_departement,
      'short_name' => $short_name
    ];

    $sqldepartement = "UPDATE tbldepartments SET nama_departement=:nama_departement,short_name=:short_name WHERE id_departement=:id_departement";
    $edepartement= $db->prepare($sqldepartement);
    $edepartement->execute($data);

    //menampilkan pesan sukses dan menuju ke halaman yang sama
    //echo"<script>alert('edit berhasil'); window.location = ('?page=$page')</script>";
  }
  break;

}


?>
