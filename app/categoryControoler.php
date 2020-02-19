<?php
session_start();
include "db.php" ;



$url='http://localhost/coding%20acadimy/lab2/app/';

if (isset($_POST['submit'])) {

    mysqli_query($conn, "insert into categories values(null,'$_POST[name]' ");
} else {
    echo "error ........";
}
echo "<script>window.location = $url.'index.php'</script>";
ob_start(); // ensures anything dumped out will be caught

// do stuff here

// clear out the output buffer
while (ob_get_status())
{
    ob_end_clean();
}

//// no redirect
//flash('Some error message', 'error');
//
//// print it after redirect
//echo flash()->display();
//$_COOKIE['message']='تمة الاظافة بنجاح ' ;
$cookie_name = "message";
$cookie_value = 'تمة الاظافة بنجاح ';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


header( "Location: ".$url."index.php" );



//mysqli_query($conn,"insert into articles values()");

