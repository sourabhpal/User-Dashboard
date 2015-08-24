<html>
<head>
  <meta charset="UTF-8">
  <title>Users</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  </style>
  <link rel="stylesheet" type="text/css" href="/assets/style.css">
  <script type="text/javascript">
  </script>
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
       <a class="navbar-brand" href="">Test App</a>
     </div>
     <div id="navbar" class="navbar-collapse collapse">
       <ul class="nav navbar-nav">
        <li><a href="/main"><span class='glyphicon glyphicon-home'> Home</a></li>
        <?php 
          if($this->session->userdata('LoggedIn')){
            echo "<li class='active'><a href='/users/show_users'><span class='glyphicon glyphicon-dashboard'> Dashboard</a></li>";
            echo "<li><a href='/main/show_profile/" . $this->session->userdata('current_user_id') ."'><span class='glyphicon glyphicon-user'> Profile</a></li>";
          }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php 
          if($this->session->userdata('LoggedIn')){
            echo "<li><a href='/users/logoff'>Log off <span class='glyphicon glyphicon-log-out'></span></a></li>";
          }
          else
          {
            echo "<li><a href='/users/signin'>Sign in</a></li>";
          }
         ?>
     </ul>
   </div><!--/.nav-collapse -->
 </div><!--/.container -->
</nav>
<div class="main-container">
    <div class="container">
      <?php 
      if ($this->session->userdata('success'))
      {
        ?>
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Nice!</strong>
          <?php 
          foreach($this->session->userdata('success') as $s){
            echo $s;
          }
          ?>
        </div>
        <?php
        $this->session->unset_userdata('success');
      }
      if ($this->session->userdata('errors'))
      {
        ?>
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong>
          <?php 
          foreach($this->session->userdata('errors') as $error){
            echo $error;
          }
          ?>
        </div>
        <?php
        $this->session->unset_userdata('errors');
      }
      ?>
    </div>
  <div class="container">
    <?php 
    if($this->session->userdata('user_level') == 9){
      echo "<h3>Manage Users</h3>";
      // echo "<a class='pull-right' href='/users/register'>Add new</a>";
    ?>  
      <form class="form-group" action="/users/register" method="post">
        <button type="submit" id="post_button" class="btn btn-lg btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></button>
      </form>
    <?php
    }
    else{
      echo "<h3>All Users</h3>";
    }
    ?>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Join Date</th>
          <th>User Level</th>
          <?php 
          if($this->session->userdata('user_level') == 9){
          echo "<th>Actions</th>";
          }
           ?>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach($users as $user){
          echo "<tr>";;
          echo "<td>" . $user['id'] . "</td>";
          echo "<td><a href='/main/show_profile/" . $user['id'] . "'>" . $user['first_name'] . " " . $user['last_name']. "</a></td>";
          echo "<td>" . $user['email'] . "</td>";
          echo "<td>" . $user['created_at'] . "</td>";
          echo "<td>"; 
          if($user['user_level'] == 9)
          {
            echo "Admin";
          }
          else
          {
            echo "Normal";
          }
          echo "</td>";
          if($this->session->userdata('user_level') == 9){
            echo "<td><a href='/users/edit_user/{$user['id']}'>edit</a> | <a href='#' data-toggle='modal' data-target='#myModal{$user['id']}'>remove</a></td>";
          }
          echo "</tr>";
          ?>
          <!-- Modal -->
          <div id="myModal<?php echo $user['id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Confirm User Deletion</h4>
                </div>
                <div class="modal-body">
                  <p>Are you sure?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default yes" onclick="location.href='/users/remove_user_action/<?php echo $value;?>'">Yes</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div> <!-- /container -->
  </div>
</div>
</body>
</html>