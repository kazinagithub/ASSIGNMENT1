<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Displaying Table</title>
</head>
<body>
    <table border="1" width="50%" lengt="4%" align="center" bgcolor="" >
        <tr style="color:white" align="left" bgcolor="black">
            <td><h4>name</h4></td>
            <td><h4>department</h4></td>
            <td><h4>task</h4></td>
            <td><h4>payment</h4></td>
        </tr>

        <?php
            // Database connection details
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "";

            // Create connection
            $conn = mysqli_connect("localhost","root","","employees");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve data from the lists table where the name starts with "m"
            $sql = "SELECT * FROM lists";
            $result = mysqli_query($conn, $sql);

            // Display the data in the HTML table
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["department"] . "</td>";
                echo "<td>" . $row["task"] . "</td>";
                echo "<td>" . $row["payment"] . "</td>";
                echo "</tr>";
            }

            // Close connection
            mysqli_close($conn);
        ?>

    </table>
</body>
</html>