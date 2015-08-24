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
       <span class="navbar-brand">SS|DB</span>
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
    <?php 
    if($this->session->userdata('current_user_id') == $id){
      echo "<form action='/users/edit_user/" . $id . "' method='post'><button class='btn btn-lg btn-primary'>Edit <span class='glyphicon glyphicon-edit'></button></form>";
    }
    ?>
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
  <form class="form-group" action="/main/add_post/<?php echo $id; ?>" method="post">
    <textarea class="form-control" name="post" id="" cols="30" rows="5" placeholder="Enter your message here..."></textarea>
    <button type="submit" id="post_button" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-pencil"></span></button>
  </form>
  </div> <!-- /container -->
    <?php 
    foreach($posts as $key => $value){
      echo "<div class='container container-post'>";
      echo "<div class='panel panel-default'>";
      echo "<div class='panel-heading'><h5>" . $value['first_name'] . " " . $value['last_name'] . ' wrote:';
      date_default_timezone_set("America/Los_Angeles");
      $t = time();
      $now = date("Y-m-d H:i:s",$t);
      $time1 = strtotime($now);
      $time2 = strtotime($value['created_at']);
      $timeDiff = intval(abs($time1 - $time2) / 60);
      $fancyTime = date("M d, Y H:i:s",$time2);
      if($timeDiff > (24*60)){
        echo "<span class='pull-right'>" . $fancyTime . '</span></h5></div>';
      }
      else if($timeDiff > 60){
        echo "<span class='pull-right'>" . intval($timeDiff/60) . ' hours ago</span></h5></div>';
      }
      else{
        echo "<span class='pull-right'>" . $timeDiff . ' minutes ago</span></h5></div>';
      }
      // echo "<span class='pull-right'>" . $value['created_at'] . '</span></h5></div>';
      echo "<div class='panel-body'>" . $value['post'] . "</div></div>";
      foreach($value['comments'] as $c){
        echo "<div class='container container-comment'>";
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-heading'>" . $c['first_name'] . " " . $c['last_name'] . ' wrote:';
        $t2 = time();
        $now2 = date("Y-m-d H:i:s",$t2);
        $time3 = strtotime($now2);
        $time4 = strtotime($c['created_at']);
        $timeDiff2 = intval(abs($time3 - $time4) / 60);
        $fancyTime2 = date("M d, Y H:i:s",$time4);
        if($timeDiff2 > (24*60)){
          echo "<span class='pull-right'>" . $fancyTime2 . '</span></h5></div>';
        }
        else if($timeDiff2 > 60){
          echo "<span class='pull-right'>" . intval($timeDiff2/60) . ' hours ago</span></h5></div>';
        }
        else{
          echo "<span class='pull-right'>" . $timeDiff2 . ' minutes ago</span></h5></div>';
        }
        // echo "<span class='pull-right'>" . $c['created_at'] . '</span></div>';
        echo "<div class='panel-body'>" . $c['comment'] . "</div></div>";
        echo "</div>";
      }
      ?>
      <div class='container container-comment'>
      <form class="form-group" action="/main/add_comment_to_post/<?php echo $id; ?>/<?php echo $value['postID']; ?>" method="post">
        <textarea class="form-control" name="comment" id="" cols="30" rows="5" placeholder="Enter your message here..."></textarea>
        <button type="submit" id="post_button" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-comment"></span></button>
      </form>
    </div>
      <?php
      echo "</div></div>";
    }
     ?>
  </div>
</div>
</body>
</html>