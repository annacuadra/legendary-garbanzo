<?php
    if(isset($_COOKIE['views'])){
        $count = $_COOKIE['views'];
        $num_visits ++;
    }
    setcookie('views', $num_visits);
?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>
