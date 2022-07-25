<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="antialiased">
        <!-- start header  -->
    <header>
        <div class="user">
            <img src="image/anh.jpg" alt="">
            <h3 class="name">Nguyen Cu Son</h3>
            <p class="post">Front end developer</p>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- end header  -->
    
    <div id="menu" class="fas fa-bars"></div>
    
    
    <!-- home section starts -->
    
    <section class="home" id="home">
        <h3>HI THERE !</h3>
        <h1>I'M <span>Nguyen Cu Son</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, repellendus nobis obcaecati labore porro ex facilis ratione itaque est. Modi mollitia cum sunt fuga deleniti doloremque illo adipisci iste voluptate!</p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
        
    </section>
    <!-- home section ends -->
    
    
    <!-- about section starts -->
    
    <section class="about" id="about">
        <h1 class="heading">
            <span>about</span> me
        </h1>
        <div class="row">
            <div class="info">
                <h3> name: <span>Nguyen Cu Son</span></h3>
                <h3> age: <span>20</span></h3>
                <h3> quanlification: <span>BMS</span></h3>
                <h3> post: <span>front end developer</span></h3>
                <h3> language: <span>vietnamese</span></h3>
                <a href=""><button class="btn">dowload CV <i class="fas fa-download"></i></button></a>
            </div>
            
            <div class="counter">
                <div class="box">
                    <span>2+</span>
                    <h3>years of experience</h3>
                </div>
                
                <div class="box">
                    <span>100+</span>
                    <h3>project completed</h3>
                </div>
                
                <div class="box">
                    <span>430+</span>
                    <h3>happy clients</h3>
                </div>
                
                <div class="box">
                    <span>12+</span>
                    <h3>award won</h3>
                </div>
            </div>
            
            
        </div>
    </section>
    
    <!-- about section ends -->
    
    
    <!-- education section starts  -->
    
    <section class="education" id="education">
        
        <h1 class="heading"> my <span>education</span> </h1>
        
        <div class="box-container">
            
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018</span> <span>2022</span>
                <h3>Student</h3>
                <p>Hungyen University Of Technology And Education School</p>
                <p>Software Engineer</p>
            </div>
            
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>11/2021</span> <span>01/2022</span>
                <h3>Interns</h3>
                <p>ABCSoft Information System Solution and Development Joint-Stock Company</p>
                <p>.NET Interns</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2022</span>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
            </div>


            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2022</span>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
            </div>
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2022</span>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
            </div>
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2022</span>
                <h3>front end development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
            </div>         
        </div>       
    </section>
    
    <!-- education section ends -->
    
    <!-- portfolio section starts  -->
    <section class="portfolio" id="portfolio">
        <h1 class="heading"> my <span>portfolio</span></h1>   
        <div class="box-container">
            <div class="box">
                <img src="image/anh.jpg" alt="">
                <span> <i class="fas fa-eye"></i></span>
            </div>
            <div class="box">
                <img src="image/anh.jpg" alt="">
                <span> <i class="fas fa-eye"></i></span>
            </div>
            <div class="box">
                <img src="image/anh.jpg" alt="">
                <span> <i class="fas fa-eye"></i></span>
            </div>
            <div class="box">
                <img src="image/anh.jpg" alt="">
                <span> <i class="fas fa-eye"></i></span>
            </div>
            <div class="box">
                <img src="image/anh.jpg" alt="">
                <span> <i class="fas fa-eye"></i></span>
            </div>
            <div class="box">
                <img src="image/anh.jpg" alt="">
                <span> <i class="fas fa-eye"></i></span>
            </div>
            
        </div>
    </section>

    <!-- portfolio section ends -->
    
  
    <!-- contact section starts -->

    <section class="contact" id="contact">
        <h3 class="heading">
            <span>contact</span> me 
        </h3>
        <div class="row">
            <div class="content">
                <h3 class="title">contact info</h3>
                <div class="info">
                    <h3><i class="fas fa-envelope"></i>nguyencuson28102000@gmail.com</h3>
                    <h3><i class="fas fa-phone"></i>0963104800</h3>
                    <h3><i class="fas fa-map-marker-alt"></i>Dai Dong - Van Lam - Hung Yen</h3>

                </div>
            </div>
            <form action="">
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="text" placeholder="project" class="box">
                <textarea name="" id="" cols="30" rows="10" placeholder="message" class="box message"></textarea>
                <button type="submit" class="btn">send <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </section>

    <!-- contact section end -->
    
    <!-- scroll top button  -->
    <a href="#home" class="top">
        <img src="image/scroll-top-img.png" alt="">
    </a>
    
    
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- custom js file link -->
    <script src="js/script.js"></script>
    </body>
</html>
