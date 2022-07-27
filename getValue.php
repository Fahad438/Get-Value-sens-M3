<?php
$conn = mysqli_connect('localhost','id19323009_fahadksm','Khalid767686!','id19323009_smartmethod') or die("Connection failed");
    
 $x=false;   
//نقوم بسحب قيمة الحساس هنا 
$sensor_value = $_GET['sens'];


print($sensor_value);
  


//if($x== "true"){
//نقوم بتخزين القيمة التي تم سحبها الي قاعدة البيانات والجدول المختار
$query = "INSERT INTO sensor_value (id, value) VALUES (NULL, $sensor_value)";
 
//للتاكد اذا كان هناك اي خطا في الاستعلام    
$result = $conn->query($query);
    if ($result === FALSE) {
        
    print("incorrect SQL");
    
    }else{
        print("Done"); 

}
?>