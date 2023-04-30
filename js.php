<?php include_once('db.php'); ?>
<?php include_once('head_section.php'); ?>

    <title>BRM JS</title>
<style>
    p{
        padding:0;
        margin:0;
        line-height:16px;
    }
</style>
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

<br>
<p>[</p>
<br>
<?php
  $i=0;
  while($row = mysqli_fetch_array($result)) {
?>


  <p>{</p><p style="margin-left:18px;">id : <?php echo $row["id"]; ?>,</p>
  <p style="margin-left:18px;">isHero : <?php echo $row["isHero"]; ?>,</p>
  <p style="margin-left:18px;">purpose : "<?php echo $row["purpose"]; ?>",</p>
  <p style="margin-left:18px;">category : "<?php echo $row["category"]; ?>",</p>
  <p style="margin-left:18px;">date : "<?php echo $row["date"]; ?>",</p>
  <p style="margin-left:18px;">author : "<?php echo $row["author"]; ?>",</p>
  <p style="margin-left:18px;">avatar" : "<?php echo $row["avatar"]; ?>",</p>
  <p style="margin-left:18px;">title" : "<?php echo $row["title"]; ?>",</p>
  <p style="margin-left:18px;">body: "<?php echo $row["content"]; ?>",</p>
  <p style="margin-left:18px;">img1 : "<?php echo $row["img1"]; ?>",</p>
  <p style="margin-left:18px;">img2 : "<?php echo $row["img2"]; ?>",</p>
  <p style="margin-left:18px;">project : "<?php echo $row["project"]; ?>"</p>
  <p>},</p>
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


