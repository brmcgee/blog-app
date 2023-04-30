<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>


    <title>Edit blog post</title>
</head>
<body>

<?php include_once("nav.php")?>
   
<?php foreach($query as $q) {?>

    <div class="container-fluid mt-5 col-sm-11 col-md-10 col-lg-8">
        <form method="GET">
          <div class="row">

            <div class="col-md-2">
                <label for="id">Blog ID</label>
                <p class="py-2 display-6"><?php echo $q['id']; ?></p>
                <input type="text" name="id"  placeholder="Blog ID" class="form-control bg-light  my-3 text-center" value="<?php echo $q['id']; ?>">
            </div>
            <div class="col-md-3">
                <label for="date">Date</label>
                <input type="text" name="date" placeholder="Blog Date" class="form-control bg-light  my-3 text-center" value="<?php echo $q['date']; ?>">
            </div>
            <div class="col-md-2">
                <label for="isHero">Is Hero</label>
                <input type="text" name="isHero" placeholder="Blog IsHero" class="form-control bg-light  my-3 text-center" value="<?php echo $q['isHero']; ?>"> 
            </div>
            <div class="col-md-2">
                <label for="purpose">Purpose</label>
                <input type="text" name="purpose" placeholder="Blog Purpose" class="form-control bg-light  my-3 text-center" value="<?php echo $q['purpose']; ?>">
            </div>
            <div class="col-md-3">
                <label for="project">Project</label>
                <input type="text" name="project" placeholder="Blog Project" class="form-control bg-light  my-3 text-center" value="<?php echo $q['project']; ?>">
            </div>

          </div>   

        <div class="row">

            <div class="col-md-9">
              <label for="title">Title</label>
              <input type="text" name="title" placeholder="Blog Title" class="form-control bg-light  my-3" value="<?php echo $q['title']; ?>">
            </div>

            <div class="col-md-3">
                <label for="category">Category</label>
                <input type="text" name="category" placeholder="Blog Category" class="form-control bg-light  my-3" value="<?php echo $q['category']; ?>">
            </div>

        </div>    

        <div class="row">

            <div class="col-md-12">

                <label for="content">Content</label>
                <textarea name="content" class="form-control bg-light  my-3" rows="4"><?php echo $q['content']; ?></textarea>

            </div>
        </div>

        <div class="row">

            <div class="col-4">
                <label for="author">Author</label>
                <input type="text" name="author" placeholder="Blog Author" class="form-control bg-light  my-3 text-center" value="<?php echo $q['author']; ?>">
            </div>

            <div class="col-md-8">
                <label for="avatar">Avatar</label>
                <input type="text" name="avatar" placeholder="Blog Author Avatar" class="form-control bg-light  my-3 text-center" value="<?php echo $q['avatar']; ?>">
            </div>
        </div>

        <div class="row">
            
            <div class="col-12">
                <label for="img1">Img 1 Url</label>
                <input type="text" name="img1" placeholder="Blog Img1" class="form-control bg-light  my-3 text-center" value="<?php echo $q['img1']; ?>">
            </div>

        </div>

        <div class="row">
            
            <div class="col-12">
                <label for="img1">Img 2 Url</label>
                <input type="text" name="img2" placeholder="Blog Img1" class="form-control bg-light  my-3 text-center" value="<?php echo $q['img2']; ?>">
            </div>
            
        </div>




            <button name="update" class="btn btn-dark">Update</button>
        </form>
    </div>

<?php } ?>







    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>