<?php
include 'template/header.php';
?>
<!-- start header section -->
<div class="con">
    <header>
        <div class="logo">CPNC</div>
        <nav id="menu-list"  class="menu-active">
            <button class="slide-left" onclick="hide() "><i id="arrow-left"class="fa-solid fa-arrow-left" ></i></button>
            <ul>
                <li><a onclick="hide()" href="#home"> home</a></li>
                <li><a onclick="hide()" href="#about">about</a></li>
                <li><a onclick="hide()" href="#admission">admission</a></li>
                <li><a onclick="hide()" href="#footer">contact</a></li>
                <!-- <li><a onclick="hide()" href="www.cpnc.globalnaz.com/" target="_blank">GNECsis</a></li> -->
                
            </ul>
            <buton class="primary-btn" style="cursor: pointer;" onclick="hide(); redirect() ">GNECsis</buton>
        </nav>
      <button class="menu-btn" id="menu"><i id="bar" class="fa-solid fa-bars" style="font-size: 1rem;"></i></button>
    </header>
  </div> 
<!-- end header section -->

<main>

    

<div id="particles-js" class="particles">
    <!--start home section --> 
<section class="home" id="home">
    <img class="img" src="images/60th_logo.png" alt="" >  
    <div class="text">
        <h1>Reflecting Brilliance Transforming Generation</h1>
        <p>Founded in 1964 in Iloilo City.</p>
        <p>Transferred to Cebu in Cebu City in 1986.</p>
        <p style="margin-bottom: 2rem;">Change of name from VNBC to CPNC in 2021.</p>
        <!-- <a href="#about" class="primary-btn" style="font-size: 1.5vw;" >READ MORE</a> -->

      

    </div>    
   
</section> 

<!-- end  home section -->
</div>  




<!-- Parallax1 Section -->
    <section class="parallax1"> </section> 
 <!-- end Parallax1 Section -->

<!-- About Section -->
    <section class="about" id="about">
        <div class="left"> 
            <img src="images/about2.jpg" alt="">
        </div>
        <div class="right">
            <h1>About us</h1>
            <p>Welcome to Central Philippine Nazarene College, a beacon of academic excellence deeply rooted in Christian values and principles. Our institution stands as a testament to the unwavering commitment to nurturing young minds, not only academically but also spiritually. At CPNC, we believe that education is a transformative journey, and we strive to foster an environment where students can grow intellectually, morally, and spiritually.</p>
        </div>
    </section>  
<!-- End About Section -->
     

<!-- Article Section -->
<section class="article1">
    <div class="left">
        <h1>Reflecting Brilliance Transforming Generation</h1>
        <p>This year marks a significant milestone in the history of Central Philippine Nazarene College (CPNC) as we proudly celebrate our 60th anniversary. Six remarkable decades of dedication to education, unwavering commitment to Christian values, and the nurturing of countless minds have shaped CPNC into the esteemed institution it is today.</p>
    </div>
    <div class="right" >
        <img src="images/article1.jpg" alt="" >
    </div>
</section>

    <section class="article2">
        <div class="left" >
           <img src="images/article2.jpg" alt="" >
         </div>
         <div class="right" >
            <h1>Founding Vision:</h1>
            <p>Founded in 1968, CPNC emerged from a vision to provide quality education rooted in the principles of the Church of the Nazarene. From its humble beginnings, the institution has grown into a bastion of academic excellence, consistently producing graduates who excel not only in their chosen fields but also in their commitment to Christian service.</p>
         </div>
    </section>

    <section class="article3 ">
        <div class="left" >
           <h1>Educational Excellence:</h1>
           <p>Over the past six decades, CPNC has stood as a pillar of academic excellence in the Central Philippines region. Our dedicated faculty and staff have tirelessly worked to create an environment that fosters intellectual curiosity, critical thinking, and a passion for lifelong learning. The success stories of our alumni across various industries bear witness to the quality education they received at CPNC.</p>
         </div>
         <div class="right">
           <img src="images/article3.jpg" alt="">
         </div>
    </section> 
<!-- end Artice Section -->

