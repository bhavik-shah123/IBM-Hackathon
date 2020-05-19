<!DOCTYPE html>
<html>

<head>
    <title>Admin form</title>
    <link href="css/elements.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>
<!-- Body Starts Here -->

<body>
    <div>
        <table>
            <tr>
                <th>Acknowledgment Number</th>
                <th>Name</th>
                <th>D.o.B.</th>
                <th>Emigrate State</th>
                <th>Immigrate State</th>
                <th>Reason</th>
                <th>Current Status</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "bhavik", "safar");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT acknum, name, dob,emigrate,immigrate,reason,position FROM details";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["acknum"] . "</td><td>" . $row["name"] . "</td><td>"
                        . $row["dob"] . "</td><td>" . $row["emigrate"] . "</td><td>" . $row["immigrate"] . "</td><td>" . $row["reason"] . "</td><td>" . $row["position"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>
    </div>
    <div class="container">
        <!-- Feedback Form Starts Here -->
        <div id="feedback">
            <!-- Heading Of The Form -->
            <div class="head">
                <h3>Admin Panel</h3>
                <p>This is used to change the records of the users.</p>
            </div>
            <!-- Feedback Form -->
            <form action="#" id="form" method="post" name="form">
                <input name="acknum" placeholder="Acknowledgment Number" type="text" value="">
                <input name="name" placeholder="Name" type="text" value="">
                <input name="sub" placeholder="Approval" type="text" value="">
                <input id="send" name="submit" type="submit" value="Change Approval" onClick="window.location.reload();">
            </form>
            <h3><?php include "status_change.php" ?></h3>
        </div>
        <!-- Feedback Form Ends Here -->
    </div>
</body>
<!-- Body Ends Here -->

</html>