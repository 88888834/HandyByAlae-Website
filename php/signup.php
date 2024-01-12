<?php
include('bdd.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="reese (13).png">
    <link rel="stylesheet"     href="signupp.css">
    <title>Sign up</title>
</head>
<body class="body">
    <?php
?>
    <form action="" method="post" target="" class="form">
            <div class="c2">
            
                <h1 class="c4"><b>Sign up</b></h1>
                <p class="c5">
                    By Submitting , you accept our
                    <a     class="c6" href="#"><strong> terms</strong>
                    </a>
                    and
                        <a class="c7" href="#"><strong>   privacy policy</strong>
                    </a>
                    .
                    </p>
                </div>
                
                <div class="c9">
                    <label class="c10" for=" name">
                        <b> Full name</b>
                        </label>
                        <div class="email">
                            <input class="c11"
                            
                            name="name"
                            placeholder="Full name"
                            
                            type="text"/></div>
                        
                        <label class="c10" for="date">
                            <b>Birth date</b>  </label>
                                <div class="email">
                                    <input class="c11"
                                    name="date"
                                    
                                    type="date"/></div>
                <label class="c10" for=" email">
                                <b> Email</b>
                                </label>
                <div class="email">
                
                    <input class="c11"
                    name="email"
                    placeholder="m@example.com"
                    
                    type="email"/></div>
                    <label class="c10" for="password">
                        <b> Password</b>
                        </label>
        <div class="email">
        <input type="password" class="c11" name="password" placeholder="Password" required></div>
                <div class="Submit">
                <button          name="submit">
                    <b>Submit</b>
                </button>
                </div>
                <h4 class="inscript"> You can log into your account from here <a href="http://localhost/JEWELRY/login.php" class="inscrip">login.</a></h4>
                <i><b>
                <?php
            if(isset($_POST['submit'])){
    $name = ($_POST['name']);
    $date = ($_POST['date']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    if (empty($name) OR empty($date) OR empty($email) OR empty($password)) {
        echo "<div class='errors'>All fields are required!</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='errors'>Email is not valid!</div>";
    } elseif (strlen($name) > 25) {
        echo "<div class='errors'>Name is not valid!</div>";
    } else {
        $sql = "SELECT * FROM signup WHERE Email = ?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            echo "<div class='errors'>This email already exists!</div>";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $insertion = $bdd->prepare("INSERT INTO signup (FullName, Birthdate, Email, Password) VALUES (?, ?, ?, ?)");
            $insertion->execute([$name, $date, $email, $hashedPassword]);
            echo "<div class='welcome'> Your account has been created successfully!</div>";
        }
    }
}
?></b></i>     
</form>
</body>
<style>
.errors{
    font-size: medium;
    font-family: "Serif", "Arial", sans-serif;
text-align: center;
color:   red;
padding: 15px 0px ;
background-color: rgb(194, 106, 106,0.3); 
border: none;
border-radius: 10px;
        }
.welcome{
    font-size: medium;
    font-family: "Serif", "Arial", sans-serif;
text-align: center;
color: rgb(0, 39, 14);
padding: 15px 0px ;
background-color: rgba(12, 166, 71, 0.2);
border: none;
border-radius: 10px;
        }
.body{
background-color: #d7d2cc;
background-image: url("login2.jpg");
background-position: center;
background-size:780px;
background-attachment: fixed;
background-repeat: no-repeat;
margin-bottom: 200px;}

.inscrip{
    text-decoration: none;
    color:rgb(0, 149, 255);
    font-family: "Serif", "Arial", sans-serif;
}
.inscript{
    padding-top: 0px;
    color:rgb(0, 0, 0);
    font-family: "Serif", "Arial", sans-serif;
}


.form{
background-color: rgb(255, 255, 255,0.3);
width: 460px;
height: 690px;
padding-top: 5px ;
padding-left: 20px;
margin-top: 60px;
position: relative;
left: 33%;
border: none;
border-radius: 10px;
}
.c2{
padding-bottom: 5px;
padding-top: 1px;
font-weight: bold;
}

.c4{

font-family: "Serif", "Arial", sans-serif;
text-align: center;
color: #101010;
}
.c5{

font-family: "Serif", "Arial", sans-serif;
color: rgb(66, 66, 66);
text-align: center;
padding: 5px;}

.c6{

font-family: "Serif", "Arial", sans-serif;
text-decoration: none;
color: rgb(0, 149, 255);
}
.c7{

font-family: "Serif", "Arial", sans-serif;
text-decoration: none;
color: rgb(0, 149, 255);
}

.c10{

font-family: "Serif", "Arial", sans-serif;
color: #030202;
}
.email{

padding: 10px 13px;
}

.c11{
background-color:  rgb(255, 255, 255,0.6);
width: 400px;
height: 40px;
border-style: solid;
border-width: 1px;
border-color: rgb(0, 0, 0);
border: none;
border-radius: 10px;

}
.c12{
background-color:  rgb(255, 255, 255,0.6);
width: 400px;
height: 40px;
border-style: solid;
border-width: 1px;
border-color: rgb(136, 136, 136);
border: none;
border-radius: 10px;
font-family: "Serif", "Arial", sans-serif;

}
.c13{
background-color:  rgb(255, 255, 255,0.6);
width: 400px;
height: 21px;
border-style: solid;
border-width: 1px;
border-color: rgb(122, 122, 122);

font-family: "Serif", "Arial", sans-serif;
}
.Submit{
padding-top: 20px;
padding-bottom: 15px;
padding-left: 150px;

}
.Submit button{
width: 120px;
height: 40px;
background-color:  rgb(0, 149, 255);
color: rgb(244, 244, 244);

border-radius:7px;
border-color: rgb(255, 255, 255,0.6);
padding-left: 12px;
}</style>
</html>