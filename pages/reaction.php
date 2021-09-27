<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaction</title>
</head>
<body>
<form action="reaction.php" method="GET">
       <p> <input type="text" name="author"></p>
        <p><textarea name="reaction"></textarea></p>
        <!-- stuurt id van nieuwitem mee met de GET -->
        <p><input type="hidden" name="id" value="<?=$_GET['id']?>"></p>
        <input type="submit">
    </form>
</body>
</html>