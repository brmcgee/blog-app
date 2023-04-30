<?php include_once('db.php'); ?>
<?php include_once('head_section.php'); ?>
<?php include_once('logic.php'); ?>

    <title>BRM Blog View</title>

</head>
<body>
<?php include_once('nav.php'); ?>

<div class="wrapper container-fluid px-1">        
  <div class="bs-example">
    <div class="container-fluid">
       <div class="page-header clearfix">
          <h2 class="pull-left">Blog List</h2>
        </div>

<?php $result = mysqli_query($conn,"SELECT * FROM brm"); ?>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
    <tr>
        <td>id</td>
        <td>view</td>
        <td>isHero</td>
        <td>purpose</td>
        <td>category</td>
        <td>date</td>
        <td>author</td>
        <td>avatar</td>
        <td>title</td>
        <td>body</td>
        <td>img1</td>
        <td>img2</td>
        <td>project</td>
    </tr>

<?php 
while($row = mysqli_fetch_array($result)) {
?>

<tr id='rowBlog'>
  <td><?php echo $row["id"]; ?></td>
  <td><a href="view.php?id=<?php echo $row['id']; ?> ">view</a></td>
  <td><?php echo $row["isHero"]; ?></td>
  <td><?php echo $row["purpose"]; ?></td>
  <td><?php echo $row["category"]; ?></td>
  <td><?php echo $row["date"]; ?></td>
  <td><?php echo $row["author"]; ?></td>
  <td><img style="width:70px;height:70px;" src='<?php echo $row["avatar"] ?>'></td>
  <td><?php echo $row["title"]; ?></td>
  <td><?php echo $row["content"]; ?></td>
  <td><img style="width:120px;height:120px;" src='<?php echo $row["img1"] ?>'></td>
  <td><img style="width:120px;height:120px;" src='<?php echo $row["img2"] ?>'></td>
  <td><?php echo $row["project"]; ?></td>
</tr>

<?php
}
?>

</table>

<?php
}
else{
echo "No result found";
}
?>
    </div>
  </div>        
</div>



    <!-- Latest compiled and minified JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>