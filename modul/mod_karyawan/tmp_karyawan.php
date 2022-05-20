<?php

$id=$_GET['id'];


switch($_GET['sect']){
  //homepage
    default:
?>
<div class="container-fluid">
<div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel Karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Tabel</a></li>
          <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Grid View</a></li>
          <li class="nav-item"><a href="index.php?page=<?= $page ?>&sect=form"  class="nav-link">Tambah Karyawan</a></li>
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <!-- Post -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" style="text-transform:uppercase;">
                <thead>
                <th>NO</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Cabang</th>
                    <th>Lokasi</th>
                    <th>Dept.</th>
                    <th>Tipe.Kary</th>
                    <th>Gol</th>
                    <th>Gen</th>
                    <th>No.KK</th>
                    <th>No.KTP</th>
                    <th>St.Perni</th>
                    <th>Anak</th>
                    <th>St.Kel</th>
                    <th>Tgl in</th>
                    <th>Tgl out</th>
                    <th>Tipe Kontrak</th>
                    <th>BPJSTK</th>
                    <th>BPJSKS</th>
                    <th>NPWP</th>
                    <th>Bank</th>
                    <th>Norek</th>
                    <th>Tmp.Lahir</th>
                    <th>Tgl.Lahir</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>No.HP</th>
                    <th>Foto</th>
                    <th>Scan KTP</th>

                    <th>Aksi</th>

                </thead>
                <tbody>

                <?php
                    $no=1; foreach($selectkaryawan as $ka){

                      $tgl_masuk=DateID(strtotime($ka['awal_masukpt']));

                      $tgl_keluar=DateID(strtotime($ka['tgl_keluarpt']));

                      $tgl_lahir=DateID(strtotime($ka['tanggal_lahir']));

                      ?>
                     <tr>
                    <td><?=  $no ?></td>
                    <td><?=  $ka['nik_karyawan']; ?></td>
                    <td><?=  $ka['nama_karyawan']; ?></td>
                    <td><?=  $ka['jabatan']; ?></td>
                    <td><?=  $ka['nama_cabang']; ?></td>
                    <td><?=  $ka['alamat_lokasi']; ?></td>
                    <td><?=  $ka['nama_departement']; ?></td>
                    <td><?=  $ka['nama_tipekaryawan']; ?></td>
                    <td><?=  $ka['kode_golkar']; ?></td>
                    <td><?=  $ka['jenis_kelamin']; ?></td>
                    <td><?=  $ka['no_kk']; ?></td>
                    <td><?=  $ka['no_ktp']; ?></td>
                    <td><?=  $ka['st_pernikahan']; ?></td>
                    <td><?=  $ka['anak']; ?></td>
                    <td><?=  $ka['st_keluarga']; ?></td>
                    <td><?=  $tgl_masuk ?></td>
                    <td><?=  $tgl_keluar ?></td>
                    <td><?=  $ka['tipe_kontrak']; ?></td>
                    <td><?=  $ka['bpjstk']; ?></td>
                    <td><?=  $ka['bpjsks']; ?></td>
                    <td><?=  $ka['npwp']; ?></td>
                    <td><?=  $ka['bank']; ?></td>
                    <td><?=  $ka['norek']; ?></td>
                    <td><?=  $ka['tempat_lahir']; ?></td>
                    <td><?=  $tgl_lahir ?></td>
                    <td><?=  $ka['alamat']; ?></td>
                    <td><?=  $ka['email']; ?></td>
                    <td><?=  $ka['agama']; ?></td>
                    <td><?=  $ka['pendidikan']; ?></td>
                    <td><?=  $ka['telp']; ?></td>
                    <td><img src="upload/<?= $ka['photo_pp']; ?>" width="150" height="150"></td>
                    <td><img src="upload/ktp/<?= $ka['foto_ktp']; ?>" width="150" height="150"></td>


                    <td>
                    <a href="index.php?page=<?= $page ?>&sect=form&id=<?= $ka['id_karyawan'] ?>"><i class="fas fa-user-edit" style="color:orange;"></i></a>
                    <a href="index.php?page=<?= $page ?>&act=hapus&id=<?= $ka['id_karyawan'] ?>" onclick ="return confirm('Yakin Data Akan Dihapus ?')"><i class="far fa-trash-alt" style="color:red;"></i></a>
                    </td>
                    </tr>
                     <?php $no++; } ?>
              </table>
            </div>
            <!-- /.card-body -->

            <!-- /.post -->
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="timeline">
            <!-- The timeline -->

            <!-- Default box -->

                <div class="card-body pb-0">
                  <div class="row">

                    <?php
                        foreach($selectmp as $smp){

                          ?>
                    <!--open card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                      <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                          <?=  $smp['nama_departement']; ?>
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead" style="text-transform:uppercase;"><b><?=  $smp['nama_karyawan']; ?></b></h2>
                              <p class="text-muted text-sm"><b>About: </b><?=  $smp['jabatan']; ?></p>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: <?=  $smp['alamat']; ?></li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone:+<a href="tel:+<?=  $smp['telp']; ?>"><?=  $smp['telp']; ?></a></li>
                              </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="upload/<?= $smp['photo_pp'] ?>" alt="user-avatar" class="img-circle img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="https://wa.me/<?=  $smp['telp']; ?>?text=Hallo Kami dari PT.DKM" target="_blank" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <!--link view profil menunju ke view profil halaman legal--->
                            <a href="index.php?page=legal&sect=profil&id=<?= $smp['id_karyawan'] ?>" class="btn btn-sm btn-primary">
                              <i class="fas fa-user"></i> View Profile
                            </a>
                          </div>
                        </div>
                      </div>
                    </div><!--penutup flex-fill--->

            <?php  } ?>

              <!-- END timeline item -->
            </div>
          </div>
          <!-- /.card-body -->

            <nav aria-label="Contacts Page Navigation">
              <ul class="pagination justify-content-center m-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
              </ul>
            </nav>
          <!-- /.card-footer -->
          </div>
          <!-- /.tab-pane -->


        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php
break;
case "form":
?>

<!-- general form elements disabled -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulir Input Data Karyawan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="form1" name="form1" method="post"  action="index.php?page=<?= $page ?>&sect=form&act=<?= $actpage ?>" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <input type="hidden" name="id_karyawan" value="<?= $_GET['id'] ?>">

                      <label>NIK KARYAWAN</label>
                      <input type="hidden" name="new_nik" id="new_nik" value="<?= $newnik ?>">

                        <input type="text" class="form-control" name="nik_karyawan" id="nik_karyawan"  maxlength="8" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <=57"  value="<?= $dk['nik_karyawan'] ?>"  required>

                        <?php if(!$_GET['id']){ ?>
                        <a class="btn btn-success" onclick="generate_nik()">Generate Auto NIK</a><br><br>
                        <script>
                              function generate_nik(){

                                 document.getElementById("nik_karyawan").value=document.getElementById("new_nik").value;


                              }
                              </script>

                        <?php } ?>

                        <label>TIPE KARYAWAN</label>
                        <select class="form-control" name="id_tipekaryawan" id="tipe_karyawan" required>


                          <option value="">PILIH</option>
                          <?php while($data = $sqlt->fetch()){ // Ambil semua data dari hasil eksekusi $sql

                                /*+ menampilkan tipe karyawan yg sudah terpilih di database   +*/
                            if ($data['id_tipekaryawan'] == $dk['id_tipekaryawan']){
                              /*+ menampilkan selected pilihan sesuai dengan id_tipekaryawan  +*/
                              echo "<option value='".$data['id_tipekaryawan']."' selected> ".$data['nama_tipekaryawan']." </option>";
                            }else {
                              /*+ menampilkan ketika tidak ada yg dipilih atau selected  +*/
                            echo "<option value='".$data['id_tipekaryawan']."'> ".$data['nama_tipekaryawan']." </option>";
                          }
                        }
                          ?>
                        </select>

                        <label>DEPARTEMEN</label>
                        <select class="form-control"  id="tbldepartments" name="id_departement" required>
                            <option value="">PILIH</option>
                          <?php
                          //query menampilkan nama departement
                          while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql

                            if ($data['id_departement'] == $dk ['id_departement']){
                              echo "<option class='".$data['id_tipekaryawan']."' value='".$data['id_departement']."' selected> ".$data['nama_departement']." </option>";
                            }else {
                            echo "<option class='".$data['id_tipekaryawan']."' value='".$data['id_departement']."'> ".$data['nama_departement']." </option>";
                          }
                        }
                          ?>
                        </select>

                        <label>JABATAN</label>
                        <select class="form-control" id="struktur_jabatan" name="id_jabatan" multiple="multiple"  required>
                          <?php
                          //query menampilkan jabatan setelah pilih departement dengan metode inner join
                          while($data = $sqljbt->fetch()){
                            if ($data['id_jabatan'] == $dk['id_jabatan']){
                              echo "<option  class='".$data['id_departement']."' value='".$data['id_jabatan']."' selected> ".$data['jabatan']." </option>";
                            }else {
                            echo "<option  class='".$data['id_departement']."' value='".$data['id_jabatan']."'> ".$data['jabatan']." </option>";
                         }
                       }
                         ?>
                        </select>

                         <label>TEMPAT KERJA / CABANG</label>
                         <select class="form-control" id="tempat_kerja"  name="id_cabang" required>
                           <option value="">Pilih</option>
                           <?php
                           //query menampilkan jabatan setelah pilih departement dengan metode inner join
                           while($data = $sqlc->fetch()){
                             if ($data['id_cabang'] == $dk['id_cabang']){
                             echo "<option  value='".$data['id_cabang']."' selected> ".$data['nama_cabang']." </option>";
                          }else {
                            echo "<option  value='".$data['id_cabang']."'> ".$data['nama_cabang']." </option>";
                          }
                        }
                          ?>
                         </select>

                         <label>LOKASI</label>
                         <select class="form-control" id="lokasi" name="id_lokasi" multiple="multiple" required>
                         <?php
                           while($data = $sqll->fetch()){
                              if ($data['id_lokasi'] == $dk['id_lokasi']){
                             echo "<option class='".$data['id_cabang']."'  value='".$data['id_lokasi']."' selected> ".$data['alamat_lokasi']." </option>";
                          }else {
                            echo "<option class='".$data['id_cabang']."'  value='".$data['id_lokasi']."'> ".$data['alamat_lokasi']." </option>";
                          }
                        }
                          ?>

                         </select>
                        </br>
                        </br>
                    <label>Unggah Pas Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="photo_pp" accept="image/gif,image/jpeg,image/jpg,image/png,"  onchange="previewFile(this);" <?php if (!$_GET['id']) { echo "required"; } ?>>
                        <?php if(!$_GET['id']){ ?>
                        <img id="previewImg" src="upload/default.png" width="150" height="150" alt="Placeholder">

                  <?php }else{ ?>
                    <img id="previewImg" src="upload/<?= $dk['photo_pp'] ?>" width="150" height="150" alt="Placeholder">
                <?php  } ?>
                <!---thubnail script foto dengan jquery-->
                <script>
                function previewFile(input){
                    var file = $("input[type=file]").get(0).files[0];

                    if(file){
                        var reader = new FileReader();

                        reader.onload = function(){
                            $("#previewImg").attr("src", reader.result);
                        }

                        reader.readAsDataURL(file);
                    }
                }
            </script>
                    </div>
                    </div>
                    </div>
                      </br>
                      <label>Email</label>
                        <input type="text" class="form-control" style="text-transform:uppercase" name="email"  value="<?= $dk['email'] ?>" placeholder="email@email.com" required>
                      <label>GOLONGAN KARYAWAN</label>
                      <select class="form-control" name="id_golongan" required>
                        <option value="">PILIH</option>
                        <?php while($data = $sqlg->fetch()){ // Ambil semua data dari hasil eksekusi $sql

                              /*+ menampilkan id_golongan  yg sudah terpilih di database   +*/
                          if ($data['id_golongan'] == $dk['id_golongan']){
                            /*+ menampilkan selected pilihan sesuai dengan id_golongan  +*/
                            echo "<option value='".$data['id_golongan']."' selected> ".$data['kode_golkar']." </option>";
                          }else {
                            /*+ menampilkan ketika tidak ada yg dipilih atau selected  +*/
                          echo "<option value='".$data['id_golongan']."'> ".$data['kode_golkar']." </option>";
                        }
                      }
                        ?>
                      </select>

                    <div class="form-group">
                    <label>AWAL MASUK / Hire Date</label>
                        <input type="date" class="form-control" name="awal_masukpt" value="<?= $dk['awal_masukpt'] ?>" pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$" required>
                    <label>TANGAL KELUAR / Discharge Date</label>
                        <input type="date" class="form-control" name="tgl_keluarpt" value="<?= $dk['tgl_keluarpt'] ?>"  pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$" required>
                  <label>TIPE KONTRAK</label>
                  <select class="form-control"   name="tipe_kontrak"required >
                          <option value="">Pilih</option>
                          <option value="PERMANEN" <?php if($dk['tipe_kontrak'] == 'PERMANEN') {echo "selected";} ?> >PERMANEN</option>
                          <option value="PKWTT" <?php if($dk['tipe_kontrak'] == 'PKWTT') {echo "selected";} ?>>PKWTT</option>
                          <option value="PKWT" <?php if($dk['tipe_kontrak'] == 'PKWT') {echo "selected";} ?>>PKWT</option>
                        </select>
                        <label>BPJSTK</label>
                        <input type="text" class="form-control" name="bpjstk" name="bpjstk" maxlength="11" minlength="11" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?php echo $dk['bpjstk'];?>" placeholder="0000000000000" required>
                        <label>BPJSKS</label>
                        <input type="text" class="form-control" name="bpjsks" maxlength="13" minlength="13"  onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?php echo $dk['bpjsks'];?>" placeholder="0000000000000" required >

                        <label>NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp" value="<?php echo $dk['npwp'];?>"  placeholder="00.000.000.0-000.000" required>
                        <!--script format npwp -->
                        <script>
                        $('#npwp').inputmask({
                        mask: '99.999.***.*-999.999',
                        definitions: {
                            A: {
                                validator: "[A.Za-z0-9 ]"
                                },
                            },
                        });
                      </script>


                    <div class="form-group">
                      <label>NAMA BANK</label>
                      <select class="form-control"   name="bank" required>
                        <option value="">Pilih</option>
                        <option value="Mandiri" <?php if($dk['bank'] == 'Mandiri') {echo "selected";} ?> >Mandiri</option>
                        <option value="BNI" <?php if($dk['bank'] == 'BNI') {echo "selected";} ?>>BNI</option>
                        <option value="BCA" <?php if($dk['bank'] == 'BCA') {echo "selected";} ?>>BCA</option>
                      </select>
                  <label>NOMOR REKENING</label>
                    <input type="text" class="form-control" name="norek" id='norek' value="<?= $dk['norek'] ?>" minlength="10" maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="00000 00000 00000" required>
                  </div>
                  </div>
                  </div>

                   <!---kolom kanan-->
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>NAMA KARYAWAN</label>
                        <input type="text" class="form-control" style="text-transform:uppercase" name="nama_karyawan"  value="<?= $dk['nama_karyawan'] ?>" required>
                        <label>NO.KARTU KELUARGA</label>
                        <input type="text" class="form-control" name="no_kk" maxlength="16" minlength="16" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?= $dk['no_kk'] ?>" required>

                        <label>NIK KTP</label>
                        <input type="text" class="form-control" name="no_ktp" maxlength="16" minlength="16" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?= $dk['no_ktp'] ?>" required>
                      </br>
                    <label>Unggah Foto KTP</label>
                    <div class="input-group">
                      <div class="custom-file">
                  <input type="file" name="foto_ktp" class="input-group-append" accept="image/*" onchange="loadFile(event)" <?php if(!$_GET['id']) { echo "required"; } ?>>
                  <?php if(!$_GET['id']){ ?>
                  <img id="output" src="upload/ktp/ektp_fix.png"  width="170" height="130" alt="Scan KTP" /><br>

                  <?php }else{ ?>
                    <img id="output" src="upload/ktp/<?= $dk['foto_ktp'] ?>"  width="170" height="130" alt="Scan KTP" /><br>
                  <?php } ?>

                  <!--thubnail script scan ktp -->
                      <script>
                        var loadFile = function(event) {
                          var output = document.getElementById('output');
                          output.src = URL.createObjectURL(event.target.files[0]);
                          output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                          }
                        };
                      </script>
                  </div>
                    </div>
                      </br>
                        <label>JENIS KELAMIN</label>
                        <select class="form-control"   name="jenis_kelamin" required>
                          <option value="">Pilih</option>
                          <option value="L" <?php if($dk['jenis_kelamin'] == 'L') {echo "selected";} ?> >Laki - Laki</option>
                          <option value="P" <?php if($dk['jenis_kelamin'] == 'P') {echo "selected";} ?>>Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="pilih">STATUS PERNIKAHAN</label>
                      <select class="form-control" id="st_pernikahan" name="st_pernikahan" onchange="view_anak()" multiple="multiple" required>
                          <option  value="Menikah" <?php if($dk['st_pernikahan'] == 'Menikah') {echo "selected";} ?>>Menikah</option>
                          <option  value="Belum-Menikah"<?php if($dk['st_pernikahan'] == 'Belum-Menikah') {echo "selected";} ?>>Belum Menikah</option>
                          <option  value="Duda" <?php if($dk['st_pernikahan'] == 'duda') {echo "selected";} ?>>Duda</option>
                          <option  value="JANDA" <?php if($dk['st_pernikahan'] == 'JANDA') {echo "selected";} ?>>JANDA</option>
                      </select>
                      <label>JUMLAH ANAK</label>
                      <select class="form-control" id="anak" name="anak" required  <?php if($dk['st_pernikahan'] == 'Belum-Menikah'){ echo "disabled" ;} ?>  >
                        <option value="">Pilih</option>
                        <option value="0" <?php if($dk['anak'] == '0') {echo "selected";} ?> >Tidak Ada</option>
                        <option value="1" <?php if($dk['anak'] == '1') {echo "selected";} ?>>1</option>
                        <option value="2" <?php if($dk['anak'] == '2') {echo "selected";} ?>>2</option>
                        <option value="3" <?php if($dk['anak'] == '3') {echo "selected";} ?>>3</option>
                    </select>
                       <!--javascript anak dan tidak ada anak -->
                      <script>
                            function view_anak(){
                              if (document.getElementById("st_pernikahan").value === "Belum-Menikah") {
                               document.getElementById("anak").disabled='true';
                               document.getElementById("anak").selectedIndex = 0;

                              } else {
                               document.getElementById("anak").disabled='';
                              }
                            }
                            </script>
                        </script>
                      </div>

                      <label>STATUS KELUARGA</label>
                      <div class="row">
                      <div class="col-sm-6">
                        <div class="form-check">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="st_keluarga"  value="TK0" <?php if($dk['st_keluarga']=='TK0') echo 'checked'?> required>
                            <label for="customRadio1" class="custom-control-label">TK0</label>
                          </div>
                          <div class="form-check">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="st_keluarga" value="TK1" <?php if($dk['st_keluarga']=='TK1') echo 'checked'?>>
                            <label for="customRadio2" class="custom-control-label">TK1</label>
                          </div>
                          <div class="form-check">
                            <input class="custom-control-input" type="radio" id="customRadio3" name="st_keluarga" value="TK2" <?php if($dk['st_keluarga']=='TK2') echo 'checked'?>>
                            <label for="customRadio3" class="custom-control-label">TK2</label>
                            </div>
                          <div class="form-check">
                            <input class="custom-control-input" type="radio" id="customRadio4" name="st_keluarga" value="TK3" <?php if($dk['st_keluarga']=='TK3') echo 'checked'?>>
                            <label for="customRadio4" class="custom-control-label">TK3</label>
                          </div>
                            </div>
                              </div>
                            </br>

                      <div class="form-group">
                      <label>TEMPAT LAHIR</label>
                      <input type="text" class="form-control" name="tempat_lahir" value="<?= $dk['tempat_lahir'] ?>" style="text-transform:uppercase" placeholder="Kota / Kabupaten" required>
                    </div>
                      <label>TANGGAL LAHIR</label>
                      <input type="date" class="form-control" name="tanggal_lahir" value="<?= $dk['tanggal_lahir'] ?>" required>
                      <label>ALAMAT SEKARANG</label>
                      <textarea class="form-control" rows="3" name="alamat" style="text-transform:uppercase" placeholder="Enter ..."  required><?= $dk['alamat'] ?></textarea>

                    <label>AGAMA</label>
                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-check">
                          <input class="custom-control-input" type="radio" id="customRadio7" name="agama" value="ISLAM" <?php if($dk['agama']=='ISLAM') echo 'checked'?> required>
                          <label for="customRadio7" class="custom-control-label">ISLAM</label>
                        </div>
                        <div class="form-check">
                          <input class="custom-control-input" type="radio" id="customRadio8" name="agama" value="KRISTEN" <?php if($dk['agama']=='KRISTEN') echo 'checked'?>>
                          <label for="customRadio8" class="custom-control-label">KRISTEN PROTESTAN</label>
                        </div>
                        <div class="form-check">
                          <input class="custom-control-input" type="radio" id="customRadio9" name="agama" value="KATOLIK" <?php if($dk['agama']=='KATOLIK') echo 'checked'?>>
                          <label for="customRadio9" class="custom-control-label">KATOLIK</label>
                          </div>
                          </div>
                          <div class="form-group">
                        <div class="form-check">
                          <input class="custom-control-input" type="radio" id="customRadio10" name="agama" value="HINDU" <?php if($dk['agama']=='HINDU') echo 'checked'?>>
                          <label for="customRadio10" class="custom-control-label">HINDU</label>
                        </div>
                        <div class="form-check">
                          <input class="custom-control-input" type="radio" id="customRadio11" name="agama" value="BUDHA" <?php if($dk['agama']=='BUDHA') echo 'checked'?>>
                          <label for="customRadio11" class="custom-control-label">BUDHA</label>
                        </div>
                        <div class="form-check">
                          <input class="custom-control-input" type="radio" id="customRadio12" name="agama" value="KHONGHUCU" <?php if($dk['agama']=='KHONGHUCU') echo 'checked'?>>
                          <label for="customRadio12" class="custom-control-label">KHONGHUCU</label>
                        </div>
                          </div>
                            </div>

                        <div class="form-group">
                        <label for="pilih">PENDIDIKAN</label>
                        <select  name="pendidikan" class="custom-select"  multiple="multiple" title="Pilih pendidikan anda" required >
                          <option  value="SD" <?php if($dk['pendidikan'] == 'SD') {echo "selected";} ?> >SD</option>
                          <option  value="SMP" <?php if($dk['pendidikan'] == 'SMP') {echo "selected";} ?>>SMP</option>
                          <option  value="SMU/SMK/Sederajat" <?php if($dk['pendidikan'] == 'SMU/SMK/Sederajat') {echo "selected";} ?>>SMU/SMK/Sederajat</option>
                          <option  value="D1" <?php if($dk['pendidikan'] == 'D1') {echo "selected";} ?>>D1</option>
                          <option  value="D2" <?php if($dk['pendidikan'] == 'D2') {echo "selected";} ?>>D2</option>
                          <option  value="D3" <?php if($dk['pendidikan'] == 'D3') {echo "selected";} ?>>D3</option>
                          <option  value="S1" <?php if($dk['pendidikan'] == 'S1') {echo "selected";} ?>>S1</option>
                          <option  value="S2" <?php if($dk['pendidikan'] == 'S2') {echo "selected";} ?>>S2</option>
                          <option  value="S3" <?php if($dk['pendidikan'] == 'S3') {echo "selected";} ?>>S3</option>
                      </select>
                        </div>
                        <label>No.Handphone</label>
                        <input type="text" class="form-control" name="telp" value="<?= $dk['telp'] ?>"  maxlength="13" minlength="10" onkeypress="return event.charCode >= 48 && event.charCode <=57" pattern="^(62)8[1-9][0-9]{6,9}$" title="Masukan nomor handphone sesuai format 62 tanpa tanda + dan 0" placeholder="62XXXXXXXX format 62 tanpa tanda + dan 0" required>
                        </div>
                          </div>
                            </div>
                      <!---footer Copyright -->
                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <button type="submit" class="btn btn-outline-primary btn-block" value="simpan"></i>Submit</button>
                      </div>
                        </div>
                      <div class="col-sm-6">
                      <div class="form-group">
                      <a href="index.php?page=<?= $page ?>" class="btn btn-outline-danger btn-block btn-block"></i>Cancel</a>
                      </div>
                        </div>
                          </div>
                           </div>
                            </div>
                            </div>

<?php break; }?>
