<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="author" content="Jahir Benitez Codequark">
    <title>Rent a Toy - Recuerdos e Invitaciones</title>
       <meta name="description" content="Tenemos los mejores Frascos de vidrio reutilizables y personalizados para tu fiesta, de todos los tamaños y colores, adecuados para las distintas edades e intereses de tus invitados.">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/assets/components/head.html'; ?>
</head>

<body id="page-top bg-light">

    <!-- Navigation -->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/assets/components/nav.html'; ?>

    <!-- Masthead -->
    <header class="py-5 bg-image-full" style="background-image: url('/assets/img/head2.jpg');">
        <img class="img-fluid d-block mx-auto" src="/assets/img/logo_rent-a-toy.png" width="20%" alt="logo">
    </header>
    <section class=" page-section bg-white mb-0">
        <div class="container">
            <!-- Portfolio Item Heading -->
            <h1 class="my-4 text-secondary">Elaboracion de:
                <strong class="my-4 text-primary">Recuerdos e Invitaciones</strong>
            </h1>

            <!-- Portfolio Item Row -->
            <div class="row">
                <div class="col-md-8">
                    <img class="img-fluid" src="/assets/img/invitacion1.png" alt="invitaciones">
                </div>

                <div class="col-md-4 ">
                    <h3 class="my-3 text-secondary">Recuerdos</h3>
                    <p>Frascos de vidrio reutilizables y personalizados.</p>
                    <h3 class="my-3 text-secondary">Contamos con:</h3>
                    <ul>
                        <li class="text-primary">Miel</li>
                        <li class="text-primary">Cajeta</li>
                        <li class="text-primary">Mermeladas</li>
                        <li class="text-primary">Tisanas</li>
                        <li class="text-primary">Salsas</li>
                        <li class="text-primary">Conservas</li>
                        <li class="text-primary">Sales saborizadas</li>
                        <li class="text-primary">Aceites</li>
                        <li class="text-primary">Galletas americanas</li>
                        <li class="text-primary">Trufas de chocolate </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- /.row -->
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
                <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
                    <slide :index="0">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <img class="img-fluid" src="/assets/img/Recuerdos1.jpg" alt="recuerdos">
                        </a>
                    </slide>
                    <slide :index="1">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <img class="img-fluid" src="/assets/img/Recuerdos2.jpg" alt="recuerdos">
                        </a>
                    </slide>
                    <slide :index="2">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <img class="img-fluid" src="/assets/img/Recuerdos3.jpg" alt="recuerdos">
                        </a>
                    </slide>
                    <slide :index="3">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <img class="img-fluid" src="/assets/img/Recuerdos4.jpg" alt="recuerdos">
                        </a>
                    </slide>
                    <slide :index="4">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <img class="img-fluid" src="/assets/img/Recuerdos5.jpg" alt="recuerdos">
                        </a>
                    </slide>

                </carousel-3d>
            </div>
            <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js'></script>
            <script src='https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js'></script>
            <script>
                new Vue({
                    el: '#carousel3d',
                    data: {
                        slides: 5
                    },
                    components: {
                        'carousel-3d': Carousel3d.Carousel3d,
                        'slide': Carousel3d.Slide
                    }
                })
            </script>
    </section>

    <!-- Footer -->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/assets/components/footer.html'; ?>

</body>

</html>
