<html>
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <style></style>
 <link rel="stylesheet" type="text/css" href="/assets/style.css">
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Test App</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="/main">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/users/signin">Sign in</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
  </nav>
  <div class="main-container">
    <div class="container">
      <?php 
      if ($this->session->userdata('error'))
      {
        ?>
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong>
          <?php 
          echo $this->session->userdata('error');
          ?>
        </div>
        <?php
        $this->session->unset_userdata('error');
      }
      ?>
    </div>
    <div class="container">
      <form class="form-horizontal" roll='form' action='/users/register_action' method='post'>
        <div class="form-group">
          <label>Email Address: </label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
          <label>First Name: </label>
          <input type="text" class="form-control" name="first_name" required>
        </div>
        <div class="form-group">
          <label>Last Name: </label>
          <input type="text" class="form-control" name="last_name" required>
        </div>
        <div class="form-group">
          <label>Password: </label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
          <label>Password Confirmation: </label>
          <input type="password" class="form-control" name="passwordconf" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-lg btn-primary">Register</button>
        </div>
      </form>
      <a href="/users/signin">Already have an account? Login</a>
    </div> <!-- /container -->
  </div>

</body>
</html>