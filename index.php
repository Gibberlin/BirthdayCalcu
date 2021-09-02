<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="container">
        <form action="./agefinder.php" method="post">
            <label for="yrs">Enter your age</label>
            <input type="number"  id="yrs" name="yrs">
            <label for="mth">choose the month you are born in</label>
            <select name="mth" id="mth">
                <option value="00">January</option>
                <option value="01" class="">Febuary</option>
                <option value="02" class="">March</option>
                <option value="03" class="">April</option>
                <option value="04" class="">May</option>
                <option value="05" class="">June</option>
                <option value="06" class="">July</option>
                <option value="10" class="">August</option>
                <option value="07" class="">September</option>
                <option value="08" class="">October</option>
                <option value="09" class="">November</option>
                <option value="11" class="">December</option>
            </select>
            <button type="submit">Submit</button>
        </form>
        
    </div>
</body>
</html>