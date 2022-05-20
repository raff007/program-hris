<?php
ob_start();
require_once 'Config/Config.php';


if(isset($_SESSION["user_login"]))	//check condition user login not direct back to index.php page
{
	header("location:index.php?page=home");
        exit;
}
if(isset($_REQUEST['btnSubmit']) )
{
//script login
$username	=strip_tags(strtolower($_REQUEST["username"]));
$password	=strip_tags($_REQUEST["password"]);


if(empty($username)){
  echo"<script>alert('Empty Username'); window.location = ('login.php');</script>";
}
else if(empty($password)){
  echo"<script>alert('Empty Password'); window.location = ('login.php');</script>";
}
else
{
  try
  {
    $select_stmt=$db->prepare("SELECT * FROM pengguna WHERE username=:username"); //sql select query
    $select_stmt->execute(array(':username'=>$username));	//execute query with bind parameter
    $row=$select_stmt->fetch(PDO::FETCH_ASSOC);


    if($select_stmt->rowCount() > 0)	//check condition database record greater zero after continue
    {
      if($username==$row["username"]) //check condition user taypable "username or email" are both match from database "username or email" after continue
      {
        if(password_verify($password, $row['password'])) //check condition user taypable "password" are match from database "password" using password_verify() after continue
        {
          $_SESSION['user_login'] = $row['username'];
          $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
          $_SESSION['foto'] = $row['foto'];
          $_SESSION['level'] = $row['id_level'];
          
          echo"<script>alert('Login Sukses'); window.location = ('index.php?page=home');</script>";
          //header("location:index.php?page=home");			//refresh 2 second after redirect to "welcome.php" page
        }
        else
        {
          echo"<script>alert('Wrong Password'); window.location = ('login.php');</script>";
        }
      }
    }
    else
    {
      echo"<script>alert('Username anda salah / Belum terdaftar'); window.location = ('login.php');</script>";
    }
  }
  catch(PDOException $e)
  {
    $e->getMessage();
  }
}
}
//menampilkan halaman input login yaitu front_tmp.php
$statsmet='login';
include "tmp/front_tmp.php";


ob_end_flush();
?>