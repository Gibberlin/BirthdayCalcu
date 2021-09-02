<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
<?php
if(empty($_POST['yrs'])){
    $age="nothing";
}
else{
    $age =$_POST['yrs'];
    echo is_array($age);
    if(strpos($age, "."))
    {
        $mth=$_POST['mth'];
        $arr=array($yr , $mth=$mth%10);
        $age=join(".",$arr);   
    }
    else{
        $age;
       
    }
    $bday=date("Y.m")-$age;
    echo '<div class="text">';
    echo "<br> <h2>Your birthday is at: </h2><h1>". $bday.'</h1>';
    echo '<a href="./index.php"> <img src="https://image.flaticon.com/icons/png/512/318/318477.png" alt=""></a></div>';
}


?>
    </div>
    
</body>
</html>