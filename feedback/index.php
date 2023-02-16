<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>











    <link rel="stylesheet" href="./css /style.css">
    <script>
        $(document).ready(function () {
            $('#feedback-table').DataTable();
        });
    </script>

    <title>SVIMI Feedback Form</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-sm-2 site-logo text-center ">
                <img src="./images/logo.jpg" alt="logo">
            </div>
            <div class="col-sm-10 site-name">
                <h1 class="text-center">Shri Vaishnav Institute of Management, Indore(M.P.)</h1>
                <pre class="text-center">Approved by AICTE, New Delhi, Affiliated to DAVV, Indore and RGPV, Bhopal (M.P.)
UGC-NAAC Accredited ‘A’ Grade Institute
Scheme No.71, Gumasta Nagar, Indore-452009
Madhya Pradesh, India</pre>
                <div class="text-center">

                    <a href="./admin/index.php" class="btn btn-primary p-2 m-2 ">Admin Login</a>
                </div>

            </div>
        </div>
        <div class="row feedback-bolck mt-3">
            <h4 class="text-center">Faculty Feedback on Teaching Learning (FFTL)</h4>
            <p class="text-center">(Session January 2023 - June 2023)</p>
            <p class="text-center"><b><u>*Guidelines for Students*</u></b>
                <br />
                Shri Vaishnav Institute of Management, Indore (Madhya Pradesh) is conducting Individual Faculty Feedback
                on
                Teaching Learning, which will help to upgrade the quality of teaching learning in the Institute.
                Individual student
                will have to respond to all the statements given in the following format with her/his sincere efforts
                and thoughts.
                Her/his identity will NOT be revealed.

            </p>


            <!-- FORM  DETAILS -->

            <form action="" method="post" class="feedback-form">
                <fieldset>
                    <legend>Student Details </legend>
                    <div class="col-md-8 offset-md-2 col-12 student-details">
                        <div>
                            <input type="text" name="student-name" class="" placeholder="Student  name" required />

                            <select name="programme" id="programme" required class=" selectpicker"
                                data-live-search="true">
                                <option value="" selected>select a programme</option>
                                <option value="BBA">BBA</option>
                                <option value="BCA">BCA</option>
                                <option value="B.Sc.(CS)">B.Sc.(CS)</option>
                                <option value="B.Sc.(IT)">B.Sc.(IT)</option>
                                <option value="MBA(FT)">MBA(FT)</option>
                                <option value="MBA(FA)">MBA(FA)</option>
                                <option value="MBA(MM)">MBA(MM)</option>
                                <option value="MCA">MCA</option>

                            </select>

                        </div>
                        <div>
                            <select name="semester" id="semester" required>
                                <option value="" selected>Semester</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                                <option value="VI">VI</option>
                                <option value="NIL">NIL</option>
                            </select>
                            <input type="text" name="year" class="" placeholder="Year" required />
                        </div>
                        <div>
                            <input type="text" name="section" class="" placeholder="Section" required />
                        </div>
                    </div>
                </fieldset>
                <p class="text-center mt-3"><b><u>Instructions</u></b>
                <ul>
                    <li>Please read the statements carefully before responding. </li>
                    <li>Response to all the statements is
                        mandatory. </li>
                    <li>Kindly fill up your response ranging from 1 to 5.</li>
                    <ul>
                        <li>Outstanding (5)</li>
                        <li>Excellent (4)</li>
                        <li>Very Good(3)</li>
                        <li>Good (2)</li>
                        <li>Average (1)</li>
                    </ul>
                    <li> Choose the most appropriate one carefully.</li>
                </ul>
                </p>
                <fieldset>
                    <legend>Feedback Information</legend>
                    <div class="container-fluid feedback-table-block ">
                        <table style="border:1px solid #000;" cellspacing="0" cellpadding="5" id="feedback-table"
                            class="table">
                            <thead>
                                <tr>
                                    <th>
                                        Subject Code and Name
                                    </th>
                                    <th>
                                        Faculty Name
                                    </th>
                                    <th>
                                        Relevance and Appropriateness of Topic
                                    </th>
                                    <th>
                                        Coverage of all the Topics
                                    </th>
                                    <th>
                                        Applicability of the Concept to Management Education
                                    </th>
                                    <th>
                                        Innovations
                                    </th>
                                    <th>
                                        Effectiveness of Delivery
                                    </th>
                                    <th>
                                        Body Language
                                    </th>
                                    <th>
                                        Communication Skills
                                    </th>
                                    <th>
                                        Presentation Skills
                                    </th>
                                    <th>
                                        Use of Visual Aids
                                    </th>
                                    <th>
                                        Handling Questions / Discussions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <select name="" id="" class="form-control selectpicker" data-live-search="true"
                                            tabindex="null">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select name="" id="" class="form-control selectpicker" data-live-search="true"
                                            tabindex="null">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select </option>
                                        </select>

                                    </th>

                                    <th>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="" id="">
                                            <option value="">Select</option>
                                        </select>
                                    </th>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1" class="form-control selectpicker"
                                            data-live-search="true" tabindex="null">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control selectpicker" data-live-search="true"
                                            tabindex="null" name="fb1" id="fb1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </fieldset>



            </form>
        </div>
    </div>
</body>

</html>