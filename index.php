<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saphintar</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    
    <!-- jquery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        .titles {
            color: #7ebd4a;
        }
    </style>
    <!-- <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" /> -->
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#landing_page">
                <img class="logo" src="img/saphintarCrop.png" alt="" style="height: 5vh;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#mf">Mission & Vision</a>
                    <a class="nav-link" href="#waste">Waste Categories</a>
                    <a class="nav-link" href="#feature">Feature</a>
                    <a class="nav-link" href="#contact">Contact</a>
                    <a class="nav-link" href="#prototype">Product Prototype</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->


    <!-- big title -->
    <div class="landing_page bg-cust-green" id = "landing_page">
        <div class="container pb-0">
            <div class="row align-items-center">
                <div class="col-sm-8 pt-5 order-2 order-sm-1 " data-aos="fade-right" data-aos-delay="1000">
                    <h1>Saphintar Your First Educating Trashbin <br> Available For You</h1>
                    <br>
                    <a class="box curmudgeon font-weight-bolder text-decoration-none p-3 rounded-pill m-2" href="#mf">Find Out More About Saphintar</a>
                </div>
                <div class="col-sm-4 text-center m-auto">
                    <img src="img/logo/logo-black.png" class="img-fluid" alt="saphintar">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,0L120,10.7C240,21,480,43,720,42.7C960,43,1200,21,1320,10.7L1440,0L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,0L120,10.7C240,21,480,43,720,42.7C960,43,1200,21,1320,10.7L1440,0L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg> -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L120,186.7C240,213,480,267,720,272C960,277,1200,235,1320,213.3L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> -->
    </div>
    <!-- end of big title -->

    <!-- table of contents -->
    <div class="container" style = "margin-top : -175px;">
        <div class="row justify-content-center">
            <div class="col-sm-12 text-center">
                <a class="box curmudgeon font-weight-bolder text-decoration-none p-3 rounded-pill m-2" data-aos="fade-left" href="#mf">Mission & vision</a>
                <a class="box curmudgeon font-weight-bolder text-decoration-none p-3 rounded-pill m-2" data-aos="fade-left" href="#waste">Waste Categories</a>
                <a class="box curmudgeon font-weight-bolder text-decoration-none p-3 rounded-pill m-2" data-aos="fade-left" href="#features">Features</a>
                <a class="box curmudgeon font-weight-bolder text-decoration-none p-3 rounded-pill m-2" data-aos="fade-left" href="#contact">Contact</a>
                <a class="box curmudgeon font-weight-bolder text-decoration-none p-3 rounded-pill m-2" data-aos="fade-left" href="#prototype">Product Prototype</a>
            </div>
        </div>
    </div>
    <!--end of table of contents -->

    <!-- gap -->
    <!-- <div class="text-white">.</div> -->

    <div class="container-fluid p-0" id="mf">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L80,165.3C160,171,320,181,480,170.7C640,160,800,128,960,122.7C1120,117,1280,139,1360,149.3L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        
        <div class="row justify-content-center me-1">
            <div class="col-sm-4 ms-3 bg-dark text-white text-center rounded-5 opacity-75 p-4" data-aos="flip-down">
                <h1 class="text-center mb-4 titles" data-aos="zoom-in" data-aos-delay="500">A Little Description of saphintar</h1>
                <h5 data-aos="zoom-in" data-aos-delay="1000">
                    Saphintar is a smart trashbin equipped with an A.I Technology to help us sort out our waste and gives a better education about waste management.
                </h5>

            </div>
        </div>

        <div class="row mx-1">
            <div class="col-sm-4  bg-dark text-white text-center rounded-5 opacity-75 p-4" data-aos="flip-down">
                <h1 class="text-center mb-4 titles" data-aos="zoom-in" data-aos-delay="500">Our Mission</h1>
                <h5 data-aos="zoom-in" data-aos-delay="1000">
                    Our Mission is to make a better waste management through our product while also educating the users.
                </h5>

            </div>
            <div class="col-sm-4 ms-auto bg-dark text-white text-center rounded-5 opacity-75 p-4" data-aos="flip-down">
                <h1 class="text-center mb-4 titles" data-aos="zoom-in" data-aos-delay="500">Our Vision</h1>
                <h5 data-aos="zoom-in" data-aos-delay="1000">
                    Our Vision is to be aware dan care of our environment.
                </h5>
    
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,256L80,266.7C160,277,320,299,480,298.7C640,299,800,277,960,261.3C1120,245,1280,235,1360,229.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </div>

    <h1 class="text-center mt-5 titles" data-aos="zoom-in" id = "waste">Waste Categories</h1>
    <h5 class="text-center my-5" data-aos="zoom-in">There are 4 types of wastes that Saphintar can recognize:</h5>
    <!-- type for desktop -->
    <div class="container d-lg-block d-none">
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <!-- bottle card -->
            <div class="col" id="bottle" data-aos="zoom-out-up">
                <div class="card h-100 cust-card">
                    <img src="img/type/bottle.png" class="card-img-top cust-card-img p-5" alt="bottle">
                    <div class="card-body">
                        <h3 class="card-title aclonica text-center">BOTTLE</h3>
                        <p class="card-text mt-3 text-center">
                            <ul class="check-list">
                                <li>Mineral Bottle</li>
                                <li>Shampoo Bottle</li>
                                <li>Detergent Bottle</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>

            <!-- plastic card -->
            <div class="col" id="plastic" data-aos="zoom-out-up">
                <div class="card h-100 cust-card">
                    <img src="img/type/plastic.png" class="card-img-top cust-card-img p-5" alt="plastic">
                    <div class="card-body">
                        <h3 class="card-title aclonica text-center">PLASTIC</h3>
                        <p class="card-text mt-3 text-center">
                            <ul class="check-list">
                                <li>Plastic Bag</li>
                                <li>Plastic Spoon</li>
                                <li>Plastic Glass</li>
                                <li>Snack Wrap</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>

            <!-- paper card -->
            <div class="col" id="paper" data-aos="zoom-out-up">
                <div class="card h-100 cust-card">
                    <img src="img/type/paper.png" class="card-img-top cust-card-img p-5" alt="paper">
                    <div class="card-body">
                        <h3 class="card-title aclonica text-center">PAPER</h3>
                        <p class="card-text mt-3 text-center">
                            <ul class="check-list">
                                <li>Book</li>
                                <li>Paper Bag</li>
                                <li>Tissue</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>

            <!-- other card -->
            <div class="col" id="other" data-aos="zoom-out-up">
                <div class="card h-100 cust-card">
                    <img src="img/type/other.png" class="card-img-top cust-card-img p-5" alt="other">
                    <div class="card-body">
                        <h3 class="card-title aclonica text-center">OTHERS</h3>
                        <p class="card-text mt-3 text-center">
                            <ul class="check-list">
                                <li>Food waste</li>
                                <li>Wooden stick</li>
                                <li>Stationary</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of type for desktop -->

    <!-- type carousel for mobile -->
    <div id="type-carousel" class="carousel slide d-block d-lg-none" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#type-carousel" data-bs-slide-to="0" class=""></button>
            <button type="button" data-bs-target="#type-carousel" data-bs-slide-to="1" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#type-carousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#type-carousel" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">

                <!-- first slide -->
                <div class="carousel-item p-5"></div>
                
                <!-- second slide -->
                <div class="carousel-item p-5 active"></div>
                
                <!-- third slide -->
                <div class="carousel-item p-5"></div>
                
                <!-- fourth slide -->
                <div class="carousel-item p-5"></div>

            <!-- </div> -->
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#competition-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#competition-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!--end of type carousel for mobile -->

    <div style="height: 50px"></div>
    <div class="specification bg-cust-yellow pt-5" id = "features">
        <h1 class="text-center titles" data-aos="zoom-in">Our Features</h1>
        <h5 class="text-center mt-3 data-aos="zoom-in">Saphintar Have some features that might help you with organizing your wastes:</h5>
        <div class="carousel__wrapper" data-aos="zoom-in">
            <div>
                <div class="carousel__content">
                    <div class="carousel__container">
                        <div class="carousel__slide">
                            <div class="card__inner">
                                <div class="card__image">
                                    <img src="img/scan.png" alt="Charmander" />
                                </div>
                                <h4>A.I Object Recognition</h4>
                                <div class="card__description">
                                    <p>Saphintar can recognize the type of trash with the AI technology equipped</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel__slide">
                            <div class="card__inner">
                                <div class="card__image">
                                    <img src="img/sorting.png" alt="Psyduck" />
                                </div>
                                <h4>Easy Sorting</h4>
                                <div class="card__description">
                                    <p>saphintar will scan the waste and open up a bin according to its category</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel__slide">
                            <div class="card__inner">
                                <div class="card__image">
                                    <img src="img/education.png" alt="Pikachu" />
                                </div>
                                <h4>Education</h4>
                                <div class="card__description">
                                    <p>Saphintar will give education about the trash you're throwing to further push the
                                        awareness</p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="carousel__slide">
                    <div class="card__inner">
                        <div class="card__image">
                        <img src="https://i.imgur.com/JpHWJa4.png" alt="Sandshrew" />
                        </div>
                        <h4>Sandshrew</h4>
                        <div class="card__description">
                        </div>
                    </div>
                </div>

                <div class="carousel__slide">
                    <div class="card__inner">
                        <div class="card__image">
                        <img src="https://i.imgur.com/vJZ4agX.png" alt="Caterpie" />
                        </div>
                        <h4>Caterpie</h4>
                        <div class="card__description">
                        </div>
                    </div>
                </div> -->
                    </div>
                    <div id="prev-slide" class="arrow arrow--left">
                        <i class="bx bx-chevron-left"></i>
                    </div>
                    <div id="next-slide" class="arrow arrow--right">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:300px;" id = "prototype"> 
        <h1 class="text-center my-5 titles">Product Prototype</h1>
        <div class="h-50 d-flex justify-content-center">
            <img src="img/proto.png" style="height : 350px;width:700px;" class="pb-5" alt="other">
        </div>
    </div>
    <footer id = "contact">
        <svg style="transform: translateY(5px);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 317"><path fill="#212529" fill-opacity="1" d="M0,64L120,101.3C240,139,480,213,720,229.3C960,245,1200,203,1320,181.3L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>

        <div class="container-fluid bg-dark text-white">
            <div class="row">
                <div class="col-sm-4 text-center m-auto">
                    <img src="img/logo/logo-white.png" class="img-fluid" alt="saphintar">
                </div>
                <div class="col-sm-8 text-center m-auto">
                    <h3 class="my-4 titles">CONTACT US</h3>
                    <h5 class="mb-4">If you have any questions or interested in our product please feel free to contact us via this way</h5>
                    <a class="text-decoration-none mx-3 p-3 text-center text-white "  href="https://www.instagram.com/saphintar/" target="_blank">
                        <i class="bi bi-envelope-fill" style="font-size: 30px"></i>
                    </a>
                    
                    <a class="text-decoration-none mx-3 p-3 text-center text-white "  href="https://www.instagram.com/saphintar/" target="_blank">
                        <i class="bi bi-instagram" style="font-size: 30px"></i>
                    </a>

                    <div class="my-5">
                        <a class="text-decoration-none text-white p-3 m-2"href="#mf">Mission & Vision</a>
                        <a class="text-decoration-none text-white p-3 m-2"href="#waste">Waste Categories</a>
                        <a class="text-decoration-none text-white p-3 m-2"href="#features">Features</a>
                        <a class="text-decoration-none text-white p-3 m-2"href="#contact">Contact</a>
                        <a class="text-decoration-none text-white p-3 m-2"href="#prototype">Product Prototype</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

