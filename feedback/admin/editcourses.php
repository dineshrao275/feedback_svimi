<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">

    <title>Edit Courses Details</title>

    <!-- ONLINE LINKS -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- LOCAL FILES -->
    <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>
    <?php include('./sidebar.php');
    include("./db.php");
    $course_id=$_REQUEST['course_id'];
    ?>
    <div class='container-fluid add-faculty'>
        <div class='row'>
            <div class='faculty-heading'>
                <h2>Edit Courses Details</h2>
            </div>
            <form method="post" class='add-faculty-form' action="./editcourses1.php?course_id=<?php echo $course_id; ?>">
<?php 

$sql=mysqli_query($conn,"select * from courses where id=$course_id");
$result=mysqli_fetch_array($sql);

?>
                <div>
                    <select name="department" id="department" value="<?php echo $result[1]; ?>" required>
                        <option selected>Select Department</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Management">Management</option>
                    </select>
                </div>

                <div>
                    <input type="Course Name" name="coursename" placeholder="course name" value="<?php echo $result[2]; ?>" required>
                </div>
                <div> <input id='submit-faculty-btn' type='submit' name="edit_course" value='Update' /></div>
            </form>
        </div>

        <div class='container-fluid faculty-list'>
            <hr>

</div>


    </div>

</body>

</html>

<?php
include("./footer.php");
?>