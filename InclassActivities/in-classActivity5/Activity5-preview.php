<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php

    //name
    if(empty($_POST["name"]) == true){
        echo "Name can not be empty.<br>";
        
    }
    else{
        echo $_POST["name"] ."<br>";
    }

    //username
    if(empty($_POST["uname"]) == true){
        echo "Username can not be empty.<br>";
    }
    else{
        echo $_POST["uname"] ."<br>";
    }

    //password
    if(empty($_POST["pass"]) == true){
        echo "Password can not be empty.<br>";
    }
    else{
        echo $_POST["pass"] ."<br>";
    }

    //Address
    if(empty($_POST["adres"]) == true){
        echo "Address: Not provided <br>";
    }
    else{
        echo "Address: " .$_POST["adres"] ."<br>";
    }

    //Country
    if(empty($_POST["countries"]) == true){
        echo "Country not selected.<br>";
    }
    else if(empty($_POST["countries"]) == "(Please select a country)"){
        echo "Country not selected.<br>";
    }
    else{
        echo $_POST["countries"] ."<br>";
    }

    //Zip
    if(empty($_POST["zip"]) == true){
        echo "Zip: Not provided <br>";
    }
    else if(is_numeric($_POST["zip"])){
        echo "Zip: " .$_POST["zip"] ."<br>";
    }
    else{
        echo "Zip code must be numeric. <br>";
    }

    //mail
    if(empty($_POST["email"]) == true){
        echo "Email: Not provided <br>";
    }
    else{
        $mail = $_POST["email"] ."<br>";

        if(strpos($mail, '@') !== false && strpos($mail, '.') !== false && strpos($mail, '@') < strpos($mail, '.')){
            echo $mail;
        }
        else{
            echo "Email is invalid. <br>";
        }

        
    }

    //sex
    if(empty($_POST["sex"]) == true){
        echo "You chose no sex. <br>";
    }
    else{
        echo $_POST["sex"] ."<br>";
    }

    //languages
    if(empty($_POST["lang"]) == true){
        echo "You chose no langauge. <br>";
    }
    else{
        for($i=0; $i<sizeof($_POST["lang"]); $i++){
            echo $_POST["lang"][$i]."<br>";
        }
    }

    //about
    if(empty($_POST["about"]) == true){
        echo "About: Not provided <br>";
    }
    else{
        echo "Thank you for you comments! <br>";
    }




    ?>
</body>
</html>



