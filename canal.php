<?php
$st=$_GET["st"];
$ch=$_GET["ch"];
$res=$_GET["r1"].'x'.$_GET["r2"];
$loc='Location: https://v-'.$st.'.mybtv.net/live/'.$ch.'/'.$res.'.m3u8?env=prd&uid=-1&x=1';
        header("Content-type: text/plain");
        header($loc);
?>
