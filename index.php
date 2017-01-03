<?php
include("header.php");

$links = array();
$links[] = array('href'=>'strings/encode-decode.php', 'title'=>'Strings Encode Decode');
?>
<h1>code.sbw.be</h1>
<p>A list of some usefull code/sample. A small sandbox of some php stuff.</p>
<ul class="list-home">
<?php
foreach ($links as $link) {
    print("<li><a href='".$link['href']."'>".$link['title']."</a></li>");
}
?>
</ul>
<?php
include("footer.php");
