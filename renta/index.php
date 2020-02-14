<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="author" content="Jahir Benitez Codequark">
    <title>Rent a Toy - Renta</title>
      <meta name="description" content="Siempre ocupados en brindarte un espacio de tranquilidad y sobre todo de seguridad con la comodidad de recibirlo en tu hogar o en el lugar de tu evento">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/assets/components/head.html'; ?>
</head>

<body id="page-top">

    <!-- Navigation -->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/assets/components/nav.html'; ?>

    <!-- Masthead -->
    <header class="py-5 bg-image-full" style="background-image: url('/assets/img/head2.jpg');">
        <img class="img-fluid d-block mx-auto" src="/assets/img/logo_rent-a-toy.png" width="20%" alt="logo">
    </header>
    <section class=" page-section bg-white mb-0">
        <div class="container ">

            <!-- Portfolio Item Heading -->
            <h1 class="my-4 text-secondary">Servicios:
                <strong class="my-4 text-primary">Renta</strong>
            </h1>

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                    <img class="img-fluid" src="/assets/img/renta2.png" alt="renta">
                </div>

                <div class="col-md-4 ">
                    <h3 class="my-3 text-secondary">Renta de Inflables</h3>
                    <p>Siempre ocupados en brindarte un espacio de tranquilidad y sobre todo de seguridad con la
                        comodidad de recibirlo en tu hogar o en
                        el lugar de tu evento</p>
                    <h3 class="my-3 text-secondary">Ademas contamos con:</h3>
                    <ul>
                        <li class="text-primary">Inflables</li>
                        <li class="text-primary">Mobiliario</li>
                        <li class="text-primary">Juegos gigantes</li>
                        <li class="text-primary">Carritos de helados y paletas</li>
                        <li class="text-primary">Teepees</li>
                    </ul>
                </div>

            </div>
            <!-- /.row -->

            <!-- Related Projects Row -->
            <h3 class="my-4">Inflables</h3>

            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <img class="img-fluid" src="/assets/img/Renta1.jpg" alt="Renta">
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <img class="img-fluid" src="/assets/img/Renta2.jpg" alt="Renta">
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <img class="img-fluid" src="/assets/img/Renta3.jpg" alt="Renta">
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <img class="img-fluid" src="/assets/img/Renta4.jpg" alt="Renta">
                </div>
            </div>
            <!-- /.row -->

        </div>
    </section>
    <section class="page-section pricing py-5 ">
        <style class="cp-pen-styles">
            #carousel3d .carousel-3d-slide {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                text-align: center;
                background-color: #fff;
                padding: 10px;
                -webkit-transition: all .4s;
                transition: all .4s;
            }

            #carousel3d .carousel-3d-slide.current {
                background-color: #333;
                color: #fff;
            }

            #carousel3d .carousel-3d-slide.current span {
                font-size: 20px;
                font-weight: 500;
            }

        </style>
        <div id="carousel3d">
            <carousel-3d :perspective="0" :space="200" :display="7" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
                <slide :index="0" class="card p-5">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="/assets/img/Renta1.jpg" alt="Renta">
                    </a>
                </slide>
                <slide :index="1" class="card p-5">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="/assets/img/Renta2.jpg" alt="Renta">
                    </a>
                </slide>
                <slide :index="2" class="card p-5">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="/assets/img/Renta3.jpg" alt="Renta">
                    </a>
                </slide>
                <slide :index="3" class="card p-5">
                    <a class="portfolio-link img-fluid">
                        <img class="img-fluid" src="/assets/img/Renta4.jpg" alt="Renta">
                    </a>
                </slide>
                <slide :index="4" class="card p-5">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="/assets/img/Renta5.jpg" alt="Renta">
                    </a>
                </slide>
                <slide :index="5" class="card p-5">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="/assets/img/Renta6.jpg" alt="Renta">
                    </a>
                </slide>
                <slide :index="6" class="card p-5">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="/assets/img/Renta7.jpg" alt="Renta">
                    </a>
                </slide>
                <slide :index="7" class="card p-5">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="/assets/img/Renta8.jpg" alt="Renta">
                    </a>
                </slide>
                <slide :index="8" class="card p-5">
                    <a class="portfolio-link">
                        <img class="img-fluid" src="/assets/img/Taller4.jpg" alt="Renta">
                    </a>
                </slide>

            </carousel-3d>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
        <script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
        <script>
            new Vue({
                el: '#carousel3d',
                data: {
                    slides: 9
                },
                components: {
                    'carousel-3d': Carousel3d.Carousel3d,
                    'slide': Carousel3d.Slide
                }
            })
            //# sourceURL=pen.js

        </script>
    </section>
    <!-- Footer -->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/assets/components/footer.html'; ?>

</body>

</html>
