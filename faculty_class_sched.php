<?php
session_start();
if (empty($_SESSION['id'])) {
  header('Location: ../index.php');
  exit;
}
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../dist/css/print.css" media="print">
  <script src="../dist/js/jquery.min.js"></script>
  <style>
    .button-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
    }

    .print-button,
    .send-email-button {
      margin-bottom: 10px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <?php 
  include('../dist/includes/dbcon.php');
  ?>

  <div class="wrapper_print">
    <?php
    $member = $_REQUEST['id'];
    $sid = $_SESSION['settings'];

    $search = mysqli_query($con, "SELECT * FROM member WHERE member_id='$member'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($search);

    $settings = mysqli_query($con, "SELECT * FROM settings WHERE settings_id='$sid'") or die(mysqli_error($con));
    $rows = mysqli_fetch_array($settings);

    

    include('../dist/includes/report_header.php');
    include('../dist/includes/report_body.php');
    if ($_SESSION['type'] == 'admin')
      include('../dist/includes/report_footer.php');
    ?>
  </div>

  <div class="button-container">
    <button onclick="myfun()" class="print-button">Print</button>
    





  </div>

  <script src="jquery.js"></script>
  <script type="text/javascript">
    function myfun() {
      window.print();
    }

    

  </script>
</body>
</html>
