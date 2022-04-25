<?php

    function pr($arr)
    {
        echo '<pre>';
        print_r($arr);
    }
    function prx($arr)
    {
        echo '<pre>';
        print_r($arr);
        die();
    }

function get_safe_value($con, $str)
{
       if($str!='')
       {
        return mysqli_real_escape_string($con, $str);
       }
}
function get_product($con, $type='', $limit='', $cat_id='')
{
    $sql="SELECT * FROM product where status=1 AND categories_id = $cat_id";
    if($cat_id!='')
    {
        $sql.="AND categories_id = $cat_id";
    }
    if($type=='latest')
    {
        $sql.="order by id desc";
    }
    if($limit!=='')
    {
        $sql.="limit $limit";
    }
    $con = mysqli_connect("localhost", "root","","ofs");
    $sql="SELECT * FROM product where status=1";    
    $res = mysqli_query($con, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($res))
    {
        $data[]=$row;
    }
    return $data;
}
?>