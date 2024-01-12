<?php
include("bdd.php");

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="reese (13).png">
  <title>CONTACT US</title>
</head>

<body class="body">
  <h2 id="h2"><i>Welcome To HandyByAlae Feedback </i></h2>
  <form action="" id="ss-form" method="post">
    <div class="styled-input">
      <input type="text" aria-label="Name" name="name" title="Must be a valid email address" required>
      <label>Name</label>
    </div>
    <div class="styled-input">
      <input type="email" aria-label="Email" name="email" title="Must be a valid email address" required>
      <label>Email</label>
    </div>
        <div class="styled-input wide">
      <textarea aria-label="Comments" name="message" required></textarea>
      <label>Message</label>
    </div>
    <button type="submit" name="submit" class="btn btn-default">SEND</button>
  </form>

  <?php

if(isset($_POST['submit'])){
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $message = ($_POST['message']);
if(empty($name) OR empty($email) OR empty($message) )
{echo(" <div class='errors'>All fields are required!</div>");}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
echo("   <div class='errors'>Email is not valid!</div>");}
elseif(strlen($message)>120){
echo("   <div class='errors'>the message should be less than 130 letters.</div>");}
elseif(strlen($name)>20){
  echo("   <div class='errors'>the name should be less than 20 letters.</div>");}
  
else{
$insertion=$bdd->prepare("INSERT INTO contactus (FullName,Email,Message)
VALUES(?,?,?)");
$insertion->execute(array($name,$email,$message));
echo"<div class='welcome'> Thank you {$name} , your feedback is what makes us grow as a community!</div>";}


}
?>
<?php
			function test_input($data)
			{
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
			if(isset($_POST['login']))
			{
				session_start();
				$username=$password="";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$username = test_input($_POST['Username']);
					$password = test_input($_POST['Password']);
					$link = mysqli_connect("localhost", "root", "");
					if (mysqli_connect_errno()) {
    					printf("Connect failed: %s\n", mysqli_connect_error());
    					exit();
					}
					mysqli_select_db($link,"test_db");
					$results=mysqli_query($link,"select * from usertable where Username='$username' and Password='$password'") or die("failed to connect".mysqli_connect_error());
					$row=mysqli_fetch_array($results);
					if ($row['Username'] == $username && $row['Password'] == $password) {
						header("location: http://localhost/project/home.php");
						$_SESSION['username'] = $username;
						$_SESSION['mes'] = "true";
					} 
					else {
					echo "Login failed";
					}
					mysqli_close($link);
				}
			}
		?>
</body>
</html>
<style>
  body {
    margin: 0;
    padding: 0; 
    background-color: #e5dbd0;
    font-family: "Serif", "Arial", sans-serif;
  }

  .errors, .welcome {
    font-size: medium;
    text-align: center;
    padding: 15px 0;
    border-radius: 10px;
  }

  .errors {
    color: red;
    background-color: rgba(194, 106, 106, 0.3);
  }

  .welcome {
    color: rgb(0, 39, 14);
    background-color: rgba(12, 166, 71, 0.2);
  }

  #h2 {
    padding: 15px 10px;
    color: #917f6f;
    font-family: "Helvetica", "Arial", sans-serif;
  }

  #ss-form .styled-input {
    margin: 2rem 0 1rem;
    position: relative;
    width: 100%;
  }

  #ss-form .styled-input label {
    color: #999;
    padding: 1rem;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.25s ease;
    pointer-events: none;
    line-height: 1;
  }

  #ss-form input, #ss-form textarea {
    padding: 1rem;
    border: 1px solid #ddd;
    width: 100%;
    font-size: 1rem;
    background: #fafafa;
    box-sizing: border-box;
  }
  #ss-form .styled-input.wide textarea {
  min-height: 200px; 
}
  #ss-form input:focus, #ss-form textarea:focus,
  #ss-form input:valid, #ss-form textarea:valid {
    outline: 0;
  }

  #ss-form input:focus ~ label, #ss-form textarea:focus ~ label,
  #ss-form input:valid ~ label, #ss-form textarea:valid ~ label {
    font-size: 0.75em;
    color: #575656;
    top: -2.25rem;
    transition: all 0.125s ease;
  }

  #ss-form .btn {
    font-family: "Helvetica", "Arial", sans-serif;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 1px;
    padding: 0 25px;
    height: 51px;
    line-height: 51px;
    color: #917f6f;
    background-color: #fafafa;
    border: 1px solid #ddd;
    cursor: pointer;
    margin-top: 10px;
  }

  #ss-form .btn:hover, #ss-form .btn:focus {
    background-color: #575656;
    border-color: #575656;
    color: white;
  }

  @media screen and (max-width: 414px) {
    #ss-form .styled-input {
      width: 100%;
    }
  }
</style>

