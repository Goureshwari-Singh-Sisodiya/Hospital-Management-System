<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $number = $_POST['number'];
   $date = $_POST['date'];
   $doctor = mysqli_real_escape_string($conn, $_POST['doctor']);

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, number, date, doctor) VALUES('$name','$number','$date','$doctor')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <!--Header Section Start-->
   <header class="header">
    <i class="fa-solid fa-heart-pulse" style="color: #fa0000;"><h1>Medicare</h1></i> 
    <nav class="navbar">
    <a href="#home">home</a>
    <a href="#about">about</a>
    <a href="#services">services</a>
    <a href="#doctors">doctors</a>
    <a href="#appointment">appointment</a>
    <a href="#review">review</a>
    <a href="#blogs">blogs</a>
</nav> 
<div id="menu-btn" class="fas fa-bars"></div> 
</header>

<!--Home Section-->
<section class="home" id="home">
    <div class="image">
    <img src="home-img.svg" alt="">
    </div>
    <div class="content">
        <h3>We take care of your healthy life</h3>
        <p>A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointmSent" class="btn">appointment us<span class="fas fa-chevron-right"></span></a>
    </div>
</section>

<!--Icon Section-->
<section class="icons-container">
    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>
    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>
    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>
    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>78+</h3>
        <p>available hospitals</p>
    </div>
</section>

<!--About Section-->
<section class="about" id="about">
    <h1 class="heading"><span>about</span>us</h1>
    <div class="row">
        <div class="image">
            <img src="about-img.svg" alt="">
        </div>
        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Medicare, Ratlam, is a 490+ bedded Super Specialty Hospital is born of a dream. A dream that the people of Ratlam and Central India get the best healthcare at affordable prices. A dream that the best infrastructure and technology be provided to doctors so that they can serve patients to best of their capability.</p>
            <p> A dream that our people need not flee to metros for medical needs. This conviction inspired us to make a world class hospital in the heart of the country where the best infrastructure meets the best doctors to deliver cutting edge technology with care.</p>
            <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
        </div>
    </div>
</section>

<!--Services Section-->
<section class="services" id="services">
    <h1 class="heading">our<span>services</span></h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>A free medical check-up is a comprehensive examination of how your body..</p>
            <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
        </div>
        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>With a 24-hour operational setup, the ambulance service is available to..</p>
            <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
        </div>
        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Our Doctors spend as much time with you, as is necessary to understand..</p>
            <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
        </div>
        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>The service provides support for people with long-term conditions newly..</p>
            <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
        </div>
        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Hospital beds are specifically designed with special features to cater to the..</p>
            <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
        </div>
        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>an extensive service support agreement that offers all repairs, preventive maintenance..</p>
            <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
        </div>
    </div>
</section>

<!--Doctor Section-->
<section class="doctors" id="doctors">
    <h1 class="heading">our<span>doctors</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="doc-1.jpg" alt="">
            <h3>dr. anie methew</h3>
            <span>Obstetrics & Gynaecology</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc-2.jpg" alt="">
            <h3>dr.alok mehta</h3>
            <span>Cardiology</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc-3.jpg" alt="">
            <h3>dr.amita kaul</h3>
            <span>Neonatology & Pediatrics</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc-4.jpg" alt="">
            <h3>dr.amrita tandon</h3>
            <span>Obstetrics & Gynaecology</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc-5.jpg" alt="">
            <h3>Dr. Ankit Kayal</h3>
            <span>Urology</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc-6.jpg" alt="">
            <h3>dr.amrish Vaidya</h3>
            <span>Neurosurgery</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc-7.jpg" alt="">
            <h3>dr. aparna prakash</h3>
            <span>ophthalmologist</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc-8.jpg" alt="">
            <h3>dr.devendra soni</h3>
            <span>oncology surgen</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc-9.jpg" alt="">
            <h3>dr.j thomson</h3>
            <span>Pediatric Orthopedic</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>
</section>

<!--Appointment Section-->
<section class="appointment" id="appointment">
    <h1 class="heading">appointment<span>now</span></h1>
    <div class="row">
        <div class="image">
            <img src="appointment-img.svg" alt="">
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text" name="text" placeholder=" Enter your fullname" class="box">
            <input type="number" name="number" placeholder="Enter your number" class="box">
            <input type="date" name="date" class="box"> 
            <select name="doctor" id="doctor">
                <option value="doctor">--Select the Doctor--</option>
                <option value="Dr. Anie Methew">Dr. Anie Methew</option>
                <option value="Dr.Alok Mehta">Dr.Alok Mehta</option>
                <option value="Dr.Amita Kaul">Dr.Amita Kaul</option>
                <option value="Dr.Amrita Tandon">Dr.Amrita Tandon</option>
                <option value="Dr. Ankit Kayal">Dr. Ankit Kayal</option>
                <option value="Dr.Amrish Vaidya">Dr.Amrish Vaidya</option>
                <option value="Dr. Aparna Prakash">Dr. Aparna Prakash</option>
                <option value="Dr.Devendra Soni">Dr.Devendra Soni</option>
                <option value="Dr.J Thomson">Dr.J Thomson</option>
            </select> 
           <input type="submit" name="submit" value="appointment now" class="box">   
        </form>
    </div>
