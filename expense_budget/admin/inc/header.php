<?php
  require_once('sess_auth.php');
  
?>

<style>
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: #f3f4f6; /* Soft Gray */
  color: #333; /* Neutral Dark */
  margin: 0;
  padding: 0;
}

h1, h2, h3, h4, h5, h6 {
  color: #5a189a; /* Funky Purple */
  font-weight: bold;
  margin-bottom: 20px;
}

a {
  color: #ff6f61; /* Bright Coral */
  text-decoration: none;
  transition: color 0.3s ease-in-out;
}

a:hover {
  color: #ff9f1c; /* Neon Yellow */
}

hr {
  border: 0;
  border-top: 2px solid #ccc;
  margin: 20px 0;
}

/* Buttons */
button {
  padding: 10px 20px;
  background: linear-gradient(90deg, #ff6f61, #f72585); /* Coral to Pink Gradient */
  color: #fff;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  font-size: 1rem;
  transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
}

button:hover {
  background: linear-gradient(90deg, #f72585, #b5179e); /* Deeper Gradient */
  transform: scale(1.1);
  animation: shake 0.3s;
}

@keyframes shake {
  0%, 100% { transform: translateX(0); }
  20%, 60% { transform: translateX(-10px); }
  40%, 80% { transform: translateX(10px); }
}

/* Forms and Inputs */
input[type="text"], select {
  width: 100%;
  padding: 10px;
  border: 2px solid #7bdcb5; /* Lime Green */
  border-radius: 8px;
  background: #ffffff;
  font-size: 1rem;
  margin-bottom: 20px;
  transition: border 0.3s ease-in-out, box-shadow 0.2s ease-in-out;
}

input[type="text"]:focus, select:focus {
  border-color: #ff9f1c; /* Neon Yellow */
  outline: none;
  box-shadow: 0 0 8px rgba(255, 159, 28, 0.6); /* Glow Effect */
}

.input-group {
  display: flex;
  align-items: center;
  gap: 10px;
}

.input-group-text {
  background: #5a189a; /* Funky Purple */
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 25px;
}

/* Cards */
.card {
  background: linear-gradient(145deg, #f3f4f6, #ffffff); /* Subtle Gradient */
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1), -5px -5px 10px rgba(255, 255, 255, 0.5);
  border: none;
  border-radius: 15px;
  padding: 20px;
  margin: 20px 0;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2), -5px -5px 15px rgba(255, 255, 255, 0.6);
}

.card-title {
  font-size: 1.5rem;
  color: #ff9f1c; /* Neon Yellow */
  font-weight: bold;
}

.card-body {
  font-size: 1rem;
  color: #555;
}

/* Tables */
table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  background: #fff;
}

table th, table td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #f0f0f0;
}

table th {
  background: #ff9f1c; /* Neon Yellow */
  color: #fff;
  text-transform: uppercase;
}

table tbody tr:hover {
  background: #f7f7f7; /* Light Gray */
}

/* Alerts */
.alert {
  padding: 15px;
  border-radius: 10px;
  color: #fff;
  margin-bottom: 20px;
}

.alert-success {
  background: linear-gradient(90deg, #7bdcb5, #55a630); /* Lime to Dark Green */
}

.alert-danger {
  background: linear-gradient(90deg, #ff6f61, #e63946); /* Coral to Red */
}

/* Loader */
.loader {
  display: block;
  margin: 50px auto;
  border: 8px solid #f3f3f3;
  border-top: 8px solid #f72585; /* Vibrant Pink */
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Responsive Design */
@media (max-width: 768px) {
  .card {
    padding: 15px;
  }

  h1, h2, h3, h4, h5, h6 {
    font-size: 1.2rem;
  }

  button {
    font-size: 0.9rem;
  }
}
</style>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = '<?php echo base_url ?>';
    </script>
    <script src="<?php echo base_url ?>dist/js/script.js"></script>

  </head>