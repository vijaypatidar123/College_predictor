
<!DOCTYPE html>
<html>
<head>
    <title>Moving Links Box</title>
    <link rel="stylesheet" type="text/css" href="wpcst2.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>JEE MAIN Predictor</h2>
        <form method="post">
            <div class="form-group">
                <label for="college-type" >Type of College:</label>
                <select id="college-type" name="institutetype">
                    <option value="All">All</option>
                    <option value="IIT">IIT</option>
                    <option value="IIIT">IIIT</option>
                    <option value="NIT">NIT</option>
                    <option value="GFTI">GFTI</option>
                </select>
            </div>
            <div class="form-group">
                <label for="branch">Branch:</label>
                <select id="branch" name="branch">
                    <option value="All">All</option>
                    <option value="Computer Science Engineering">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Data Science And Anaytics">Data Science And Anaytics</option>
                    <option value="Artificial Intelligence">Artificial Intelligence</option>
                    <option value="Mathematics and Computing">Mathematics and Computing</option>
                    <option value="ECE">ECE</option>
                    <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                    <option value="Instrumentation and Control Engineering">Instrumentation and Control Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Economics (4 Years, Bachelor of Science)">Economics</option>
                    <option value="Chemical Engineering">Chemical Engineering</option>
                    <option value="Bio-Technology">Bio-Technology</option>
                    <option value="Bachelor of Architecture">Architecture</option>
                    <option value="Food Technology">Food Technology</option>
                    <option value="Textile Technology">Textile Technology</option>
                    <option value="Mining Engineering">Mining Engineering</option>
                    <option value="Material Engineering">Material Engineering</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select id="category" name="seattype">
                    <option value="general">General</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="All">All</option>
                    <option value="Gender-Neutral">Gender Neutral</option>
                    <option value="Female-only">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rank">Rank:</label>
                <input type="number" id="rank" name="rank" placeholder="Enter rank">
            </div>
            <div class="form-group">
                <input type="submit" value="Predict my college" name="submit">
            </div>
        </form>
    </div>
    <br><br>
    <br><br>
<!-- ********** -->
 
 <div class="container"> 
  <table class="table" border="3px" bgcolor="powderblue"> 
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Institute</th>
      <th scope="col">Branch</th>
      <th scope="col">Quota</th>
      <th scope="col">Seat Type</th>
      <th scope="col">Gender</th>
      <th scope="col">Opening Rank</th>
      <th scope="col">Closing Rank</th>
    </tr>
  </thead>
  <tbody>
  <?php
//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "josaa_data";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful!<br>";
}

echo "<br><br><br><br><br>";

if (isset($_POST['submit'])) {
    $institutet = $_POST['institutetype'];
    $branch = $_POST['branch'];
    $seattype = $_POST['seattype'];
    $gender = $_POST['gender'];
    $rank = $_POST['rank'];

    $sql = "SELECT * FROM jossa1 WHERE `closing rank` >= $rank";

    if ($institutet != "All") {
        $sql .= " AND `institute type` = '$institutet'";
    }

    if ($branch != "All") {
        $sql .= " AND branch = '$branch'";
    }

    if ($gender != "All") {
        $sql .= " AND gender = '$gender'";
    }

    $sql .= " ORDER BY `closing rank`";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        echo $num . " records found in the database<br>";
        $no = 1;
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <th scope='row'>".$no .".</th>
                <td>" . $row['institute'] ."</td>
                <td>". $row['branch'] ."</td>
                <td>".$row['quota']."</td>
                <td>".$row['seat type']."</td>
                <td>".$row['gender']."</td>
                <td>". $row['opening rank'] ."</td>
                <td>". $row['closing rank']."</td>
              </tr>";
                //  $no . ". " . $row['institute'] . "  ------  " . $row['branch'] ."--".$row['quota']."----".$row['seat type']."-----" .$row['gender']."-----" . $row['opening rank'] . "-----" . $row['closing rank'];
                // echo "<br>";
                $no = $no + 1;
            }
        } else {
            echo "No records found.";
        }
    } else {
        echo "Error executing the query: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
  
  </tbody>
</table>
</div>

<!-- </div> -->

 
<!-- ************ -->
    <h3 style="text-align: center;">IMPORTANT LINKS</h3>
    <div class="box">
        <div class="moving-links">
            <a class="link-item" href="jee main.htm">JEE(MAIN)</a>
            <br><br>
            <a class="link-item" href="jee advance.htm">JEE(ADVANCE)</a>
            <br><br>
            <a class="link-item" href="CSAB.HTM">CSAB</a>
            <br><br>
            <a class="link-item" href="https://josaa.nic.in/">JOSAA</a>
            <br><br>
            <a class="link-item" href="FAQ.HTM">FAQ</a>
            <br><br>
        </div>
    </div>
</div>
</body>
</html>
