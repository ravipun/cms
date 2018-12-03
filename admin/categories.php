<?php include "includes/Admin_header.php"?>
<div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/Admin_navigation.php"?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Welcome to GIS Water Management System Admin<br>
                                <small>GIS water management</small>
                            </h1>
                                <div class="col-xs-6">
                                    <?php  insert_categories(); ?>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <Label for="cat-title">Add Category</Label>
                                                <input type="text" class="form-control" name="cat_title">
                                            </div>
                                            <div class="form-group">
                                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                            </div>
                                        </form>
                                    <?php //Update Include Categories
                                        if(isset($_GET['edit'])){
                                            $cat_id = $_GET['edit'];
                                            include "includes/update_categories.php";
                                        }
                                    ?>
                               </div>
                                <div class="col-xs-6">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category Title</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        <?php  find_AllCategories(); ?>
                                        <?php  delete_Categories(); ?>
                                    </tbody>
                                    </table>
                               </div>


<!--ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
</li>
<li class="active">
<i class="fa fa-file"></i> Blank Page
</li>
</ol-->
</div><!--col-lg-12-->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
<?php include "includes/Admin_footer.php"?>


