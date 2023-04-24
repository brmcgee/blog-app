<?php
    include_once('db.php');


    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
                Not able to establish Database Connection</h3>";
    }


    // select all records from db accesibly by $query 
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);


    // create new post insert into DB
    // if request contains new_post in url from method=get run logic 
    if(isset($_REQUEST["new_post"])){
   
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        // Check if image file is a actual image or fake image
        
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }

        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $img1 = $target_file;

        $sql = "INSERT INTO data (title, content, img1) VALUES ('$title', '$content', '$img1')";
        mysqli_query($conn, $sql);

        // location where to be directed to after sql query 
        header("Location: index.php?info=added");
        exit();

    }

   

    // view selected post id from DB
    // if request contains id in url from view button href run logic 
    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // edit post and update DB 
    // if request contains edit button name return on request
    if(isset($_REQUEST['update'])) {

        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];


        $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id ";
        mysqli_query($conn, $sql);

        // location where to be directed to after sql query 
        header("Location: index.php?info=updated");
        exit();
    };

    // delete post and update DB 
    // if request contains edit button name return on request
    if(isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);

                // location where to be directed to after sql query 
                header("Location: index.php?info=deleted");
                exit();
    }


?>

