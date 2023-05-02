<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>


    <title>View blog post</title>
</head>
<body>

    <?php include_once("nav.php")?>

    <?php foreach($query as $q) { ?>
    <?php 
        $next = $q['id'] + 1;
        $prev = $q['id'] - 1; 
    ?> 
       
    <div class="container-xl overflow-hidden p-1 mt-3">


        <div class="row g-0">
            <div class="col-lg-7 order-md-1" style="min-height: 55vh; background-size: cover; background-position: center; background-image: url('<?php echo $q['img1']; ?>');">

            </div>
            <div class="col-lg-5 order-md-2 my-auto text-center">

                <div class="lc-block m-3">
                    <div>
                    <h1 class="badge rounded-pill bg-primary fs-5"><?php echo $q['category']; ?></h1>
                        <h2><?php echo $q['title']; ?></h2>
                        <p class="fs-6"><?php echo $q['content']; ?> </p>
                    </div>

                </div>
                <div class="container">

                    <div class="mx-auto d-block">
                    
                        <a href="edit.php?id=<?php echo $q['id']; ?>" class="btn btn-outline-dark btn-sm me-1 px-5">Edit</a>

                        <!-- <form method="post">
                            <input type="text" hidden name="id" value=" echo $q['id']; ">
                            <button class="btn btn-primary btn-sm ml-2" name="delete">Delete</button>
                        </form> -->
                    </div>

                    <div class="d-md-flex justify-content-between px-1 mt-3">
                        <div class="">
                            <img src="<?php echo $q['img2']; ?>" alt="" class="img-responsive p-1" style="height:270px;">
                        </div>
                        <div class="">
                            <img src="<?php echo $q['avatar']; ?>" alt="" class="img-responsive p-1" style="width:70px;height:70px;border-radius:50%;">
                            <p><?php echo $q['author']; ?>
                                <br><span><?php echo $q['date']; ?></span>
                            </p>
                            <p>Blog ID <?php echo $q['id']; ?></p>

                        </div>
                    </div>
                </div>

              </div>


            </div>
        </div>
    </div>        

    <div class="d-flex justify-content-center pb-5">
        <a href="view.php?id=<?php echo $prev; ?> " class="btn btn-primary btn-sm text-light px-3">Prev</a>
        <a href="view.php?id=<?php echo $next; ?> " class="btn btn-dark btn-sm text-light px-3 ms-1">Next</a>
    </div>


<?php } ?>

</div>











    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>