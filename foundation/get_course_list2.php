<?php
require_once "config.php";
$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT prod-id as prod-id, course_id from course where prod-id LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
        $cid = $rs['course_id'];
        $cname = $rs['prod-id'];
        echo "$cname|$cid\n";
}
?><p><font color="#000000">recognize </font></p>