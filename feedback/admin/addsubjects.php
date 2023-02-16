<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">

    <title>Add Subject Details</title>

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
            $('.subject-table').DataTable();
        });

        function confirm_delete_subject() {

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
                <h2>Add Subject Details</h2>
            </div>
            <form method="post" class='add-faculty-form' action="./addsubjects1.php">
                <div>
                    <input type='text' placeholder='Subject Code' required name='subject-code' />
                    <input type='text' placeholder='Subject Name ' required name='subject-name'  />

                </div>

                <div>
                <select name="course_id" id="course_id" required>
                    <option selected>Select Course</option>
                    <?php 
                        include("./db.php");
                        $sql=mysqli_query($conn,"select * from courses");
                        while($result=mysqli_fetch_array($sql)) {
                    ?>
                    
                        
                        <option value="<?php echo $result[0]; ?>"><?php echo $result[2]; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div>
                    <select name="faculty_id" id="faculty_id" required>
                        <option selected>Select Faculty</option>
                        <?php
                            $sql2=mysqli_query($conn,"select f_id,faculty_name from faculties"); 
                            while($result2=mysqli_fetch_array($sql2)) {
                                
                            ?>
                        <option value="<?php echo $result2[0] ;?>"><?php  echo $result2[1] ?></option>
                        <?php  } ?>
                    </select>
                </div>
                               <div> <input id='submit-faculty-btn' type='submit' name="submit_subject" value='Add' /></div>
            </form>
        </div>

        <div class='container-fluid faculty-list'>
            <hr>

            <table id='faculty-table' class="table subject-table table-striped table-hover">
                <header style="background-color:lightgray; border-radius:10px">
                    <h2 style="padding:20px; ">Subjects</h2>
                </header>
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Subject Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conn, "select * from subjects");


                    if ($query) {
                        $count = 0;
                        while ($result3 = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo ++$count; ?>
                                </td>
                                <td>
                                    <?php echo $result3[1];echo $result3[2]; ?>
                                </td>
                                <td>
                                    <a href="./editsubject.php?subject_id=<?php echo $result3[0]; ?>">
                                        <i class="fa-solid fa-pen-to-square p-1 text-primary"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="./deletesubject.php?subject_id=<?php echo $result3[0]; ?>"
                                        onclick="return confirm_delete_subject  ()">
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