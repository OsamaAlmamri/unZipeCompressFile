<?php

echo $_FILES['image']['name'];
var_dump($_FILES['image']);

//$size = getimagesize($_FILES['image']['tmp_name'])
$image_info_size = getimagesize($_FILES["image"]["tmp_name"]);
$image_width = $image_info_size[0];
$image_height = $image_info_size[1];
echo 'width ---->   '. $image_width.'<br>';
echo 'height ---->   '. $image_height.'<br>';

$size = ($_FILES['image']['size'] / 1024 / 1024);
$typeInfo = explode('/', $_FILES['image']['type']);
echo "<br>";
echo "name ---- >  " . $_FILES['image']['name'] . "<br>";
echo "type ---- >  " . "<br>";
echo "size ---- >  " . (($size > 1) ? ($size . 'MB') : ($size * 1024) . 'KB') . '<br>';
echo "type ---- >  " . $_FILES['image']['type'] . "<br>";

if (($typeInfo[0]=="image") and $size<=1 and $image_width<=150 and $image_height<=200  )
{
    move_uploaded_file($_FILES['image']['tmp_name'],
        '../images/' . time() . $_FILES['image']['name']);

    echo "uploded sucess" ;
}

else
{
    if(($typeInfo[0]!="image"))
        echo "file must be Image " ;

    if($size>1)
        echo "file must be less than 1 M " ;

    if($image_width>150)
        echo "file height  must be less than 150 " ;

    if($image_height>200)
        echo "file width  must be less than 200 " ;


}
    echo " file not allow ";

$zipFileName= $_FILES['zip']['name'];
$zipFile= $_FILES['zip']['tmp_name'];

$zip = new ZipArchive;
$res = $zip->open($zipFile);
if ($res === TRUE) {
    $zip->extractTo('../zip/' );
    $zip->close();
    echo 'woot!';
} else {
    echo 'doh!';
}