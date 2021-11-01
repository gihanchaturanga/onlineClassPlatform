<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="temp/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="temp/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="temp/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="temp/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="temp/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="temp/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="temp/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="temp/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="temp/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="temp/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="temp/dist/css/adminlte.min.css">
</head>
<body>
    <div class="col-md-6 ml-auto mr-auto" style="margin-top: 5%;">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"><b>Student</b> Registration</h3>
          </div>
          <form action="php-register.php" method="POST">
          <div class="card-body">
            <!-- fname and lname -->
            <div class="form-group">
              <label>First Name<span class="text-danger">*</span></label>
                <div class="input-group date">
                    <input style="text-transform:uppercase" name="fname" type="text" required class="form-control"/>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Last Name<span class="text-danger">*</span></label>
                  <div class="input-group date">
                      <input style="text-transform:uppercase" name="lname" type="text" required class="form-control"/>
                      <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-user"></i></div>
                      </div>
                  </div>
              </div>
            <!-- Date and time -->
            <!-- Date dd/mm/yyyy -->
            <div class="form-group">
                <label>Date of Birth<span class="text-danger">*</span></label>

                <div class="input-group">
                  <input type="text" name="dob" class="form-control" required data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask>
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
            <!-- /.form group -->

            <!--mobile number-->
            <div class="form-group">
                <label>Mobile No<span class="text-danger">*</span></label>

                <div class="input-group">
                  <input type="text" name="mobile" required class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  </div>
                </div>
                <!-- /.input group -->
              </div>

              <!--university-->
              <div class="form-group">
                <label>School/Institute<span class="text-danger">*</span></label>
                  <div class="input-group date">
                      <input type="text" name="scl" class="form-control" required/>
                      <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-university"></i></div>
                      </div>
                  </div>
              </div>

            <!--address-->
            <div class="form-group">
                <label>Address<span class="text-danger">*</span></label>
                  <div class="input-group date">
                      <input name="address" type="text" class="form-control" required/>
                      <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-home"></i></div>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label>Password<span class="text-danger">*</span></label>
                  <div class="input-group date">
                      <input name="pwd1" type="password" class="form-control" required/>
                      <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                <label>Confirm Password<span class="text-danger">*</span></label>
                  <div class="input-group date">
                      <input name="pwd2" type="password" class="form-control" required/>
                      <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-lock"></i></div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-5 col-lg-3 col-sm-12 ml-md-auto mr-md-5">
                      <button class="btn btn-primary btn-block" style="width: 100%;" type="submit"><i class="fas fa-sign-in-alt"></i> Register</button>
                  </div>
              </div>
              <!-- /.input group -->
            </div>
            
            <div class="card-footer">
              Click <a href="index.php">here </a> if you have already registered.
            </div>
          <!-- /.card-body -->
        </div>
        </form>
        <!-- /.card -->

        <!-- iCheck -->
        
        <!-- /.card -->
    </div>

      <!-- jQuery -->
<script src="temp/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="temp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="temp/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="temp/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="temp/plugins/moment/moment.min.js"></script>
<script src="temp/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="temp/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="temp/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="temp/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="temp/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="temp/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="temp/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="temp/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="temp/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('yyyy/mm/dd', { 'placeholder': 'yyyy/mm/dd' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('yyyy/mm/dd', { 'placeholder': 'yyyy/mm/dd' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
  include 'myScripts.php';
?>
</body>
</html>