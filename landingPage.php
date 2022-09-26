<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page Saphintar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <style>
        .bg-cust-green{
            background-color: #D9F8C4;
        }

        .text-cust-green{
            color : #D9F8C4;
        }

        .bg-cust-yellow{
            background-color: #F9F9C5;
        }

        .text-cust-yellow{
            color: #F9F9C5;
        }

        .bg-cust-orange{
            background-color: #FAD9A1;
        }

        .text-cust-orange{
            color: #FAD9A1;
        }

        .bg-cust-red{
            background-color: #F37878;
        }

        .text-cust-red{
            color: #F37878;
        }

        .landing_page {
            background-color: #e0efe3;
            height: 60vh;
        }

        .type {
            /* height: 40vh; */
        }

        .specification {
            background-color: #e0efe3;
        }

        .card {
            display: flex;
            background: transparent;
            width: 250px;
            height: 300px;
            /* justify-content: center; */
            align-items: center;
            border-radius: 10px;
            box-shadow: 20px 20px 50px 15px grey;
        }

        .icon {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-color: #e0efe3;
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
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logo" src="img/saphintarCrop.png" alt="" style="height: 5vh;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">About Us </a>
                    <a class="nav-link" href="#">Sorting</a>
                    <a class="nav-link" href="#">Feature</a>
                    <a class="nav-link" href="#">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- big title -->
    <div class="d-flex landing_page">
        <div class="container align-items-stretch">
            <div class="d-flex align-items-center pt-5">
                <div class="col-sm-8 pt-5">
                    <h1>Saphintar Your First Educating Trashbin <br> Available For You</h1>
                    <br>
                    <h3></h3>
                    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Find Out More
                        About Saphintar</a>
                </div>
                <div class="col-sm-4">
                    <p>setiawan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of big title -->

    <div class="type px-5 mb-5">
        <h1 class="d-flex justify-content-center mt-4">With Saphintar it's possible to sort 4 main types of trash :</h1>
        <div class="d-flex">
            <div class="col-md-3 ps-3 pt-5 d-flex justify-content-center text-center">
                <div class="card pt-3" style="margin-right:-170px;">
                    <div class="icon mb-2" style="background-image: url('img/plasticBottle.png');">
                    </div>
                    <p>Plastic Bottle</p>
                </div>
            </div>
            <div class="col-md-3 ps-3 pt-5 d-flex justify-content-center text-center">
                <div class="card pt-3" style="margin-right:-60px;">
                    <div class="icon mb-2" style="background-image: url('img/plastic.png');">
                    </div>
                    <p>Plastic</p>
                </div>
            </div>
            <div class="col-md-3 ps-3 pt-5 d-flex justify-content-center text-center">
                <div class="card pt-3" style="margin-left:-60px;">
                    <div class="icon mb-2" style="background-image: url('img/paper.png');">
                    </div>
                    <p>Paper</p>
                </div>
            </div>
            <div class="col-md-3 ps-3 pt-5 d-flex justify-content-center text-center">
                <div class="card pt-3" style="margin-left:-170px;">
                    <div class="icon mb-2" style="background-image: url('img/others.png');">
                    </div>
                    <p>The Others</p>
                </div>
            </div>
        </div>
    </div>
    <div class="specification">
        <div class="carousel__wrapper">
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
                                <h4>Auto Sorting</h4>
                                <div class="card__description">
                                    <p>Saphintar can help to sort the trash you're gonna throw. All you need to do is to
                                        scan it and then throw it at the right place</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
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
</body>

</html>