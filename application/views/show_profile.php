<html>
<head>
  <meta charset="UTF-8">
  <title>User Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/assets/style.css">
  <style>
    #post_button {
      float: right;
      margin-top: 10px;
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
        <li><a href="/main"><span class="glyphicon glyphicon-home"> Home</a></li>
        <?php 
          if($this->session->userdata('LoggedIn')){
            echo "<li><a href='/users/show_users'><span class='glyphicon glyphicon-dashboard'> Dashboard</a></li>";
            echo "<li class='active'><a href='/main/show_profile/" . $this->session->userdata('current_user_id') ."'><span class='glyphicon glyphicon-user'> Profile</a></li>";
          }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="/users/logoff">Log off <span class="glyphicon glyphicon-log-out"></span></a></li>
     </ul>
   </div><!--/.nav-collapse -->
 </div><!--/.container -->
</nav>
<div class="main-container">
  <div class="container">
    <form action="/users/edit_user/<?php echo $id; ?>" method="post"><button class="btn btn-lg btn-primary"><span class='glyphicon glyphicon-edit'></button></form>
    <h3><?php echo $first_name . " " . $last_name; ?></h3>
    <table class="table table-striped">
    <tr>
      <td><strong>Registered at: </strong></td>
      <td><?php echo $created_at; ?></td>
    </tr>
    <tr>
      <td><strong>User ID: </strong></td>
      <td><?php echo $id; ?></td>
    </tr>
    <tr>
      <td><strong>Email Address: </strong></td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td><strong>Description: </strong></td>
      <td><?php echo $description; ?></td>
    </tr>
  </table>
  <h4>Post a message for <?php echo $first_name; ?></h4>
  <form class="form-group" action="" method="post">
    <input class="form-control" type="hidden" action="action" value="post_message">
    <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Enter your message here..."></textarea>
    <button id="post_button" class="btn btn-info">Post <span class="glyphicon glyphicon-pencil"></span></button>
  </form>
  </div> <!-- /container -->
</div>
</body>
</html>