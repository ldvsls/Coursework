<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />

<center>
<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="/signup.php">
    <div class="container">
      <center>
          <h1>Sign up</h1>
      <p id="rcorners3">Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <div class="clearfix">
        <center>
          <div>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </center>
        <button type="submit" class="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<center>
<div>
  	<p id="rcorners2">WELCOME</h1>
</div>

<p id="rcorners1">Learn To Code!</p>
	<p id="rcorners2">This website will help you learn the basics of coding, and by the 	end you'll have your very own website layout!</p>
  <p id="rcorners1">TASKS</p>
</center>

<center>
<div>
<button class="btn btn-success" onclick=" window.open('file:///Users/louis/Documents/TASK1.html','_blank')"> TASK 1</button>
<button class="btn btn-success" onclick=" window.open('file:///Users/louis/Documents/TASK2.html','_blank')"> TASK 2</button>
<button class="btn btn-success" onclick=" window.open('file:///Users/louis/Documents/TASK3.html','_blank')"> TASK 3</button>
<button class="btn btn-success" onclick=" window.open('file:///Users/louis/Documents/TASK4.html','_blank')"> TASK 4</button>
<button class="btn btn-success" onclick=" window.open('file:///Users/louis/Documents/TASK5.html','_blank')"> TASK 5</button>
<button class="btn btn-success" onclick=" window.open('file:///Users/louis/Documents/TASK6.html','_blank')"> TASK 6</button>
</div>
<p>Made by Louis Davis</p>
<body>
</center>
</head>
</body>
</html>
