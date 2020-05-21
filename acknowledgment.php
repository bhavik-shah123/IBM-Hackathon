<!DOCTYPE html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <!--scripts-->
    <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="scripts/all-plugins.js"></script>
    <script type="text/javascript" src="scripts/plugins-activate.js"></script>
    <style>
        #form {
            margin: 15%;
        }

        #ack_number {
            margin-top: 17%;
        }

        #submit {
            margin-left: 43%;
        }

        img {
            margin-left: 41%;
        }
    </style>
    <title>Acknowledgment</title>
</head>

<body>
    <div class="logo">
        <i class="fa fa-bus" aria-hidden="true"><span>Safar</span></i>
    </div>
    <a class="menu-toggle rounded" href="#">
        <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
            </li>
            <li class="sidebar-nav-item">
                <a href="./index.php">Home</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./register.php">Register</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="./acknowledgment.php">Check Your Status</a>
            </li>
            <li class="sidebar-nav-item">
                <!-- <a href="https://integrations.eu-gb.assistant.watson.cloud.ibm.com/web/public/9e06ef38-1f2e-41d5-8f25-ef3b718d438a" target="_blank">Know
                    About COVID-19</a> -->
                <script>
                    window.watsonAssistantChatOptions = {
                        integrationID: "81c5af9f-8ad1-41cd-b5d9-8c2abe3493e7", // The ID of this integration.
                        region: "eu-gb", // The region your integration is hosted in.
                        serviceInstanceID: "fd6142d5-00c9-4b9c-9017-4f1ce55278cf", // The ID of your service instance.
                        onLoad: function(instance) {
                            instance.render();
                        }
                    };
                    setTimeout(function() {
                        const t = document.createElement('script');
                        t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
                        document.head.appendChild(t);
                    });
                </script>
            </li>
        </ul>
    </nav>
    <!-- Header Starts -->
    <section id="Banner" class="content-section">
        <form method="POST" id="form">
            <input type="number" name="ack_number" id="ack_number" placeholder="Acknowledment Number" required />
            <button name="submit" id="submit" class="submit">Submit</button>
            <br><br>
            <img src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=$ack' />
        </form>
        <?php
        $conn = mysqli_connect("localhost", "root", "bhavik", "safar");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_POST['submit'])) {
            $ack = $_POST['ack_number'];
            $sql = "SELECT position FROM details WHERE acknum='$ack'";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                $disp = $row['position'];
                echo "<script>alert('$disp')</script>";
            }
        };

        ?>
        <div class="overlay"></div>

    </section>


</body>


</html>