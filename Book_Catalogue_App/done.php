<?php
require_once 'assign.php';


   $as  =$_GET['as'];
  
   $item=$_GET['item'];
   
    


switch($as)  {
   case  'done':
   
     
    $doneQuery = $db->prepare(" UPDATE my_books_library SET done = '1' WHERE id = '$item' ");
        
     $doneQuery->execute();
     
         
    }


  header('Location:start.php');
?>