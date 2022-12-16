<?php
   if ( isset( $_GET['submit'] ) ) {     
     $name = $_GET['name']; 
     $firstname = $_GET['firstname']; 
     exit;
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Partie5/asset/css/style.css">
    <title>Jarditou Bootstrap</title>
</head>
<body>
    <header>
        <!-- Logo -->
        <div class="row g-0 text-center">
            <div class="col-3"><img class="w-50" src="/Partie5/asset/img/jarditou_logo.jpg" alt="logo"></div>
            <div class="col-9 fs-2">Tout le jardin</div>
          </div>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">Jarditou.com</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="tableau.html">Tableau</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>                  
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Votre promotion" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
              </div>
            </div>
          </nav>
        <section>            
            <img class="w-100" src="/Partie5/asset/img/promotion.jpg" alt="baniére">            
        </section>        
    </header>
    <main>
        <div class="container-fluid">
            <p class="text-secondary p-3 fs-5">* Ces zones sont obligatoires</p>
            <h1>Vos Coordonnées</h1>
            <form action="exo1.php" method="get">
                <div class="mb-3 row">
                    <label for="inputName" class="col-sm-12 col-form-label">Nom *</label>
                    <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Veuillez saisir votre nom">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputFirstname" class="col-sm-12 col-form-label">Prénom *</label>
                    <div class="col-sm-12">
                    <input type="text" class="form-control" id="inputFirstname" name="firstname" placeholder="Veuillez saisir votre prénom">
                    </div>
                </div>
                <label for="inputFirstname" class="col-sm-12 col-form-label">Sexe *</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Homme</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Femme</label>
                </div>
                <div class="mb-3 row">
                    <label for="inputBirthdate" class="col-sm-12 col-form-label">Date de naissance *</label>
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="inputBirthdate">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPostal" class="col-sm-12 col-form-label">Code postal *</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputPostal">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputAdress" class="col-sm-12 col-form-label">Adresse</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputAdress">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputEmail" class="col-sm-12 col-form-label">Email *</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputEmail" placeholder="dave.loper@afpa.fr">
                    </div>
                </div>
                <h1>Votre demande</h1>
                <div class="mb-3 row">
                    <label for="selectSujet" class="col-sm-12 col-form-label">Sujet</label>
                    <div class="col-sm-12">
                        <select id="selectSujet">
                            <option disabled selected>Veuillez sélectionner un sujet</option>
                            <option value="1">Sujet 1</option>
                            <option value="2">Sujet 2</option>
                            <option value="3">Sujet 3</option>
                            <option value="4">Sujet 4</option>
                            <option value="5">Sujet 5</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="textareaQuestion" class="col-sm-12 col-form-label">Votre question *</label>
                    <div class="col-sm-12">
                        <textarea name="" id="textareaQuestion" class="col-12"></textarea>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">J'accepte le traitement informatique de ce formulaire.</label>
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 col-xl-1">
                        <button type="submit" class="btn btn-dark border-primary">Envoyer</button>
                    </div>
                    <div class="col-sm-6 col-xl-11">
                        <button type="reset" class="btn btn-dark border-primary">Annuler</button>
                    </div>
                </div>
            </form>
            
        </div>
    </main>
           <!-- Footer -->
    <footer>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Mentions légales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Horaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Plan du site</a>
                        </li>                  
                    </ul>                
                </div>
            </div>
        </nav>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>