<?php
if(isset($_POST['submit_subject'])) {
    $subjectcode=$_POST['subject-code'];
    $subjectname=$_POST['subject-name'];
    $course_id=$_POST['course_id'];
    $faculty_id=$_POST['faculty_id'];

    include("./db.php");
    $sql1=mysqli_query($conn,"select * from subjects where subject_code='$subjectcode' and subject_name='$subjectname' ");
    $result=mysqli_fetch_array($sql1);
    if(!$result) {
    $sql=mysqli_query($conn,"insert into subjects (subject_code,subject_name,course_id,faculty_id)values('$subjectcode','$subjectname',$course_id,$faculty_id) ");
    if($sql)
    echo "inserted";
    else
    echo mysqli_error($conn);
}
}
else
echo "exist";
?>