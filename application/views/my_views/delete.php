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
        body{
            position: relative;
            background-color: #e8cab9 ;
        }
        .stud{
            position: absolute;
            top: 10rem;
        }
        #btn{
            margin-top: 10rem;
            margin-left: 5rem;
            height: 2rem;
            width: 7rem;
            background-color: #8c2473;
            color: white;
        }
        
        
    </style>
</head>
<body>
    <form action="" method="POST">
        <!-- <input type="submit" id="btn" name="REMOVE"> -->
        <button type="submit" id="btn" name="REMOVE">DELETE STUDENT</button>
    </form>

    
</body>
<!-- <script>
       

        let diss = document.getElementById("stud");
        let poof = document.getElementById("btn");
        poof.addEventListener('click',magic());

        function magic(){
            // e.preventDefault();
            diss.style.display = 'none';
        }
    </script> -->
</html>