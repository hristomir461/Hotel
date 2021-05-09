<?php

require_once ("db.php");
require_once ("component.php");

$con = Createdb();

// create button click
if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();

}

function createData(){
    $room_name = textboxValue("room_name");
    $room_price = textboxValue("room_price");
    $bed_price = textboxValue("bed_price");//price
    $breakfast_price = textboxValue("breakfast_price");
    $halfBoard_price = textboxValue("halfBoard_price");
    $fullBoard_price = textboxValue("fullBoard_price");//price

    if($room_name && $room_price && $bed_price && $breakfast_price && $halfBoard_price && $fullBoard_price){

        $sql = "INSERT INTO edit_rooms (room_name, room_price, bed_price, breakfast_price, halfBoard_price, fullBoard_price) 
                        VALUES ('$room_name','$room_price','$bed_price','$breakfast_price','$halfBoard_price','$fullBoard_price)";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Record Successfully Inserted...!");
        }else{
            echo "Errooor";
        }

    }else{
            TextNode("error", "Provide Data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// get data from mysql database
function getData(){
    $sql = "SELECT * FROM edit_rooms";

    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// update dat
function UpdateData(){
    $room_id = textboxValue("room_id");
    $room_name = textboxValue("room_name");
    $room_price = textboxValue("room_price");
    $bed_price = textboxValue("bed_price");//price
    $breakfast_price = textboxValue("breakfast_price");
    $halfBoard_price = textboxValue("halfBoard_price");
    $fullBoard_price = textboxValue("fullBoard_price");//price

    if($room_name && $room_price && $bed_price && $breakfast_price && $halfBoard_price && $fullBoard_price){
        $sql = "
                    UPDATE edit_rooms SET room_name='$room_name', room_price = '$room_price', bed_price = '$bed_price', breakfast_price = '$breakfast_price', halfBoard_price = '$halfBoard_price', fullBoard_price = '$fullBoard_price'   WHERE id='$room_id';                    
        ";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Data Successfully Updated");
        }else{
            TextNode("error", "Enable to Update Data");
        }

    }else{
        TextNode("error", "Select Data Using Edit Icon");
    }


}


function deleteRecord(){
    $room_id = (int)textboxValue("room_id");

    $sql = "DELETE FROM edit_rooms WHERE id=$room_id";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","Record Deleted Successfully...!");
    }else{
        TextNode("error","Enable to Delete Record...!");
    }

}


function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 3){
                buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}


function deleteAll(){
    $sql = "DROP TABLE edit_rooms";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","All Record deleted Successfully...!");
        Createdb();
    }else{
        TextNode("error","Something Went Wrong Record cannot deleted...!");
    }
}


// set id to textbox
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['id'];
        }
    }
    return ($id + 1);
}








