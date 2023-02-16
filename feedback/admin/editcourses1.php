<?php
include("./db.php");
if(isset($_POST["edit_course"])){
    $course_id=$_REQUEST['course_id'];
    $department=$_POST['department'];
    $coursename=$_POST['coursename'];
    $sql1=mysqli_query($conn,"select * from courses where department='$department' and course_name='$coursename' ");
        $result=mysqli_fetch_array($sql1);
        if(!$result){
        $sql=mysqli_query($conn,"update courses set department='$department' , course_name='$coursename' where id=$course_id ");
        if($sql)
            header("location:./addcourses.php?update_course_success");
        else
        header("location:./addcourses.php?update_course_fail");

}
else 
header("location:./addcourses.php?course_exist");
}

?>