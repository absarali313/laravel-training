<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height:100vh;
            margin:0

        }
    </style>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = false;
    $message = "";

    if($read){
        $message = "You have read $name";
    } else {
        $message = "You have read not this book";
    }
    ?>
    <h1>
        <?php  echo $message  ?>
    </h1>
</body>

</html>