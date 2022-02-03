<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Volume Calculator</h1>
    <form method="post" action="volume_calc_handler.php"> <!-- Method "get" displays all data on the url, use "post", and change all "$GETs" to "post -->
        <input name="r" placeholder="Enter radius" type="text"> <br> <br>
        <input name="h" placeholder="Enter height" type="text"> <br> <br>
        <input name="u" placeholder="Enter username" type="text"> <br> <br>
        <input name="p" placeholder="Enter password" type="password"> <br> <br> <!-- "Password" hides the text inside-->
        <input name="c" value="Calculate" type="Submit">
    </form>
</body>
</html>


<!--//Create a database called safari_limited-->
<!--//Create 3 tables inside it namely:-->
<!--// users table -- > This has 4 columns (id,name,email,password)-->
<!--// employees table -- > This has 4 columns (id,emp_name,emp_email,emp_salary)-->
<!--// products table -- > This has 5 columns (id,p_name,p_price,p_quantity,p_size)-->
