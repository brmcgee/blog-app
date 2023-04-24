<?php

    $servername = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = "blog_app";
    $conn = mysqli_connect($servername, $username, $password, $dbname);


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

        
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO data (title, content) VALUES ('$title', '$content')";
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

