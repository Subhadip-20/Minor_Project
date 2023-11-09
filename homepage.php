<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="homepage.css">
    <style>
    .search-container {
      display: flex;
    }

    .search-input {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .search-button {
      background: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
<div class="background-image"></div> 
<header>
<a href="#" class="logo">Home Solutions</a>
    <div id="menu-bar" class="fas fa-bars"></div>
<form action="search.php" method="GET">
    <div class="search-container">
      <input type="text" class="search-input" name="search_query" placeholder="Search...">
      <button type="submit" class="search-button">
        <span>&#128269;</span> 
      </button>
    </div>
  </form>
    </div>
    <nav class="navbar">
        <a style="--i:0;" href="#home">Home</a>
        <a style="--i:1;" href="#features">Features</a>
        <a style="--i:2;" href="#project">Project</a>
        <a style="--i:3;" href="#services">Services</a>
        <a style="--i:4;" href="#team">Team</a>
        <a style="--i:5;" href="#contact">Contact us</a>
    </nav>
    <a style="--i:6;" id="loginButton"><b>Login</b></a>
</header>

<div class="popup-container" id="loginPopupContainer">
    <div class="popup">
        <span class="close-popup" id="closePopup">&times;</span>
        <h2>Choose Account Type</h2>
        <div class="login">
            <a class="customer-button" href="c_log.html" id="customerLoginButton" style="--i:7;"></a>
            <span id="cb">Customer</span>
        </div>
        <div class="login">
            <a class="provider-button" href="p_log.html" id="providerLoginButton" style="--i:8;"></a>
            <span id="pb">Provider</span>
        </div>
    </div>
</div>

<section class="home" id="home">
    <div class="content">
        <h1>Solutions For All Home Services</h1>
        <p>Your trusted partner for all home-related needs.</p>
        <a href="#services" class="btn">Explore Services</a>
    </div>
</section>



<section class="features" id="features">
    
    <h2 class="heading"><b>Why choose our company for your services?</b></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quis fuga. Ex mollitia quis sapiente tempore expedita, cumque, quod esse sit tempora maxime quidem dolorem sed corporis nesciunt, architecto doloribus.</p>
    <div class="box-container">

        <div class="box">
            <img src="images/fe1.jpg" alt="" height="150" width="150">
            <h3><b>High Quality</b></h3>
            <p>We use high quality materials, professional tools and supplies and attention to detail not found in most home improvement companies. From small jobs to large ones, you can relay on the experience.</p>
            <button class="btn" id="feature1">Read More</button>
                <div id="feature1-popup" class="feature-popup">
                    <div class="feature-popup-content">
                        <span class="feature-popup-close">×</span>
                        <div class="feature-content">
                            <div class="feature-image-container">
                                <img src="images/fe1.jpg" alt="">
                            </div>
                            <div class="feature-text">
                                <h1>High Quality</h1>
                                <p>We use high quality materials, professional tools and supplies and attention to detail not found in most home improvement companies. From small jobs to large ones, you can relay on the experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/fe2.jpg" alt="" height="150" width="150">
            <h3><b>Professionalism</b></h3>
            <p>Our experts exemplify unparalleled professionalism with deep knowledge, precision, and dedication, they consistently deliver high-quality results, setting the gold standard for excellence in our field.</p>
            <button class="btn" id="feature2">Read More</button>
                <div id="feature2-popup" class="feature-popup">
                    <div class="feature-popup-content">
                        <span class="feature-popup-close">×</span>
                        <div class="feature-content">
                            <div class="feature-image-container">
                                <img src="images/fe2.jpg" alt="">
                            </div>
                            <div class="feature-text">
                                <h1>Professionalism</h1>
                                <p>Our experts exemplify unparalleled professionalism in their work. With deep knowledge, precision, and dedication, they consistently deliver high-quality results, setting the gold standard for excellence in our field.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/fe3.jpg" alt="" height="150" width="150">
            <h3><b>Flexibility</b></h3>
            <p>You don't have to pay the most to get great work from us. Because for us each home repair project is unique, we create a customised plan that fits each customer's specific needs and expectations.</p>
            <button class="btn" id="feature3">Read More</button>
                <div id="feature3-popup" class="feature-popup">
                    <div class="feature-popup-content">
                        <span class="feature-popup-close">×</span>
                        <div class="feature-content">
                            <div class="feature-image-container">
                                <img src="images/fe3.jpg" alt="">
                            </div>
                            <div class="feature-text">
                                <h1>Flexibility</h1>
                                <p>You don't have to pay the most to get great work. Because each home repair project is unique, we create a customised plan that fits each customer's specific needs an expectations.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/fe4.jpg" alt="" height="150" width="150">
            <h3><b>Courteous</b></h3>
            <p>We see this as an opportunity to save our customer's time, energy and frustations. Our customer's also appreciate the timely communication we provide regarding the questions and concerns.</p>
            <button class="btn" id="feature4">Read More</button>
                <div id="feature4-popup" class="feature-popup">
                    <div class="feature-popup-content">
                        <span class="feature-popup-close">×</span>
                        <div class="feature-content">
                            <div class="feature-image-container">
                                <img src="images/fe4.jpg" alt="">
                            </div>
                            <div class="feature-text">
                                <h1>Courteous</h1>
                                <p>We see this as an opportunity to save our customer's time, energy and frustations. Our customer's also appreciate the timely communication we provide regarding the questions and concerns.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>

</section>

<section class="project" id="project">

    <h2 class="heading"><b>Reliable, Trusted and Professional Services</b></h2>
    <p>At Home Service Provider, we take pride in offering a comprehensive range of services that are built on the pillars of reliability, trustworthiness, and professionalism. We understand that your home is your sanctuary, and you deserve nothing but the best when it comes to maintaining and improving it.</p>
    <div class="box-container">

        <div class="box">
            <span class="number">01</span>
            <img src="images/realibility.png" alt="" height="250" width="330" >
            <div class="info">
                <h3>Reliability</h3>
                <p>The quality of the platform is being able to be trusted or believed because of it's best working and behaving character.</p>
            </div>
        </div>

        <div class="box">
            <span class="number">02</span>
            <img src="images/trustworthiness.png" alt="" height="250" width="320">
            <div class="info">
                <h3>Trustworthiness</h3>
                <p>It is a very secure platform that can be entrusted with your secrets or with anything else of importance.</p>
            </div>
        </div>

        <div class="box">
            <span class="number">03</span>
            <img src="images/craftworthyness.png" alt="" height="250" width="310" position="center">
            <div class="info">
                <h3>Quality Craftsmanship</h3>
                <p>It is the quality that comes from creating with passion, care, and attention to detail</p>
            </div>
        </div>

        <div class="box">
            <span class="number">04</span>
            <img src="images/customercentricapproch.png" alt="" height="247" width="305">
            <div class="info">
                <h3>Customer-Centric Approach</h3>
                <p>we put our customers first and at the core of our business in order to provide a positive experience and build long-term relationships.</p>
            </div>
        </div>

        <div class="box">
            <span class="number">05</span>
            <img src="images/affordablity.png" alt="" height="247" width="310">
            <div class="info">
                <h3>Affordability</h3>
                <p>It is such a platform where the customers get cheap enough at any service.</p>
            </div>
        </div>

        <div class="box">
            <span class="number">06</span>
            <img src="images/customer-satisfaction.png" alt="" height="250" width="365">
            <div class="info">
                <h3>Customer Satisfaction</h3>
                <p>It determines that how happy customers are with a company's products, services, and capabilities.</p>
            </div>
        </div>
        
    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our services </h1>
    <div class="box-container">

        <div class="box">
            <img src="images/s1.jpg" alt="" height="150" width="150">
            <h3>Women's Salon & Spa</h3>
            <p>our beauty parlor is an establishment that provides cosmetic treatments for people. Other variations of this type of business include hair salons, spas, day spas, and medical spas etc.</p>
            <button class="btn" id="service1">Read More</button>
                <div id="service1-popup" class="modal">
                    <div class="modal-content">
                        <span id="service1-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s1.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Women's Salon & Spa</h2>
                                <p id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=WomensSalonAndSpa">
                        <button id="book-service1" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/s2.jpg" alt="" height="150" width="150">
            <h3>Men's Salon & Massage</h3>
            <p>Our salon is dedicated to the primping and preening of men. Our high-service men's salons tout stylish haircuts, fine manicures, exfoliating facials, meticulous waxing services, massage etc.</p>
            <button class="btn" id="service2">Read More</button>
                <div id="service2-popup" class="modal">
                    <div class="modal-content">
                        <span id="service2-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s2.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Men's Salon & Massage</h2>
                                <p id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=MensSalonAndMassage">
                        <button id="book-service2" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/s3.jpg" alt="" height="150" width="150">
            <h3>Care Taker</h3>
            <p>Our care taker gives physical or emotional care and support to the younger children and takes care of the house or land of an owner who may be absent.</p>
            <button class="btn" id="service3">Read More</button>
                <div id="service3-popup" class="modal">
                    <div class="modal-content">
                        <span id="service3-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s3.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Care Taker</h2>
                                <p id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=CareTaker">
                        <button id="book-service3" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/s4.jpg" alt="" height="150" width="150">
            <h3>Cook</h3>
            <p>Our chef is a professional cook and tradesman who is proficient in all aspects of food preparation, often focusing on a particular cuisine.</p>
            <button class="btn" id="service4">Read More</button>
                <div id="service4-popup" class="modal">
                    <div class="modal-content">
                        <span id="service4-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s4.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Cook</h2>
                                <p id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=Cook">
                        <button id="book-service4" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/s5.jpg" alt="" height="150" width="150">
            <h3>Carpenter</h3>
            <p>Our carpenters are involved in the designing, Measuring, marking up, cutting, shaping, fitting and finishing using different types of wood. </p>
            <button class="btn" id="service5">Read More</button>
                <div id="service5-popup" class="modal">
                    <div class="modal-content">
                        <span id="service5-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s5.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Carpenter</h2>
                                <p  id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=Carpenter">
                        <button id="book-service5" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/s6.jpg" alt="" height="150" width="150">
            <h3>Electrician</h3>
            <p>Our electricians are a skilled professional who specializes in installing, maintaining, and repairing electrical systems in buildings and structures. </p>
            <button class="btn" id="service6">Read More</button>
                <div id="service6-popup" class="modal">
                    <div class="modal-content">
                        <span id="service6-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s6.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Electrician</h2>
                                <p id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=Electrician">
                        <button id="book-service6" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/s7.jpg" alt="" height="150" width="150">
            <h3>Plumber</h3>
            <p>Our plumbers install and repair pipes and fixtures that carry water, gas, or other fluids in homes and businesses.They will work on sites, in clients homes, or in a workshop etc..</p>
            <button class="btn" id="service7">Read More</button>
                <div id="service7-popup" class="modal">
                    <div class="modal-content">
                        <span id="service7-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s7.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Plumber</h2>
                                <p id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=Plumber">
                        <button id="book-service7" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/s8.jpg" alt="" height="150" width="150">
            <h3>Painter & Decorator</h3>
            <p>Our painters and decorators are the tradesman responsible for the painting and decorating of buildings. Their purpose of painting is to improve the appearance of a building.</p>
            <button class="btn" id="service8">Read More</button>
                <div id="service8-popup" class="modal">
                    <div class="modal-content">
                        <span id="service8-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s8.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Painter & Decorater</h2>
                                <p id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=PainterAndDecorator">
                        <button id="book-service8" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>

        <div class="box">
            <img src="images/s9.jpg" alt="" height="150" width="150">
            <h3>Cleaning & Pest Control</h3>
            <p>Our Technician is a professional who uses a variety of techniques to eliminate pests from residential, commercial and industrial facilities.</p>
            <button class="btn" id="service9">Read More</button>
                <div id="service9-popup" class="modal">
                    <div class="modal-content">
                        <span id="service9-popup-close" class="close">×</span>
                        <div class="content">
                            <div class="image-container">
                                <img src="images/s9.jpg" alt="">
                            </div>
                            <div class="text-container">
                                <h2>Cleaning & Pest Control</h2>
                                <p id="popup-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores autem dolores repudiandae? Dolore ea expedita itaque, tempora, adipisci, quas modi inventore ipsa laboriosam voluptate omnis numquam ex blanditiis earum!locale_filter_matches</p>
                            </div>
                        </div>
                        <a href="search.php?search_query=CleaningAndPestControl">
                        <button id="book-service9" class="book-button">Book</button></a>
                    </div>
                </div>
        </div>
        <span>Contact us today to discover how we can transform your home and make it the best it can be</span>
    </div>
</div>
</section>

<section class="team" id="team">

    <h1 class="heading">our team</h1>
    <div class="box-container">

        <div class="box">
            <img src="images/sourashis.jpg" alt="">
            <h3>Sourashis Ghosh</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100022029309679&mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/sourashis_ghosh?igshid=NzZlODBkYWE4Ng==" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/sourashis-ghosh-775a66246" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/triparna.jpg" alt="">
            <h3>Triparna Das</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100070991185829" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/triparna_das_13?igshid=NzZlODBkYWE4Ng==" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/triparna-das-655761249" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/subhadip.jpg" alt="">
            <h3>Subhadip Das</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100041144290769&mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/the_ghosted_island?igshid=NzZlODBkYWE4Ng==" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/subhadip-das-34206724a" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/kuheli.jpg" alt="">
            <h3>Kuheli Ghosh</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/kuheli.ghosh.777701?mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/kuhelighosh2004?igshid=NzZlODBkYWE4Ng==" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/kuheli-ghosh-a3668b261" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="images/diyasha.jpg" alt="">
            <h3>Diyasha Singha Roy</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100058735253060&mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://instagram.com/art_world_dsr?igshid=MmU2YjMzNjRlOQ" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/diyasha-singha-roy-1baa79246" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/annaya.jpg" alt="">
            <h3>Annaya Mukherjee</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100055283026328" class="fab fa-facebook-f"></a>
                <a href="https://www.linkedin.com/in/ananya-mukherjee-032432285" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/in/ananya-mukherjee-032432285" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>


<section class="contact" id="contact">

    <h1 class="heading">contact us</h1>
    <div class="row">

        <form id="contact-form" name="contact-form">

            <div class="inputBox">
                <input type="text" required>
                <label>name</label>
            </div>

            <div class="inputBox">
                <input type="email" required>
                <label>email</label>
            </div>

            <div class="inputBox">
                <input type="number" required>
                <label>number</label>
            </div>

            <div class="inputBox">
                <textarea required name="" id="" cols="30" rows="10"></textarea>
                <label>message</label>
            </div>

            <input type="submit" class="btn" value="send message">

        </form>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721428.76450039!2d87.85113775!3d24.37407435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fa16ff1397e887%3A0x71543a3dc3e7a20a!2sWest%20Bengal!5e0!3m2!1sen!2sin!4v1695642668505!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

</section>


<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt veniam eum in libero delectus sit reprehenderit velit similique! Ad, ea!.</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#project">project</a>
            <a href="#services">services</a>
            <a href="#team">team</a>
            <a href="#contact">contact us</a>
        </div>

        <div class="box">
            <h3>category</h3>
            <a href="search.php?search_query=WomensSalonAndSpa">Women's Salon & Spa</a>
            <a href="search.php?search_query=MensSalonAndMassage">Men's Salon & massage</a>
            <a href="search.php?search_query=CareTaker">Care Taker</a>
            <a href="search.php?search_query=Cook">Cook</a>
            <a href="search.php?search_query=Carpenter">Carpenter</a>
            <a href="search.php?search_query=Electrician">Electrician</a>
            <a href="search.php?search_query=Plumber">Plumber</a>
            <a href="search.php?search_query=PainterAndDecorator">Painter & Decorator</a>
            <a href="search.php?search_query=CleaningAndPestControl">Cleaning & Pest Control</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#" class="fab fa-facebook-f">  facebook</a>
            <a href="#" class="fab fa-twitter"> twitter</a>
            <a href="#" class="fab fa-instagram"> instagram</a>
            <a href="#" class="fab fa-linkedin"> linkedin</a>
        </div>

    </div>

    <h1 class="credit"><b> &copy; copyright 2023 Home Solutions. All rights reserved </b></h1>

</div>

<script src="homepage.js"></script>

</body>
</html>