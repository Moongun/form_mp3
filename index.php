<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MP3 form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
<div id="content">
        <h1>MP3 form</h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <!--<label for="title">tytuł:</label>-->
                <input type="text" name="title" placeholder="wpisz tytuł" required>
            </div>
            <div>
                <!--<label for="author">wykonawca:</label>-->
                <input type="text" name="author" placeholder="wpisz wykonawcę" required>
            </div>
            <div>
                <!--<label for="album">album:</label>-->
                <input type="text" name="album" placeholder="wpisz album"required>
            </div>
            <div>
                <!--<label for="song">mp3:</label>-->
                <input type="file" accept="audio/mp3" name="song" required>
            </div>
            <input type="submit" name="submit" value="wyślij mp3">
        </form>

        <?php
        include 'src/songAdd.php';
        ?>
</div>
    </body>
</html>
