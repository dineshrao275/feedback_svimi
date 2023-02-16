<?php
include("./db.php");
$f_id = $_REQUEST['faculty_id'];
$sql2 = mysqli_query($conn, "select * from faculties where  f_id=$f_id");
$row2 = mysqli_fetch_array($sql2);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">

    <title>Edit Faculty Details</title>

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

    <script>
        $(document).ready(function () {
            $('#faculty-table').DataTable();
        });
    </script>

</head>

<body>
    <?php
     include('./sidebar.php');
    ?>
    <div class='container-fluid add-faculty'>
        <div class='row'>
            <div class='faculty-heading'>
                <h2>Edit faculty Details</h2>
            </div>
            <form method="post" class='add-faculty-form' action="./editfaculty1.php">
                <div>
                    <input type="number" style="display:none;" name="faculty_id" value="<?php echo $f_id; ?>">
                    <input type='text' placeholder='Full Faculty Name' required name='faculty-name' value="<?php echo $row2[1]; ?>" />
                    <input type='email' placeholder='Email ' required name='email' name='faculty-email' value="<?php echo $row2[2]; ?>" />

                </div>

                <div>
                    <select name="gender" id="gender" required value="<?php echo $row2[3]; ?>">
                        <option selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>

                <div>
                    <select name="designation" id="designation" required value="<?php echo $row2[4]; ?>">
                        <option selected>Select Designation</option>
                        <option value="Proffessor and Director">Proffessor and Director</option>
                        <option value="Proffessor">Proffessor</option>
                        <option value="Associate Proffessor">Associate Proffessor</option>
                        <option value="Assistant Proffessor">Assistant Proffessor</option>
                    </select>
                </div>
                <div>

                    <select name="department" id="department" required value="<?php echo $row2[6]; ?>">
                        <option selected>Select Department</option>
                        <option value="Management">Management</option>
                        <option value="Computer Science">Computer Science</option>
                    </select>
                </div>
                <div>
                    <span><b>Date Of Joining : </b></span>
                    <input type="date" name="date-of-joining" required value="<?php echo $row2[5]; ?>">
                </div>
                <div> <input id='submit-faculty-btn' type='submit' name="edit_faculty" value='Update' /></div>
            </form>
        </div>



    </div>

</body>

</html>

<?php
include("./footer.php");
?>