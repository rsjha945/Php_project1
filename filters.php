
<?php
    /*check for posted data*/

    /*if(filter_has_var(INPUT_POST, 'name'))
    {echo "name is found";}
    else{echo "name is not found";}

    // sanitize and validate email address

    if(filter_has_var(INPUT_POST, 'email'))
    $email = $_POST['email'];
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    echo $email ."</br>";

    {if(filter_var($email,FILTER_VALIDATE_EMAIL)) 
    {echo "Email is valid";}
    else{
        echo "Email is not valid";
    }}

    //validate an integer
    $var = 45;
    if(filter_var($var,FILTER_VALIDATE_INT))
    {echo $var.'is an integer<br>';}
    else{echo $var.'is not an integer<br>';}

    //sanitizing an integer
    $var = '3455knlkn8980';
    var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));
   */ 

    //For validation
    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_EMIAL
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_URL

    //FOR SANITIZING
    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL

    $arr = array(
        "name" => "ravi",
        "age" => "22",
        "email"=>"ravi@gmail.com"
    );
    $filters = array(
        "name" =>array(
            "filter" =>FILTER_CALLBACK,
            "options" =>"ucwords"
        ),
        "age"=>array(
            "filter" =>FILTER_VALIDATE_INT,
            "options" =>array
            (
                "min_range" => 1,
                "max_range" => 100
            )
            ),
        "email" =>FILTER_VALIDATE_EMAIL
            );
            print_r(filter_var_array($arr,$filters));
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<form method="post" action="
<?php echo $_SERVER['PHP_SELF'];?>">
<label>Name</label>
<input type="text" name="name">
<label>Email</label>
<input type="text" name="email">

<button type="submit">Submit</button>
</form>
</body>
</html>