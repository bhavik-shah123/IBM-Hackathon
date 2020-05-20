<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <script src="js/cities.js"></script>
  <!-- Bootstrap CSS -->
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
  <title>Safar</title>


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
  <section id="Banner" class="content-section">
    <div class="main">
      <div class="container col-6 rounded border-white">
        <form method="POST" class="appointment-form" id="appointment-form">
          <div class="row justify-content-center">
            <h1>REGISTRATION FORM</h1>
          </div>
          <div class="form-row">
            <div class="col col-sm">
              <select name="title" class="title" id="title">
                <option disabled="disabled" selected="selected">Title</option>
                <option>Mr.</option>
                <option>Ms.</option>
                <option>Mrs.</option>
              </select>
            </div>
            <div class="col col-sm">
              <select name="gender" class="gender" id="gender">
                <option disabled="disabled" selected="selected">Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <input type="text" name="name" id="name" placeholder="Full Name" required />
          <div class="row">
            <div class="col">
              <input type="email" name="email" id="email" placeholder="Email" required />
            </div>
            <div class="col">
              <input type="adhaar" name="adhaar" id="adhaar" placeholder="Adhaar Card Number" required />
            </div>
          </div>
          <div class="row ">
            <div class="col">
              <input type="number" name="phn_number" id="phn_number" placeholder="Phone Number" required />
            </div>
            <div class="col">
              <input placeholder="Date of Birth" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" id="dob" />
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <input type="address" name="address" id="address" placeholder="Address" required />
            </div>
            <div class="col-4">
              <input type="number" name="pin" id="pin" placeholder="Pin Code" required />
            </div>
          </div>
          <input type="text" name="reason" id="reason" placeholder="Reason of immigration" required />
          <div class="select-list">
            <div class="row">
              <div class="col">
                <div class="row justify-content-center">
                  <h3>Emigrate From</h3>
                </div>
              </div>
              <div class="col">
                <div class="row justify-content-center">
                  <h3>Immigrate to</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form-control" required></select>
              </div>
              <div class="col">
                <select id="state" class="form-control" required></select>
                <script language="javascript">
                  print_state("sts");
                </script>
              </div>
              <div class="col">
                <select onchange="print_city('state2', this.selectedIndex);" id="sts2" name="stt2" class="form-control" required></select>
              </div>
              <div class="col">
                <select id="state2" class="form-control" required></select>
                <script language="javascript">
                  print_state("sts2");
                </script>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <button name="submit" id="submit" class="submit">Submit</button>
          </div>
      </div>
      </form>
    </div>
    </div>
    <div class="overlay"></div>
  </section>




  <!-- Java Script -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

<?php
$conn = mysqli_connect("localhost", "root", "bhavik", "safar");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} // Selecting Database from Server
if (isset($_POST['submit'])) { // Fetching variables of the form which travels in URL
  $gender = $_POST['gender'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $adhaar = $_POST['adhaar'];
  $contact = $_POST['phn_number'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  $pin = $_POST['pin'];
  $reason = $_POST['reason'];
  $emigrate = $_POST['stt'];
  $immigrate = $_POST['stt2'];
  $uniqueID = time() . mt_rand();

  if ($name != '' || $email != '') {
    //Insert Query of SQL
    function func($ID)
    {
      echo "<script>alert('$ID')</script>";
    }
    $query = "insert into details(gender,name,email,adhaar,contact,dob,address,pin,reason,emigrate,immigrate,acknum) values ('$gender','$name', '$email', '$adhaar', '$contact','$dob','$address','$pin','$reason','$emigrate','$immigrate','$uniqueID')";
    func($uniqueID);
    $result = $conn->query($query);
  } else {
    //echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
  }
} // Closing Connection with Server
?>

</html>