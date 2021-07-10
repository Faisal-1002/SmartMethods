<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Motors</title>
</head>
<body>

    <?php
        $servername = "localhost";
        $username = "user1";
        $password = "123456";
        $dbname = "control_system";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql="SELECT motor1, motor2, motor3, motor4, motor5, motor6 FROM control_of_robot";

        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $result = $conn->query($sql);
        $colomn = $result->fetch_assoc();

        echo "motor1: " . $colomn['motor1'] . "<br>";
        echo "motor2: " . $colomn['motor2'] . "<br>";
        echo "motor3: " . $colomn['motor3'] . "<br>";
        echo "motor4: " . $colomn['motor4'] . "<br>";
        echo "motor5: " . $colomn['motor5'] . "<br>";
        echo "motor6: " . $colomn['motor6'] . "<br>";

        $conn->close();
    ?>

</body>
</html>