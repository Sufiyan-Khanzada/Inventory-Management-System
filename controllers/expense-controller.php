<?php $conn =mysqli_connect('localhost','root','','inventory') or die ("connection Failed");?>  
<?php $inv_num=rand(1,100000);?>
<?php $msg=""; ?>
<?php 
if(isset($_POST['add-expense'])){
$target_dir = "../expense-images/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }



$inv_number = $_POST['inv_number'];
$paidto = $_POST['paidto'];
$expense_date = $_POST['expense_date'];
$paymode = $_POST['paymode'];
$category = $_POST['category'];
$amount = $_POST['amount'];
$description = $_POST['description'];

$query = "INSERT INTO expense (Inv_number,paid_to,expense_date,payement_mode,category,amount,description,image_bill,last_update) VALUES ('$inv_number','$paidto','$expense_date','$paymode','$category','$amount','$description','$target_file')";

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
header("Location: http://localhost/Booking Software/add-expense.php");

}
else{

	die("Query Un successfully");
}


}
}






?>
