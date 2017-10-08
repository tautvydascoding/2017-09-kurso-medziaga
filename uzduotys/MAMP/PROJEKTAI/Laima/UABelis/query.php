<?php

// Attempt select query execution
$sql = "SELECT * FROM myguests";
if($result = mysqli_query(getConnection(), $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-bordered'>";
            echo "<tr>";
                echo "<th> Vardas </th>";
                echo "<th> El. paštas </th>";
                echo "<th> Telefonas </th>";
                echo "<th> Žinutė </th>";
                echo "<th> Data </th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td> " . $row['name'] . " </td>";
                echo "<td> " . $row['email'] . " </td>";
                echo "<td> " . $row['phone'] . " </td>";
                echo "<td> " . $row['message'] . " </td>";
                echo "<td> " . $row['reg_date'] . " </td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Nėra įrašų!";
    }
} else{
    echo "ERROR: Užklausa neįvyko $sql. " . mysqli_error(getConnection());
}


mysqli_close(getConnection());
?>
