<?php
// 1a
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a..b/ui';
$matches = array();
$count = preg_match_all($regexp, $str, $matches);
echo "Сoincidences: ";
foreach ($matches[0] as $elem) echo $elem, " ";
echo "<br>";
// 1b
$str = 'a1b2c3';
$regexp = '/[0-9]/u';
$str = preg_replace_callback($regexp, 'pow3', $str);
echo 'String with cubes: ', $str;
function pow3($int) { return $int[0]**3; }
?>
<title>Regular</title>
<form action="index.php" method="get">
    <input type="submit" value="Back">
</form>
