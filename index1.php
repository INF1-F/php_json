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
    <!-- 
        Wanneer de gebruiker op submit drukt word de data naar news.handler.php gestuurd.
        De reden dat we POST gebruiken is zodat we een afbeelding kunnen uploaden
     -->
    <form action="./components/news.handler.php" method="POST" enctype="multipart/form-data">
       <p> <input type="text" name="title"></p>
        <p><textarea name="beschrijving"></textarea></p>
        <p><input type="file" name="image"></p>
        <input type="submit">
    </form>

    <a tarPOST="_blank" href="./pages/news.php">News</a>
    </div>
</body>
</html>