<?php
$r=5;
$pi=3.14;
$a=$pi*$r*$r;
echo "area of cricle is:",$a;
echo "<br>";
function rect_area($length = 2, $width = 6)
{
    $area = $length * $width;
    echo "Area of Rectangale with length". $length. "& width" .$width . "is" .$area;
}
rect_area();
?>