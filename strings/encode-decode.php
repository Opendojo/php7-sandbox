<?php
include("../header.php");

$in = $_POST['in'];

?>
<div class="form-main">
    <h1>String Encode Decode</h1>
    <form method="POST">
        <textarea name="in"><?= $in ?></textarea>
        <input type="submit" name="submit" value="submit" />
    </form>
<?php

$functionsList = array(
    'addslashes',
    'stripslashes',
    'urldecode',
    'urlencode',
    'utf8decode',
    'utf8encode',
    'base64_decode',
    'base64_encode',
    'rawurldecode',
    'rawurlencode',
    'json_decode',
    'json_encode'
);

foreach ($functionsList as $function) {
    if (function_exists($function)) {
        print("<h2>".ucfirst($function)."</h2>\n");
        print("<textarea>".call_user_func($function, $in)."</textarea>");
    }
}
?>
</div>
<?php
include("../footer.php");
