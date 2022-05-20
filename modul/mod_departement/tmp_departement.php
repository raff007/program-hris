<?php

$id=$_GET['id'];

switch($_GET['sect']){
  //homepage
    default:
?>

<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Manage Departement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Departement</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <!-- /.col (right) -->
     <div class="row">
          <div class="col-md-6">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Departement</h3>
              </div>
              <div class="card-body">
              <div class="form-group">
              <form method="post" action="index.php?page=<?= $page ?>&sect=form&act=<?= $actpage ?>">
              <input type="hidden" name="id_departement" value="<?= $_GET['id'] ?>">
                  <label>Departement Name</label>
                  <input type="text" class="form-control" name="nama_departement"  placeholder="Enter ..."  value="<?= $dp['nama_departement'] ?>">
                        </div>
                  <label>Short Name</label>
                  <input type="text" class="form-control" name="short_name" placeholder="Enter ..." value="<?= $dp['short_name'] ?>"><br>
                        <button type="submit" class="btn btn-primary float-right" value="simpan">Submit</button>
                        <input type="reset" class="btn btn-light" value="Reset">
                        </div>
                    </form>
                    </div>
                  </div>

      <!-- /.col (left) -->
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tabel Departement</h3>
              </div>
              <div class="card-body">
               <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Departement</th>
                    <th>Short.Dept</th>
                    <th>Act</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php $no=1; foreach($selectdepartement as $sd){ ?>
                  <tr>
                  <td><?= $no ?></td>
                  <td><?= $sd['nama_departement'] ?></td>
                  <td><?= $sd['short_name'] ?></td>
                    <td>
                      <a href="index.php?page=<?= $page ?>&act=edit&id=<?= $sd['id_departement'] ?>"><i class="fas fa-user-edit" style="color:orange;"></i></a>
                      <a href="index.php?page=<?= $page ?>&act=hapus&id=<?= $sd['id_departement'] ?>" onclick = "return confirm('Yakin Data Akan Dihapus ?')"><i class="far fa-trash-alt" style="color:red;"></i></a>
                    </td>
                  </tr>
                  <?php $no++; } ?>
                </table>
                  </div>
                  </div>
                  </div>
                  </div>
                  <?php break; }?>
