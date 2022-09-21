<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric
        if(is_numeric($_POST['val1']) && (is_numeric($_POST['val2']))){
            # test if calc is not null
            if(!empty($_POST['calc'])){
                    # switch statement for value of calc
                    switch($_POST['calc']){
                        case 'add':
                            $result = ($_POST['val1']) + ($_POST['val2']);
                            break;
                        case 'sub':
                            $result = ($_POST['val1']) - ($_POST['val2']);
                            break;
                        case 'mul':
                            $result = ($_POST['val1']) * ($_POST['val2']);
                            break;
                        case 'div':
                            $result = ($_POST['val1']) / ($_POST['val2']);
                            break;
                    }
                echo "Calculation result: $result";
            } else {
                echo "You didn't select any arithmentical operation. Please try again.";
            }
        } else { 
            echo "Invalid entry - please retry"; 
        }
    ?>
</body>
</html>