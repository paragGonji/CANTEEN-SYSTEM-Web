<?php 

if(isset($_POST['add_student'])){
    
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $price = $_POST['price'];

}

    $query  = "insert into 'canteen' ('cust_name', 'food_name', 'price') values('$fname', '$lname','$price')";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }
?>
