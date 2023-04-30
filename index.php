<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>




    <title>Blog App</title>
</head>
<body>
<?php include_once('nav.php'); ?>


    <!-- display only if 'info' is present in the $_REQUEST from header location in logic.php  -->
    <div class="container-xxl mt-5">

        <?php if(isset($_REQUEST['info'])) { ?>

            <?php if($_REQUEST['info'] == "added") { ?>
             
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>

            <?php }else if($_REQUEST['info'] == "updated"){ ?> 

                <div class="alert alert-info" role="alert">
                    Post has been updated successfully
                </div>

            <?php } else if($_REQUEST['info'] == "deleted"){ ?> 

                <div class="alert alert-danger" role="alert">
                    Post has been deleted successfully
                </div>

            <?php } ?>   

            

        <?php } ?>


        <!-- render all blog from db from $query in logic.php  -->
        <div class="row">

            <?php 
                $count = 0;
                foreach($query as $q) { 
                    $count = $count + 1; ?>
                    
                    <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                        <div class="card bg-light mt-5"  style="width:29rem;min-height:15rem;">
                            <div class="card-body">
                                <p>Blog ID <?php echo $q['id']; ?><span class="badge bg-primary float-end fs-6"><?php echo $q['category']; ?></span></p>
                                <h5 class="card-title border-bottom border-secondary"><?php echo $q['title']; ?></h5>
                                <p class="card-text"><?php echo $q['content']; ?></p>
                                <div class="d-flex justify-content-between">
                                    <a href="view.php?id=<?php echo $q['id']; ?> " class="btn btn-dark text-light mt-3 py-3">View <span class="text-danger">&rarr;</span></a>
                                    <div class="btn-group">
                                        <img src="<?php echo $q['img1']; ?>" alt="" style="width:80px;height:80px;" class="me-1">
                                        <img src="<?php echo $q['img2']; ?>" alt="" style="width:80px;height:80px;">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            <?php } ?>

        </div>

        <h3 class="alert-secondary mt-5 mb-5 d-flex justify-content-center p-2">Total records <span class="badge bg-primary ms-3"><?php echo $count; ?></span></h3>

    </div>













    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>