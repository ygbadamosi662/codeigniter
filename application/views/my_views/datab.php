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
        form{
            margin-top: 1rem;
            margin-left: 35%;
            display: flex;
            flex-direction: column;
            width: 35%;
            background-color: #e8cab9 ;
            align-items: center;
            /* color: #00abbb ; */
        }
        #on{
            width: 15rem;
            height: 2rem;
            margin-bottom: 0.5rem;
        }
        #btn{
            width: 10rem;
            height: 2.5rem;
            background-color: #8c2473;
            color: white;
            margin-bottom: 0.5rem;
        }
        #btn:hover{
            background-color: #e8cab9;
            color: #8c2473;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>REGISTER A STUDENT</h2>
        <label for="">First Name</label> 
        <input type="text" name="fname" value="<?php echo isset($_POST['fname'])?$_POST['fname']: ""; ?>" id="on"> 

        <label for="">Last Name</label>
        <input type="text" name="lname" value="<?php echo isset($_POST['lname'])?$_POST['lname']: ""; ?>" id="on">
         
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']: ""; ?>" id="on"> 

        <label for="">Phone</label>
        <input type="text" name="phone" value="<?php echo isset($_POST['phone'])?$_POST['phone']: ""; ?>" id="on"> 
        
        <label for="">Date Of Birth</label>
        <input type="date" name="dob" value="<?php echo isset($_POST['dob'])?$_POST['dob']: "" ; ?>" id= "on"> <br> <br>

        <input type="submit" id="btn" name="submit">
    </form>
</body>
</html>