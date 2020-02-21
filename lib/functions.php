<?php
function get_connection(){
    $config = require 'config.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );

    return $pdo;
}
function get_fruits(){

    $result = get_connection()->query('SELECT * from product');

    return $result->fetchAll();
}

function get_comments($par){
    if($par == true)
        $result = get_connection()->query("SELECT * FROM comment WHERE visible = true ");
    else
        $result = get_connection()->query("SELECT * FROM comment WHERE visible = false ");

    return  $result->fetchAll();
}

function add_comment($name, $email, $text){
    $sql = "INSERT INTO comment (name, email, text, visible) VALUES ('". $name ."','". $email ."','". $text ."', '0')";
    if (get_connection()->query($sql)) {
        return true;
    }
    else{
        return false;
    }
}

function approve_comment($id){
    $sql = "UPDATE comment SET visible = 1 WHERE id = ". $id ." ";
    if (get_connection()->query($sql)) {
        return true;
    }
    else{
        return false;
    }
}

function delete_comment($id){
    $sql = "DELETE FROM comment WHERE id = ". $id ." ";
    if (get_connection()->query($sql)) {
        return true;
    }
    else{
        return false;
    }
}
