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
      width: 120%;
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
}

nav {
  background-color: #2e7d32;
  color: white;
  text-align: center;
  width: 110%; 
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
    }
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
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
                <li><a href="#" type='submit' name='delete_record' value='true'>Delete Record</a></li>
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
                <div class="container" width="140%">
    <main>
      <h1>Courses</h1>
      <?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'acaciaschoolmanagementsystem';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_record"])) {

    $selected_records = isset($_POST['selected_records']) ? $_POST['selected_records'] : [];

    foreach ($selected_records as $courseid_to_delete) {
       
        $sql = "DELETE FROM courses WHERE courseid = '$courseid_to_delete'";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

$sql = "SELECT * FROM courses";
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
        echo "<td><input type='checkbox' name='selected_records[]' value='" . $row['courseid'] . "'></td>";
        foreach ($row as $columnValue) {
            echo "<td>" . $columnValue . "</td>";
        }
        echo "<td><button type='submit' name='delete_record' value='true'>Delete</button></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
} else {
    echo "<p>No records found in courses</p>";
}
$conn->close();
?>
    </main>
  </div>
            </div>
        </div>
    </div>
  <footer>
    <p>&copy; Acacia School Management System App</p>
  </footer>

</body>
</html>
