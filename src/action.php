<?php
session_start();

$action=$_POST['action'];
// STORE ACCORDING 1 RUPEE
$_SESSION['currency']=array("KWT"=>0.0037,"GBP"=>0.0098 ,"EUR"=>0.011 ,"RUPEE"=>1);


switch($action)
{
    case "upper" : uppercase();break;
    case "lower" : lowercase();break;
    case "filter" :filtertext();break;
    case "currency_convert" :convert($_POST['from'],$_POST['to'],$_POST['amount']);break;
    case "select_category" :selectCategory();
    case "select_item":selectItem();break;
    case "select_id":selectid();break;
    default : echo "invalid action";
}
function uppercase()
{
    $text=$_POST['text'];
    echo strtoupper($text);
}
function lowercase()
{
    $text=$_POST['text'];
    echo strtolower($text);
}
function filtertext()
{

    $str=$_POST['text'];
    $ans="";
    for($i = 0; $i < strlen($str); $i++){
        if(ord($str[$i])<=127)
        {
            $ans=$ans.$str[$i];
        } 
    }
    echo $ans;
}
function convert($from,$to,$amount){
    // convert any currency to rupee first
$val=$amount/$_SESSION['currency'][$from];
// convert rupee to any currency
$res=$val*$_SESSION['currency'][$to];
echo $res;
}

function selectCategory(){
    include "products.php";
    $category=$_POST['category'];
    $str="";
    foreach($products as $ctgry => $arr)
    {
        if($ctgry==$category)
        {
            foreach($arr as $key=>$val)
            {
               $str.="<option value='$key'>$key</option>";
            }
        }

    }
    echo $str;

}

function selectItem(){
    include "products.php";
    $item=$_POST['item'];
    $category=$_POST['category'];
    $str="";
    foreach($products[$category][$item] as $ctgry => $arr)
    {
    $str.="<option value='$arr[id]'>$arr[id]</option>";            

    }
    echo $str;
}

function selectid(){
    include "products.php";
    $item=$_POST['item'];
    $category=$_POST['category'];
    $id=$_POST['id'];
    $str="<tr>";
    
    foreach($products[$category][$item] as $ctgry => $arr)
    {
        if($arr['id']==$id)
    $str.="<td>$arr[id]</td><td>$arr[name]</td><td>$arr[brand]</td>";            

    }
    $str.="</tr>";
    echo $str;
}