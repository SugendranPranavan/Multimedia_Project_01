<!-- side bar start -->
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo.jpg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">S.Pranavan</span>
                    <span class="profession">Web developer</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

              

                <ul class="menu-links">
                    

                    <li class="nav-link">
                        <a href="about.php">
                            <i class='bx bx-info-circle icon' ></i>
                            <span class="text nav-text">About</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="portfolio.php">
                            <i class='bx bx-images icon'></i>
                            <span class="text nav-text">Portfolio</span>
                        </a>
                    </li>

                       <li class="nav-link">
                        <a href="skills.php">
                            <i class='bx bx-book icon' ></i>
                            <span class="text nav-text">Skills</span>
                        </a>
                    </li>

                      <li class="nav-link">
                        <a href="services.php">
                            <i class='bx bx-clipboard icon' ></i>
                            <span class="text nav-text">Services</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="contact.php">
                            <i class='bx bx-phone icon' ></i>
                            <span class="text nav-text">Contact</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="allproject.php">
                            <i class='bx bx-package icon' ></i>
                            <span class="text nav-text">All projects</span>
                        </a>
                    </li>

                   

    
                </ul>
            </div>

        </div>

    </nav>
<!--  side bar end --> 

<!-- ------------------------------------------------------------------------------------------------------------------------------- -->

<!-- header page start -->


 <section class="about">

  <header>
     <div class="header">
  <a href="index.php" class="logo">Back to Home</a>
  <div class="header-right">
    <a  href="about.php">About</a>
    <a href="portfolio.php">Portfolio</a>
    <a href="skills.php">Skills</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
    <a href="allproject.php">All projects</a>
  </div>
</div>
  </header>

  <!-- style link start -->
  <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- style link end -->

    <!-- script link start -->
   <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- script link end -->


<!-- contact page start -->
<section class="section" id="contact">
      <div class="container">
      <div class="content">
        <div class="left-side">
          <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">37, Nanthavil lane, Kokuvil</div>
            <div class="text-two">Jaffna</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">+94 766178505</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">sptheva1966@gmail.com</div>
          </div>
        </div>
        <div class="right-side">
          <div class="topic-text">Send us a message</div>
          <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
          
         <form method="post" action="process.php">
            <div class="input-box">
              <input type="text" name="name" id="name" placeholder="Enter your name"  required>
              <span class="error">* <?php echo $nameErr;?></span>
            </div>
            <div class="input-box">
              <input type="email" name="email" id="email" placeholder="Enter your email" required>
              <span class="error">* <?php echo $emailErr;?></span>
            </div>
            <div class="input-box message-box">
              <input type="message" name="message" id="message" placeholder="Enter your message" required>

            </div>
            <div class="button">
              <input type="submit" value="Send Now" />
            </div>
   </form>
        </div>
      </div>
    </div>
</section>
<!-- contact page end -->

<!-- javascript start -->
<script type="text/javascript" src="javascript/script.js"></script>
<script type="text/javascript" src="javascript/seemorebutton.js"></script>
 <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
 <script type="text/javascript" src="javascript/about.js"></script>
<!-- javascript end -->
