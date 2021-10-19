<?php

require_once("customFiles/php/directories/directories.php");
require_once __initDB__;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel Reservation System Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ion Icons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Special Style-->
  <link rel="stylesheet" href="customFiles/specialStyle.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <?php include __navigation__;?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Amenities</h1>
          </div>
          <div class="col-sm-6">
            <div class="row mt-3 mt-sm-0 ">
              <div class="col-6">
                <a href="javascript: void(0)" onclick="alert('saved?')"><button class="btn btn-success btn-block">Save</button></a>
              </div>
              <div class="col-6">
                  <a href="javascript: void(0)" onclick="addAmenityEntry()"><button class="btn btn-primary btn-block">Add an amenity</button></a>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                <!-- Data Table -->
                <div class="card card-info">
                  <div class="card-body table-bg p-2">
                    <div class="table-responsive">          
                    <table id="amenityTable" class="table borderless ">
                      <thead class="hidden">
                        <tr>
                          <th>Room</th>
                        </tr>
                      </thead>
                      <tbody class="ce-noenter ce-limit">
                        <tr>
                          <td style ="word-break:break-all;">
                            <div class="row">
                              <!-- room content -->
                              <div class="col-12">
                                <div class="card card-outline ce-noblank overflow-hidden" >
                                  <div class="card-header">
                                    <h3 class="card-title amenity" contenteditable="True">Premium Movies</h3>
                                    <div class="card-tools">
                                      <button type="button" class="btn btn-tool" onclick="removeAmenityCard(event)">
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                    <!-- /.card-tools -->
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body p-0">
                                    <div class="form-group m-0">
                                      <textarea class="form-control" rows="3" placeholder="Enter amenity description"></textarea>
                                    </div>
                                    <div class="card m-0 bg-gradient-dark">
                                    <img class="card-img-top" src="dist/img/tv.jpg" alt="Dist Photo 1">
                                      <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <div class="container-fluid p-0">
                                          <a class="btn btn-app mb-0 ml-0">
                                            <i class="fas fa-edit"></i> Change
                                          </a>
                                          <a class="btn btn-app mb-0" onclick="deleteAmenityImage(event)">
                                            <i class="fas fa-trash"></i> Delete
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td style ="word-break:break-all;">
                            <div class="row">
                              <!-- room content -->
                              <div class="col-12">
                                <div class="card card-outline ce-noblank overflow-hidden">
                                  <div class="card-header">
                                    <h3 class="card-title amenity" contenteditable="True">Swimming Pool</h3>
                                    <div class="card-tools">
                                      <button type="button" class="btn btn-tool" onclick="removeAmenityCard(event)">
                                        <i class="fas fa-times"></i>
                                      </button>
                                    </div>
                                    <!-- /.card-tools -->
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body p-0">
                                    <div class="form-group m-0">
                                      <textarea class="form-control" rows="3" placeholder="Enter amenity description"></textarea>
                                    </div>
                                    <div class="card m-0 bg-gradient-dark">
                                      <img class="card-img-top" src="dist/img/Pool1.jpg" alt="Image">
                                      <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <div class="container-fluid p-0">
                                          <a class="btn btn-app mb-0 ml-0">
                                            <i class="fas fa-edit"></i> Change
                                          </a>
                                          <a class="btn btn-app mb-0" onclick="deleteAmenityImage(event)">
                                            <i class="fas fa-trash"></i> Delete
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
                <!-- Data Table End -->


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="#">Link Here</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- jsGrid -->
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>  
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Special Script-->
<script src="customFiles/customScript.js"></script>
<!-- Page Special Script -->
<script>
  
  var origText = "";

$(".ce-noblank").on("focus","*[contentEditable=\"True\"]", function(){
  origText = $(this).text();
});

$(".ce-noblank").on("focusout","*[contentEditable=\"True\"]", function(){
  if($(this).text()==""){
    $(this).text(origText);
  } 
});

$(".ce-blankremove").on("focusout","*[contentEditable=\"True\"]", function(){
  if($(this).text()==""){
    $(this).closest('li').remove();
  } 
});

/*
$(".ce-noblank *[contentEditable=\"True\"]").focus(function () {
  origText = $(this).text();
});

$(".ce-noblank *[contentEditable=\"True\"]").focusout(function () {
  if($(this).text()==""){
    $(this).text(origText);
  } 
});

$(".ce-blankremove *[contentEditable=\"True\"]").focusout(function () {
  if($(this).text()==""){
    $(this).closest('li').remove();
  } 
});
*/

settings = {
      maxLen: 25,
    }

    keys = {
      'backspace': 8,
      'shift': 16,
      'ctrl': 17,
      'alt': 18,
      'delete': 46,
      // 'cmd':
      'leftArrow': 37,
      'upArrow': 38,
      'rightArrow': 39,
      'downArrow': 40,
    }

    utils = {
      special: {},
      navigational: {},
      isSpecial(e) {
        return typeof this.special[e.keyCode] !== 'undefined';
      },
      isNavigational(e) {
        return typeof this.navigational[e.keyCode] !== 'undefined';
      }
    }

    utils.special[keys['backspace']] = true;
    utils.special[keys['shift']] = true;
    utils.special[keys['ctrl']] = true;
    utils.special[keys['alt']] = true;
    utils.special[keys['delete']] = true;

    utils.navigational[keys['upArrow']] = true;
    utils.navigational[keys['downArrow']] = true;
    utils.navigational[keys['leftArrow']] = true;
    utils.navigational[keys['rightArrow']] = true;

    $(".ce-noenter").on("keydown","*[contentEditable=\"True\"]", function(event){
      if (event.which == 13)
        document.activeElement.blur()
    });

    $(".ce-shiftenter").on("keydown","*[contentEditable=\"True\"]", function(event){
      if (event.which === 13 && event.shiftKey === false)
        return false;
    });

    $(".ce-limit").on("keydown","*[contentEditable=\"True\"]", function(event){
      let len = event.target.innerText.trim().length;
      hasSelection = false;
      selection = window.getSelection();
      isSpecial = utils.isSpecial(event);
      isNavigational = utils.isNavigational(event);
      
      if (selection) {
        hasSelection = !!selection.toString();
      }
      
      if (isSpecial || isNavigational) {
        return true;
      }
      
      if (len >= settings.maxLen && !hasSelection) {
        event.preventDefault();
        return false;
      }
      
    });

</script>
<!-- Table script -->
<script>
 var tbl = $(document).ready(function () {
  $('#amenityTable').DataTable({
    paging: false,
    info: false,
    "dom": '<"top"f>rt<"bottom"lp><"clear">', // Positions table elements
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]], // Sets up the amount of records to display
    "language": {
        "search": "_INPUT_",            // Removes the 'Search' field label
        "searchPlaceholder": "Search"   // Placeholder for the search box
    }
  });
  $('.dataTables_length').addClass('bs-select');
});

</script>

<!-- Script to toggle navigation buttons -->
<script>
  let activeNav = document.querySelector(".sidebar > nav > ul > li:nth-child(2)"); //change :nth(n) value
  if (activeNav.querySelector('ul') != null){
    activeNav.className += " menu-is-opening menu-open";
    activeNav.querySelector('.menu-open > ul > li:nth-child(2) > a').classList.toggle('active'); //change :nth(n) value
    activeNav.querySelector('ul').style.display = "block";
  }
  activeNav.querySelector('a:nth-child(1)').classList.toggle('active'); //do not change this
</script>

<style>
  .top label {
    padding-right: 10px !important;
  }
</style>
</body>
</html>