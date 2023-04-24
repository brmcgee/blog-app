<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>


    <title>View blog post</title>
</head>
<body>

    <div class="container mt-5">

        <?php foreach($query as $q) { ?>

            <div class="bg-light p-5 rounded text-center">
                
                <div class="d-flex justify-content-end">
                    <a href="index.php" class="btn btn-outline-dark btn-sm">Home</a>
                </div>

                <div class="d-md-flex">
                    <div class="img-fluid" style="max-width:19rem;">
                        <img src="<?php echo $q['img1']?>" alt="<?php echo $q['title']; ?>" class="img img-fluid">
                    </div>
                    <h1 class="text-center p-2 display-2"><?php echo $q['title']; ?></h1>
                </div>

                <div class="d-flex mt-2 justify-content-end">
                    <a href="edit.php?id=<?php echo $q['id']; ?>" class="btn btn-dark btn-sm me-1">Edit</a>

                    <form method="post">
                        <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>

                </div>

            </div>
            <p class="mt-5 ps-5 border-left border-dark pl-3 fs-5"><?php echo $q['content']; ?></p>

        <?php } ?>
       
    </div>













    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>