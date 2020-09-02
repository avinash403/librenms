<?php

$scale_min = 1000;

require 'includes/html/graphs/common.inc.php';

$icecast_rrd = rrd_name($device['hostname'], array('app', 'icecast', $app['app_id']));

if (rrdtool_check_rrd_exists($icecast_rrd)) {
    $rrd_filename = $icecast_rrd;
}


$ds = 'kbyte';

$colour_area = 'F0E68C';
$colour_line = 'FF4500';

$colour_area_max = 'FFEE99';

$graph_max = 1000000;

$unit_text = 'bytes';

require 'includes/html/graphs/generic_simplex.inc.php';

