<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Abdias Computer-Add</title>
    <link rel="shortcut icon" type="image/png" href="img/drop.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/formulaire.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Abdias Computer</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="view_computers">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Main pages:</h6>
                        <a class="collapse-item" href="login">Login</a>
                        <a class="collapse-item" href="view_computers">View computers</a>
                        <a class="collapse-item" href="add_computer">Add computers</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404">404 Page</a>
                        <a class="collapse-item" href="blank">Blank Page</a>
                    </div>
                </div>
            </li>
        </ul>
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                </span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>


        <div class="container">
            <div class="form-container">
                <h2>Remplir pour ajouter un Ordinateur</h2>
                <form method="POST" id="computerForm" action="{{route('add_computer.store') }}" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                      <label for="brand">Marque</label>
                      <input type="text" id="marque" name="marque" placeholder="Ex: TOSHIBA" required>
                    </div>
            
                    <div class="form-group">
                      <label for="modele">Modèle</label>
                      <input type="text" id="modele" name="modele" placeholder="Entrez le modèle de votre ordinateur(Ex Aspire E5-573G)" required>
                    </div>
                    <div class="form-group">
                        <label for="ram">Processeur</label>
                        <input type="text" id="processeur" name="processeur" placeholder="Entrez le processeur (ex : Intel Core i7-10700K)" required>
                    </div>
                    <div class="form-group">
                        <label for="ram">Vitesse du CPU</label>
                        
                        <input type="number" id="vitesse-cpu" name="cpu" placeholder="Entrez la vitesse du cpu en Ghz (ex : 3.6)" step="0.1" min="0.1">
                    </div>
                    <div class="form-group">
                        <label for="nombre-coeurs">Nombre de cœurs</label>
                        <select id="nombre-coeurs" name="core">
                            <option value="">--Sélectionnez le nombre de cœurs--</option>
                            <option value="1">1 cœur</option>
                            <option value="2">2 cœurs</option>
                            <option value="4">4 cœurs</option>
                            <option value="6">6 cœurs</option>
                            <option value="8">8 cœurs</option>
                            <option value="12">12 cœurs</option>
                            <option value="16">16 cœurs</option>
                            <option value="24">24 cœurs</option>
                            <option value="32">32 cœurs</option>
                        </select>
                        </div>

                    <div class="form-group">
                        <label for="ram">RAM</label>
                        <select id="ram" name="ram" required>
                          <option value="" disabled selected>Choisissez la RAM</option>
                          <option value="4">4 Go</option>
                          <option value="8">8 Go</option>
                          <option value="12">12 Go</option>
                          <option value="16">16 Go</option>
                          <option value="32">32 Go</option>
                          <option value="64">64 Go</option>
                        </select>
                      </div>
                      
                     

                    <div class="form-group">
                        <label for="type">Type de stockage</label>
                        <input type="text" id="type" name="type_stockage" placeholder="Ex: SSD"required>
                    </div>
                    <div class="form-group">
                        <label for="capacite-stockage">Capacité de stockage</label>
                        <input type="text" id="capacite" name="capacite_stockage" placeholder="Entrez la capacité de stockage en Go" required>
                        </div>

                      <div class="form-group">
                        <label for="ram">Taille de l'ecran</label>
                        <input type="text" id="type" name="taille_ecran" placeholder="Entrez la taille en pouce" required>
                      </div>
                      <div class="form-group">
                        <label for="ram">Clavier</label>
                        <input type="text" id="clavier" name="clavier" placeholder="Ex: Clavier Alphanumérque"required>
                      </div>
                      <div class="form-group">
                        <label for="ram">Carte graphique</label>
                        <input type="text" id="carte_graphique" name="carte_graphique" placeholder="Ex: Nvidia" required>
                      </div>
                      <div class="form-group">
                        <label for="ram">Memoire video</label>
                        <input type="text" id="memoire_video" name="memoire_video" required>
                      </div>
                      <div class="form-group">
                        <label for="ram">Ecran tactile</label>
                        <input type="text" id="ecran_tactile" name="ecran_tactile" placeholder="O ou 1" required>
                      </div>
                      <div class="form-group">
                        <label for="ram">Generation</label>
                        <input type="text" id="generation" name="generation" required>
                      </div>
                      <div class="form-group">
                        <label for="ram">Autonomie</label>
                        <input type="text" id="autonomie" name="autonomie" placeholder="Entrez l'autonomie en heures"required>
                      </div>
              
                    <div class="form-group">
                      <label for="price">Prix (€)</label>
                      <input type="number" id="prix" name="prix" min="0" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo de l'ordinateur</label>
                        <input type="file" id="photo" name="photo" accept="image/*" required>
                    </div>
 
            
                    <div class="form-actions">
                      <button type="submit">Soumettre</button>
                     
                    </div>
                  </form>
                </div>
                <div class="image-container">
                  <img src="img/computer-laptop-work.jpg" alt="Clavier d'ordinateur">
                </div>
              </div>
        <!-- <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2025</span>
                </div>
            </div>
        </footer> -->
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
</body>

</html>
