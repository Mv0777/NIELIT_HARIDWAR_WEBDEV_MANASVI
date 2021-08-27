
<?php
include 'database.php';
if(isset($_POST['submit']))
{
$source = $_POST['source'];
$destination = $_POST['destination'];
$departure = $_POST['departure'];
$coming = $_POST['coming'];
$numberofseats= $_POST['numberofseats'];
$sql = "INSERT INTO ab (source,destination,departure,coming,numberofseats)
VALUES ('$source','$destination','$departure',$coming,'$numberofseats')";
if (mysqli_query($con, $sql)) {
echo "New record created successfully !";
} else {
echo "Error: " . $sql ." ". mysqli_error($con);
}
mysqli_close($con);
}
?>