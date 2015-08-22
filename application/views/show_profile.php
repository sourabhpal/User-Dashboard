<html>
<head>
  <meta charset="UTF-8">
  <title>User Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  </style>
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
        <?php 
          if($this->session->userdata('LoggedIn')){
            echo "<li><a href='/users/show_users'>Dashboard</a></li>";
            echo "<li class='active'><a href='/main/show_profile/" . $this->session->userdata('current_user_id') ."'>Profile</a></li>";
          }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="/users/logoff">Log off</a></li>
     </ul>
   </div><!--/.nav-collapse -->
 </div><!--/.container -->
</nav>
<div class="main-container">
  <div class="container">
    <a href="/users/edit_user/<?php echo $id; ?>">Edit Profile</a>
    <h3><?php echo $first_name . " " . $last_name; ?></h3>
    <table>
    <tr>
      <td>Registered at: </td>
      <td><?php echo $created_at; ?></td>
    </tr>
    <tr>
      <td>User ID: </td>
      <td><?php echo $id; ?></td>
    </tr>
    <tr>
      <td>Email Address: </td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>Description: </td>
      <td><?php echo $description; ?></td>
    </tr>
  </table>
  </div> <!-- /container -->
</div>
</body>
</html>