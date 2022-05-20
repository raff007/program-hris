<?php

$id=$_GET['id'];


switch($_GET['sect']){
  //homepage
    default:
?>
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Halaman Legal</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Utama</a></li>
        <li class="breadcrumb-item active">Dashboard Legal</li>
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
          <div class="card-header">free menu
          </div>
          <center><h1>free space<h1>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">

            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

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
              <li class="breadcrumb-item"><a href="index.php?page=legal">Dashboard Legal</a></li>
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
                  <th>Lokasi</th>
                  <th>Dept.</th>
                  <th>Gol</th>
                  <th>TIPE KONTRAK</th>

                  <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody >

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
                      <td><?=  $ka['short_name']; ?></td>
                      <td><?=  $ka['kode_golkar']; ?></td>
                      <td><?=  $ka['tipe_kontrak']; ?></td>

                      <td>
                      <!--
                      <a href="index.php?page=<?= $page ?>&sect=form&id=<?= $ka['id_karyawan'] ?>"><i class="fas fa-user-edit" style="color:orange;"></i></a>
                      <a href="index.php?page=<?= $page ?>&act=hapus&id=<?= $ka['id_karyawan'] ?>" onclick ="return confirm('Yakin Data Akan Dihapus ?')"><i class="far fa-trash-alt" style="color:red;"></i></a>
                    -->
                      <a href="index.php?page=<?= $page ?>&sect=profil&id=<?= $ka['id_karyawan'] ?>"<i class="fa fa-info-circle"></i></a>
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
                <h3 class="profile-username text-center" style="text-transform:uppercase"><?= $sp['nama_karyawan'] ?></h3>
                  <p class="text-muted text-center"><?= $sp['jabatan'] ?></p>
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Usia</b> <a class="float-right"><?= $sp['umur'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Jenis Kelamin</b> <a class="float-right">P</a>
                    </li>
                    <li class="list-group-item">
                      <b>Phone</b> <a class="float-right">+<?= $sp['telp'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Email</b> <a class="float-right"><?= $sp['email'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Departement</b> <a class="float-right"><?= $sp['short_name'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Pendidikan</b> <a class="float-right"><?= $sp['pendidikan'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Lokasi</b> <a class="float-right"><?= $sp['alamat_lokasi'] ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Keahlian</b> <a class="float-right">-</a>
                    </li>
                    <li class="list-group-item">
                      <b>Catatan</b> <a class="float-right">-</a>
                    </li>

                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            <!--/.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#kontrak" data-toggle="tab">Kontrak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">History</a></li>
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
                          <table id="example2" class="table table-bordered table-striped" style="text-transform:uppercase;">
                            <thead>
                            <tr>
                              <th>No</th>
                              <!---off
                              <th>No. SKT</th>
                              <th>Bln/ Thn SKT</th>--->
                              <th>NK</th>
                              <th>Code K</th>
                              <th>Bln/Thn K</th>
                              <th>Durasi</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody >
                              <?php
                                  $no=1; foreach ($tabelkontrak as $tk ) {

                                    //$tgl_masuk=DateID(strtotime($sp['awal_masukpt']));

                                    //$tgl_keluar=DateID(strtotime($sp['tgl_keluarpt']));

                                    //$tgl_lahir=DateID(strtotime($sp['tanggal_lahir']));

                                    ?>

                                  <td><?=  $no ?></td>
                                  <!---off
                                  <td><?=  $tk['no_skt']; ?></td>
                                  <td><?=  $tk['bln_thnSKT']; ?></td>--->
                                  <td><?=  $tk['nomor_kontrak']; ?></td>
                                  <td><?=  $tk['code']; ?></td>
                                  <td><?=  $tk['bln_thn']; ?></td>
                                  <td><?=  $tk['durasi']; ?></td>
                                  <td>
                                  <a href="index.php?page=<?= $page ?>&act=edit&id=<?= $tk['id_kontrak'] ?>&idk=<?= $tk['id_karyawan'] ?>"><i class="fas fa-user-edit" style="color:orange;"></i></a>
                                  <a href="index.php?page=<?= $page ?>&act=hapus&id=<?= $tk['id_kontrak'] ?>&idk=<?= $tk['id_karyawan'] ?>" onclick ="return confirm('Yakin Data Akan Dihapus ?')"><i class="far fa-trash-alt" style="color:red;"></i></a>
                                  </td>
                                  </tr>
                                  <?php $no++; } ?>
                          </table>
                        </div>
                      </div>
                      <!-- /.tabel kontrak -->

                      <?php

                    case "form":
                    ?>
                      <!-- form kontrak Post -->
                      <details>
                        <summary type="button" class="btn btn-block bg-gradient-warning">Add form</summary>
                      <form method="post"  action="index.php?page=<?= $page ?>&sect=profil&act=input" enctype="multipart/form-data">
                        <div class="card">
                      <div class="card-header">
                        <input type="hidden" name="id_karyawan" value="<?= $_GET['id'] ?>">
                        <h3 class="card-title">Form Kontrak</h3>
                      </div>
                      <div class="row">
                      <div class="col">
                        <center><label class="control-label">NK</label>
                        <input type="text" class="form-control" name="nomor_kontrak" style="text-transform:uppercase;" value="<?= $dk['nomor_kontrak'] ?>" placeholder="NK" required >
                      </div>
                      <div class="col">
                        <center><label class="control-label">Kode</label>
                        <input type="text" class="form-control" name="code" style="text-transform:uppercase;" value="<?= $dk['code'] ?>"  placeholder="Kode" required>
                      </div>
                      <div class="col">
                        <center><label class="control-label">Bln/Thn</label>
                        <input type="month" class="form-control" name="bln_thn" style="text-transform:uppercase;" value="<?= $dk['bln_thn'] ?>" placeholder="Bln/Thn" required>
                      </div>
                      <div class="col">
                        <center><label class="control-label">Awal Kontrak</label>
                        <input type="date" class="form-control" name="awal_kontrak" style="text-transform:uppercase;" value="<?= $dk['awal_kontrak'] ?>" placeholder="Awal Kontrak" required>
                      </div>
                      <div class="col">
                        <center><label class="control-label">Durasi</label>
                        <input type="text" class="form-control" name="durasi" style="text-transform:uppercase;" value="<?= $dk['durasi'] ?>" placeholder="Durasi" required>
                      </div>
                      <div class="col">
                        <center><label class="control-label">Akhir Kontrak</label>
                        <input type="date" class="form-control" name="akhir_kontrak" style="text-transform:uppercase;" value="<?= $dk['akhir_kontrak'] ?>" placeholder="Akhir Kontrak" required>
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
          <div class="tab-pane" id="history">
            <!-- The history -->
                        <!-- history time label -->
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Tabel History</h3>
                          </div>
                          <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>No</th>
                                <th>Promosi</th>
                                <th>Rotasi</th>
                                <th>Demosi</th>
                                <th>Mutasi</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tr>
                                <td>1</td>
                                <td>-</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                   sed do eiusmod tempor incididunt ut labore et dolore magna
                                   aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                   ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                <td>-</td>
                                <td>-</td>

                                <td>
                                <a href="index.php?page=<?= $page ?>&sect=form&id=<?= $ka['id_karyawan'] ?>"><i class="fas fa-edit"></i></a>
                                <a href="index.php?page=<?= $page ?>&act=hapus&id=<?= $ka['id_karyawan'] ?>" onclick ="return confirm('Yakin Data Akan Dihapus ?')"><i class="far fa-trash-alt" style="color:red;"></i></a>
                                </td>
                                </tr>
                            </table>
                          </div>
                        </div>
                        <!-- /.tabel kontrak -->

                        <!-- form kontrak Post -->
                        <details>
                          <summary type="button" class="btn btn-block bg-gradient-warning">Add History</summary>
                        </br>
                        <form method="POST" action="">
                        <div class="card">
                        <div class="row">
                        <div class="col">
                          <select class="form-control"   name="jenis_kelamin" required>
                            <option value="">Pilih</option>
                            <option value="Promosi">Promosi</option>
                            <option value="Rotasi">Rotasi</option>
                            <option value="Rotasi">Demosi</option>
                            <option value="Mutasi">Mutasi</option>
                          </select>
                          <textarea class="form-control" rows="3" name="alamat"
                           style="text-transform:uppercase" placeholder="Enter ..."  required></textarea>

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
                    </div>  <!-- penutup tab history -->
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
                            <a href="index.php?page=<?= $page ?>&sect=profil&id=<?= $smp['id_karyawan'] ?>" class="btn btn-sm btn-primary">
                              <i class="fas fa-user"></i> View Profile
                            </a>
                          </div>
                        </div>
                      </div>
                    </div><!--penutup flex-fill--->
    <?php  } ?>


                <!--footer-->
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
