<center><div class="col-md-4">
       

   <?php include "layout/head.php"; ?>

       <!-- Search Widget -->
      <section id="green" class="wide js-section">
       <div class="centered">
          <div class="card-body">
            <form action="search.php" method="post">
            <div  style="width:300px;" class="input-group">
              <input type="text" class="form-control" name="search_text" placeholder="Search for...">
              <span class="input-group-btn">
                <button  name="search" type="submit"><i class="fas fa-search"></i></button>
              </span>
            </div>
            </form>
          </div>
        </div>

           <!-- Categories Widget -->
           <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php 
                      $sql_select_category_wiget = "SELECT * FROM categories";
                      $result_sql_select_category_wiget = mysqli_query($dbconnection, $sql_select_category_wiget);

                       $category_counter= 0;
                        while ($rowcategory_wiget= mysqli_fetch_assoc( $result_sql_select_category_wiget)) 
                       {
                        $category_counter++;
                        $id_category_wiget = $rowcategory_wiget['id'];
                        $title_category_wiget = $rowcategory_wiget['cat_title'];


                   ?>
                  <li>
                    <a href="category.php?catid=<?=$id_category_wiget; ?>">
                       <?php 
                       if ($category_counter % 2 != 0)
                       {
                          echo $title_category_wiget;
                       }
                      

                       ?>
                      </a>
                    </li>
                    <?php 
                        }
                    ?>

                  
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php 
                      $sql_select_category_wiget1 = "SELECT * FROM categories";
                      $result_sql_select_category_wiget1 = mysqli_query($dbconnection, $sql_select_category_wiget1);

                       $category_counter1= 0;
                        while ($rowcategory_wiget1= mysqli_fetch_assoc( $result_sql_select_category_wiget1)) 
                       {
                        $category_counter1++;
                        $id_category_wiget1 = $rowcategory_wiget1['id'];
                        $title_category_wiget1 = $rowcategory_wiget1['cat_title'];

                   ?>
                  <li>
                    <a href="category.php?catid=<?=$id_category_wiget1; ?>">
                       <?php 
                       if ($category_counter1 % 2 == 0)
                       {
                          echo $title_category_wiget1;
                       }
                      

                       ?>
                      </a>
                    </li>
                    <?php 
                        }
                    ?>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>

 
        </section>
   </div></center>