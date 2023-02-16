<?php
include("./db.php");
if(isset($_POST["add_course"])){
    $department=$_POST['department'];
    $coursename=$_POST['coursename'];
    $sql1=mysqli_query($conn,"select * from courses where department='$department' and course_name='$coursename' ");
        $result=mysqli_fetch_array($sql1);
        if(!$result){
        $sql=mysqli_query($conn,"insert into courses (department,course_name)values('$department','$coursename')");
        if($sql)
            header("location:./addcourses.php?add_course_success");
        else
        header("location:./addcourses.php?add_course_fail");

}
else 
header("location:./addcourses.php?course_exist");
}

?>