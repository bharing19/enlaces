<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.9.5
 */

date_default_timezone_set('UTC');
$starttimefull = date('c');
$endtimefull = date('c', mktime(date("H")+8, 0, 0, date("m") , date("d"), date("Y")));
$starttime = substr($starttimefull,0,13);
$endtime = substr($endtimefull,0,13);
if (isset ($_GET['channel']))
{
$get = ($_GET['channel']);
if ( $get == "WCBS" ) {
header("Location: https://v-ny.mybtv.net/event/545/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WNBC" ) {
header("Location: https://v-ny.mybtv.net/event/548/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WNBC2" ) {
header("Location: https://v-ny.mybtv.net/event/549/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WNYW" ) {
header("Location: https://v-ny.mybtv.net/event/550/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WABC" ) {
header("Location: https://v-ny.mybtv.net/event/554/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WPIX4" ) {
header("Location: https://v-ny.mybtv.net/event/565/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WNET" ) {
header("Location: https://v-ny.mybtv.net/event/567/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WNET2" ) {
header("Location: https://v-ny.mybtv.net/event/568/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WNYE" ) {
header("Location: https://v-ny.mybtv.net/event/591/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WNYE2" ) {
header("Location: https://v-ny.mybtv.net/event/592/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WNYE3" ) {
header("Location: https://v-ny.mybtv.net/event/593/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "WFUT" ) {
header("Location: https://v-ny.mybtv.net/event/643/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "KMEX" ) {
header("Location: https://v-la.mybtv.net/event/178/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "KFTR" ) {
header("Location: https://v-la.mybtv.net/event/168/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
elseif ( $get == "KVEA" ) {
header("Location: https://v-la.mybtv.net/event/267/1280x720.m3u8?start_time=$starttime&end_time=$endtime");
exit;
}
}
else {
exit;
}
