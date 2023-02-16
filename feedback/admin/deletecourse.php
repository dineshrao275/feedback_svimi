<?php
include("./db.php");

    $course_id=$_REQUEST['course_id'];
    $sql1=mysqli_query($conn,"delete from courses where id=$course_id ");
        if($sql1)
            header("location:./addcourses.php?delete_course_success");
        else
        header("location:./addcourses.php?delete_course_fail");


?>