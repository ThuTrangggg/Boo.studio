<?php

function database(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "nhom14";
    $db = mysqli_connect($host, $user, $password, $database);
    mysqli_set_charset($db, 'UTF8');
    if (mysqli_connect_error()){
        echo "Connection Fail: ".mysqli_connect_error();
        exit;
    }
    return $db;
}
function connect($sql)
{
    $db = database();
    $connect = mysqli_query($db,$sql) or die (mysqli_error($db));
    return $connect;
}

function action($sql){
    $db = database();
    return $db->query($sql);
}

function count_query($sql)
{
    $result = connect($sql);
    $num = mysqli_num_rows($result);
    return $num;
}

function data($sql,$detail=null)
{
    $connect = connect($sql);
    $arrayReturn = array();
    while ($row = mysqli_fetch_assoc($connect))
    {
        $arrayReturn[] = $row;
    }
    if($detail){
        return $arrayReturn[0];
    }else{
        return $arrayReturn;
    }
}

?>