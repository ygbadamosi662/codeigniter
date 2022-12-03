<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
include_once('navi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #format{
            margin-left: 10%;
            margin-top: 2rem;
            background-color: #e8cab9;
            padding: 2rem;
            width: 80%;
        }
       #format #btn{
            margin-top: 1rem;
            background-color: #8c2473;
            height: 2rem;
            width: 10rem;
            color: white;
       } 
       #format #btn:hover{
            background-color: #e8cab9;
            color: #8c2473;;
       }
       #posts{
            margin: 1rem;
            height: 2rem;
            width: 10rem;
       }
    </style>
</head>
<body>
    <form action="" method="POST" id="format">
        <h2>UPDATE STUDENT INFORMATION(s)</h2>
        

        <label for="">Edit Firstname:</label>
        <input type="text" name="fname" id="posts" value="<?php echo isset($_POST['fname'])?$_POST['fname']:""; ?>">

        <label for="">Edit Lastname:</label>
        <input type="text" name="lname" id="posts" value="<?php echo isset($_POST['lname'])?$_POST['lname']:""; ?>">

        <label for="">Edit Email:</label>
        <input type="email" name="email" id="posts" value="<?php echo isset($_POST['email'])?$_POST['email']:""; ?>">
        <br>
        <label for="">Edit Phone no.:</label>
        <input type="text" name="phone" id="posts" value="<?php echo isset($_POST['phone'])?$_POST['phone']:""; ?>">

        <label for="">Edit DOB:</label>
        <input type="date" name="dob" id="posts" value="<?php echo isset($_POST['dob'])?$_POST['dob']:""; ?>">
        <br>
        <input type="Submit" name="Update" id="btn">

    </form>
    
</body>
</html>
