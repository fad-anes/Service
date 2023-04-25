<?php
    include_once 'C:\xampp0\htdocs\Service\Model\Service.php';
    include_once 'C:\xampp0\htdocs\Service\Controller\ServiceC.php';

    $error = "";

    // create Service
    $Service = null;

    // create an instance of the controller
    $ServiceC = new ServiceC();
    if (
        isset($_POST["ids"]) &&	
		isset($_POST["nom"]) &&		
        isset($_POST["prix"]) &&
		isset($_POST["type"])   
    ) {
        if (
            !empty($_POST["ids"]) && 
            !empty($_POST["nom"]) && 
			!empty($_POST['prix']) &&
            !empty($_POST["type"])  
            ) {
                $Service = new Service(
                    $_POST['ids'],
                    $_POST['nom'],
                    $_POST['prix'],
                    $_POST['type'] 
                );
            $ServiceC->modifierService($Service, $_POST["ids"]);
            header('Location:AfficheService.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Service</title>
    <style>
        /* Style the form */
        form {
            margin: 20px auto;
            max-width: 600px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f2f2f2;
        }

        /* Style the labels and inputs */
        label, input, textarea {
            display: block;
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        /* Style the buttons */
        button, input[type="submit"], input[type="reset"] {
            background-color: #db2d2e;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
            margin-right: 10px;
        }

        button a, input[type="submit"] a, input[type="reset"] a {
            color: white;
            text-decoration: none;
        }

        button:hover, input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #3e8e41;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E.V.H</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
    <body>
 <!-- Page Preloder -->
 <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#"><i class="fa fa-cart-plus"></i></a>
            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
            <a href="#" class="primary-btn">Add Car</a>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Jour de semaine : 08h00 à 18h00</li>
            <li><i class="fa fa-envelope-o"></i>E.V.H@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+216) 98 983 400</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Jour de semaine : 08h00 à 18h00</li>
                            <li><i class="fa fa-envelope-o"></i> E.V.H@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+216) 98 983 400</span>
                            </div>
                            <div class="header__top__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.html">Accueil</a></li>
                                <li><a href="#">Produit</a></li>
                                <li><a href="#">Service</a>
                                    <ul class="dropdown">
                                        <li><a href="AfficheService.php">Consulter nos service</a></li>
                                        <li><a href="#">Demande service</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">À propos</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                            </div>
                            <a href="#" class="primary-btn">s'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>







        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['ids'])){
				$Service = $ServiceC->recupererService($_POST['ids']);
				
		?>
        
        <form action="" method="POST" onsubmit="return validerFormulaire();">
           
                
                        <label for="ids">id:
                        </label>
                    
                    <input type="text" name="ids" id="ids" value="<?php echo $Service['ids']; ?>" maxlength="20">
                
                        <label for="nom">Nom:
                        </label>
                   <input type="text" name="nom" id="nom" value="<?php echo $Service['nom']; ?>" maxlength="20">
               
                        <label for="prix">Prix:
                        </label>
                    
                        <input type="text" name="prix" id="prix" value="<?php echo $Service['prix']; ?>" >
                  
                        <label for="type">Type:
                        </label>
                    
                        <input type="text" name="type" id="type" value="<?php echo $Service['type']; ?>">
                 
                        <input type="submit" value="Modifier"> 

                        <input type="reset" value="Annuler" >
                            
        </form>
		<?php
		}
		?>
        <div style="text-align:center;">
<button><a href="AfficheService.php">Retour à la liste des Services</a></button>
</div>
        

<br>
<br>

		<footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Contactez-nous maintenant!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> (+216) 98 983 400</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> E.V.H@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Des questions? Faites-le nous savoir au Av. Fethi Zouhir, Cebalat Ben Ammar 2083</p>
                        <div class="footer__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                            <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="footer__widget">
                        <h5>Informations</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Achat</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Paiement</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Expédition</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Retour</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer__widget">
                        <p>Dirigez le trafic vers votre propriété sans les dépenses et les maux de tête liés à l'installation et à l'utilisation de vos propres chargeurs de VE
                        </p>
                        
                    </div>
                </div>
                
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est fait avec <i class="fa fa-heart" aria-hidden="true"></i> par <a href="https://colorlib.com" target="_blank">E.V.H</a></p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
function validerFormulaire() {
  var ids = document.getElementById("ids").value;
  var nom = document.getElementById("nom").value;
  var prix = document.getElementById("prix").value;
  var type = document.getElementById("type").value;
  
  // Vérifier que tous les champs sont remplis
  if (ids == "" || nom == "" || prix == "" || type == "") {
    alert("Veuillez remplir tous les champs.");
    return false;
  }
  
  // Vérifier que les champs ids et prix contiennent seulement des nombres
  if (isNaN(ids) || isNaN(prix)) {
    alert("Les champs id et prix doivent contenir seulement des nombres.");
    return false;
  }
  
  return true;
}
</script>
    </body>
</html>