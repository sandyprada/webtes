<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Webme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <!--  <link href="<?php echo base_url();?>assets/materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
 -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       
            <?php $this->load->view('tampilan_header'); ?>
            <!-- /.navbar-top-links -->

            
            <!-- /.navbar-static-side -->
        

        <?php $this->load->view('tampilan_menu');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">
                    <?php echo $judul;?> 
                    <small> >><?php echo $sub_judul;?></small>
                     </h4>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php $this->load->view($content);?>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/sbadmin/dist/js/sb-admin-2.js"></script>

    <!-- Materialize JavaScript -->
<!--     <script src="<?php echo base_url();?>assets/materialize/js/materialize.min.js"></script>
    <script src="<?php echo base_url();?>assets/materialize/js/jquery-2.1.1.min"></script> -->
</body>

</html>



<!--  SCRIPT DATA TABLE -->
    <script>
    $(document).ready(function() {
        $('#dataustaz').DataTable({
            responsive: true
        });
    });
    </script>


