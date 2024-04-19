<?php
$url = 'http://www.college.com/Science/CS.php';

$headers = get_headers($url, 1);

$parsed_url = parse_url($url);

echo "Scheme: " . $parsed_url['scheme'] . "\n";
echo "Host: " . $parsed_url['host'] . "\n";
echo "Path: " . $parsed_url['path'] . "\n";
?>