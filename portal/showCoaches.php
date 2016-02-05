<?php
include '../connect.php';
          $sql = "SELECT * FROM `coaches`";
        $result_u = $conn->query($sql);

        if ($result_u->num_rows > 0) {
            echo "<hr><h2>Current Coaches in DB</h2>";
            echo "<table class='table table-striped' >
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>URL/Link</th>
                    <th>Weight Class(kg)";
            while($row = mysqli_fetch_array($result_u)) {
                echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]. "</td><td>" . $row["Email/Link"]. "</td><td>".$row["WeightClass"]."kg</td></tr>";
                    }
                } else {
                    echo "0 results";
            }
        echo "</table>";
?>