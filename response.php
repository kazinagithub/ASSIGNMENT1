<html>

<head>
    <title>Responsive Table with Button</title>
    <style>
        /* Add styles for responsive table */
        
        .table-container {
            overflow-y: scroll;
            float: outo;
        }
        
        .table-container table {
            width: 50%;
            border-collapse: collapse;
            text-align: center;
        }
        .table-container table td a input {
            background-color: #0cd137;
            border-radius: 5px 5px 5px 5px;;

        }
        
        .table-container th,
        .table-container td {
            padding: 8px;
            border: 1px solid #000;
        }
        
        .table-container th {
            background-color: #f2f2f2;
        }
        
        .table-container td button {
            padding: 6px 12px;
            background-color: #0cd137;
            color: #fff00fff;
            border-radius: 5px 5px 5px 5px;
            cursor: pointer;
        }
        
        .table-container #center {
            margin-left: auto;
            margin-right: auto;
        }
        
        .table-container td button #delete {
            background-color: red;
        }
        .table-container td button a {
            text-decoration: none;
        }
        .container botton{
        background-color:blue;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <table>
            <tr>
                <th>department</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                

            </tr>
           
           
        
    <?php
            // Database connection details
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "employees";

            // Create connection
            $conn = mysqli_connect("localhost","root","","employees");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve data from the lists table where the name starts with "m"
            $sql = "SELECT * FROM employee_lists;";
            $result = mysqli_query($conn, $sql);

            // Display the data in the HTML table
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["department"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "</tr>";
            }

            // Close connection
            mysqli_close($conn);
        ?>
        
        <table>
            <tr>
                <td style="width:200px;"><a href="form.php"><input type="submit" value="insert"></a>
                <a href="url"><input type="submit" value="update"></a>
                <a href="drop.php"><input type="submit" value="delete"style="background-color: red;"></a></td>
               <?php 
                //echo '<form method="POST" action="drop.php">
                //<input type="submit" value="DELETE" style="background-color: red;/>
                  //   </form>';
                ?>
            </tr>
            

        </table> <!-- Add more rows as needed -->
        </table>
 

    </div>
    <script>
        // JavaScript function to handle custom action
        function myFunction(id) {
            // Perform custom action using the ID parameter
            alert("Custom action for ID: " + id);
        }
    </script>
</body>

</html>