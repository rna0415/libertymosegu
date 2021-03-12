<?php

$conn = mysqli_connect(
    'localhost','u790965067_Mgu','Mosesgu0415!','u790965067_CSIS410_MoseGu');
$sql = "
    INSERT INTO admin
    (Userinfo, Contact, Username)
    VALUES(
        '{$_POST['userinfo']}',
        '{$_POST['contact']}',
        '{$_POST['username']}'
        )
";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo "cannot saved";
    error_log(mysqli_error($conn));
} else {
    echo "successfully saved"."<br><br>";
    echo "<a href='CMS_Management.php'>back</a>";
    echo "<br><br>$sql";
}
?>