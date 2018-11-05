<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="row" style="margin:70px;">
<div class="col-sm-3">
</div>

<div class="col-sm-6 container well">
<h2>Login Page</h2>
<form action="chat.php" method="POST">  
<div class="form-group">     
<label for="email">Username:</label>
 <input type="text" class="form-control" placeholder="Username" name="username">
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="form-control" placeholder="Password" name="password"> 
</div>   
<input type="submit" name="submit" />
</form>
</div>
<div class="col-sm-3">
</div>
</div>

</body> 
</html>
