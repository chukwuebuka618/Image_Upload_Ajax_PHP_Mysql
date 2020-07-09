<?php
include('database_connection.php');
$query = "SELECT * FROM tbl_image ORDER BY image_id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$number_of_rows = $statement->rowCount();
$output = '';
$output .= '
 <table class="table table-bordered table-striped">
  <tr>
   <th>ISBN</th>
   <th>Title</th>
   <th>Category</th>
   <th>Author_Artist</th>
   <th>Publisher</th>
   <th>Price</th>
   <th>Stock</th>
   <th>Image</th>
   <th>File Name</th>
   <th>Image Description</th>
   <th>Edit</th>
   <th>Delete</th>
  </tr>
';
if($number_of_rows > 0)
{
 $count = 0;
 foreach($result as $row)
 {
  $count ++; 
  $output .= '
  <tr>
   <td>'.$row["ISBN"].'</td>
   <td>'.$row["Title"].'</td>
   <td>'.$row["Category"].'</td>
   <td>'.$row["Author_Artist"].'</td>
   <td>'.$row["Publisher"].'</td>
   <td>'.$row["Price"].'</td>
   <td>'.$row["Stock"].'</td>
   <td><img src="files/'.$row["image_name"].'" class="img-thumbnail" width="100" height="100" /></td>
   <td>'.$row["image_name"].'</td>
   <td>'.$row["image_description"].'</td>
   <td><button type="button" class="btn btn-warning btn-xs edit" id="'.$row["image_id"].'">Edit</button></td>
   <td><button type="button" class="btn btn-danger btn-xs delete" id="'.$row["image_id"].'" data-image_name="'.$row["image_name"].'">Delete</button></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
  <tr>
   <td colspan="6" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;
?>