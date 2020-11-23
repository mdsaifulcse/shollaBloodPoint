<?php $info = MyHelper::info(); ?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <?php if(Session::has('title')): ?>
        <?php
            $title =Session::get('title').' | '.$info->company_name;
            Session::forget('title');
        ?>
    <?php else: ?>
        <?php $title = $info->company_name;  ?>
    <?php endif; ?>
    <title><?php echo e($title); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset($info->favicon)); ?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Enterprise resource planning (ERP)" />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="LEAM TECH" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Required Fremwork -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/bower_components/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/icon/feather/css/feather.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/icon/icofont/css/icofont.css')); ?>">
    <!-- Style.css')}}' -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/widget.css')); ?>">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/component.css')); ?>">
    <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')); ?>">
        <!-- Date-range picker css  -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/bower_components/bootstrap-daterangepicker/css/daterangepicker.css')); ?>" />
        <!-- Date-Dropper css -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/bower_components/datedropper/css/datedropper.min.css')); ?>" />

        <link rel="stylesheet" href="<?php echo e(asset('public/css/chosen.css')); ?>" />
    <link href="<?php echo e(asset('public/assets/css/sweetalert2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/bower_components/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/pages/j-pro/css/j-pro-modern.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/pages.css')); ?>">
        <?php echo $__env->yieldContent('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/custom.css')); ?>">
    
</head>

<body>

    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-block">
      <div class="preloader6">
        <hr>
     </div>
   </div>
</div>
    <!-- [ Pre-loader ] end -->
<div id="pcoded" class="pcoded">
  <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

      <?php echo $__env->make('layouts.header_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- [ navigation menu ] end -->
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">

                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <?php echo $__env->yieldContent('breadcrumb'); ?>

                        </div>

                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">

                        <!-- Page body start -->
                        <div class="page-body">

                        <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>


    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo e(asset('public/bower_components/jquery/js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/bower_components/popper.js/js/popper.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/bower_components/jquery-ui/js/jquery-ui.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/bower_components/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo e(asset('public/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')); ?>"></script>


    <!-- amchart js -->
    <script src="<?php echo e(asset('public/assets/pages/widget/amchart/amcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/pages/widget/amchart/serial.js')); ?>"></script>
   <!--vertical layout-->
   <script  src="<?php echo e(asset('public/assets/js/vertical/vertical-layout.min.js')); ?>"></script>
    <!-- Custom js -->
    <script src="<?php echo e(asset('public/assets/js/pcoded.min.js')); ?>"></script>


    <!--this is for login page upper text-->
     <script src="<?php echo e(asset('public/assets/pages/waves/js/waves.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/sweetalert2.all.min.js')); ?>"></script>
    <?php if(Request::path()=='/'): ?>
    
    
    
    <?php endif; ?>
    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="<?php echo e(asset('public/assets/pages/advance-elements/moment-with-locales.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/bower_components/datedropper/js/datedropper.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>
    <!-- Custom js -->
    




    <script src="<?php echo e(asset('public/js/tinymce/tinymce.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/chosen.jquery.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/assets/js/script.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/assets/js/custom.js')); ?>"></script>
    <!-- data-table end -->
    <script>
        $(".datepicker").dateDropper( {
            dropWidth: 200,
            format: "d-m-Y",
            dropPrimaryColor: "#1abc9c",
            dropBorder: "1px solid #1abc9c"
        });
        $(".timepicker").datetimepicker( {
            format:'LT',
        });
        function confirmDelete(){
            return confirm("Do You Sure Want To Delete This Data ?");
        }

        function loadSubMenu(id,url){
            if(url=='#'){
                url='';
            }
            $('#collapsibleNavbar').load("<?php echo e(URL::to('sub-menu-load')); ?>/"+id);
            //setTimeout(function(){ window.location = '<?php echo e(URL::to('')); ?>/'+url; }, 300);
        }
        tinymce.init({
            selector: '.tinymce'
        });
    </script>
    <?php if(Session::has('success')): ?>
        <script type="text/javascript">
            swal({
                type: 'success',
                title: '<?php echo e(Session::get("success")); ?>',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php endif; ?>
    <?php if(Session::has('error')): ?>
        <script type="text/javascript">
            swal({
                type: 'error',
                title: '<?php echo e(Session::get("error")); ?>',
                showConfirmButton: true
            })
        </script>
    <?php endif; ?>
    <script type="text/javascript">
        function deleteConfirm(id){
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                $("#"+id).submit();
            }
        })
        }

    </script>
    <?php echo $__env->yieldContent('script'); ?>
    <script type="text/javascript">
        $(document).ready( function($) {
            $('#success-text').delay(1000).fadeOut();
        });
    </script>


  </body>

</html>
