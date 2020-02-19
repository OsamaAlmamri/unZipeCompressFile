<?php

//foreach (glob("*.*") as $filename) {
//    echo $filename."<br />";
//}
$dir = '../zip/';
//if (is_dir($dir)) {
//    if ($dh = opendir($dir)) {
//        while (($file = readdir($dh)) !== false) {
//            echo "filename: .".$file."<br />";
//        }
//        closedir($dh);
//    }
//}
//
//
//2

$d = dir($dir);

//echo "<ul>";
//
//while (false !== ($entry = $d->read()))
//{
//    if (is_dir($entry) && ($entry != '.') && ($entry != '..'))
//        echo "<li><a href='{$entry}'>{$entry}</a></li>";
//}
//
//echo "</ul>";
//
//$d->close();



function listFolderFiles($dir)
{
    $folders = scandir($dir);
    unset($folders[array_search('.', $folders, true)]);
    unset($folders[array_search('..', $folders, true)]);

    if (count($folders) < 1)
        return;

    foreach ($folders as $f) {
        echo"<a style='margin-left: 30px;margin-right: 30px' href='readFiles.php?folder=$f'>".$f."</a>"."          " ;
    }
}

listFolderFiles($dir);
?>

