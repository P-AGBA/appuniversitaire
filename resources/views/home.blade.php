<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Universities</title>
    <!--

    TemplateMo 558 Klassy Cafe

    https://templatemo.com/tm-558-klassy-cafe

    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Accueil</a></li>
                        <li class="scroll-to-section"><a href="#menu">Decouvertes</a></li>

                        <li class="scroll-to-section"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Déconnexion
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>UNIVERSITIES</h4>
                        <h6>DECOUVREZ VOS UNIVERSITES</h6>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/IAI.jpg" alt="" width="300" height="700">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/UL.jpg" alt="" width="300" height="700">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/UK.jpg" alt="" width="300" height="700">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Les universités</h6>
                    <h2>Les études supérieur au plus près de vous</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                <div class="item">
                    <div class='card card1' href="">
                        <div class="price"><h6>Lomé</h6></div>
                        <div class='info'>
                            <h1 class='title'>IAI-TOGO</h1>
                            <p class='description'>Institut Africain d'Informatique</p>
                                </div>
                    </div>
                </div>
                <div class="item" href="vguig">
                    <div class='card card2' href="uigighi">
                        <div class="price"><h6>Lomé</h6></div>
                        <div class='info'>
                            <h1 class='title'>ESA</h1>
                            <a></a>
                            <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card3' href="">
                        <div class="price"><h6>Lomé</h6></div>
                        <div class='info'>
                            <h1 class='title'>ISDI</h1>
                            <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                        </div>
                    </div>
                </div>
                <div class="item" >
                    <div class='card card4' href="">
                        <div class="price"><h6>Lomé</h6></div>
                        <div class='info'>
                            <h1 class='title'>UL</h1>
                            <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card5' href="">
                        <div class="price"><h6>Lomé</h6></div>
                        <div class='info'>
                            <h1 class='title'>Ucao</h1>
                            <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                            </div>
                    </div>
                </div>
                <div class="item" >
                    <div class='card card6' href="">
                        <div class="price"><h6>Kara</h6></div>
                        <div class='info'>
                            <h1 class='title'>UK</h1>
                            <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© Copyright Universities Co.
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>
<script>
    document.querySelectorAll('.card').forEach(function(card) {
        card.addEventListener('click', function() {
            var cardClass = this.classList[1];
            switch (cardClass) {
                case 'card1':
                    window.location.href = '{{ route("univ1") }}';
                    break;
                case 'card2':
                    window.location.href = 'lien_de_destination2.html';
                    break;
                case 'card3':
                    window.location.href = 'lien_de_destination3.html';
                    break;
                case 'card4':
                    window.location.href = 'lien_de_destination4.html';
                    break;
                case 'card5':
                    window.location.href = 'lien_de_destination5.html';
                    break;
                case 'card6':
                    window.location.href = 'lien_de_destination6.html';
                    break;
                default:
                    break;
            }
        });
    });
</script>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <!-- Liste des Universités -->
                <div class="container mx-auto p-4">
                    <h1 class="text-3xl font-bold mb-8"><strong>Liste des Universités</strong></h1>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        <a href="{{ route('Liste') }}" class="block p-2 hover:bg-gray-100">Affichage de la liste des universités</a>

                    </div>
                </div>
                <!-- Fin de la Liste des Universités -->
            </div>
        </div>
    </div>
</div>
</body>
</html>
