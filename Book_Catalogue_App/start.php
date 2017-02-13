<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>My Library App
</title>
</head>  
<body>
  
  <table >
    <tr>
      <th    style="width:600px;">Book_Name </th>
      <th    style="width:500px;">Date_Of_Issue/Buying</th>
      <th    style="width:500px;" >Type_Of_Book</th>
      <th    style="width:1200px;">Description</th>
    </tr>

<?php
  require('connect.php'); 
  require('assign.php');
  $itemsQuery = $db->prepare("SELECT id,Book_Name,done,Date_Of_Issue,Type_Of_Book,Description FROM my_books_library");
  $itemsQuery->execute();
  $itemsList = $itemsQuery->fetchAll();
?>

<h1 class="header">
My Book Library</h1>
<?php
    if(!empty($itemsList))  
   {
       foreach($itemsList as $item)
       {
          if(!$item['done'])
            {
              echo "<tr>";
              
              echo "<td>";
              echo $item["Book_Name"];
              echo "</td>";
              echo "<td>";
              echo $item["Date_Of_Issue"];
              echo "</td>";
              echo "<td>";
              echo $item["Type_Of_Book"];
              echo "</td>";
              echo "<td>";
              echo $item["Description"];
              echo "</td>";
              echo "<td>";
              echo "<a href= \"done.php?as=done&item={$item["id"]}\"> Read_It </a>";
              echo "</td>";
              
              echo "</tr>";
            }
        
       } 
   }
        
 ?> 
</table>

<form class="add" action="add_item.php" method="post" >
<input type="text" name="Book_Name" placeholder="Add a new Book here...." >
<input type="text" name="Type_Of_Book" placeholder="Add type of book here...." >
<input type="text" name="Description" placeholder="Add desciption of  Book here....">
<input type="submit" value="Add" class="submit">
</form>


</body>
</html>

