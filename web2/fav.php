<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        if ((isset($_POST['username'])) && (!ctype_space($_POST['username'])) && (!empty($_POST['username']))){
            if ((isset($_POST['color'])) && (!empty($_POST['color']))){
                if((isset($_POST['dish'])) && (!ctype_space($_POST['dish'])) && (!empty($_POST['dish']))){
                    echo "Thanks for your selection ", ($_POST['username']);
                    echo "<br>You really enjoy ", ($_POST['dish']);
                    echo "<br>- especially with a nice ", ($_POST['color']), " wine";
                } else{
                    echo "Something went wrong. It seems that you've forgot to put your favorite dish. :(";
                }
            } else{
                echo "Something went wrong. It seems that you've forgot to choose the color of the wine. :(";
            }
        } else { 
            echo "Something went wrong. It seems that you've forgot to put your name. :(";
        }
    ?>
</body>
</html>