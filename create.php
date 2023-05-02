<?php
require('access.php');
?>
<div class="alert alert-info p-0 m-0 pe-3 text-end" role="alert">
  <a href="logout.php">Log out</a>
</div>

<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>




    <title>Create blog post</title>
</head>
<body>

<?php 
    $count = 0;
    foreach($query as $q) { 
    $count = $count + 1; 
    }
?>

<?php include_once("nav.php"); ?>

    <div class="container mt-5 col-sm-12 col-md-8">

        <form method="POST" enctype="multipart/form-data" class="form-group">

        <div class="row">

            <div class="col-md-2">
                <label for="id">Blog ID</label>
                <p class="py-2 display-6"></p>
                <input type="text" name="id"  placeholder="Blog ID" value="<?php echo $count; ?>" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-md-3">
                <label for="date">Date</label>
                <input type="date" name="date" placeholder="Blog Date" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-md-2">
                <label for="isHero">Is Hero</label>
                <input type="text" name="isHero" placeholder="Blog IsHero" class="form-control bg-light  my-3 text-center"> 
            </div>
            <div class="col-md-2">
                <label for="purpose">Purpose</label>
                <input type="text" name="purpose" placeholder="Blog Purpose" class="form-control bg-light  my-3 text-center">
            </div>
            <div class="col-md-3">
                <label for="project">Project</label>
                <input type="text" name="project" placeholder="Blog Project" class="form-control bg-light  my-3 text-center">
            </div>

            </div>   

            <div class="row">

            <div class="col-md-9">
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Blog Title" class="form-control bg-light  my-3">
            </div>

            <div class="col-md-3">
                <label for="category">Category</label>
                <input type="text" name="category" placeholder="Blog Category" class="form-control bg-light  my-3">
            </div>

            </div>    

            <div class="row">

                <div class="col-md-12">

                    <label for="content">Content</label>
                    <textarea name="content" class="form-control bg-light  my-3" rows="10"></textarea>

                </div>
            </div>

            <div class="row">

            <div class="col-sm-12 col-md-4">
                <label for="author">Author</label>
                <input type="text" name="author" value="Office @ BRM" class="form-control bg-light  my-3 text-center">
            </div>

            <div class="col-md-8">
                <label for="avatar">Avatar</label>
                <input type="text" name="avatar" value="https://www.brmcontractors.net/assets/logo/brm-red.ico" class="form-control bg-light  my-3 text-center">
            </div>
            </div>


            <div class="form-group p-2">
                <label for="file"> Select image to upload:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file">
            </div>
            <div class="form-group mt-2 p-2">
                <label for="file"> Select image to upload:</label>
                <input type="file" name="fileToUpload2" id="fileToUpload2" class="form-control-file">
            </div>

            <button name="new_post" class="btn btn-dark mt-5" id="btnAdd">Add Post</button>
        </form>
    </div>
  



    <script>

    </script>

    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>