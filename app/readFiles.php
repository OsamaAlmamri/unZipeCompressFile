<?php


//print_r( $_GET['folder']);

$path='../zip/'.$_GET['folder'];
function listFolderFiles($dir)
{
    $folders = scandir($dir);

    unset($folders[array_search('.', $folders, true)]);
    unset($folders[array_search('..', $folders, true)]);
    if (count($folders) < 1)
        return;

    foreach ($folders as $f) {
   echo "<div class=\"mb-3 pics animation all 2\">
            <img class=\"img-fluid\" src='$dir\/$f' alt=\"Card image cap\">
        </div>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="../cs/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<style>
    .gallery {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-width: 33%;
        -moz-column-width: 33%;
        column-width: 33%; }
    .gallery .pics {
        -webkit-transition: all 350ms ease;
        transition: all 350ms ease; }
    .gallery .animation {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1); }

    @media (max-width: 450px) {
        .gallery {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
            -webkit-column-width: 100%;
            -moz-column-width: 100%;
            column-width: 100%;
        }
    }

    @media (max-width: 400px) {
        .btn.filter {
            padding-left: 1.1rem;
            padding-right: 1.1rem;
        }
    }
    Lightbox galler
</style>

</head>
<body>


<div class="container">

    <div class="row">

<!--        <div class="col-md-12 d-flex justify-content-center mb-5">-->
<!---->
<!--            <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>-->
<!--            <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>-->
<!--            <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>-->
<!---->
<!--        </div>-->

    </div>

    <div class="gallery" id="gallery">
        <?php listFolderFiles($path);
        ?>
    </div>


</div>


<script>
    $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, 0.1);
            $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
            setTimeout(function() {
                $("."+selectedClass).fadeIn().addClass('animation');
                $("#gallery").fadeTo(300, 1);
            }, 300);
        });
    });
</script>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_modal&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Feb 2019 08:39:32 GMT -->
</html>
