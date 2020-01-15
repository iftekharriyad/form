<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $comment=$_POST['comment'];

        $to='iftekharriyad@protonmail.com';
        $subject='comment';
        $message="Name: ".$name."\n"."Email: ".$email."\n"."Wrote the following: "."\n\n".$comment;
        $headers="From: ".$email;
        if(mail($to,$subject,$message)){
            echo "success !"
        }
        else{
            echo "something wrong";
        }
    }
?>