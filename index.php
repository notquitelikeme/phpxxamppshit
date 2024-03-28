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
      width: 155%;
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
  width: 161%; 


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
  </style>
</head>
<body>
    <div>
        <div class="container">
            <div class="sidebar">
            <img src="acacia.jpg" alt="School Logo" height="100px">
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
                        <li><a href="students.php">Students</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="sports.php">Sports</a></li>
                    </ul>
                </nav>
                </div>
                <div class="container">
    <main>
      <h1>Students</h1>
      
    </main>

    <main>
      <h1>Courses</h1>
      
    </main>

    <main>
      <h1>Sports</h1>
      
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
