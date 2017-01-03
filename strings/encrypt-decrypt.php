<?php
include("../header.php");

$in = $_POST['in'];
$salt = $_POST['salt'];

?>
<div class="form-main">
    <h1>String Encode Decode</h1>
    <form method="POST">
        <textarea name="in"><?= $in ?></textarea>
        <input type="text" name="salt" value="<?= $salt ?>" />
        <input type="submit" name="submit" value="submit" />
    </form>
<?php

$functionsList = array(
    'crypt'=>array($in, $salt),
    'md5'=>array($in),
    'crc32'=>array($in),
    'sha1'=>array($in),
);

foreach ($functionsList as $function => $params) {
    if (function_exists($function)) {
        print("<h2>".ucfirst($function)."</h2>\n");
        print("<textarea>".call_user_func_array($function, $params)."</textarea>");
    }
}

foreach (hash_algos() as $algo) {
    print("<h2>Hash algo:".ucfirst($algo)."</h2>");
    print("<textarea>".hash($algo,$in)."</textarea>");
}

?>
</div>
<?php
include("../footer.php");
