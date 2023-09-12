<!DOCTYPE html>
<html>
<head>
  <title>RHMS</title>
  <!-- <script type="text/javascript">
              alert("Submitted Succesfully!!!");
            </script> -->
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
  }
  
  .header {
    background-color: rgb(38, 169, 221);
  }
  
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
  }
  .nav-links li{
    border-radius: 10px;
  }
  .nav-links li a{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
  }
  .nav-links li:hover{
    background-color: lightgrey;
    color:black;
    transition-duration: 0.5s;
  }  
  .logo img {
    width: 70px;
    height: 70px;
  }
  
  .nav-links {
    list-style: none;
    display: flex;
    gap: 30px;
  }
  
  .nav-links li a {
    color:black;
    text-decoration: none;
  }
  .nav-links li{
    padding:10px;
  }
  .profile {
    display: flex;
    gap: 10px;
    position: relative;
  }
  
  .profile-photo img {
    width: 20px;
    height: 20px;
    border-radius: 50%;
  }
  .profile-dropdown a{
    text-decoration: none;
    color:white
  }
  .hero-content p {
    font-size: 18px;
    margin-bottom: 40px;
  } 
  
  .main-content {
    padding: 40px;
  }
  .main-content{
    background-image: url("home.png");
    box-shadow: 0 0 8px 8px white inset;
    height:500px;
    background-size: cover;
    margin-bottom:100px;
  }
  .main-content p{
    color:#fff;
    margin-top:525px;
    text-align: center;
  }
  .main-content span{
    font-size: 30px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: bold;
  }
