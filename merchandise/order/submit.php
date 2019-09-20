<?php
session_start();
include("php-mailer.php");

require '../vendor/autoload.php';

date_default_timezone_set('Asia/Kolkata');


    $dotenv = new Dotenv\Dotenv(__DIR__);
    if (file_exists('.env')) {
       $dotenv->load('.env');
    }

    $dbhost = getenv('DB_HOST');
    $dbuser = getenv('DB_USER');
    $dbpass = getenv('DB_PASS');
    $dbn = getenv('DB_NAME');
    $tbn = getenv('TB_NAME');

    $clicked = false;

    if(isset($_POST['sub'])){
        $clicked = true;
        $date_clicked = date('Y-m-d H:i:s');
    }

    if(!$clicked){
        echo '<script language="javascript">';
        echo 'alert("Access Denied")';
        echo '</script>';   
        header("Refresh: 1; url=index.php");
        exit;
    }

    else{
        //ToDo Client Side handling of empty data
        if(isset($_POST['uname']) && isset($_POST['uemail']) && isset($_POST['hostel']) && isset($_POST['ttype']) && isset($_POST['mobile']) 
            && isset($_POST['hostel']) && isset($_POST['amount'])){
            $name = htmlentities($_POST['uname']);
            // $roll = htmlentities($_POST['uroll']);
            $email = htmlentities($_POST['uemail']);
            $hostel = htmlentities($_POST['hostel']);
            $place = htmlentities($_POST['place']);
            $room = htmlentities($_POST['room']);
            $mobile = htmlentities($_POST['mobile']);
            $ttype = htmlentities($_POST['ttype']);
            $tsize = htmlentities($_POST['tsize']);
            $quantity = htmlentities($_POST['quantity']);
            $amount = htmlentities($_POST['amount']);
            $orderno = mt_rand(10000000,99999999);
        }
        else{
            // echo '<script language="javascript">';
            // echo 'alert("Fill all values. Try Again!")';
            // echo '</script>';   
            header("Refresh: 1; url=index.php");
            exit;
        }

        $servername = $dbhost;
        $username = $dbuser;
        $password = $dbpass;
        $dbname = $dbn;
        $tbname = $tbn;

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(mailsend($email,$orderno)) {
                $mailed = "true";
            }
            else {
                $mailed = "false";
            }

            while(true){
                $stmt = $conn->prepare("SELECT * FROM $tbname WHERE order_no = :order_no");
                $stmt->execute(['order_no' => $orderno]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if($user == Null){
                    break;
                }
                else {
                    $orderno = mt_rand(10000000,99999999);
                }
            }

            $sql = $conn->prepare("INSERT INTO $tbname (order_time,order_no,rollno,name,email,mailed,mobile,room,place,hostel,t_type,t_size,t_quantity,amount_paid) VALUES 
                                                        (:order_time,:order_no,:rollno,:name,:email,:mailed,:mobile,:room,:place,:hostel,:t_type,:t_size,:t_quantity,:amount_paid)");
            $do = $sql->execute(['order_time' => $date_clicked , 'order_no' => $orderno, 'rollno' => $roll, 'name' => $name, 'email' => $email, 'mailed' => $mailed, 'mobile' => $mobile, 'room' => $room, 'place' => $place, 'hostel' => $hostel, 't_type' => $ttype,
                                    't_size' => $tsize, 't_quantity' => $quantity, 'amount_paid' => $amount]);

            if($do){
                $_SESSION['confirm'] = "Your order has been placed successfully. Check your mail for further details."; 
                header("Refresh: 0; url=index.php#info");
                exit;
            }
                  
            else{
                $_SESSION['confirm'] = "Oops! looks like we have ran into some trouble with your order. Please
                                        try again after some time. If problem persists please feel free to contact any person mentioned below ";
                header("Refresh: 0; url=index.php#info"); 
                exit;
            }
                
        }
        
        catch(PDOException $e){
            $_SESSION['confirm'] = "Oops! looks like we have ran into some trouble with your order. Please
            try again after some time. If problem persists please feel free to contact any person mentioned below ";
            header("Refresh: 0; url=index.php#info");
            exit;
        }
        $clicked = false;
        $conn = null;
    }

?>