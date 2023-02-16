<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">

    <title>Add Faculty Details</title>

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

        function confirm_delete_faculty() {

            var a = confirm("Do you really want to Delete this detail");
            if (a)
                return true;
            else
                return false;
        }
    </script>

</head>

<body>
    <?php include('./sidebar.php');
    ?>
    <div class='container-fluid add-faculty'>
        <div class='row'>
            <div class='faculty-heading'>
                <h2>Add faculty Details</h2>
            </div>
            <form method="post" class='add-faculty-form' action="./addfaculty1.php">
                <div>
                    <input type='text' placeholder='Full Faculty Name' required name='faculty-name' />
                    <input type='email' placeholder='Email ' required name='email' name='faculty-email' />

                </div>

                <div>
                    <select name="gender" id="gender" required>
                        <option selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>

                <div>
                    <select name="designation" id="designation" required>
                        <option selected>Select Designation</option>
                        <option value="Proffessor and Director">Proffessor and Director</option>
                        <option value="Proffessor">Proffessor</option>
                        <option value="Associate Proffessor">Associate Proffessor</option>
                        <option value="Assistant Proffessor">Assistant Proffessor</option>
                    </select>
                </div>
                <div>

                    <select name="department" id="department" required>
                        <option selected>Select Department</option>
                        <option value="Management">Management</option>
                        <option value="Computer Science">Computer Science</option>
                    </select>
                </div>
                <div>
                    <span><b>Date Of Joining : </b></span>
                    <input type="date" name="date-of-joining" required>
                </div>
                <div> <input id='submit-faculty-btn' type='submit' name="add_faculty" value='Add' /></div>
            </form>
        </div>

        <div class='container-fluid faculty-list'>
            <hr>

            <table id='faculty-table' class="table table-striped table-hover">
                <header style="background-color:lightgray; border-radius:10px">
                    <h2 style="padding:20px; ">Faculties</h2>
                </header>
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>faculty Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("./db.php");
                    $query = mysqli_query($conn, "select * from faculties");


                    if ($query) {
                        $count = 0;
                        while ($result = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo ++$count; ?>
                                </td>
                                <td>
                                    <?php echo $result[1]; ?>
                                </td>
                                <td>
                                    <a href="./editfaculty.php?faculty_id=<?php echo $result[0]; ?>">
                                        <i class="fa-solid fa-pen-to-square p-1 text-primary"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="./deletefaculty.php?faculty_id=<?php echo $result[0]; ?>"
                                        onclick="return confirm_delete_faculty()">
                                        <i class="fa-solid fa-trash-can p-1 text-danger"></i>
                                    </a>
                                </td>

                            </tr>

                        <?php



                        }
                    } else {
                        echo "<tr><td colspan='3'>There is no data to display</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>


    </div>

</body>

</html>

<?php
include("./footer.php");
?>