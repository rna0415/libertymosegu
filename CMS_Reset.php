<!doctype html>
<?php
$conn = mysqli_connect(
    'localhost','u790965067_Mgu','Mosesgu0415!','u790965067_CSIS410_MoseGu');

$sql = "
    DELETE FROM admin
";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo "delete fail";
    error_log(mysqli_error($conn));
} else {
    echo "successfully deleted"."<br><br>";
    echo "<a href='CMS_Management.php'>back</a>";
    echo "<br><br>$sql";
}
?>