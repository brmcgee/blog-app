<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>

    <title>Blog App</title>
</head>
<body>
<?php include('nav.php'); ?>

<?php 
    $count = 0;
    foreach($query as $q) { 
    $count = $count + 1; 
?>
                    
<?php } ?>
    <div class="container-xxl">

<?php 
    if (isset($_SESSION['loggedIn'])) {
?>

<?php
} 
?>

        <?php if(isset($_REQUEST['info'])) { ?>

            <?php if($_REQUEST['info'] == "added") { ?>
             
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>

            <?php }else if($_REQUEST['info'] == "updated"){ ?> 

                <div class="alert alert-info" role="alert">
                    Post has been updated successfully
                </div>

            <?php } else if($_REQUEST['info'] == "invalid"){ ?> 

            <div class="bg-warning text dark p-3 m-1 h6" role="alert">
                Invalid credentials please try again!
            </div>

            <?php } 
            else if($_REQUEST['info'] == "invalid"){ ?> 

                <div class="bg-warning text dark p-3 m-1 h6" role="alert">
                    Invalid credentials please try again!
                </div>
    
            <?php }else if($_REQUEST['info'] == "loggedOut"){ ?> 

                <div class="alert alert-warning mt-1 p-1" role="alert">
                    Successfully logged out
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
                        <div class="card  alert alert-dark mt-3 shadow border-dark"  style="width:28rem;min-height:12rem;">
                            <div class="card-body">
                                <p><span class="badge bg-primary float-end fs-6"><?php echo $q['category']; ?></span></p>
                                <h6 class="card-title"><?php echo $q['title']; ?></h6>
                                <div class="d-flex justify-content-between">
                                    <div class="container">
                                        <p class="small"><?php echo $q['date']; ?> <span> -<?php echo $q['id']; ?></span></p>
                                        <a href="view.php?id=<?php echo $q['id']; ?> " class="btn btn-dark mt-3 py-1">View <span class="text-danger">&rarr;</span></a>
                                    </div>
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

        
       

        <h3 id="bottom" class="alert-secondary mt-5 mb-5 d-flex justify-content-center p-2">Total records <span class="badge bg-primary ms-3"><?php echo $count; ?></span></h3>

    </div>

    <?php include('nav.php'); ?>

    <div class="container pb-5"></div>
    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>