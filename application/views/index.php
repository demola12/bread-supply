<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="<?php echo base_url();?>assets/css/online/style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
    <script src="<?php echo base_url();?>assets/css/online/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <?php
        include('template/components/header.php');
        ?>
    </nav>
    <div id="layoutSidenav">

        <?php
        include('template/components/sidebar.php');
        ?>
        <div id="layoutSidenav_content">
            <?php
            include('template/'.$addr.'.php');
            include('template/components/footer.php');
            ?>
            
        </div>
    </div>


    <script src="<?php echo base_url();?>assets/css/online/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url();?>assets/css/online/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/assets/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url();?>assets/assets/demo/chart-bar-demo.js"></script>
    <script src="<?php echo base_url();?>assets/css/online/simple-datatables-latest.js" crossorigin="anonymous">
    </script>
    <script src="<?php echo base_url();?>assets/js/datatables-simple-demo.js"></script>
</body>

</html>