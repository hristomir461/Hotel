<?php 
  ob_start();
  include "db_connection.php";
?>
<!DOCTYPE>
<html>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <title>Admin</title>
	<link rel="stylesheet" href="assets/css/morris.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js//raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>

   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head><style>
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
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
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
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>

                    

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                         Comments Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
           <?php 
             if (isset($_POST['selectOneCheckBoxArray']))
             {
                 //header("Location: index.php");
               foreach ($_POST['selectOneCheckBoxArray'] as $checked_Box_Comment_Id)
               {
                $group_options = $_POST['group_options'];
                switch ($group_options) {
                  case '1':
                    $sql_group_publish = "UPDATE comments SET comm_status= '{$group_options}' WHERE id={$checked_Box_Comment_Id}";
                     $result_sql_group_publish= mysqli_query($dbconnection, $sql_group_publish);
                    break;
                  case '0':
                    $sql_group_unpublish = "UPDATE comments SET comm_status= '{$group_options}' WHERE id={$checked_Box_Comment_Id}";
                     $result_sql_group_unpublish= mysqli_query($dbconnection, $sql_group_unpublish);
                    break;
                  case 'delete':
                  $sql_group_delete = "DELETE FROM comments WHERE id ={$checked_Box_Comment_Id}";
                  $result_sql_group_delete = mysqli_query($dbconnection, $sql_group_delete);
                  header("Location: comment_admin.php");
                    # code...
                    break;
                  
                  default:
                    # code...
                    break;
                }
               }
               header("Location: comment_admin.php");
             }

              ?>

          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#InsertComment"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new comment</button>
         <br><br>
        <div class="box-body">
          
          <form action="" method="post">
           <table width=100%>
            <tr>
               <th>
                 <select class="form-control" id="group_options" name="group_options">
                    <option value="" disabled selected>Group action</option>
                    <option value="delete" >Delete</option>
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
            </select>
               </th>
               <th>&nbsp;</th>
               <th>
                  <button class="btn btn-search" type="submit" name="applyed"> Apply</button>
               </th>

               
               
               <th>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                  $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
                </script>
                  <input class="col-xs-4" type="text" placeholder="Search" id="myInput" aria-label="Search">
              </th>
              
             </tr>

           </table>
            <br>
          <table class="table table-hover">
            <tr class="info">
              <th style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectAllCommentCheckbox" name="selectAllCommentCheckbox">
              </th>
              <th style="text-align: center;">Autor</th>
              <th style="text-align: center;">Email</th>
              <th style="text-align: center;">Post title</th>
              <th style="text-align: center;">Status</th>
              <th style="text-align: center;">Edit/Delete</th>
            </tr>
            <?php 
                $sql_select_comment = "SELECT * FROM comments ORDER BY comm_status asc";
                $result_sql_select_comment = mysqli_query($dbconnection, $sql_select_comment);
                while ($rowcomment = mysqli_fetch_assoc($result_sql_select_comment))
                {
                  $view_comm_id = $rowcomment['id'];
                  $view_comm_postid = $rowcomment['postid'];
                  $view_comm_autor = $rowcomment['comm_autor'];
                  $view_comm_email = $rowcomment['comm_email'];
                  $view_comm_text = $rowcomment['comm_text'];
                  $view_comm_status = $rowcomment['comm_status'];
                  $view_comm_date = $rowcomment['comm_date'];
             ?>
             <tbody id="myTable">
            <tr class="success">
              <td style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectOneCheckBoxArray" name="selectOneCheckBoxArray[]" value="<?php echo $view_comm_id; ?>">
              </td>
              <td style="text-align: center;"><?php echo $view_comm_autor; ?></td>
              <td style="text-align: center;"><?php echo $view_comm_email; ?></td>
              <?php
                  $sql_select_post = "SELECT * FROM posts WHERE id = {$view_comm_postid}";
                  $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                  while ($rowpost = mysqli_fetch_assoc($result_sql_select_post))
                  {
                    $view_post_id = $rowpost['id'];
                    $view_post_title = $rowpost['post_title'];
                  }
                 ?>
              <td style="text-align: center;">
                <a href="../post.php?postid=<?=$view_comm_postid ?>" target="_blank">
                <?php
                   echo $view_post_title;
                 ?>
                 </a> 
              </td>
              
              <?php 
                if ($view_comm_status==1)
                {
               ?>
              <td style="text-align: center;"><span class="label label-success">Published</span></td>
              <?php 
                }
                else
                {
              ?>
              <td style="text-align: center;"><span class="label label-warning">Draft</span></td>
              <?php
                }
              ?>
              <td style="text-align: center;">

                <button type="button" name="edit" class="btn btn-warning" data-toggle="modal" data-target="#EditComment" data-comment_id_edit="<?= $view_comm_id ?>" data-comment_postid="<?= $view_comm_postid ?>" data-comment_autor="<?= $view_comm_autor ?>" data-comment_email="<?= $view_comm_email ?>" data-comment_text="<?= $view_comm_text ?>" data-comment_date="<?= $view_comm_date ?>"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</button>

               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteComment" data-comment_id_delete="<?= $view_comm_id ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete</button>
              </td>
            </tr>
            <?php
                } 
             ?>
             </tbody>
          </table>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
     <!-- Modal add new category -->
      <?php include "layout/modal/add_new_category.php" ?>
     <!-- // Modal add new category -->
    <!-- Modal Delete Category-->
      <?php include "layout/modal/delete_comment.php" ?>
    <!-- // Modal Delete Category-->
    <!-- Modal EDIT  category -->
    <?php include "layout/modal/edit_comment.php" ?>
<!-- // Modal EDIT  category -->
<!-- Modal add new post -->
    <?php include "layout/modal/add_new_post.php"; ?>
     <!-- // Modal add new Post -->
     <!-- Modal EDIT  user -->
    <?php include "layout/modal/edit_user.php" ?>
<!-- // Modal EDIT  user -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "layout/footer.php"; ?>

  <?php include "layout/rightsidebar.php"; ?>
<!-- ./wrapper -->
<?php include "layout/scripts.php"; ?>



</body>
</html>
