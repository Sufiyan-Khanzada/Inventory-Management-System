<?php $conn =mysqli_connect('localhost','root','','inventory') or die ("connection Failed");?>  
<?php $item_num=rand(1,100000);?>
<?php $msg=""; ?>
<?php 
if(isset($_POST['add-product'])){

$item_number = $_POST['item_number'];
$itemname = $_POST['itemname'];
$itemqty = $_POST['item_qty'];
$itemprice = $_POST['item_price'];
$itemstatus = $_POST['item_status'];

$query = "INSERT INTO products (Item_number,Item_name,Item_price,Item_qty,Item_status) VALUES ('$item_number','$itemname','$itemqty','$itemprice','$itemstatus')";

$result = mysqli_query($conn, $query); 

if($result){
// $msg="<div aria-live='polite' aria-atomic='true' style='position: relative; min-height: 200px;''>
//   <div class='toast' style='position: absolute; top: 0; right: 0;'>
//     <div class='toast-header'>
//       <img src='...' class='rounded mr-2' alt='...'>
//       <strong class='mr-auto'>Bootstrap</strong>
//       <small>11 mins ago</small>
//       <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
//         <span aria-hidden='true'>&times;</span>
//       </button>
//     </div>
//     <div class='toast-body'>
//       Hello, world! This is a toast message.
//     </div>
//   </div>
// </div>";
$msg="<div class='alert alert-success' role='alert'>
  Expense Successfully Inserted
</div>";
header("Location: http://localhost/Booking Software/addproduct.php");

}
else{

	die("Query Un successfully");
}


}




/////Update Code////
if(isset($_POST['edit-product'])){

$id=$_POST['id'];

$item_number = $_POST['item_number'];
$itemname = $_POST['itemname'];
$itemqty = $_POST['item_qty'];
$itemprice = $_POST['item_price'];
$itemstatus = $_POST['item_status'];



$query="UPDATE products SET Item_name='$itemname',Item_qty='$itemqty',Item_price='$itemprice',Item_status='$itemstatus' WHERE ID='$id'";



// $query = "INSERT INTO products (Item_number,Item_name,Item_price,Item_qty,Item_status) VALUES ('$item_number','$itemname','$itemqty','$itemprice','$itemstatus')";

$result = mysqli_query($conn, $query); 

if($result){
// $msg="<div aria-live='polite' aria-atomic='true' style='position: relative; min-height: 200px;''>
//   <div class='toast' style='position: absolute; top: 0; right: 0;'>
//     <div class='toast-header'>
//       <img src='...' class='rounded mr-2' alt='...'>
//       <strong class='mr-auto'>Bootstrap</strong>
//       <small>11 mins ago</small>
//       <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
//         <span aria-hidden='true'>&times;</span>
//       </button>
//     </div>
//     <div class='toast-body'>
//       Hello, world! This is a toast message.
//     </div>
//   </div>
// </div>";
$msg="<div class='alert alert-success' role='alert'>
  Item Product  Successfully Updated
</div>";
header("Location: http://localhost/Booking Software/update-product.php");

}
else{

  die("Query Un successfully");
}


}



//////////Delete Code//////
if(isset($_POST['remove-product'])){

$id=$_POST['id'];
$query="delete from products WHERE ID='$id'";



// $query = "INSERT INTO products (Item_number,Item_name,Item_price,Item_qty,Item_status) VALUES ('$item_number','$itemname','$itemqty','$itemprice','$itemstatus')";

$result = mysqli_query($conn, $query); 

if($result){
// $msg="<div aria-live='polite' aria-atomic='true' style='position: relative; min-height: 200px;''>
//   <div class='toast' style='position: absolute; top: 0; right: 0;'>
//     <div class='toast-header'>
//       <img src='...' class='rounded mr-2' alt='...'>
//       <strong class='mr-auto'>Bootstrap</strong>
//       <small>11 mins ago</small>
//       <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
//         <span aria-hidden='true'>&times;</span>
//       </button>
//     </div>
//     <div class='toast-body'>
//       Hello, world! This is a toast message.
//     </div>
//   </div>
// </div>";
$msg="<div class='alert alert-success' role='alert'>
  Item Product  Successfully Deleted
</div>";
header("Location: http://localhost/Booking Software/addproduct.php");

}
else{

  die("Query Un successfully");
}


}






?>
