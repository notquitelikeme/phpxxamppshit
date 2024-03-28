<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acacia School Management System App</title>
  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0f2f1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 1em;
            width: 80%;
            margin: 0 auto; 
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around; 
        }

        nav a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px 20px;
        }

        .container {
            display: flex;
            flex: 1;
            margin: 20px;
        }

        main {
            background-color: #fff;
            padding: 20px;
            flex: 2; 
        }

        .header-container {
            display: flex;
            width: 80%; 
            margin: 0 auto; 
        }

        nav {
            background-color: #2e7d32;
            color: white;
            text-align: center;
            width: 80%; 
            margin: 20px auto;
        }

        .sidebar {
            background-color: #a5d6a7;
            padding: 1em;
            text-align: center;
            width: 20%; 
            height: 100vh;
            align-items: center;
            display: block;
        }

        footer {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 1em;
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 20px;
        }

        button {
            padding: 10px;
            margin-top: 10px;
            cursor: pointer;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }

        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
            }

            nav, .sidebar {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div>
        <div class="container">
            <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#">Add Record</a></li>
                <li><a href="#">Update Record</a></li>
                <li><a href="#">Delete Record</a></li>
            </ul>
            </div>
            <div class="header">
                <div>
                <header>
                <div style="display: flex;">
                    <img src="acacia.jpg" alt="School Logo" height="100px">
                    <div style="margin-left: 200px;">
                        <h1>Acacia School</h1>
                        <p>Strive to Excel</p>
                    </div>
                </div>
            </header>
                </div>
                <div>
                <nav>
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="sports.php">Sports</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="students.php">Students</a></li>
                    </ul>
                </nav>
                </div>
                <div class="container">
                <main>
    <h1>Students</h1>
    <div style="display: flex;">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="new_admno">Admission Number:</label>
        <input type="text" id="new_admno" name="new_admno" required><br>
        <label for="new_fname">First Name:</label>
        <input type="text" id="new_fname" name="new_fname" required><br>
        <label for="new_lname">Last Name:</label>
        <input type="text" id="new_lname" name="new_lname" required><br>
        <label for="new_grade">Grade:</label>
        <input type="text" id="new_grade" name="new_grade" required><br>
        <label for="new_sport">Sport:</label>
        <input type="text" id="new_sport" name="new_sport" required>
        

        <button type="submit" name="add_record">Add Record</button>
    </form><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="edit_admno">Admission Number:</label>
        <input type="text" id="edit_admno" name="edit_admno" readonly>
        
        <label for="edit_fname">First Name:</label>
        <input type="text" id="edit_fname" name="edit_fname" required>
        
        <label for="edit_lname">Last Name:</label>
        <input type="text" id="edit_lname" name="edit_lname" required>
        
        <label for="edit_grade">Grade:</label>
        <input type="text" id="edit_grade" name="edit_grade" required>
        
        <label for="edit_sport">Sport:</label>
        <input type="text" id="edit_sport" name="edit_sport" required>
        
        <button type="submit" name="update_record">Update Record</button>
    </form>
</div>
</main>

      
      <?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'acaciaschoolmanagementsystem';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_record"])) {
    $new_admno = $_POST["new_admno"];
    $new_fname = $_POST["new_fname"];
    $new_lname = $_POST["new_lname"];
    $new_grade = $_POST["new_grade"];
    $new_sport = $_POST["new_sport"];

    $sql = "INSERT INTO students (admno, fname, lname, grade, sport) VALUES ('$new_admno', '$new_fname', '$new_lname', '$new_grade', '$new_sport')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error adding record: " . $conn->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_record"])) {
    $edit_admno = $_POST["edit_admno"];
    $edit_fname = $_POST["edit_fname"];
    $edit_lname = $_POST["edit_lname"];
    $edit_grade = $_POST["edit_grade"];
    $edit_sport = $_POST["edit_sport"];

    $sql = "UPDATE students SET fname='$edit_fname', lname='$edit_lname', grade='$edit_grade', sport='$edit_sport' WHERE admno='$edit_admno'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete_record"]) && isset($_POST["selected_records"])) {
        $selected_records = $_POST["selected_records"];
        foreach ($selected_records as $admno_to_delete) {
            $sql = "DELETE FROM students WHERE admno = '$admno_to_delete'";
            if ($conn->query($sql) !== TRUE) {
                echo "Error deleting record: " . $conn->error;
                break;
            }
        }
        echo "Records deleted successfully";
    } elseif (isset($_POST["edit_record"])) {
        $admno_to_edit = $_POST["edit_record"];
        echo "Editing record with AdmNo: " . $admno_to_edit;
    }
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
    echo "<table border='1'><tr>";
    echo "<th>Select</th>";
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $columnName => $columnValue) {
            echo "<th>" . $columnName . "</th>";
        }
        echo "<th>Actions</th>";
        break;
    }
    echo "</tr>";
    

    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><input type='checkbox' name='selected_records[]' value='" . $row['admno'] . "'></td>";
        foreach ($row as $columnName => $columnValue) {
            echo "<td>" . $columnValue . "</td>";
        }
        echo "<td>
                <button type='submit' name='delete_record' value='true'>Delete</button>
                <button type='submit' name='edit_record' value='" . $row['admno'] . "'>Edit</button>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
} else {
    echo "<p>No records found in students</p>";
}

$conn->close();
?>

  </div>
            </div>
        </div>
    </div>
  <footer>
    <p>&copy; Acacia School Management System App</p>
  </footer>
<script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var editButtons = document.getElementsByName("edit_record");
        var editAdmnoField = document.getElementById("edit_admno");
        var editFnameField = document.getElementById("edit_fname");
        var editLnameField = document.getElementById("edit_lname");
        var editGradeField = document.getElementById("edit_grade");
        var editSportField = document.getElementById("edit_sport");

        editButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                editAdmnoField.value = button.value;
            });
        });
    });
</script>

</script>
</body>
</html>
