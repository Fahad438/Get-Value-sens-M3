<?php
$conn = mysqli_connect('localhost','id19323009_fahadksm','Khalid767686!','id19323009_smartmethod') or die("Connection failed");

$sqlView = "SELECT id,value FROM sensor_value";

$result = mysqli_query($conn, $sqlView);
if (!$result) {
    die("Error in query");
}

/* عرض البيانات */
while ($row = mysqli_fetch_assoc($result)) {
    echo '<li>' . $row['id'] . ' = ' . $row['value'] . '</li>';
}

/*  */
if (!mysqli_query($conn, $sqlView)) {
}