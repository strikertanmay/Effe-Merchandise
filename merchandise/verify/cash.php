<?php 

    session_start();

    if(!(isset($_SESSION['isactive']))){  
        header("location: index.php"); 
        exit;
    } 
?>

<html>

<head>
    <title> Verify Orders </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="all.php">All Orders</a></li>
        <li><a href="cash.php">Cash Orders</a></li>
        <li><a href="verify.php">Unverified Paid Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->

    <div class="alert alert-info col-sm-12" id="info" style="margin-bottom:1em; 
        <?php if(isset($_SESSION['confirm'])){echo("display:block;");} else {echo("display:none;");} ?> ">
        <?php if(isset($_SESSION['confirm'])){echo("{$_SESSION['confirm']}"); unset($_SESSION['confirm']);} ?>
    </div>

<div class="container">
  <h2>All orders</h2>
  <br><br>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Email</th>
        <th>Hostel</th>
        <th>Name</th>
        <th>Type</th>
        <th>Quantity</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
        <?php

            //Load composer's autoloader
            require '../vendor/autoload.php';

            $dotenv = new Dotenv\Dotenv(__DIR__);
            if (file_exists('.env')) {
                $dotenv->load('.env');
            }
                    
            $servername = getenv('DB_HOST');
            $username = getenv('DB_USER');
            $password = getenv('DB_PASS');
            $dbname = getenv('DB_NAME');
            $tbname = getenv('TB_NAME');

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->prepare("SELECT * FROM $tbname WHERE paid_via='Cash'");
                $stmt->execute();
                $entries = $stmt->fetchAll();

                foreach($entries as $entry) {
                    echo '<tr>';
                    echo '<td>'.$entry['order_no'].'</td>';
                    echo '<td>'.$entry['email'].'</td>';
                    echo '<td>'.$entry['hostel'].'</td>';
                    echo '<td>'.$entry['name'].'</td>';
                    echo '<td>'.$entry['t_type'].'</td>';
                    echo '<td>'.$entry['t_quantity'].'</td>';
                    echo '<td>'.$entry['amount_paid'].'</td>';
                    echo '</tr>';
                }

            }
                
            catch(PDOException $e){
                echo '<script language="javascript">';
                echo '$sql . "<br>" . $e->getMessage();';
                echo '</script>';     
                header("Refresh: 1; url=index.php");
            }

            $conn = null;
            
        ?>

    </tbody>
  </table>
</div>


<footer class="footer">
      <div class="container">
        <b><p class="text-muted" style="float: left;">&copy; Effervescence 2018</p></b>
      </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>