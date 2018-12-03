 <!-- Blog Search Well -->
                <!--?php
                if(isset($_POST['submit'])){
                    $search =  $_POST['search'];
                    $query = "SELECT * FROM posts WHERE  post_tags LIKE '%$search%'";

                    $search_query = mysqli_query($connection,$query);
                    
                    if(!$search_query) {
                        die("QUERY FAILED" . mysqli_error($connection));
                    }

                     $count = mysqli_num_rows($search_query);

                    if($count == 0){
                        echo "<h1>NO RESULT</h1>";
                    } else {

                    }

                }
                ?-->
   
   
                <div class="well">
                    <h4>Blog Search</h4>         
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>


                





                   <!-- Blog Categories Well -->
                <div class="well">

                    <?php
                    global $connection;
                    $query =  "SELECT * FROM categories LIMIT 3";
                    $select_categories_sidebar = mysqli_query($connection,$query);
                    ?>

                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php
                                while($row = mysqli_fetch_assoc($select_categories_sidebar)){
                                $cat_title = $row['cat_title'];
                                $cat_id = $row['cat_id'];
                                echo "<li><a href='./category.php?category=$cat_id'>{$cat_title}</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>



                <!-- Side Widget Well -->
                <div class="well">
                    <h4>สวัสดี</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

