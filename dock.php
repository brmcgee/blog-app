<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRM Blog</title>

<link rel="canonical" href="https://www.brmcontractors.net/" />
<link rel="icon" href="https://www.brmcontractors.net/assets/logo/brm-ico-red.png"/>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://brmdev.com/blog/css/cards.css"> -->


<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- font awesome -->
<script src="https://kit.fontawesome.com/8ab1cf7876.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://kit.fontawesome.com/8ab1cf7876.css" crossorigin="anonymous"> 


<link rel="stylesheet" href="css/cards.css">
    <link href="https://www.brmdev.com/brm.css" rel="stylesheet">



</head>
<body>


<div class="bg-dark py-1 container-fluid">

    <ul class="nav nav-pills">

        <li class="nav-item">
            <a class="nav-link text-light" href="https://blog.brmnow.com">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#">Top</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#bottom">Bottom</a>
        </li>
  
        
    </ul>

</div>




<!-- make blogs from php sql call  -->
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});

let myRecords = [];
function makeRecords() {
let arr = {};
document.querySelectorAll("#rowBlog").forEach((i) => {
    arr = {};
    arr.id = i.children[0].textContent;
    arr.isHero = i.children[1].textContent;
    arr.purpose = i.children[2].textContent;
    arr.category = i.children[3].textContent;
    arr.date = i.children[4].textContent;
    arr.author = i.children[5].textContent;
    arr.avatar = i.children[6].children[0].src;
    arr.title = i.children[7].textContent;
    arr.body = i.children[8].textContent;
    arr.img1 = i.children[9].children[0].src;
    arr.img2 = i.children[10].children[0].src;
    arr.project = i.children[11].textContent;
    myRecords.push(arr);
});
document.querySelector(".bs-example").innerHTML = '';
myRecords.shift();

return myRecords;
}

document.addEventListener("DOMContentLoaded", () => {
      let allBlogs = makeRecords();
      fetchTitles(allBlogs);
      fetchAuthor(allBlogs);
      fetchCategory(allBlogs);
      fetchProject(allBlogs);
      blog('all');
      // document.querySelector(".bs-example").innerHTML = '';
      // document.querySelector(".bs-example").innerHTML = '';
    })

</script>






<div class="bs-example" style="display:none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header clearfix">
                    <h2 class="pull-left">Users List</h2>
                </div>
<?php
    include_once 'db.php';
    $result = mysqli_query($conn,"SELECT * FROM brm");
?>
<?php
    if (mysqli_num_rows($result) > 0) {
?>



<table class='table table-bordered table-striped'>
    <tr>
        <td>id</td>
        <td>isHero</td>
        <td>purpose</td>
        <td>category</td>
        <td>date</td>
        <td>author</td>
        <td>avatar</td>
        <td>title</td>
        <td>content</td>
        <td>img1</td>
        <td>img2</td>
        <td>project</td>
    </tr>

<?php
  $i=0;
  while($row = mysqli_fetch_array($result)) {
?>

<tr id='rowBlog'>
  <td><?php echo $row["id"]; ?></td>
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
$i++;
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
</div>

<!-- buttons  -->
  <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-4  mx-auto d-block p-1">
        <div class="btn-group ms-3">
            <button class="btn btn-primary btn-sm text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Menu</button>
            <button id="btnPrev" class="btn btn-primary btn-sm text-light" data-bs-dismiss="offcanvas" aria-label="Prev">Prev</button>
            <input type="text" id="passW" style="width: 40px;">
            <button id="btnNext" class="btn btn-primary btn-sm text-light" data-bs-dismiss="offcanvas" aria-label="Next">Next</button>


        </div>
    </div>

          
  </div>


<!-- sidenav  -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">BRM Blog</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">

        <div class="wrapper">
          <a class="btn-main btn btn-dark text-decoration-none mb-2"href="index.php">Home</a>

            <div class="blog-head">
            </div>
            <div class="blog-controls">

              <!-- data json selection  -->
              <div class="url-source">
                <label for="urlData">N/A</label>
                <select id="urlData" name="urlData">
                  <option value="https://www.brmcontractors.net/assets/data/brm.json">BRM</option>
                </select>
               </div>
               <br>

               <div class="title-source">
                <label for="titleData">Title:</label>
                <select id="titleData" name="authorData">
                  <!-- <option value="all">All</option> -->
                </select>
              </div>  
              <br>

               <div class="category-source">
                 <label for="catData">Category:</label>
                 <select id="catData" name="catData">
                   <!-- <option value="all">All</option> -->
                 </select>
               </div>
               <br>
               
               <div class="project-source">
                <label for="projectData">Project:</label>
                <select id="projectData" name="projectData">
                  <!-- <option value="all">All</option> -->
                </select>
              </div>
              <br>

               <div class="author-source">
                 <label for="authorData">Author:</label>
                 <select id="authorData" name="authorData">
                   <!-- <option value="all">All</option> -->
                 </select>
               </div>
               <br>

           
            </div>
           
            <div class="button-group">
              <button role="button" id="renderUrl" onclick="renderUrl()" class="btn-main btn-black" data-bs-dismiss="offcanvas" aria-label="Close">Submit</button>    
            </div>

            <div class="container-fluid">
                <div class="btn-group mb-1 p-0">
                    <!-- <button id="btnReg" class="btn btn-danger btn-main" onclick="renderUrl(), renderBlogs('reg')">Reg</button> -->
                    <button id="btnRes" class="btn btn-primary btn-sm text-light" onclick="renderUrl(), renderBlogs('fade')">Fade</button>
                    <button id="btnRes" class="btn btn-primary btn-sm text-light" onclick="renderUrl(), renderBlogs('dark')">Dark</button> 
                </div>
                <div class="btn-group m-0 p-0">
                    <button id="btnRes" class="btn btn-primary btn-sm text-light" onclick="renderUrl(), renderBlogs('overlay')">Overlay</button>
                    <button id="btnRes" class="btn btn-primary btn-sm text-light" onclick="renderUrl(), renderBlogs('standard')">Standard</button>
                    <a id="btnRes" href="#contentTable" class="btn btn-primary btn-sm text-light" onclick="renderUrl(), renderBlogs('table')">Table</a>        
                </div>
            </div>
        </div>

      </div>

      </div>
  </div>


  </div>

  <!-- table insert  -->
  <div class="container-fluid" id="contentTable"></div>

  <!-- js insertion  -->
  <div class="row"> 
    <div id="blogs" class="blog-cards row flip-container"></div>
  </div>




  <div class="bg-dark py-1 container-fluid" id="bottom">

    <ul class="nav nav-pills">

        <li class="nav-item">
            <a class="nav-link text-light" href="https://blog.brmnow.com">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#">Top</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#bottom">Bottom</a>
        </li>
  
        
    </ul>

</div>
  

  <script src="js/php-app.js"></script>
</body>
</html>




