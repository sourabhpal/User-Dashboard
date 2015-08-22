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
        <tr>
          <td>1</td>
          <td>Sue Su</td>
          <td>suesu@sue.su</td>
          <td>Aug 21, 2015</td>
          <td>admin</td>
          <td><a href="/main/edit_user">edit</a> | <a href="">remove</a></td>
        </tr>
      </tbody>
    </table>
  </div> <!-- /container -->
</div>
</body>
</html>