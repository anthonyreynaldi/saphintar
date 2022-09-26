<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page Saphintar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500&display=swap");
        body {
        font-family: "Chakra Petch", sans-serif;
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
        height: 300px;
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
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <section class="carousel" id="carousel">
        <div class="carousel__wrapper">
            <div>
            <div class="carousel__content">
                <div class="carousel__container">
                <div class="carousel__slide">
                    <div class="card__inner">
                        <div class="card__image">
                        <img src="https://i.imgur.com/p3FfEL6.png" alt="Charmander" />
                        </div>
                        <h4>Charmander</h4>
                        <div class="card__description">
                        <img src="https://i.imgur.com/FldDlNb.png" alt="Pokeball" />
                        <span class="fire">Fire</span>
                        </div>
                    </div>
                </div>

                <div class="carousel__slide">
                    <div class="card__inner">
                        <div class="card__image">
                        <img src="https://i.imgur.com/pGKpAlb.png" alt="Psyduck" />
                        </div>
                        <h4>Psyduck</h4>
                        <div class="card__description">
                        <img src="https://i.imgur.com/FldDlNb.png" alt="Pokeball" />
                        <span class="psychic">Psychic</span>
                        </div>
                    </div>
                </div>

                <div class="carousel__slide">
                    <div class="card__inner">
                        <div class="card__image">
                        <img src="https://i.imgur.com/KQ4FREg.png" alt="Pikachu" />
                        </div>
                        <h4>Pikachu</h4>
                        <div class="card__description">
                        <img src="https://i.imgur.com/FldDlNb.png" alt="Pokeball" />
                        <span class="electric">Electric</span>
                        </div>
                    </div>
                </div>

                <div class="carousel__slide">
                    <div class="card__inner">
                        <div class="card__image">
                        <img src="https://i.imgur.com/JpHWJa4.png" alt="Sandshrew" />
                        </div>
                        <h4>Sandshrew</h4>
                        <div class="card__description">
                        <img src="https://i.imgur.com/FldDlNb.png" alt="Pokeball" />
                        <span class="rock">Rock</span>
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
                        <img src="https://i.imgur.com/FldDlNb.png" alt="Pokeball" />
                        <span class="grass">Grass</span>
                        </div>
                    </div>
                </div>
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
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script></script>
</body>
</html>
