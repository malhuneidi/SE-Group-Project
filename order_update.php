<?php
Session_start(); //start session
include_once("config.php"); //include config file

//add product to session or create new one
if(isset($_POST["type"]) && $_POST["type"]=='add' && $_POST["order_qty"]>0)
{
    foreach($_POST as $key => $value){ //add all post vars to new_product array
        $new_item[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
    //remove unecessary vars
    unset($new_item['type']);
    unset($new_item['return_url']); 
    
    //we need to get product name and price from database.
    $statement = $mysqli->prepare("SELECT itemName, price FROM menu WHERE itemName=? LIMIT 1");
    $statement->bind_param('s', $new_item['itemName']);
    $statement->execute();
    $statement->bind_result($itemName, $price);
    
    while($statement->fetch()){
        
        //fetch product name, price from db and add to new_product array
        $new_item["itemName"] = $itemName; 
        $new_item["price"] = $price;
        
        if(isset($_SESSION["thai_cart"])){  //if session var already exist
            if(isset($_SESSION["thai_cart"][$new_item['itemName']])) //check item exist in products array
            {
                unset($_SESSION["thai_cart"][$new_item['itemName']]); //unset old array item
            }           
        }
        $_SESSION["thai_cart"][$new_item['itemName']] = $new_item; //update or create product session with new item  
    } 
}


//update or remove items 
if(isset($_POST["order_qty"]) || isset($_POST["remove_code"]))
{
    //update item quantity in product session
    if(isset($_POST["order_qty"]) && is_array($_POST["order_qty"])){
        foreach($_POST["order_qty"] as $key => $value){
            if(is_numeric($value)){
                $_SESSION["thai_cart"][$key]["order_qty"] = $value;
            }
        }
    }
    //remove an item from product session
    if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
        foreach($_POST["remove_code"] as $key){
            unset($_SESSION["thai_cart"][$key]);
        }   
    }
}

//back to return url
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);
