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
