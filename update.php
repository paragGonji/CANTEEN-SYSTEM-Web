<?php include('dbcon.php'); ?>
<h1 id="main_title">Canteen Management</h1>

<form>
    <div class="form-group">
        <label for="f_name">Your Name</label>
        <input type="text" name="f_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="l_name">Food Name</label>
        <input type="text" name="l_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control">
    </div>
    <input type="submit" class="btn btn-success" name="update_student" value="UPDATE">
</form>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
