<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text-Editor</title>
    <style>
        body{
            background-color:#8bfade;
        }
       .container,h2 {
            text-align: center;   
        }
    </style>
</head>
<body>
    <h2>Text Editor...</h2>
    <div class="container">
        <form action="" method="post">
            <textarea name="content" id="content" rows="13" cols="64" style="background-color:fff;"><?php if(isset($_POST['content'])) echo htmlspecialchars($_POST['content']); ?></textarea><br>
            <input type="submit" name="bold" value="B" style="font-weight:900; background-color:cyan;font-size:15px;">
            <input type="submit" name="italic" value="Italic"style="font-weight:500; background-color:cyan;font-size:15px;">
            <input type="submit" name="underline" value="Underline"style="font-weight:500; background-color:cyan;font-size:15px;">
            <input type="submit" name="uppercase" value="UPPERCASE"style="font-weight:500; background-color:cyan;font-size:15px;">
            <input type="submit" name="highlight" value="Highlight"style="font-weight:500; background-color:yellow;font-size:15px;">
            <input type="submit"name="fontsize" value="Font Size"style="font-weight:500; background-color:cyan;font-size:15px;">
            <input type="submit" name="save" value="Save"style="font-weight:500; background-color:lime;font-size:15px;">
        </form>

        <?php
        echo"<br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['bold'])) {
                $content = $_POST['content'];
                $content = "<b>$content</b>";
                echo $content;
            } elseif(isset($_POST['italic'])) {
                $content = $_POST['content'];
                $content = "<i>$content</i>"; 
                echo $content;
            } elseif(isset($_POST['underline'])) {
                $content = $_POST['content'];
                $content = "<u>$content</u>"; 
                echo $content;
            } elseif(isset($_POST['uppercase'])) {
                $content = $_POST['content'];
                $content = strtoupper($content); 
                echo $content;
            } elseif(isset($_POST['highlight'])) {
                $content = $_POST['content'];
                $content = "<mark>$content</mark>"; 
                echo $content;
            }elseif(isset($_POST['fontsize'])) {
                    $content = $_POST['content'];
                    $content = "<div style='font-size:50px;'>$content</div>"; 
                    echo $content;
            } elseif(isset($_POST['save'])) {
                $content = $_POST['content'];
            /*
                $file = 'saved_content.txt';
                file_put_contents($file, $content); // Save content to a file
                
            */
                echo "Saved successfully!!!";
            }
        }
        ?>
    </div>
</body>
</html>
