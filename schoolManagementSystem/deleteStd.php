<?php 

$connect = mysqli_connect('localhost','root','','studentdatabase');

if (!$connect)
{
    die("connection failed");
}
error_reporting(error_reporting()& ~E_NOTICE);
?>


<?php

$rn = $_REQUEST['rn'];

$sql = "DELETE FROM studentinfoTable WHERE RollNo='$rn'" ;

$run = mysqli_query($connect,$sql);

if($run){
    ?>
    <script>
   // alert('delete');

    window.open('admin.php','_self');

    </script>

    <?php
}

?>