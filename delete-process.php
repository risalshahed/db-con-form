<?php
include_once 'dataset.php';
$sql = "DELETE FROM regForm WHERE id = '" . $_GET["id"] . "'";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "<p>Record deleted successfully</p>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>