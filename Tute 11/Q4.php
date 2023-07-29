<?php
function DayOfWeek($num)
{
    switch($num)
    {
        case 1:
            $day="Monday";
            break;
        case 2:
            $day="Tuesday";
            break;
        case 3:
            $day="Wednesday";
            break;
        case 4:
            $day="Thurday";
            break;
        case 5:
            $day="Friday";
            break;

        case 6:
            $day="Saturday";
            break;
        case 7:
            $day="Sunday";
            break;
        default:
        $day="Invalid input!";
        break;
    }
    return $day;
}
$num=3;
$DAY = DayOfWeek($num);
echo "Number: " . $num . "\n";
echo "Day of the Week: " . $DAY . "\n";
?>