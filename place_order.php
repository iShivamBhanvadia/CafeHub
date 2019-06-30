
<?php
include "dbconf.php";
echo "Your Order Placed";

 echo "  Contact no.: ".$_POST["pr_id"];
// echo '<br/>';
 echo "  Table no.: ".$_POST["table_no"];


// echo $_POST["order"];
// echo $_POST["table_no"];
$result = mysqli_query($con,"SELECT * FROM order_list WHERE order_id='".$_POST["order"]."'");
$row = mysqli_fetch_assoc($result);
echo "  order: ".$row["order_name"];
mysqli_query($con,"INSERT INTO place_order (pr_id, table_no, order_id, order_name) VALUES ('".$_POST["pr_id"]."', '".$_POST["table_no"]."', '".$_POST["order"]."', '".$row["order_name"]."')");

?>


