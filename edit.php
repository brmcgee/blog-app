<?php include("logic.php"); ?>
<?php include_once("head_section.php") ?>


    <title>Edit blog post</title>
</head>
<body>
    
<?php foreach($query as $q) {?>

    <div class="container mt-5">
        <form method="GET">
            <input type="text" hidden name="id" value="<?php echo $q['id']; ?>">
            <input type="text" name="title" placeholder="Blog Title" class="form-control bg-light  my-3 text-center" value="<?php echo $q['title']; ?>">
            <textarea name="content" class="form-control bg-light  my-3" rows="10">
                <?php echo $q['content']; ?>
            </textarea>
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