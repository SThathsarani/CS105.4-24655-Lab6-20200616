<?php
function CalElectricityBill($Units)
{
    if($units<=50)
    {
        $Bill=$Units*3.50;
    }
    elseif($units<=100)
    {
        $Bill = 50 * 3.50 + ($Units - 50) * 4.00
    }
    elseif($units<=150)
    {
        $Bill = 50 * 3.50 + 50 * 4.00 + ($Units - 100) * 5.20;
    }
    else
    {
        $Bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($Units - 150) * 6.50;
    }

    return $Bill;
}

$units=77;
$electricity_bill=CalElectricityBill($units);
echo "Units consumed ".$units."\n";
echo "Electricity Bill in Rs.".$Bill;
?>