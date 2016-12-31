<?php

print('<form method="POST">');
print('<textarea name="in"></textarea>');
print('<input type="submit" name="submit" value="submit" />');
print('</form>');

print('<h2>urldecode</h2>');
print('<textarea>'.urldecode($_POST['in']).'</textarea>');

print('<h2>urlencode</h2>');
print('<textarea>'.urlencode($_POST['in']).'</textarea>');

print('<h2>utf8encode</h2>');
print('<textarea>'.utf8_encode($_POST['in']).'</textarea>');

print('<h2>utf8decode</h2>');
print('<textarea>'.utf8_decode($_POST['in']).'</textarea>');



