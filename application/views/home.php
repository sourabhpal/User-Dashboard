<html>
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <style>
  .jumbotron {
    margin-top: 60px;
  }
 </style>
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
          <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="">Sign in</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
  </nav>

  <div class="container">
    <div class="jumbotron">
      <h1>Welcome to the Test</h1>
      <p>We are going to build a cool application using a MVC framework! This application was built with the Village88 folks!</p>
      <p>
        <a class="btn btn-lg btn-primary" href="" role="button">Start</a>
      </p>
    </div>
  </div> <!-- /container -->

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Manage Users</h3>
        <p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
      </div>
      <div class="col-md-4">
        <h3>Leave messages</h3>
        <p>Users will be able to leave a message to another user using this application.</p>
      </div>
      <div class="col-md-4">
        <h3>Edit User Information</h3>
        <p>Admins will be able to edit another user's information (email address, first name, last name, etc).</p>
      </div>
    </div>
  </div>
</body>
</html>