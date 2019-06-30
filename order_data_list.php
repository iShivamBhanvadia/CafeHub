<?php
include "dbconf.php";
$result = mysqli_query($con,"SELECT * FROM place_order order by table_no ASC");
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Table-No: " . $row["table_no"]. " -Order Name: " . $row["order_name"]. "-Order ID " . $row["order_id"]. "-contact no " . $row["pr_id"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>