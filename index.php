<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Safar</title>
  <!--stylesheet-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">
  <!--scripts-->
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/all-plugins.js"></script>
  <script type="text/javascript" src="scripts/plugins-activate.js"></script>
</head>

<body id="page-top">
  <!-- Navigation -->
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
    <div class="container content-wrap text-center">
      <h1>Safar</h1>
      <h3>
        <em>An Indian Govt. intitiative to help people reach their homes</em>
      </h3>
      <a class="btn btn-primary btn-xl smooth-scroll" href="#About">Find Out More</a>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- Header Ends -->
  <!-- About Us Starts -->
  <section id="About" class="content-section">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <div class="block-heading">
            <h2>About Us</h2>
          </div>
          <p class="lead">B.R.I.A. is an organization which has taken an intitiative to bring the people stranded away
            from their homes in different states, be it students or daily wage workers, back to their loved ones. We
            have created an easy to use platform where you have to register yourself and we will alert the state
            governments to provide help where it is really required. Users can also acess the chatbot and know about the
            current status of COVID-19 around the world.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- About Us Starts -->
  <section id="Services" class="content-section text-center">
    <div class="container">
      <div class="block-heading">
        <h2>How To Apply</h2>
        <p>Please follow the below mentioned procedure to register yourself and get one step closer to reaching home
          safely.</p>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon yellow">
              <div class="front-content">
                <i class="fa fa-dice-one" aria-hidden="true"></i>
                <h3>First Step</h3>
              </div>
            </div>
            <div class="service-content">
              <p>Go to the "Registeration Page" from the side navbar.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon orange">
              <div class="front-content">
                <i class="fa fa-dice-two"></i>
                <h3>Second Step</h3>
              </div>
            </div>
            <div class="service-content">
              <p>Fill out all your details and give the proper reason as to why you want to avail the services.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box ">
            <div class="service-icon red">
              <div class="front-content">
                <i class="fa fa-dice-three" aria-hidden="true"></i>
                <h3>Third Step</h3>
              </div>
            </div>
            <div class="service-content">
              <p>Wait for 2-3 days and then visit "Check Your Status" page to know whether your request has been
                approved or not.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-box">
            <div class="service-icon grey">
              <div class="front-content">
                <i class="fa fa-dice-four"></i>
                <h3>Fourth Step</h3>
              </div>
            </div>
            <div class="service-content">
              <p>Reach the given location mentioned in the email sent to you and show that to avail transportation
                during this COVID-19 crisis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
    <h2>Infographic on Current Status of COVID-19</h2>
    <!-- <iframe width="1024" height="576" src="https://app.developer.here.com/coronavirus/" frameborder="0"></iframe> -->
    <style>
      .wrapper {
        max-width: 600px;
        max-height: 1920px;
        padding: 0;
        margin: 0 auto;
      }
    </style>
    <div class="wrapper">
      <div class="bingwidget" id="map" data-type="covid19" data-market="en-us" data-language="en-us" data-app="bingwidget"></div>
      <script src="//www.bing.com/widget/bootstrap.answer.js" async=""></script>
    </div>
  </section>
  <section id="Contact" class="content-section">
    <div class="container">
      <div class="block-heading">
        <h2>Contact Us</h2>
        <p>Regarding any enquiry, we will assist you.</p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="contact-wrapper">
            <div class="address-block border-bottom">
              <h3 class="add-title">Headquaters</h3>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="c-info">Spreaded Across India</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="c-info">+91-9426649982</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="c-info">help1.covid@gov.co.in</span>
              </div>
            </div>
            <div class="address-block">
              <h3 class="add-title">Branch</h3>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="c-info">Vadodara, India</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="c-info">+91-9998883613</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="c-info">help2.covid@gov.co.in</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="form-wrap">
            <form action="javascript:void(0)" method="post">
              <div class="fname floating-label">
                <input type="text" class="floating-input" name="full name" />
                <label for="title">First Name</label>
              </div>
              <div class="fname floating-label">
                <input type="text" class="floating-input" name="full name" />
                <label for="title">Last Name</label>
              </div>
              <div class="email floating-label">
                <input type="email" class="floating-input" name="email" />
                <label for="email">Email</label>
              </div>
              <div class="contact floating-label">
                <input type="tel" class="floating-input" name="contact" />
                <label for="email">Mobile</label>
              </div>
              <div class="company floating-label">
                <textarea type="text" class="floating-input" name="company"></textarea>
                <label for="email">Message</label>
              </div>
              <div class="submit-btn">
                <button type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="javascript:void(0)">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="javascript:void(0)">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="javascript:void(0)">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright © B.R.I.A.</p>
    </div>
  </footer>
</body>

</html>