<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
   <ul> 
    <?php 
        for ($i=1; $i < 41; $i=$i+2) { 
            echo "<li>$i</li>";
            if (($i>=39)) {
               echo "<li>...</li>";
            }
        
    }

    ?>
    </ul>
</body>
</html>
