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

    <div class="container mt-5">

        <?php foreach($query as $q) { ?>

            <div class="bg-light p-5 rounded-lg text-center">
                <h1><?php echo $q['title']; ?></h1>
                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id']; ?>" class="btn btn-dark btn-sm">Edit</a>

                    <form method="post">
                        <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>

                </div>
            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content']; ?></p>

        <?php } ?>
       
    </div>













    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>