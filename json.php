<?php include_once('db.php'); ?>
<?php include_once('head_section.php'); ?>

    <title>BRM JS</title>
</head>

<body>

<?php include_once('nav.php'); ?>

<?php
if(isset($_POST['submit']))
{    

     $id = $_POST['id'];

     $sql = "SELECT * FROM brm";

     $query = mysqli_query($conn, $sql);

     if (!$query)
     {
         echo "Query does not work.".mysqli_error($conn);die;
     }
     
     
     while($data = mysqli_fetch_array($query))
     {
         echo "Id = ".$data['id']."<br>";
         echo "Is Hero Image = ".$data['isHero']."<br>";
         echo "Purpose = ".$data['purpose']."<br>";
         echo "Category = ".$data['catgeory']."<br>";
         echo "Date = ".$data['date']."<br>";
         echo "Author = ".$data['author']."<br>";
         echo "Avatar = ".$data['avatar']."<br>";
         echo "title = ".$data['title']."<br>";
         echo "Body = ".$data['content']."<br>";
         echo "Img1 = ".$data['img2']."<br>";
         echo "Img2 = ".$data['img1']."<br>";
         echo "Project = ".$data['project']."<br><hr>";
     }
     mysqli_close($conn);
}
?>



<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM brm");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>

<p>[</p>
<?php
  $i=0;
  while($row = mysqli_fetch_array($result)) {
?>


  <p> { <br> "id" : <?php echo $row["id"]; ?>,</p>
  <p>"isHero" : <?php echo $row["isHero"]; ?>,</p>
  <p>"purpose" : "<?php echo $row["purpose"]; ?>",</p>
  <p>"category" : "<?php echo $row["category"]; ?>",</p>
  <p>"date" : "<?php echo $row["date"]; ?>",</p>
  <p>"author" : "<?php echo $row["author"]; ?>",</p>
  <p>"avatar" : "<?php echo $row["avatar"]; ?>",</p>
  <p>"title" : "<?php echo $row["title"]; ?>",</p>
  <p>"body" : "<?php echo $row["content"]; ?>",</p>
  <p>"img1" : "<?php echo $row["img1"]; ?>",</p>
  <p>"img2" : "<?php echo $row["img2"]; ?>",</p>
  <p>"project" : "<?php echo $row["project"]; ?>" <br> }, </p>
  <br>


<?php
$i++;
}
?>
<p>] </p>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>


