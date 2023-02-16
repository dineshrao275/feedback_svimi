<?php

include("./db.php");
if (isset($_POST["edit_faculty"])) {

    $f_id = $_POST["faculty_id"];
    $facultyname = $_POST["faculty-name"];
    $facultyemail = $_POST["email"];
    $gender = $_POST["gender"];
    $designation = $_POST["designation"];
    $department = $_POST["department"];
    $d_o_j = $_POST["date-of-joining"];

    echo $facultyname;
    $sql1 = mysqli_query($conn, "update faculties set faculty_name='$facultyname' , email='$facultyemail', gender='$gender' , designation='$designation',date_of_joining='$d_o_j' ,department='$department' where f_id=$f_id ");
   
    if($sql1) {
        header("location:./addfaculty.php?update_faculty_success");
    }
    else {
        header("location:./addfaculty.php?update_faculty_fail");
    }
}
?>