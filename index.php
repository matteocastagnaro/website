<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Matteo Castagnaro</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <script type="text/javascript">

      var http = new XMLHttpRequest();

      var date = new Date();
      var anni = date.getFullYear() - 1992

    	if (12 > date.getMonth() || (12 == date.getMonth() && 3 > date.getDay()))
    		anni -= 1;

      setInterval(function() {
        http.open( "GET", "http://website-matteocastagnaro.herokuapp.com", false ); // false for synchronous request
        http.send( null );
      }, 900000); // every 15 minutes (300000)

      setInterval(function() {
        http.open( "GET", "http://dev-website-matteocastagnaro.herokuapp.com", false ); // false for synchronous request
        http.send( null );
      }, 900000); // every 15 minutes (300000)

    </script>

</head>

<body id="page-top" class="eupopup eupopup-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Matteo Castagnaro</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Su di me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Carriera</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#certificazioni">Certificazioni</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#progetti">Progetti</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Social</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contattami</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header style="background-image: url(./img/verona.jpg);">
        <div class="header-content">
            <div class="header-content-inner">
                <img draggable="false" src="./img/matteo.jpg" class="img-circle">
                <br><br>
                <h1>Matteo Castagnaro</h1>
                <hr>
                <p>Studente Magistrale in Ingegneria e Scienze Informatiche<br>Corso di Laurea in Sicurezza dei Sistemi Informatici</p>
                <p>Dottore in Informatica</p>
                <p>Università degli Studi di Verona</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Scopri di più</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                	<i class="fa fa-4x fa-user wow bounceIn text-secondary" aria-hidden="true" data-wow-delay=".1s"></i>
                    <h2 class="section-heading wow bounceIn">Su di me</h2>
                    <hr class="light">
                    <p class="text-faded">Mi chiamo Matteo Castagnaro, ho <script>document.write(anni);</script> anni e sono nato il 3 Dicembre 1992 in provincia di Verona, città in cui ancora oggi risiedo. Sono laureato in Informatica all'Università degli Studi di Verona e lavoro come Android Developer e Web Developer presso MakarenaLabs, una startup di cui sono Co-Founder assieme ad altri miei compagni di Università. Attualmente sono anche Studente Magistrale in Ingegneria e Scienze Informatiche all'Università degli Studi di Verona nel corso di Sicurezza dei Sistemi Informatici. Una caratteristica che mi contraddistingue è la grande passione per la tecnologia! Infatti a casa conservo gelosamente alcune fotografie che mi ritraggono alle prese con un computer già alla tenera età di 3 anni! Prima di conseguire la Laurea in Informatica, mi sono diplomato all'Istituto Tecnico Industriale San Zeno come Perito Capotecnico Meccanico. Per mia scelta non mi sono iscritto all'albo dei Periti perchè ho capito che la mia strada sarebbe stata quella della programmazione e dei computer. Durante il mio percorso universitario ho conosciuto molte persone, alcune delle quali fanno tuttora parte della mia vita personale e professionale. Quando trovo del tempo libero a disposizione, mi diverto a creare applicazioni desktop e/o Android open source che rendo disponibili nel mio repository pubblico di GitHub.</p>
                    <!-- <a href="http://about.me/matteocastagnaro" class="btn btn-default btn-xl wow rubberBand" target="_blankl">Guarda il mio profilo about.me <i class="fa fa-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">LA MIA CARRIERA</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-desktop wow bounceIn text-primary"></i>
                        <h3>Backend Developer</h3>
                        <p class="text-muted">Al momento sono Backend Developer presso <a href="https://www.makarenalabs.com" target="_blank">MakarenaLabs</a>, una startup di cui sono Co-Founder.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-graduation-cap wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Laurea in Informatica</h3>
                        <p class="text-muted">Mi sono laureato in Informatica presso l'Università degli Studi di Verona</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-certificate wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Perito Capotecnico Meccanico</h3>
                        <p class="text-muted">Mi sono diplomato come Perito Capotecnico Meccanico presso l'Istituto Tecnico Industriale San Zeno in provincia di Verona</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 50px; float: left; width: 100%;"></div>

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <a href="./cv/cv.pdf" class="btn btn-primary btn-xl wow rubberBand" target="_blank">Visualizza il mio CV <i class="fa fa-file-pdf-o"></i></a>
                </div>
            </div>
        </div>

    </section>

     <section id="certificazioni">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CERTIFICAZIONI</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                Certificazione ECDL - Associazione Italiana per l'Informatica ed il Calcolo Automatico
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row text-center">
                Numero Licenza: <b>IT1131393</b>
            </div>
        </div>

        <div style="margin-top: 50px; float: left; width: 100%;"></div>

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <img src="./img/ECDL.png" width="15%" height="15%">
                    <div style="display: inline-block; width: 150px"></div>
                    <img src="./img/AICA.png" width="10%" height="10%">
                </div>
            </div>
        </div>

    </section>


    <section id="progetti">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">PROGETTI</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="text-giustificate">Sotto trovi tutti i progetti a cui ho lavorato e a cui sto lavorando.</p>
                </div>

                <div style="margin-top: 50px; float: left; width: 100%;"></div>

                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">IMPATTO DELLE TECNOLOGIE SULLO STILE DI VITA E SULLE RELAZIONI SOCIALI</h3>
                    <hr class="primary">
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="text-giustificate">In collaborazione con il corso di Probabilità e Statistica (AA 2012/2013) tenuto all'Università degli Studi di Verona, è stato effettuato uno studio sulla base di 114 soggetti, riguardante varie tematiche circa l'impatto che hanno avuto le tecnologie in generale sullo stile di vita e sulle relazioni sociali. In seguito si andranno ad analizzare nel dettaglio tutte le variabili con relative tabelle e relativi grafici.
                    <br><br>
                    Lo studio è stato effettuato con l'aiuto dei software R® ed RStudio®.
                    </p>
                    <a href="http://statisticaunivr.altervista.org" target="_blank" class="btn btn-primary btn-xl wow rubberBand">Vai al sito <i class="fa fa-arrow-right"></i></a>
                </div>

                <div style="margin-top: 50px; float: left; width: 100%;"></div>

                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">CALCOLO CODICE FISCALE <a href="https://github.com/matteocastagnaro/codice-fiscale-java" target="_blank"><i class="fa fa-fw fa-github"></i></a></h3>
                    <hr class="primary">
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="text-giustificate">Sei sempre alla ricerca del tesserino del tuo codice fiscale? Non sai come fare a reperire il tuo CF senza andare su internet? Ecco la soluzione! Un leggerissimo tool (open source) che ti permette di calcolare il tuo codice fiscale anche senza connessione ad internet! Scarica subito il tool!
                    </p>
                    <a href="https://github.com/matteocastagnaro/codice-fiscale-java/blob/master/jar/codice-fiscale.jar?raw=true" class="btn btn-primary btn-xl wow rubberBand">Scarica il tool <i class="fa fa-download"></i></a>
                </div>

                <div style="margin-top: 50px; float: left; width: 100%;"></div>

                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">KARAOKE CAMPANARI <a href="https://github.com/matteocastagnaro/karaoke-campanari" target="_blank"><i class="fa fa-fw fa-github"></i></a></h3>
                    <hr class="primary">
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="text-giustificate">Sei colui che suona le campane della chiesa del tuo paese e stai cercando un karaoke che faccia al caso tuo? Ecco qui la soluzione! Un tool completamente GRATUITO che puoi scaricare qui sotto, molto semplice da utilizzare. E con questo non sbaglierai mai più un tocco! Per le istruzioni di utilizzo vedi la mai pagina di GitHub.
                    </p>
                    <a href="https://github.com/matteocastagnaro/karaoke-campanari/blob/master/src/jar/Campanari.jar?raw=true" class="btn btn-primary btn-xl wow rubberBand">Scarica il tool <i class="fa fa-download"></i></a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <aside class="bg-dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 align="center">Seguimi su tutti i miei profili social!</h2>
                        <br>
                    </div>
                </div>
                <div class="section">
                    <div class="section">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-xs-3 text-center">
                                    <a href="https://www.instagram.com/_matteocastagnaro/" target="_blank"><i class="fa fa-5x fa-fw fa-instagram wow zoomInLeft"></i></a>
                                </div>
                                <div class="col-xs-3">
                                    <a href="https://www.twitter.com/mattagnaro92" target="_blank"><i class="fa fa-5x fa-fw fa-twitter wow zoomInDown"></i></a><br>
                                </div>
                                <div class="col-xs-3">
                                    <a href="https://www.facebook.com/castagnaro.matteo" target="_blank"><i class="fa fa-5x fa-fw fa-facebook wow zoomInDown"></i></a>
                                </div>
                                <div class="col-xs-3 text-center">
                                    <a href="https://www.linkedin.com/in/matteocastagnaro" target="_blank"><i class="fa fa-5x fa-fw fa-linkedin wow zoomInRight"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="section">
                <div class="container text-center">
                    <div class="row">
                        <div class="call-to-action">
                            <i class="fa fa-4x fa-fw fa-github wowo rubberBand"></i>
                            <h2>Segui i miei sviluppi sul repository pubblico di GitHub!</h2>
                            <a href="http://www.github.com/matteocastagnaro" class="btn btn-default btn-xl wow rubberBand" target="_blank">GitHub <i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">CONTATTAMI</h2>
                    <hr class="primary">
                    <p>Se hai qualche informazione da chiedere, sotto trovi l'indirizzo email</p>
                </div>
                <div class="col-lg-4 col-lg-offset-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p class="wow rubberBand"><a href="mailto:matteo.castagnaro@makarenalabs.com">matteo.castagnaro@makarenalabs.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

    <footer class="section section-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright © <a href="https://matteocastagnaro.it">matteocastagnaro.it</a> <script>document.write(date.getFullYear());</script></span>
                </div>

                <div align="right">
				</div>

                <div style="margin-top: 40px; float: left; width: 100%;"></div>

            </div>
        </div>
    </footer>

</body>

</html>
