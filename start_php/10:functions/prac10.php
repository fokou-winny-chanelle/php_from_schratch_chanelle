<?php 
    function getDiscountedPrice($price,$discount)
    {
        echo "iniial price : $price<br>";
        echo "percentage discounted : $discount %";
        echo "<br>discouted price : ";
        $discounted_price = $price - ( ($price * $discount) / 100 );
        return $discounted_price;
    }
    echo  getDiscountedPrice(10000,20);
?>