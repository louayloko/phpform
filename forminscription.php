 <html>
 <header>
  <link rel="stylesheet" type="text/css" href="minichatstyle.css">
	<title>POLYMONT</title> 
 
 <ul id="navigation">
  <li><a href="forminscription.php" title="Aller a Subscription">Subscription</a></li>
  <li><a href="connect.php" title="Aller a Connect">Connect</a></li>
  <li><a href="disconnect.php" title="Aller a Disconnect">Disconnect</a></li>
</ul>


</header>
<body>

 <form action="subscription.php" method="post" style="border:1px solid #ccc">
  <div class="container">
  </br>
   <center><h1 style="color:blue;">YEHYA</h1>
    <p>Please fill in this form to create an account.</p></center>
    <hr>

	<label for="username"><b> Username</b></label>
	<input type="text" placeholder="username" name="username" required>
	<p>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	</p>
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	<p>
	 <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	

    <p>Hello please fill Polymont Form :) <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

	
	
</body>

<footer>
</footer
</html>