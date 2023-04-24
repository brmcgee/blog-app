<?php include("logic.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

    <title>Blog using PHP and MySQL</title>
</head>
<body>

    <!-- display only if 'info' is present in the $_REQUEST from header location in logic.php  -->
    <div class="container mt-5">

        <?php if(isset($_REQUEST['info'])) { ?>

            <?php if($_REQUEST['info'] == "added") { ?>
             
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>

            <?php }else if($_REQUEST['info'] == "updated"){ ?> 

                <div class="alert alert-success" role="alert">
                    Post has been updated successfully
                </div>

            <?php } else if($_REQUEST['info'] == "deleted"){ ?> 

                <div class="alert alert-danger" role="alert">
                    Post has been deleted successfully
                </div>

            <?php } ?>   

            

        <?php } ?>

        <!-- button to create post  -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

        <!-- render all blog from db from $query in logic.php  -->
        <div class="row">

            <?php foreach($query as $q) { ?>

                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card bg-light mt-5"  style="width:28rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $q['title']; ?></h5>
                                <p class="card-text"><?php echo $q['content']; ?></p>
                                <a href="view.php?id=<?php echo $q['id']; ?> " class="btn btn-dark text-light">Read more <span class="text-danger">&rarr;</span></a>
                            </div>
                        </div>
                    </div>

            <?php } ?>

        </div>

    </div>













    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>