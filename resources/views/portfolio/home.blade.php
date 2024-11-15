    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Portfolio</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>

        <header class="header">
            <a href="home" class="logo">Maryam
                <span>Almosaneef</span></a>

                <box-icon name='menu' animation='fade-left' color='#a303ff' ></box-icon>

            <nav class="navbar">
                <a href="#home" class="active">Home</a>
                <a href="#education">Education</a>
                <a href="#services">Services</a>
                <a href="#testimonials">Testimonials</a>
                <a href="contact">Contact</a>
            </nav>
        </header>

        <section class="home" id="home">
            <div class="home-content">
                <h1>Hi it's <span>Maryam</span></h1>
                <h3 class="text-animation">I'm a <span>
                    </span></h3>
                    <p>“a passionate technology student
                         with a growing interest in web and mobile development.
                          I have some experience working with Laravel and am
                           developing my skills in Flutter to create engaging
                            and responsive applications. My journey in tech is
                             driven by curiosity and the desire to build innovative 
                             solutions while continually expanding my knowledge.”
                        </p>
                    <div class="social-icons">
                            <a href="#"><i class="bx bxl-linkedin"></i></a>
                            <a href="#"><i class="bx bxl-github"></i></a>
                            <a href="#"><i class="bx bxl-instagram-alt"></i></a>
                            <a href="#"><i class="bx bxl-twitter"></i></a>
                    </div>
                    <div class="btn-group">
                        <a href="#" class="btn">Hire</a>
                        <a href="#contact"
                            class="btn">Contact</a>
                    </div>
                </div>
                        <div class="home-img">
                            <img src="{{asset('images/fth.jpg')}}" alt="">
                        
                </div>
        </section>
        <script src=""></script>
    </body>
    </html>