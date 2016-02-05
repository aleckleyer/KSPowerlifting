<?php
include '../connect.php';
          $sql = "SELECT * FROM `meets`";
        $result_u = $conn->query($sql);

        if ($result_u->num_rows > 0) {
            echo "<hr><h2>Current Meets in DB</h2>";
            echo "<table class='table table-striped' >
                    <th>Meet Name</th>
                    <th>Date</th>
                    <th>Federation</th>
                    <th>City</th>
                    <th>State</th>";
            while($row = mysqli_fetch_array($result_u)) {
                echo "<tr><td>".$row["Meet_Name"]."</td><td>".$row["Date"]. "</td><td>" . $row["Federation"]. "</td><td>". $row['City']. "</td><td>". $row['State'] ."</tr>";
                    }
                } else {
                    echo "0 results";
            }
        echo "</table>";
?>