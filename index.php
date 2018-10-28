<!DOCTYPE HTML>
<html>
<style type="text/css">
    .exchange {
        height:180px; width:250px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .exchange input {
        padding:5px; margin:5px
    }
</style>
<body>
<form method="post">
    <div class="exchange">
        <h2>Exchange Money </h2>
        <input type="text" name="usd" size="30"  placeholder="usd" />
        <input type="submit" value="Exchange"/>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $USD = $_POST["usd"];
    $rate = 23000;
    $VND = $USD * $rate;
    echo $VND . ' VND';
}
?>
</body>
</html>