<!-- parallax -->
    <section class="parallax2"> </section>
 <!--end parallax  -->


<!-- admission -->
<section class="admission" id="admission">
       <div class="header">
        <h1>Central Philippine Nazarene College</h1>
        <h2>Your <span>Gateway to Excellence </span> in Education!</h2>
        <p>
            At CPNC, we believe that education is not just about acquiring knowledge; it's about fostering a lifelong love for learning, nurturing character, and preparing students for success in an ever-evolving world. We invite you to explore the enriching educational opportunities we offer, as we strive to provide an environment where every student can thrive and reach their full potential.
        </p>
        <i class="fa-solid fa-user-pen"></i>
       </div> 
       <div class="content">
        <div class="left">
            <h2><span>Why Choose </span>CPNC?</h2>
                <div class="excellence">
               
                    <i class="fa-solid fa-landmark"></i>
                     <p><span>Academic Excellence:</span> Our curriculum is designed to challenge and inspire students, fostering critical thinking, creativity, and a passion for knowledge. With a team of dedicated and experienced educators, we are committed to providing a top-notch academic experience.</p>
                    
                </div>
                <div class="development icon">
                    <i class="fa-solid fa-seedling"></i>
                    <p>
                        <span>Holistic Development:</span> Beyond academics, we focus on the holistic development of each student. Our programs encompass not only intellectual growth but also character building, emotional intelligence, and social skills. We aim to mold well-rounded individuals who are prepared for success in all facets of life.
                    </p>
                </div>
                <div class="faith icon">
                    <i class="fa-solid fa-book-bible"></i>
                    <p>
                        <span>Faith-Based Education:</span> At CPNC, we integrate Christian values into every aspect of our educational approach. Our commitment to faith-based education ensures that students not only excel academically but also develop a strong moral compass, empathy, and a sense of purpose.
                    </p>
                </div>
        </div>
            <div class="right">
                <div class="online">
                    <h1>School <span>Admission</span> </h1>
                   <h2><i class="fa-regular fa-square-check"></i>Online Application</h2> 
                   <p> Begin your journey by filling out our online application form, providing essential details about the prospective student.</p>
                </div>
                <div class="exam">
                   <h2><i class="fa-regular fa-square-check"></i>Entrance Exam</h2> 
                   <p>
                    As part of the evaluation process, students may be required to take an entrance examination. This helps us understand their current academic standing and potential.
                   </p>
                </div>
                <div class="interview">
                    <h2><i class="fa-regular fa-square-check"></i>Interview</h2>
                    <p>
                        Shortlisted candidates and their parents will be invited for a personal interview. This allows us to get to know each student better and ensure that CPNC is the right fit for their educational goals.
                    </p>
                </div>
                <div class="acceptance">
                  <h2><i class="fa-regular fa-square-check"></i>Acceptance</h2> 
                  <p>
                    Successful candidates will receive an acceptance letter, outlining the next steps for enrollment.
                  </p> 
                </div>
                <p>At CPNC, we believe in creating a community where students, parents, and educators work together to inspire greatness. Join us on this educational journey and be part of an institution that values excellence, integrity, and compassion.
                    Ready to take the next step? Apply today and experience the CPNC difference!</p>
                <!-- <button class="apply-btn">Apply Now</button>
                <button class="contact-btn">Contact Us</button> -->
            </div>
       </div>
</section>
<!-- end admission -->
 </main>

<!-- Footer Section -->
<div class="footer-container">
    <footer  id="footer">
        <p>
            Central Philippine Nazarene College Inc. ©2023 | All Rights Reserved
        </p>
        <div class="connect">
            <div class="loc">
               <p >Central Philippine Nazarene College Saint Mary's Drive Apas, Cebu City</p>
                <p><i class="fas fa-phone"> (032) 505-5131</i></p>     
            </div>
            <a href="https://www.facebook.com/cpncMain" >
                <p><i class="fa-brands fa-facebook"></i> Facebook</p> 
            </a>
        </div>
      </footer>
</div>
<?php
include 'template/footer.php'
?>


