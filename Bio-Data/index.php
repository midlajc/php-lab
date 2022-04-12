<!--
Author  : abdulsamadmj
Date    : 24-02-2022
Time    : 11:11 PM
Program : Bio-data generation php
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio-Data</title>
</head>

<body>
    <center>
        <h1 align="center">Bio Data Form</h1>

        <form action="bioData.php" method="POST">
            <table class="table">
                <tr>
                    <th>
                        <label for="fullName">Full Name:</label>
                    </th>
                    <td>
                        <input type="text" name="fullName"><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="fatherName">Father's Name:</label>
                    </th>
                    <td>
                        <input type="text" name="fatherName"><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="motherName">Mother's Name:</label>
                    </th>
                    <td>
                        <input type="text" name="motherName"><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="bGroup">Blood Group:</label>
                    </th>
                    <td>

                        <select name="bGroup">
                            <option value="null" selected></option>
                            <?php
                            $bGroup = array('A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-');
                            foreach ($bGroup as $key) {
                                $keyLower = strtolower($key);
                                echo "<option value=" . $keyLower . ">" . $key . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="phNum">Phone Number:</label>
                    </th>
                    <td>
                        <input type="tel" name="phNum" ><br><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="email">Email:</label>
                    </th>
                    <td>
                        <input type="email" name="email"><br><br>
                    </td>
                </tr>
                <tr>

                    <th>
                        <label for="dob">D.O.B:</label>
                    </th>
                    <td>
                        <input type="date" name="dob"><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="gender">Gender:</label>
                    </th>
                    <td>
                        <input type="radio" name="gender" value="Male" checked>Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other">Other<br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="address" id="txtArea">Address:</label>
                    </th>
                    <td>
                        <textarea name="address" id="address" cols="45" rows="5" placeholder=" Type your address here....."></textarea><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="pinCode">Pin code:</label>

                    </th>
                    <td>
                        <input type="number" name="pinCode" ><br><br>

                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="">Language Known:</label>

                    </th>
                    <td>
                        <input type="checkbox" name="lang[]" value="English">English
                        <input type="checkbox" name="lang[]" value="Tamil">Tamil
                        <input type="checkbox" name="lang[]" value="Hindi">Hindi
                        <input type="checkbox" name="lang[]" value="Malayalam">Malayalam
                        <input type="checkbox" name="lang[]" value="Kannada">Kannada
                        <input type="checkbox" name="lang[]" value="Telugu">Telugu
                    </td>
                </tr>
            </table>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </center>
</body>

</html>