<?php include "header.php"?>
<?php include "db.php"?>


<div class="container">

    <h2><a href="read.php"> read</a> </h2>
    <br>
    <br>
    <br>

    <form action="result.php" method="post" enctype="multipart/form-data">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" name="title" class="form-control" placeholder="title">
        </div>

        <p>image file:</p>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" accept="image/*" id="image" name="image">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>
        <p>Zip file:</p>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" accept=".zip" id="zip" name="zip">
            <label class="custom-file-label"  for="zip">Choose file</label>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


    <!-- Button to Open the Modal -->

</div>


<?php include "footer.php"?>
