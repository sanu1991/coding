<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


<?php  

include ("databaseConnection.php");

// collect data through id for edit / update :

$getid = $_GET['id']; // receive 'id' from " htmlFormToMysql.php "
$selectTable = "SELECT * FROM customer WHERE customer_id=$getid";
$result2 = $connection->query($selectTable);
   
if($result2){
    echo "<br> ~ Now you can update your data ~ <br><br>";
}

$data = mysqli_fetch_assoc($result2);

$customerid = $data["customer_id"]; // fetch data and take columns data in a variable
$customername = $data["customer_name"]; 
$customeremail = $data["customer_email"]; 
$customeraddress = $data["customer_address"];



// To insert updated data into database :

if(isset($_POST['cId']) && isset($_POST['cName']) && isset($_POST['cEmail']) && isset($_POST['cAddress'])) {
    $cid = $_POST["cId"];
    $cname = $_POST["cName"];
    $cemail = $_POST["cEmail"];
    $caddress = $_POST["cAddress"];

    $update = "UPDATE customer SET customer_name='$cname', customer_email='$cemail', customer_address='$caddress' WHERE customer_id=$cid";  // to update in mysql

    $result3 = $connection->query($update); // run query

    if($result3){
    // echo "<br> data updated <br>";
    header("location:htmlFormToMysql.php"); // to redirect the page to other page
    }
}

?>

<form style="line-height: 2;" action="edit.php" method="post">
            
    <div class="input-group">
        <label>Reset Password</label> <br>
        <input type="text" name="password" placeholder="password">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save" >Reset</button>
    </div>

    <input type="text" name="cId" value="<?php echo $customerid; ?>" hidden>
</form> 

    
</body>