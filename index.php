<?php

include './components/news.php';

if(isset($_POST['title'])){

    if(isset($_FILES['image'])){
        $path = 'assets/img/news_items/'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']["tmp_name"], $path);
    }

    //create array from input
    $new_item = Array (
        time() => Array(
            "title" => $_POST['title'],
            "beschrijving" =>$_POST['beschrijving'],
            "image" => $path
        )
    );

    $old_items = getJsonContent();

    //merge arrays
    foreach($new_item AS $var=>$value){
        $old_items->$var = $value;
    }


    writeToJsonFile($old_items);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Add news</title>
</head>
<body> 
    <div class="container">
        <br>
    <form action="index.php" method="POST" enctype="multipart/form-data">
       <p> <input type="text" name="title"></p>
        <p><textarea name="beschrijving"></textarea></p>
        <p><input type="file" name="image"></p>
        <input type="submit">
    </form>

    <a tarPOST="_blank" href="./pages/news.php">News</a>
    </div>
</body>
</html>