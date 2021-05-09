<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    

    <title>PHP OOP CRUD TUTORIAL</title>
  </head>
  <style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400");
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Raleway:wght@300&display=swap');
*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}



::-webkit-scrollbar {
  width: 8px;
  background: #2d3436;
}

::-webkit-scrollbar-thumb {
  background: #17a2b8;
  border-radius: 8px;
}
.blur{
  -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px);
}

a.btn{
  width:150px;
  display:block;
  padding:1em 0;
  font:1.125em 'Arial', sans-serif;
  font-weight:700;
  text-align:center;
  text-decoration:none;
  color:#fff;
  border-radius:5px;
  background:rgba(217,67,86,1);
}


.modal-wrapper{
  width:100%;
  height:100%;
  position:fixed;
  top:0; left:0;
  z-index: 1;
  background:rgba(255,257,153,0.35);
  visibility:hidden;
  opacity:0;
  -webkit-transition: all 0.25s ease-in-out;
  -moz-transition: all 0.25s ease-in-out;
  -o-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
}

.modal-wrapper.open{
  opacity:1;
  visibility:visible;
}

.modal{
  width:600px;
  height:400px;
  display:block;
  margin:50% 0 0 -300px;
  position:relative;
  top:50%; left:50%;
  background:#fff;
  opacity:0;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}

.modal-wrapper.open .modal{
  margin-top:-200px;
  opacity:1;
}

.head{
  width:100%;
  height:42px;
  padding:1.5em 5%;
  overflow:hidden;
  background:#01bce5;
}

.btn-close{
  width:32px;
  height:32px;
  display:block;
  margin-top: -15px;
  float:right;
}

.btn-close::before, .btn-close::after{
  content:'';
  width:32px;
  height:6px;
  display:block;
  background:#fff;
}

.btn-close::before{
  margin-top:12px;
  -webkit-transform:rotate(45deg);
  -moz-transform:rotate(45deg);
  -o-transform:rotate(45deg);
  transform:rotate(45deg);
}

.btn-close::after{
  margin-top:-6px;
  -webkit-transform:rotate(-45deg);
  -moz-transform:rotate(-45deg);
  -o-transform:rotate(-45deg);
  transform:rotate(-45deg);
}

.content{
  padding:5%;
}
</style>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
					<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-money"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-area-chart"></i> Profit</a>
                    </li>
                    <li>
                        <a href="category_admin.php"><i class="fa fa-server"></i></i> Category</a>
                    </li>
                    <li>
                        <a href="post_admin.php"><i class="fa fa-file"></i> Post</a>
                    </li>
                    <li>
                        <a href="comment_admin.php"><i class="fa fa-comments"></i> Comments</a>
                    </li>
                    <li>
                        <a href="edit_room.php"><i class="fa fa-sign-out fa-fw"></i>Edit rooms</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner"><div class="row">
     
      <a class="btn trigger" href="javascript:;">Add room</a>

<div class="modal-wrapper">
  <div class="modal">
    <div class="head">
      <a class="btn-close trigger" href="javascript:;"></a>
    </div>
    <div class="content">
    <div class="row">
      
        
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();

          ?>  <div class="col-md">
          <form action="" method="post">
          <div class="input-group">
      
      

  <div class="col-md">
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Име</span></div>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Стая</span></div>
              <input   type="text" inputmode="decimal" name="room" class="form-control">
            </div>
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Легло</span></div>
              <input   type="text" inputmode="decimal" name="bed" class="form-control">
            </div>
            </div>
            <div class="col-md">
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Закуска</span></div>
              <input   type="text" inputmode="decimal" name="breakfast" class="form-control">
            </div>
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Обяд</span></div>
              <input   type="text" inputmode="decimal" name="half" class="form-control">
            </div>
            <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text">Вечеря</span></div>
              <input   type="text" inputmode="decimal" name="full" class="form-control">
            </div>
            </div></div> <br>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>

      <div class="row">
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Room</th>
                <th>Bed</th>
                <th>breakfast</th>
                <th>half</th>
                <th>full</th>
              </tr>
            </thead>
            <tbody>
              <?php

               
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <?php echo "<tr>"?>
              <?php echo "<tr><td>"?><?php echo $i++; ?></td>
              <?php echo " <td>".$row['name']."</td>
               <td>".$row['room']." лв.</td>
                <td>".$row['bed']." лв.</td>
                <td>".$row['breakfast']." лв.</td>
                <td>".$row['half']." лв.</td>
                <td>".$row['full']." лв.</td>
                <td>";
                ?>
                
                  <a href="read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a>
                  <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                  <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                </td>
              </tr>

              <?php
                }
              }else{
                echo "no data";
            }

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>