<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
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
        
        $sql="SELECT Forward, Backward, RightMove, LeftMove, Stop FROM robot_base";

        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $result = $conn->query($sql);
        $colomn = $result->fetch_assoc();

        if($colomn['Forward'] == 1){
            echo "Movement: Forward";
        }
        if($colomn['Backward'] == 1){
            echo "Movement: Backward";
        }
        if($colomn['RightMove'] == 1){
            echo "Movement: Right Move";
        }
        if($colomn['LeftMove'] == 1){
            echo "Movement: Left Move";
        }
        if($colomn['Stop'] == 1){
            echo "Movement: Stop";
        }
        

        $conn->close();
    ?>
    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "a2be5b8c-4138-417f-ace8-92126e34fd56", // The ID of this integration.
            region: "eu-gb", // The region your integration is hosted in.
            serviceInstanceID: "eb7d1aa2-5e7c-422c-8aa1-d4d89f67c8b9", // The ID of your service instance.
            onLoad: function(instance) { instance.render(); }
            };
        setTimeout(function(){
            const t=document.createElement('script');
            t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
    });
    </script>
</body>
</html>