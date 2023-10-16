<?php 
include 'kepala.php';
?>
<?php
$id = $_GET['id'];

$query = "SELECT * FROM tabel_siswa WHERE  id=$id";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) {
 $nis = $row['nis'];
 $nama = $row['nama_siswa'];
}

?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Widgets</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Library
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <!-- start welcome -->
  <div class="text-center fs-1">DATA SISWA <?php echo $nama; ?></div>
  <!-- end welcome -->
  
  <!-- Tabs -->
  <div class="card">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a
        class="nav-link active"
        data-toggle="tab"
        href="#home"
        role="tab"
        ><span class="hidden-sm-up"></span>
        <span class="hidden-xs-down">Tab1</span></a
        >
      </li>
      <li class="nav-item">
        <a
        class="nav-link"
        data-toggle="tab"
        href="#profile"
        role="tab"
        ><span class="hidden-sm-up"></span>
        <span class="hidden-xs-down">Tab2</span></a
        >
      </li>
      <li class="nav-item">
        <a
        class="nav-link"
        data-toggle="tab"
        href="#messages"
        role="tab"
        ><span class="hidden-sm-up"></span>
        <span class="hidden-xs-down">Tab3</span></a
        >
      </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content tabcontent-border">
      <div class="tab-pane active" id="home" role="tabpanel">
        <div class="p-20">
          <h1>Data Pembayaran
          </h1>
          <p>
           
          </p>
          <img
          src="assets/images/background/img4.jpg"
          class="img-fluid"
          />
        </div>
      </div>
      <div class="tab-pane p-20" id="profile" role="tabpanel">
        <div class="p-20">
          <img
          src="assets/images/background/img4.jpg"
          class="img-fluid"
          />
          <p class="mt-2">
            And is full of waffle to It has multiple paragraphs and
            is full of waffle to pad out the comment. Usually, you
            just wish these sorts of comments would come to an
            end.multiple paragraphs and is full of waffle to pad out
            the comment..
          </p>
        </div>
      </div>
      <div class="tab-pane p-20" id="messages" role="tabpanel">
        <div class="p-20">
          <p>
            And is full of waffle to It has multiple paragraphs and
            is full of waffle to pad out the comment. Usually, you
            just wish these sorts of comments would come to an
            end.multiple paragraphs and is full of waffle to pad out
            the comment..
          </p>
          <img
          src="assets/images/background/img4.jpg"
          class="img-fluid"
          />
        </div>
      </div>
    </div>
  </div>
  <footer class="footer text-center">
    All Rights Reserved by Matrix-admin. Designed and Developed by
    <a href="https://www.wrappixel.com">WrapPixel</a>.
  </footer>
  <!-- ============================================================== -->
  <!-- End footer -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
</body>
</html>
