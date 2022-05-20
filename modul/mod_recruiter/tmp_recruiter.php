<?php

$id=$_GET['id'];


switch($_GET['sect']){
  //homepage
    default:
?>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Halaman Recruiter</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v2</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <a href="index.php?page=<?= $page ?>&sect=tabel_karyawan" class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></a>

          <div class="info-box-content">
            <span class="info-box-text">DKM</span>
            <span class="info-box-number">
              10
              <small>orang</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Outsourcing</span>
            <span class="info-box-number">41410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Kemitraan</span>
            <span class="info-box-number">760</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">New Members</span>
            <span class="info-box-number">2,000</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="card">

            <details>
            <summary type="button" class="btn btn-block bg-gradient-blue"><i class="fa fa-user-plus"></i>Formulir Input Data Karyawan</summary>
            <div class="card-body">
              <form id="form1" name="form1" method="post"  action="index.php?page=<?= $page ?>&sect=form&act=<?= $actpage ?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <input type="hidden" name="id_karyawan" value="<?= $_GET['id'] ?>">

                    <label>NIK KARYAWAN</label>
                      <input type="text" class="form-control" name="nik_karyawan"  maxlength="8" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <=57" value="<?= $dk['nik_karyawan'] ?>" required>
                      <label>TIPE KARYAWAN</label>
                      <select class="form-control" name="id_tipekaryawan" id="tipe_karyawan" required>
                        <option value="">PILIH</option>

                      </select>

                      <label>DEPARTEMEN</label>
                      <select class="form-control"  id="tbldepartments" name="id_departement" required>
                          <option value="">PILIH</option>

                      </select>

                      <label>JABATAN</label>
                      <select class="form-control" id="struktur_jabatan" name="id_jabatan" multiple="multiple"  required>

                      </select>

                       <label>TEMPAT KERJA / CABANG</label>
                       <select class="form-control" id="tempat_kerja"  name="id_cabang" required>
                         <option value="">Pilih</option>

                       </select>

                       <label>LOKASI</label>
                       <select class="form-control" id="lokasi" name="id_lokasi" multiple="multiple" required>


                       </select>
                      </br>
                      </br>
                  <label>Unggah Pas Foto</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="photo_pp" accept="image/gif,image/jpeg,image/jpg,image/png,"  onchange="previewFile(this);">
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
                    <select class="form-control" name="id_golongan">
                      <option value="">PILIH</option>

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

                 <!--- field / kolom kanan-->
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
                <input type="file" name="foto_ktp" class="input-group-append" accept="image/*" onchange="loadFile(event)">
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
                        <option  value="Belum-Menikah"<?php if($dk['st_pernikahan'] == 'Belum Menikah') {echo "selected";} ?>>Belum Menikah</option>
                        <option  value="Duda" <?php if($dk['st_pernikahan'] == 'duda') {echo "selected";} ?>>Duda</option>
                        <option  value="JANDA" <?php if($dk['st_pernikahan'] == 'JANDA') {echo "selected";} ?>>JANDA</option>
                    </select>
                    <label>JUMLAH ANAK</label>
                    <select class="form-control" id="anak" name="anak" required>
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
                          <input class="custom-control-input" type="radio" id="customRadio1" name="st_keluarga"  value="TK0" <?php if($dk['st_keluarga']=='TK0') echo 'checked'?>>
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
                        <input class="custom-control-input" type="radio" id="customRadio7" name="agama" value="ISLAM" <?php if($dk['agama']=='ISLAM') echo 'checked'?>>
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
                      <select  name="pendidikan" class="custom-select"  multiple="multiple">
                        <option  value="SD" <?php if($dk['pendidikan'] == 'SD') {echo "selected";} ?>>SD</option>
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
          </details>
          <!--/form input data karyawan-->


    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-8">
        <!-- MAP & BOX PANE -->

        <!-- /.card -->
        <div class="row">
          <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-warning">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-warning">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      You better believe it!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Working with AdminLTE on a great new app! Wanna join?
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      I would love to.
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-warning">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- USERS LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Latest Members</h3>

                <div class="card-tools">
                  <span class="badge badge-danger">8 New Members</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="users-list clearfix">
                  <li>
                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">Today</span>
                  </li>
                  <li>
                    <img src="dist/img/user8-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Norman</a>
                    <span class="users-list-date">Yesterday</span>
                  </li>
                  <li>
                    <img src="dist/img/user7-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Jane</a>
                    <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user6-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">John</a>
                    <span class="users-list-date">12 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Alexander</a>
                    <span class="users-list-date">13 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user5-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Sarah</a>
                    <span class="users-list-date">14 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user4-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Nora</a>
                    <span class="users-list-date">15 Jan</span>
                  </li>
                  <li>
                    <img src="dist/img/user3-128x128.jpg" alt="User Image">
                    <a class="users-list-name" href="#">Nadia</a>
                    <span class="users-list-date">15 Jan</span>
                  </li>
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:">View All Users</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!--/.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- TABLE: LATEST ORDERS -->
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Latest Orders</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Item</th>
                  <th>Status</th>
                  <th>Popularity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR9842</a></td>
                  <td>Call of Duty IV</td>
                  <td><span class="badge badge-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR1848</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>iPhone 6 Plus</td>
                  <td><span class="badge badge-danger">Delivered</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="badge badge-info">Processing</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR1848</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>iPhone 6 Plus</td>
                  <td><span class="badge badge-danger">Delivered</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR9842</a></td>
                  <td>Call of Duty IV</td>
                  <td><span class="badge badge-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <div class="info-box mb-3 bg-warning">
          <span class="info-box-icon"><i class="fas fa-tag"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Inventory</span>
            <span class="info-box-number">5,200</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box mb-3 bg-success">
          <span class="info-box-icon"><i class="far fa-heart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Mentions</span>
            <span class="info-box-number">92,050</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box mb-3 bg-danger">
          <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Downloads</span>
            <span class="info-box-number">114,381</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box mb-3 bg-info">
          <span class="info-box-icon"><i class="far fa-comment"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Direct Messages</span>
            <span class="info-box-number">163,921</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Browser Usage</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="chart-responsive">
                  <canvas id="pieChart" height="150"></canvas>
                </div>
                <!-- ./chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <ul class="chart-legend clearfix">
                  <li><i class="far fa-circle text-danger"></i> Chrome</li>
                  <li><i class="far fa-circle text-success"></i> IE</li>
                  <li><i class="far fa-circle text-warning"></i> FireFox</li>
                  <li><i class="far fa-circle text-info"></i> Safari</li>
                  <li><i class="far fa-circle text-primary"></i> Opera</li>
                  <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                </ul>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer p-0">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  United States of America
                  <span class="float-right text-danger">
                    <i class="fas fa-arrow-down text-sm"></i>
                    12%</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  India
                  <span class="float-right text-success">
                    <i class="fas fa-arrow-up text-sm"></i> 4%
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  China
                  <span class="float-right text-warning">
                    <i class="fas fa-arrow-left text-sm"></i> 0%
                  </span>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.footer -->
        </div>
        <!-- /.card -->

        <!-- PRODUCT LIST -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Recently Added Products</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Samsung TV
                    <span class="badge badge-warning float-right">$1800</span></a>
                  <span class="product-description">
                    Samsung 32" 1080p 60Hz LED Smart HDTV.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">Bicycle
                    <span class="badge badge-info float-right">$700</span></a>
                  <span class="product-description">
                    26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">
                    Xbox One <span class="badge badge-danger float-right">
                    $350
                  </span>
                  </a>
                  <span class="product-description">
                    Xbox One Console Bundle with Halo Master Chief Collection.
                  </span>
                </div>
              </li>
              <!-- /.item -->
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">PlayStation 4
                    <span class="badge badge-success float-right">$399</span></a>
                  <span class="product-description">
                    PlayStation 4 500GB Console (PS4)
                  </span>
                </div>
              </li>
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
break;
case "tabel_karyawan":
?>

<div class="container-fluid">
<div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel Legalitas Karyawan DKM</h1>
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
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-transform:uppercase;">
                  <thead>
                  <th>NO</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Cabang</th>
                  <th>Dept.</th>
                  <th>Gol</th>
                  <th>Tipe.K</th>
                  <th>Status</th>
                  <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody >

                  <?php
                      $no=1; foreach($tabelkaryawan as $tk){

                        $tgl_masuk=DateID(strtotime($tk['awal_masukpt']));

                        $tgl_keluar=DateID(strtotime($tk['tgl_keluarpt']));

                        $tgl_lahir=DateID(strtotime($tk['tanggal_lahir']));

                        ?>
                       <tr>
                      <td><?=  $no ?></td>
                      <td><?=  $tk['nik_karyawan']; ?></td>
                      <td><?=  $tk['nama_karyawan']; ?></td>
                      <td><?=  $tk['jabatan']; ?></td>
                      <td><?=  $tk['nama_cabang']; ?></td>
                      <td><?=  $tk['nama_departement']; ?></td>
                      <td><?=  $tk['kode_golkar']; ?></td>
                      <td><?=  $tk['nama_tipekaryawan']; ?></td>
                      <td><?=  $tk['tipe_kontrak']; ?></td>
                      <td>
                      <!--
                      <a href="index.php?page=<?= $page ?>&sect=form&id=<?= $tk['id_karyawan'] ?>"><i class="fas fa-user-edit" style="color:orange;"></i></a>
                      <a href="index.php?page=<?= $page ?>&act=hapus&id=<?= $tk['id_karyawan'] ?>" onclick ="return confirm('Yakin Data Akan Dihapus ?')"><i class="far fa-trash-alt" style="color:red;"></i></a>
                    -->
                      <a href="index.php?page=<?= $page ?>&sect=profil&id=<?= $tk['id_karyawan'] ?>"<i class="fa fa-info-circle"></i></a>
                      </td>
                      </tr>
                       <?php $no++; } ?>
                </table>
              </div>
              <!-- /.card-body -->
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
  case "profil":
  ?>


  <div class="container-fluid">
  <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Detail Profil</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php?page=<?= $page ?>&sect=tabel_karyawan">Tabel Karyawan</a></li>
                <li class="breadcrumb-item active">Profil Karyawan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img src="upload/<?= $sp['photo_pp'] ?>" class="profile-user-img img-fluid img-circle">
                  </div>
                <h3 class="profile-username text-center"><?= $sp['nama_karyawan'] ?></h3>

                  <p class="text-muted text-center"><?= $sp['jabatan'] ?></p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">


                      <b>Usia</b> <a class="float-right">32</a>


                    </li>
                    <li class="list-group-item">
                      <b>Gender</b> <a class="float-right">P</a>
                    </li>
                    <li class="list-group-item">
                      <b>Phone</b> <a class="float-right">0812XXX</a>
                    </li>
                    <li class="list-group-item">
                      <b>Email</b> <a class="float-right">email@email.com</a>
                    </li>
                    <li class="list-group-item">
                      <b>Departement</b> <a class="float-right">Rental</a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>

                  <p class="text-muted">
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>

                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                  <p class="text-muted">Malibu, California</p>

                  <hr>

                  <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                  <p class="text-muted">
                    <span class="tag tag-danger">UI Design</span>
                    <span class="tag tag-success">Coding</span>
                    <span class="tag tag-info">Javascript</span>
                    <span class="tag tag-warning">PHP</span>
                    <span class="tag tag-primary">Node.js</span>
                  </p>

                  <hr>

                  <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#kontrak" data-toggle="tab">Kontrak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#addendum" data-toggle="tab">Addendum</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Document" data-toggle="tab">Document</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="kontrak">

                      <!-- tabel kontrak -->
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Tabel Kontrak</h3>
                        </div>
                        <div class="card-body">
                          <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>No. SKT</th>
                              <th>Bln/ Thn SKT</th>
                              <th>NK</th>
                              <th>Code K</th>
                              <th>Bln/Thn K</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                      <!-- /.tabel kontrak -->

                      <!-- form kontrak Post -->
                      <details>
                        <summary type="button" class="btn btn-block bg-gradient-warning">Add form</summary>
                      <form method="POST" action="">
                      <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Form Kontrak</h3>
                      </div>
                      <div class="row">
                      <div class="col">
                        <center><label class="control-label">No. SKT</label>
                        <input type="text" class="form-control" placeholder="No. SKT" aria-label="First name">
                      </div>
                      <div class="col">
                        <center><label class="control-label">Bln/ Thn SK</label>
                        <input type="text" class="form-control" placeholder="Bln/ Thn SK" aria-label="Last name">
                      </div>
                      <div class="col">
                        <center><label class="control-label">NK</label>
                        <input type="text" class="form-control" placeholder="NK" aria-label="Last name">
                      </div>
                      <div class="col">
                        <center><label class="control-label">Code K</label>
                        <input type="text" class="form-control" placeholder="Code K" aria-label="Last name">
                      </div>
                      <div class="col">
                        <center><label class="control-label">Bln/Thn K</label>
                        <input type="text" class="form-control" placeholder="Bln/Thn K" aria-label="Last name">
                      </div>
                    </div>
                  <p style="text-indent :5em;" > </p>
                  <button type="submit" class="btn btn-primary btn-simpan"><i class="fa fa-save"></i> Submit</button>
                  <p style="text-indent :5em;" > </p>
                  <button type="reset" class="btn btn-block btn-danger "><i class="fas fa-undo"></i>Reset</button>
                </div>
                </form>
                </details>
                <!-- /.post -->
                <!-- /.post -->
              </div><!--penurup form kontrak -->

                    <!-- /.tab-pane -->
          <div class="tab-pane" id="addendum">
            <!-- The addendum -->
                        <!-- addendum time label -->
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Tabel addendum</h3>
                          </div>
                          <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>No.</th>
                                <th>date</th>
                                <th>Durasi</th>
                                <th>Status</th>
                                <th>end date</th>
                                <th>Promote</th>
                                <th>Ket</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tbody >
                                <tr>
                                  <td>1</td>
                                  <td>1 januari 2020</td>
                                  <td>2 bulan</td>
                                  <td>PKWT</td>
                                  <td>1 Desember 2020</td>
                                  <td></td>
                                  <td>Kontrak Ke 1</td>
                                  <td>
                                  <a href="index.php?page=<?= $page ?>&sect=form&id=<?= $tk['id_karyawan'] ?>"><i class="fas fa-edit"></i></a>
                                  <a href="index.php?page=<?= $page ?>&act=hapus&id=<?= $tk['id_karyawan'] ?>" onclick ="return confirm('Yakin Data Akan Dihapus ?')"><i class="far fa-trash-alt" style="color:red;"></i></a>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>2</td>
                                  <td>1 januari 2020</td>
                                  <td>2 bulan</td>
                                  <td>PKWT</td>
                                  <td>1 Desember 2020</td>
                                  <td>dapat promosi dari pwt</td>
                                  <td>Kontrak Ke 2</td>
                                  <td>
                                  <a href="index.php?page=<?= $page ?>&sect=form&id=<?= $tk['id_karyawan'] ?>"><i class="fas fa-edit"></i></a>
                                  <a href="index.php?page=<?= $page ?>&act=hapus&id=<?= $tk['id_karyawan'] ?>" onclick ="return confirm('Yakin Data Akan Dihapus ?')"><i class="far fa-trash-alt" style="color:red;"></i></a>
                                  </td>

                                </tr>
                            </table>
                          </div>
                        </div>
                        <!-- /.addendum-label -->
                        <details>
                          <summary type="button" class="btn btn-block bg-gradient-warning">Add form</summary>
                        <form method="POST" action="">
                        <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Form Addendum</h3>
                        </div>
                        <div class="row">
                        <div class="col">
                          <center><label class="control-label">Date</label>
                          <input type="text" class="form-control" placeholder="Date" aria-label="First name">
                        </div>
                        <div class="col">
                          <center><label class="control-label">Durasi</label>
                          <input type="text" class="form-control" placeholder="Durasi" aria-label="Last name">
                        </div>
                        <div class="col">
                          <center><label class="control-label">End date</label>
                          <input type="text" class="form-control" placeholder="End date" aria-label="Last name">
                        </div>
                        <div class="col">
                          <center><label class="control-label">Promote</label>
                          <input type="text" class="form-control" placeholder="Promote" aria-label="Last name">
                        </div>
                        <div class="col">
                          <center><label class="control-label">Ket</label>
                          <textarea type="text" class="form-control" placeholder="Ket" aria-label="Last name"></textarea>
                        </div>
                      </div>
                    <p style="text-indent :5em;" > </p>
                    <button type="submit" class="btn btn-primary btn-simpan"><i class="fa fa-save"></i> Submit</button>
                    <p style="text-indent :5em;" > </p>
                    <button type="reset" class="btn btn-block btn-danger "><i class="fas fa-undo"></i>Reset</button>
                  </div>
                  </form>
                  </details>
                        <!-- addendum item -->
                    </div>  <!-- penutup tab addendum -->
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="Document">

                      <h5 class="mt-5 text-muted">Archive file</h5>
                      <ul class="list-unstyled">
                        <li>
                          <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                        </li>
                        <li>
                          <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                        </li>
                        <li>
                          <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                        </li>
                        <li>
                          <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                        </li>
                        <li>
                          <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                        </li>
                      </ul>

                  </div> <!-- penutup tab document-->
                        <!-- /.card-body -->
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
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>


    <?php
    break;
    case "manpower":
    ?>

        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Manpower</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Manpower</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->

        <!-- $result = my php code using x-path to get results from xml query goes here. -->

            <!-- Default box -->
              <div class="card card-solid">
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">


                      <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                          Digital Strategist
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>Nicole Pearson</b></h2>
                              <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                              </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src="dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                              <i class="fas fa-user"></i> View Profile
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>


                  </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
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
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->

            </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->

<?php break; }?>
