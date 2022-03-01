<?php 
    // اتصال به پایگاه داده
    $connection = mysqli_connect("localhost", "root", "", "happyfamily");
    
    mysqli_query($connection," SET CHARACTER SET utf8");

    //تست اتصال
    if(mysqli_connect_errno() == 0)
    {

    }

    else
    {
        print("خطایی رخ داده");
        print(mysqli_connect_error());
    }

?>