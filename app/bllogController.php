<?php
include "db.php" ;


function addFile()
{

    $path = "images/" . time() . "." . end(explode(".", $_FILES['img']['name']));


    if (move_uploaded_file($_FILES['img']['tmp_name'], $path))
        return $path;
    return "";

}


if (isset($_POST['add_btn'])) {
    $img = addFile();
    if ($img == "") {
        $img = "images/default.jpg";
    }
    mysqli_query($conn, "insert into articles values(null,'$_POST[title]','$img','$_POST[content]','$_POST[cat]',now())");
} else {
    echo "error ........";
}
//mysqli_query($conn,"insert into articles values()");

