
<?php
function printHeader($arg_1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ------------------------------------------------------------------- -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- WebSite Icon -->
        <link rel="shortcut icon" href="/src/icon/book.png" type="image/x-icon">
    <!-- Style link -->
        <link rel="stylesheet" href="/style/Reset.css">
        <link rel="stylesheet" href="/style/BaseStyle.css">
        <link rel="stylesheet" href="/style/Slider.css">
        <!-- Фрайм ворк -->
        <script src="/script/jquery-3.5.1.min.js"></script>
    <!-- ------------------------------------------------------------------- -->
        <title><?echo $arg_1;?></title>
    <!-- ------------------------------------------------------------------- -->
</head>
<?php
}
?>