</section>

<!--Review Section-->
<section class="review" id="review">
    <h1 class="heading">review<span>now</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="rew-1.jpg" alt="">
            <h3>ms.saniya methew</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">My Father had a blockage in his left arm and as we arrived as the hospital  and they operated him.  I am satisfied for treatment. also Nursing, Billing ,Rmo is very cooperative.Thank you  entire team.</p>
            </div>
        <div class="box">
            <img src="rew-2.png" alt="">
            <h3>mr.mudit rao</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">It was very positive experience since admission till discharge. Great job everyone.Good maintainence of rooms. Nice geusture by nursing staff. Overall had a very good experience and feel at home.</p>
        </div>
        <div class="box">
            <img src="rew-3.png" alt="">
            <h3>mr. girish kulkarni</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I have an old wrist injury that flared up suddenly.I explained my problem and received a great short-term solution and felt better within hours. I was given prescriptions to take with me on the trip in case there was any further issues. Overall great results and thankyou all!</p>
        </div>
    </div>
</section>

<!--Blogs Section-->
<section class="blogs" id="blogs">
    <h1 class="heading">our<span>blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="blogs-1.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i>21 april 2024</a>
                    <a href="#"> <i class="fas fa-user"></i>dr.niya sharma</a>
                </div>
                <h3>Health Benefits of Raw Banana</h3>
                <p>Raw banana, also known as green banana, is a versatile and nutritious fruit that often goes...</p>
               <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blogs-2.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i>15 april 2024</a>
                    <a href="#"> <i class="fas fa-user"></i>dr.usha rao</a>
                </div>
                <h3>Diet for Jaundice: food eat and avoid</h3>
                <p>Jaundice is a medical condition characterised by the yellowing of the skin and eyes due to high...</p>
                <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blogs-3.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i>1 april 2024</a>
                    <a href="#"> <i class="fas fa-user"></i>dr.amrita tondon</a>
                </div>
                <h3>Health Benefits of Sprouts and its Value</h3>
                <p>Sprouts are powerhouses of nutrition that can transform your health and well-being...</p>
                <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blogs-4.png">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i>27 march 2024</a>
                    <a href="#"> <i class="fas fa-user"></i>dr.annie methew</a>
                </div>
                <h3>Right Side Headache: Causes, Treatments </h3>
                <p>Headaches can be a debilitating ailment that affects millions of people worldwide...</p>
                <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blogs-5.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i>18 march 2024</a>
                    <a href="#"> <i class="fas fa-user"></i>dr.amita kaul</a>
                </div>
                <h3>Dysentery: Symptoms,Treatment</h3>
                <p>Infection in the intestines of an individual may give rise to diarrhoea that contains...</p>
                <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
            <img src="blogs-6.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i>5 march 2024</a>
                    <a href="#"> <i class="fas fa-user"></i>dr.alok mehta</a>
                </div>
                <h3>Swollen Lymph Nodes: Symptoms,Treatment</h3>
                <p>Swollen lymph nodes, also known as lymphadenopathy, are a common occurr...</p>
                <a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </div>
</section>

<!--Footer Section-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i>home</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>about</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>services</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>doctors</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>appointment</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>review</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>blogs</a>
        </div>
        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i>dental care</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>massage therapy</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>cardioloty</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>diagnosis</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>ambulance service</a>
        </div>
        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i>+91-7865005439</a>
            <a href="#"> <i class="fas fa-phone"></i>+91-9764417053</a>
            <a href="#"> <i class="fas fa-envelope"></i>wincoder@gmail.com</a>
            <a href="#"> <i class="fas fa-envelope"></i>wincoder@gmail.com</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>appointment</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>ratlam,(M.P)</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i>faceappointment</a>
            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
            <a href="#"> <i class="fab fa-pinterest"></i>pinterest</a>
        </div>
    </div>
    <div class="credit"><i class="fa-regular fa-copyright"></i>Copyright medicare.com 2024.All Right Reserved.</div>
</section>
<script src="script.js"></script>

</body>
</html>