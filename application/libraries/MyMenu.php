<?php
class Mymenu{

function show_menu(){

$obj =& get_instance();
$obj->load->helper('url');

$menu = "<ul>";
$menu .= "<li>";
$menu .= anchor("books/main","List of Books");
$menu .= "</li>";
$menu .= "<li>";      
$menu .= anchor("books/input","Input Books");        
$menu .= "</li>";     
$menu .= "</ul>";  
  
  return $menu;
   }
}

?>