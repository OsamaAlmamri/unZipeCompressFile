<?php
session_start();
include "header.php";
include "db.php" ;


?>


<div class="container">

    <br>
    <br>
    <br>


    <form action="categoryControoler.php" method="post" enctype="multipart/form-data">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">name</span>
            </div>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mt-3">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>



    </form>

    <h1>bhgvfu     <?php echo  $_COOKIE['message']; ?> </h1>
    <?php
    setcookie("message", "", time() - 3600);
    ?>

    <!-- Button to Open the Modal -->

</div>


<?php include "footer.php" ?>