<style>
    .check-list {
    margin: 0;
    padding-left: 1.2rem;
    }

    .check-list li {
    position: relative;
    list-style-type: none;
    padding-left: 1.5rem;
    margin-bottom: 0.5rem;
    }

    .check-list li:before {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        top: 3.5px;
        width: 5px;
        height: 11px;
        border-width: 0 2px 2px 0;
        border-style: solid;
        border-color: #00a8a8;
        transform-origin: bottom left;
        transform: rotate(45deg);
    }
    .bg-cust-green {
        background-color: #D9F8C4;
    }

    .text-cust-green {
        color: #D9F8C4;
    }

    .bg-cust-yellow {
        background-color: #F9F9C5;
    }

    .text-cust-yellow {
        color: #F9F9C5;
    }

    .bg-cust-orange {
        background-color: #FAD9A1;
    }

    .text-cust-orange {
        color: #FAD9A1;
    }

    .bg-cust-red {
        background-color: #F37878;
    }

    .text-cust-red {
        color: #F37878;
    }

    .box {
        position: relative;
        vertical-align: middle;
        color: black;
        display: inline-block;
        text-align: center;
        transition: 0.5s;
        cursor: pointer;
        border: 1px solid black;
        -webkit-transition: 0.5s;
    }

    .box:hover {
        border: 1px solid rgba(0, 160, 80, 0);
        color: #F37878;
    }

    .box::before,
    .box::after {
        width: 100%;
        height: 100%;
        z-index: 3;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        box-sizing: border-box;
        -webkit-transform: scale(0);
        transition: 0.5s;
    }

    .curmudgeon::before {
        border-bottom: 3px solid #F37878;
        border-left: 0;
        -webkit-transform-origin: 0% 100%;
    }

    .curmudgeon::after {
        border-top: 0;
        border-right: 0;
        -webkit-transform-origin: 50% 50%;
    }

    .box:hover::after, .box:hover::before {
       -webkit-transform: scale(1);
    }

    .cust-card{
        /* border-width: 0!important; */
    }

    .cust-card::before{
        width: 110%;
        height: 110%;
        left: -20px;
        bottom: -20px;
        content: "";
        position: absolute;
        z-index: -1;
        -webkit-transition: 0.5s;
    }
    
    .cust-card:hover::before{
        background: rgba(217, 248, 196, 0.9);
        filter: blur(30px);
        transition: 1.5s;
        -webkit-transform-origin: 0% 100%;
    }

    .cust-card-img{
        filter: grayscale(1);
        -webkit-transition: 0.5s;
    }

    .cust-card-img:hover{
        filter: grayscale(0);
        transform: scale(1.1);
    }

    #mf{
        background-image: url('img/tpa-red.png');
        background-size: cover;
    }
    .carousel__wrapper {
            padding: 20px;
        }

        .carousel__content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .carousel__container {
            overflow-x: scroll;
            overflow-y: hidden;
            display: flex;
            align-items: center;
            height: 100%;
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
        }

        .carousel__container::-webkit-scrollbar {
            display: none;
        }

        .carousel__slide {
            min-width: 90%;
        }

        .card__description {
            display: flex;
            column-gap: 10px;
            align-items: center;
        }

        .card__description img {
            width: 20px;
        }

        .card__description span {
            padding: 5px 15px;
            border-radius: 5px;
            color: #fff;
        }

        .card__description span.fire {
            background-color: orange;
        }

        .card__description span.psychic {
            background-color: rgb(146, 100, 108);
        }

        .card__description span.electric {
            background-color: rgb(231, 210, 88);
        }

        .card__description span.rock {
            background-color: rgb(114, 102, 32);
        }

        .card__description span.grass {
            background-color: rgb(32, 114, 69);
        }

        .card__inner {
            box-shadow: rgba(3, 102, 214, 0.3) 0px 0px 0px 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px;
            flex-direction: column;
            row-gap: 0.5rem;
            height: 400px;
            border-radius: 15px;
            background-color: #fff;
            padding: 2rem 4rem;
        }

        .card__inner h4 {
            font-size: 1.5rem;
            margin: 0;
            color: rgb(170, 155, 155);
        }

        .card__image img {
            max-height: 150px;
            margin-bottom: 1rem;
        }

        .arrow {
            display: none;
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            top: calc(50% - 10px);
            background-color: rgba(3, 101, 214, 0.664);
            padding: 5px;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .arrow i {
            font-size: 1.5rem;
            color: #fff;
        }

        .arrow.arrow--right {
            right: 0%;
        }

        .arrow.arrow--left {
            left: 0%;
        }

        @media screen and (min-width: 1180px) {
            .carousel__wrapper {
                padding: 50px;
            }

            .carousel__slide {
                min-width: 33.33%;
                scroll-snap-align: center;
                position: relative;
            }

            .arrow {
                display: flex;
            }
        }
    
</style>
<script>
    AOS.init();

    $(document).ready(function(){

        //duplicate content for type carousel
        oldest = $("#type-carousel .carousel-item").first();
        oldest.html($("#bottle").html());
        oldest.next().html($("#plastic").html());
        oldest.next().next().html($("#paper").html());
        oldest.next().next().next().html($("#other").html());
        
        
    });
</script>
<script>
        /*--------------------------------------------------------
    Set carousel config here

    @autoload : true / false
    @itemsToBeVisible: Defines how many items should be visible
    @speed: Speed at which items will be passed in milliseconds
    ----------------------------------------------------------*/
        const config = {
            autoload: true,
            itemsToBeVisible: 3,
            speed: 5000
        };

        /*-------------------
        Entry point 
        ---------------------*/
        function start() {
            window.onload = function () {
                setSlidersStyle(config);

                const prevSlideButton = document.getElementById("prev-slide");
                const nextSlideButton = document.getElementById("next-slide");

                prevSlideButton.addEventListener("click", () => {
                    navigate("backward", config);
                });

                nextSlideButton.addEventListener("click", () => {
                    navigate("forward", config);
                });

                if (config.autoload) {
                    playCarousel(nextSlideButton, config);
                }
            };
        }

        /*--------------------------------------------------------------
            Sets the style of slides based on the number of visible items.
        ---------------------------------------------------------------*/
        function setSlidersStyle(config) {
            document.querySelector(
                "style"
            ).textContent += `@media screen and (min-width:1180px) { .carousel__slide{ min-width: ${
        100 / config.itemsToBeVisible
    }% } }`;
        }

        /*----------------------------------------
        Performs the sliding behavior of items.
        ----------------------------------------*/
        function navigate(position, config) {
            const carouselEl = document.getElementById("carousel");
            const slideContainerEl = carouselEl.querySelector(".carousel__container");
            const slideEl = carouselEl.querySelector(".carousel__slide");
            let slideWidth = slideEl.offsetWidth;
            slideContainerEl.scrollLeft = this.getNewScrollPosition(
                position,
                slideContainerEl,
                slideWidth,
                config
            );
        }

        /*-------------------------------
        Get the new scroll position.
        ---------------------------------*/
        function getNewScrollPosition(position, slideContainerEl, slideWidth, config) {
            const maxScrollLeft =
                slideContainerEl.scrollWidth - slideWidth * config.itemsToBeVisible;
            if (position === "forward") {
                const x = slideContainerEl.scrollLeft + slideWidth;
                return x <= maxScrollLeft ? x : 0;
            } else {
                const x = slideContainerEl.scrollLeft - slideWidth;
                return x >= 0 ? x : maxScrollLeft;
            }
        }

        /*-------------------------------
        Autoplay
        ---------------------------------*/
        function playCarousel(nextButton, config) {
            const play = () => {
                nextButton.click();
                setTimeout(play, config.speed);
            };
            play();
        }

        start();
    </script>