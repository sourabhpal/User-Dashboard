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
        <li><a href="/main">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="/main/signin">Sign in</a></li>
     </ul>
   </div><!--/.nav-collapse -->
 </div><!--/.container -->
</nav>
<div class="main-container">
  <div class="container">
    <h3>Manage Users</h3>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <td>Name</td>
          <td>email</td>
          <td>created_at</td>
          <td>user_level</td>
          <td>actions</td>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach($id as $key => $value){
          echo "<tr>";;
          echo "<td>" . $value . "</td>";
          echo "<td>" . $first_name[$key] . " " . $last_name[$key]. "</td>";
          echo "<td>" . $email[$key] . "</td>";
          echo "<td>" . $created_at[$key] . "</td>";
          echo "<td>" . $user_level[$key] . "</td>";
          echo "<td><a href='/main/edit_user/{$value}'>edit</a> | <a href='#' data-toggle='modal' data-target='#myModal{$value}'>remove</a></td>";
          echo "</tr>";
          ?>
          <!-- Modal -->
          <div id="myModal<?php echo $value; ?>" class="modal fade" role="dialog">
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
                  <button type="button" class="btn btn-default yes" onclick="location.href='/main/remove_user_action/<?php echo $value;?>'">Yes</button>
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