<?php
require('assign.php');
require('connect.php');

   $Book_Name = $_POST["Book_Name"]; 
   $Type_Of_Book = $_POST["Type_Of_Book"];
   $Description = $_POST["Description"];

if(!empty($Book_Name))  {
  $addedQuery =$db->prepare("INSERT INTO my_books_library (Book_Name, done ,Date_Of_Issue,Type_Of_Book,Description)
  VALUES (:Book_Name,0, NOW(),:Type_Of_Book , :Description)");
   $addedQuery->execute([':Book_Name'=>$Book_Name,':Type_Of_Book'=>$Type_Of_Book,':Description'=>$Description]);
 
   
}

  header('Location:start.php');
?>
