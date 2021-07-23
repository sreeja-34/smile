 <?php
include('connection.php');
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $confirmpassword =$_POST['confirmpassword'];
if($password==$confirmpassword)
{
 $sql="INSERT INTO `table`(username,email,password)
        VALUE('$username','$email','$password')";
        $result= mysqli_query($conn,$sql);
        if($result){
            echo"<script>alert('sucessfully registered')</script>";
        }
		     
    else{
        echo"<script>alert('error in inserting data')</script>";
        }
		
}
else{
	echo"<script>alert('password not matched')</script>";
}
}
 ?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewreport"content="width=device-width,initial-scale=1.0">


<link rel="stylesheet" href="style1.css">
<title>register form</title>

</head>
<body style="background-image:url('images/vio.jpg');background-size:cover;">
    
    <div class="container">
        <form class="login-email" method="POST" action="" style="background-color:white;margin-left:620px;opacity:1;border-radius:8px;height:470px;margin-top:80px;border:aliceblue;">
            <p class="login-text"style="font-size: 2rem;color:black;font-weight:900;text-align:center">Register</p>
           <div class="input-group">
		   <input type="text"style="width:300px;border-radius:8px;margin-left:15px;border:2px solid black;height:40px"placeholder="username"name="username"required>
		   </div>
		   <div class="input-group">
           <input type="email"style="width:300px;border-radius:8px;margin-left:15px;border:2px solid black;height:40px"placeholder="Email"name="email" required>
           </div>
         <div class="input-group">
            <input type="password"style="width:300px;border-radius:8px;margin-left:15px;border:2px solid black;height:40px"placeholder="password"name="password" required>
     </div>
		<div class="input-group">
            <input type="password"style="width:300px;border-radius:8px;margin-left:15px;border:2px solid black;height:40px"placeholder="confirm password"name="confirmpassword" required>
        </div>
      <div class="input-group">
           <button class="btn" type="submit" name="submit" style="display:block;border-radius:15px;font-size:30px;width:50%;border:none;background: linear-gradient(to bottom, #66ffff 0%, #00ffff 100%);margin-left:85px;text-align:center;">Register</button>
		   </div>
		   <div class="input-group">
		   <p class="don" style="font-size:23px;margin-top:0px;">Already have an Account?<a href="proj1.php">Login</a></p>
        </div>
        </form>
    </div>
</body>
</html>

