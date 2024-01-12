


<!DOCTYPE  html>

<html lang="en">
<?php
if(isset($_POST['login']) AND $authentification = true ){
    header('Location:http://127.0.0.1:5500/HandyByAlae.html'); // This will cause an error because HTML is output before this line.
    exit;}
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon"    href="reese (13).png">

        <title>login</title>
    </head>
    
    <body class="body">
    <form action="login.php" method="post" target="_top" class="form">
        
            <div class="c2">
            
                <h1 class="c4"><b>Login</b></h1>
                <p class="c5">
                By logging in, you accept our
                <a     class="c6" href="#"><strong> terms</strong>
                </a>
                and
                <a class="c7" href="#"><strong>   privacy policy</strong>
                </a>
                .
                </p>
                </div>
                <label class="c10" for=" name" hidden>
                        <b hidden> Full name</b>
                        </label>
                <div class="email" hidden>
                <input class="c11"
                                hidden
                            name="name"
                            placeholder="Full name"
                            
                            type="text"/></div>
                        
                <label class="c10" for="email">
                <b> Email</b>
                </label>
                <div class="email">
                    <input class="c11"
                    name="email"
                    placeholder="m@example.com"
                    required=""
                    type="email"
                /></div>
                <label class="c10" for="password">
                    <b> Password</b>
                    </label>
                    <div class="email">
                    <input type="password" class="c11" name="password" placeholder="Password" required minlength="8">
                </div>
                </div>
                
                <div class="Submit">
                <button  name="login">
                    <b>Login</b>
                </button>
                </div>
                <div    class="c12">
                <span class="c14"><b>OR</b></span>
                </div>
                <div class="google">
                    <button class="c16"> 
                    <div class="c17">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-browser-chrome" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8M0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8m5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    </svg>
                    Login with Google
                </div>
                </button>
                </div>
                <div class="apple">
                    <button class="c19">
                    <div class="c20">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-apple" viewBox="0 0 16 16">
                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
                    </svg>
                    Login with Apple
                </div>
                </button>
            </div>
            </div>
            <h4 class="inscript">You don't have an account ?  <a href="http://localhost/JEWELRY/signup.php" class="inscrip">Sign up.</a></h4>
            </div>
            <?php
include("bdd.php");
$authentification = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'], $_POST['password'])) {

        $stmt = $bdd->prepare('SELECT * FROM signup WHERE Email = :email');

        $stmt->execute(['email' => $_POST['email']]);
        $donnes = $stmt->fetch();

        if ($donnes && password_verify($_POST['password'], $donnes['Password'])) {
            $authentification = true;
            header('Location:http://127.0.0.1:5500/HandyByAlae.html');
            exit();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !$authentification) {
    echo "<div class='errors'>Incorrect email or password.</div>";
}
?>





        </div>
    
    </form>
    </body>
<style>

    
        .body{
        
            background-color: #e2dbd3;
            background-image: url("login4.jpg");
            background-position: center;
            background-size:610px;
            background-attachment: fixed;
            background-repeat: no-repeat;
            margin-bottom: 200px;}
        
        
            .form{
            background-color: rgb(255, 255, 255,0.2);
            width: 450px;
            height: 680px;
            padding-top: 5px ;
            padding-left: 20px;
            margin-top: 60px;
            position: relative;
            left: 34%;
            border: none;
            border-radius: 10px;
        
        }
        .errors{
            font-size: medium;
            font-family: "Serif", "Arial", sans-serif;
            font-weight: 500;
        text-align: center;
        margin: auto;
        color:   red;
        width: 250px;
        padding: 20px 0px ;
        background-color: rgb(194, 106, 106,0.5); 
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
            color: black;
                text-align: center;
            padding: 5px;
        }
        .c6{
        
            font-family: "Serif", "Arial", sans-serif;
            text-decoration: none;
            color: black;
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
        
            padding: 20px;
            
        }
        .c11{
        
            width: 370px;
            height: 40px;
            border-style: solid;
            border-width: 1px;
            border-color: rgb(169, 169, 169);
            background-color: rgb(255, 255, 255,0.6);
            border: none;
            border-radius: 10px;
        
        }
        .c12{
        
        padding: 20px 0px;
        }
        
        .c14{
            font-family: "Serif", "Arial", sans-serif;
            color: black;
            position: relative;
            left: 45%;
            
        }
        .google{
            padding: 10px 0px 10px 0px;
            
        }
        .c16{
        
            font-family: "Serif", "Arial", sans-serif;
        background-color: rgb(0, 149, 255);  
            color: #ffffff;
        width: 400px;
        border-style: solid;
        border-width: 1px;
        border-color: rgb(255, 255, 255);
        font-size: medium ;
        position: relative;
        left: 5%;
        padding: 9px;
        border: none;
        border-radius: 10px;
        
    }
        .c17{
        
            font-family: "Serif", "Arial", sans-serif;
    
        }
        .c18{
            color: rgb(255, 255, 255)fff;
            padding: 10px;
        }
        .c19{
            font-family: "Serif", "Arial", sans-serif;
            background-color:rgb(0, 0, 0);
            color: #ffffff;
            width: 400px;
            border-style: solid;
            border-width: 1px;
            border-color: rgb(255, 255, 255);
            font-size: medium ;
            position: relative;
            left: 5%;
            padding: 10px;
            border: none;
            border-radius: 10px;
        }
        .c20{
            color: #ffffff;
        }
        .inscrip{
            text-decoration: none;
            color:rgb(0, 149, 255);
            font-family: "Serif", "Arial", sans-serif;
        }
        .inscript{
            padding-top: 5px;
            color:rgb(0, 0, 0);
            font-family: "Serif", "Arial", sans-serif;
        }
        .Submit{
        padding-top: 0px;
        padding-left: 150px;
    }
    .Submit button{
        width: 120px;
        height: 40px;
        border-color: rgb(169, 169, 169);
        background-color: rgba(48, 48, 48, 0.6);
        color: rgb(255, 255, 255);
    
        border-radius:7px;
        border-color: rgba(48, 48, 48, 0.6);
        padding-left: 12px;
    }
        @media (min-width: 576px) 
        { 
            .container-sm, .container{
                max-width: 767.98px;}
        }
        @media (min-width: 768px) 
        { 
            .container-m, .container-sm, .container{
                max-width: 991.98px;
            }
        } 
    
        @media (min-width: 992px) 
        {  .container-lg, .container-m, .container-sm, .container{
            max-width: 1199.98px;
        }}
        @media (min-width: 1200px) 
        {.container-xl ,.container-lg, .container-m, .container-sm, .container{
            max-width: 1399.98px;
        } }</style>
</html>        
