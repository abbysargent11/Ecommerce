<?php
session_start();
require_once "config.php";
require_once "tools.php";



if(isset($_POST['email']))  {
        $conn = new mysqli($hn,$un,$pw,$db);

        $p_id = NULL;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        
        session_start();
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];

        $query = "SELECT id FROM users WHERE username='$username'";
        $result = $conn->query($query);
        $rows = $result->num_rows;
        foreach($result as $item) {
            $id = $item['id'];
        }



        

        //add purchase to database
        $stmt = $conn->prepare('INSERT INTO purchases VALUES(?,?,?,?,?,?,?,?)');
        $stmt->bind_param('ssssssss',$id,$p_id,$name,$email,$street,$city,$state,$zip);
        $stmt->execute();
        $stmt->close();

        $conn->close();

        header("location: shop.php");

    }
?>