table td{
  width:250px;
  height:120px;
  font-size:25px;
  text-align:center;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.key{
  text-align:center;
  font-size:30px;
  padding-bottom:180px;
}
.about .about-content, .skill .skill-content,  .contact .contact-content{
  color: #B2B2B2;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.about .about-content .left{
  width: 45%;
}
.about .about-content .left img{
  height: 400px;
  width: 520px;
  object-fit: cover;
  border-radius: 2px;
  padding-left: 50px;
}
.title{
  padding-top:100px;
  text-align: center;
  margin-bottom:100px;
}
h3{
  color:black;
  font-family:sans-serif;
}
p{
  color:black;
  font-family:Helvetica;
  letter-spacing:2px;
}
.about .about-content .right{
  width: 50%;
  padding-right:60px;
}
#gallery table tr td img{
  height: 200px;
  width:250px;
}
.contact .column-left img{
  height: 400px;
  width: 520px;
  object-fit: cover;
  border-radius: 2px;
  padding-left: 50px;
  border-top-right-radius: 45%;
  border-bottom-right-radius: 45%;
}
.cntact .contac-content .contact-left{
  width: 45%;
}
.contact .contact-content .right{
  width: 50%;
  padding-right:60px;
}
.cont{
  margin-top:50px;
  display: flex;
  gap:3px;
  color:white;
  height: 140px;
  max-width: fit-content;
}
.cont .callus{
  background-color: rgb(38, 169, 221);
  padding:20px;
  border-radius: 5%;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.cont .loc{
  background-color: rgb(38, 169, 221);
  padding:20px;
  border-radius: 5%;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.cont .hrs{
  background-color: rgb(38, 169, 221);
  padding:20px;
  border-radius: 5%;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.cont p{
  font-family:Georgia, 'Times New Roman', Times, serif;
  font-weight: bold;
  color:white;
}
form input{
  border:none;
  border-bottom:1px solid black;
  height: 42px;
  width:400px;
}
form label{
  color:black;
  font-size:20px;
}
form button{
  border:none;
  height:42px;
  width:180px;
  color:white;
  background-color: rgb(38, 169, 221);
  border-radius:10px;
  font-size:18px;
  cursor:pointer;
}
footer{
  margin-top:100px;
  height: 100px;
  max-width:cover;
  background-color:rgb(38, 169, 221);
}
.conte{
  text-align: center;
  padding-top:40px;
  font-weight: bold;
  font-size:40px;
  color:white;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
  </style>
</head>
<body>
  <header class="header">
    <nav class="navbar">
      <div class="logo">
        <img src="logo.jpg" alt="Basketball Logo">
      </div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="index.php">Login</a></li>
        <!-- <li><a href="login.html">Login/Signup</a></li> -->
      </ul>      
    </nav>
  </header>

  <main class="main-content">
    <span>RGUKT Hospital Management System</span>
  </main>
  <nxt id="services">
    <h1 class="title">Our Key Features</h1>
    <table align="center" cellspacing="70px">
      <tr><td><img src="ortho.jpg" height="65px" width="65px"><br><br>Orthopedic</td>
        <td><img src="cardio.png" height="65px" width="65px"><br><br>Cardiology</td>
        <td><img src="dent.png" height="65px" width="65px"><br><br>Dentist</td>
      </tr>
      <tr>
        <td><img src="pha.png" height="65px" width="65px"><br><br>Pharmacy</td>
        <td><img src="test.png" height="65px" width="65px"><br><br>Laboratory</td>
        <td><img src="doc.jpg" height="65px" width="65px"><br><br>Gynaecologist</td>
      </tr>
    </table>
  </nxt>
  <section class="about" id="about">
    <div class="max-width">
        <h1 class="title">About Us</h1>
        <div class="about-content">
            <div class="column left">
                <img src="about1.jpg" alt="">
            </div>
            <div class="column right">
                <!-- <div class="text">I am SUMITH KUMAR and I am a <span>Student</span></div> -->
                <p>We are committed to providing exceptional healthcare services to our community. Our hospital has a rich history of serving patients with compassion, expertise, and cutting-edge medical technology. We take pride in being a trusted healthcare institution that focuses on the well-being and recovery of our patients.</p>
                <div><h3>Our History</h3></div>
                <p>Established in 2008, RGUKT Hospital has a long and storied history of providing healthcare services to our community. Over the years, we have grown and evolved, adapting to the changing needs of our patients and the advancements in medical science. What has remained constant is our commitment to delivering personalized and compassionate care.</p>
                <div><h3>Our facilities</h3></div>
                <p>We take pride in our modern and well-equipped facilities. From our advanced operating rooms to our comfortable patient rooms, we have designed our hospital to ensure the best possible care and comfort for our patients and their families.</p>
            </div>
        </div>
    </div>

</section>
<section id="gallery">
  <h1 class="title">Our Gallery</h1>
  <table align="center" cellspacing="40px">
    <tr><td><img src="1.jpg"></td><td><img src="2.jpg"></td><td><img src="3.jpg"></td></tr>
    <tr><td><img src="4.jpg"></td><td><img src="5.jpg"></td><td><img src="6.jpg"></td></tr>
  </table>
</section>
<section class="contact" id="contact">
  <div class="max-width">
      <h1 class="title">Contact Us</h1>
      <div class="contact-content">
          <div class="column-left">
              <img src="contact.jpg" alt="">
          </div>
          <div class="right">
            <form id="formsub">
              <label>Name</label><br><input type="text" name="text" required="required"><br><br>
              <label>Email</label><br><input type="email" name="email" required="required"><br><br>
              <label>Message</label><br><input type="textbox" name="textbox" required="required"><br><br><br>
              <button id="new"> SUBMIT </button>
            </form>
            <div class="cont">
            <div class="callus">
              <p>CALL US</p>
              +918096413534,<br>
              +918096427434
            </div><br><br>
            <div class="loc">
              <p>LOCATION</p>
              Near Guest House,
              RGUKT Basar,
              Nirmal (dist),<br>
              Telangana
            </div>
            <div class="hrs">
              <p>HOURS</p>
              MON-SAT:9am-8pm
              SUN:10am-5pm
            </div>
            </div>
          </div>
      </div>
  </div>
</section>
<footer>
  <div class="conte">2023 &copy; RHMS</div>
</footer>
</body>
</html>
