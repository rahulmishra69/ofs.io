<?php 
require('connection.inc.php');
class add_to_cart
{
    function addproduct($pid,$qty)
    {
        $_SESSION['cart'][$pid]['qty']=$qty;

    } function updateproduct($pid, $qty)
    {
        if(isset( $_SESSION['cart'][$pid]))
        {
            $_SESSION['cart'][$pid]['qty']=$qty;
        }
        
    } function removeroduct($pid)
    {
        if(isset( $_SESSION['cart'][$pid]))
        {
            unset($_SESSION['cart'][$pid]);
        }
    }
    function emptyproduct()
    {
        unset($_SESSION['cart']);
}
}
?>