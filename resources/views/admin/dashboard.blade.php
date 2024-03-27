<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assetss/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assetss/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assetss/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assetss/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assetss/demo/demo.css" rel="stylesheet" />
  <link href="{{asset('assetss/css/dataTables.min.css')}}" rel="stylesheet" />


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          EC
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          ENSAM CASABLANCA
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
         
    
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./user">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="active ">
            <a href="./demandes">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Welcome Hanane <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{url('/')}}" style="color:black">
                                           
                                                      Logout 
                                        </a>

                                    
                                    </li>              
                                </ul>
                                <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>         
                <!--
                   <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
             -->
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-20">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Liste des Demandes</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatab"class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
</th>
                      <th>
                        Type de Document
                      </th>
                      <th>
                        Date de soumission
                      </th>
                      <th>
                        Nom
                      </th>
                      <th>
                        Prénom
                      </th>
                      <th>
                        Niveau
                      </th>
                      <th>
                        CNE
                      </th>
                      <th class="text-right">
                        Traité
                      </th>
                      <th class="text-right">
                        Document
                      </th>
                   
                    </thead>
                    <tbody>
                    @foreach($demande as $item)
                      <tr>
                     
                        <td>
                        {{ $item->id}}
                        </td>
                        <td>
                        {{ $item->typeDocumnt}}
                        </td>
                        <td>
                        {{ $item->created_at}}
                        </td>
                       
                        <td>
                        {{ $item->Nom_Etudiant}}
                        </td>
                        <td>
                        {{ $item->Prenom_Etudiant}}
                        </td>
                        <td>
                        {{ $item->Niveau}}
                        </td>
                        <td>
                        {{ $item->CNE}}
                        </td>
                        
                          
                        <td class="text-center">
                        <a class="btn btn-success" href="{{ url('/history/' . $item->id) }}"><i class="now-ui-icons ui-1_check"></i><a>

                        </td>
                        <td class="text-center">
                        <a class="btn btn-success" href="{{ url('/visualiser/' . $item->id) }}">Télécharger<a>

                        </td>
                      
                        
                      </tr>
                      @endforeach
                      <tr>
                      @foreach($demande2 as $item1)
                        <td>
                        {{ $item1->id}}
                        </td>
                        <td>
                        {{ $item1->typeDocumnt}}
                        </td>
                        <td>
                        {{ $item1->created_at}}
                        </td>
                       
                        <td>
                        {{ $item1->Nom_Representant}}
                        </td>
                        <td>
                        {{ $item1->Nom_Representant}}
                        </td>
                        <td>
                        {{ $item1->Niveau_Representant}}
                        </td>
                        <td>
                        {{ $item1->CNE_Representant}}
                        </td>
                        
                          
                        <td class="text-center">
                        <a class="btn btn-success" href="{{ url('/history2/' . $item1->id) }}"><i class="now-ui-icons ui-1_check"></i><a>

                       
                        <td class="text-center">
                        <a class="btn btn-success" href="{{ url('/visualiser2/' . $item1->id) }}">Télécharger</a>

                        </td>
                      </tr>
                      @endforeach
                      


                      <tr>
                      @foreach($demande3 as $item2)
                        <td>
                        {{ $item2->id}}
                        </td>
                        <td>
                        {{ $item2->typeDocumnt}}
                        </td>
                        <td>
                        {{ $item2->created_at}}
                        </td>
                       
                        <td>
                        {{ $item2->Nom_Etudiant}}
                        </td>
                        <td>
                        {{ $item2->Prenom_Etudiant}}
                        </td>
                        <td>
                        {{ $item2->Niveau}}
                        </td>
                        <td>
                        {{ $item2->CNE}}
                        </td>
                        
                          
                        <td class="text-center">
                        <a class="btn btn-success" href="{{ url('/history3/' . $item2->id) }}"><i class="now-ui-icons ui-1_check"></i><a>
                        </td>
                      
                        <td class="text-center">
                        <a class="btn btn-success" href="{{ url('/visualiser3/' . $item2->id) }}">Télécharger<a>

                        </td>
                      </tr>
                      @endforeach


                      <tr>
                      @foreach($demande1 as $item3)
                        <td>
                        {{ $item3->id}}
                        </td>
                        <td>
                        {{ $item3->typeDocumnt}}
                        </td>
                        <td>
                        {{ $item3->created_at}}
                        </td>
                       
                        <td>
                        {{ $item3->Nom_Etudiant}}
                        </td>
                        <td>
                        {{ $item3->Prenom_Etudiant}}
                        </td>
                        <td>
                        {{ $item3->Niveau}}
                        </td>
                        <td>
                        {{ $item3->CNE}}
                        </td>
                        
                          
                        <td class="text-center">
                        <a class="btn btn-success" href="{{ url('/history1/' . $item3->id) }}"><i class="now-ui-icons ui-1_check"></i><a>

                        </td>
                      
                        <td class="text-center">
                        <a class="btn btn-success" href="{{ url('/visualiser1/' . $item3->id) }}">Télécharger<a>

                        </td>
                      </tr>
                      @endforeach





                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Historique des demandes</h4>
                <p class="category"> Les demandes acceptées</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
</th>
                      <th>
                        Type de Document
                      </th>
                      <th>
                        Date de soumission
                      </th>
                      <th>
                        Nom
                      </th>
                      <th>
                        Prénom
                      </th>
                      <th>
                        Niveau
                      </th>
                      <th>
                        CNE
                      </th>
                    
                  
                   
                    </thead>
                    <tbody>
                    
                      <tr>
                      @foreach($result as $item11)
                        <td>
                        {{ $item11->id}}
                        </td>
                        <td>
                        {{ $item11->typeDocumnt}}
                        </td>
                        <td>
                        {{ $item11->created_at}}
                        </td>
                       
                        <td>
                        {{ $item11->Nom_Etudiant}}
                        </td>
                        <td>
                        {{ $item11->Prenom_Etudiant}}
                        </td>
                        <td>
                        {{ $item11->Niveau}}
                        </td>
                        <td>
                        {{ $item11->CNE}}
                        </td>
                        
                          
                    
                      
                        
                      </tr>
                      
                      @endforeach
                      <tr>
                      @foreach($result1 as $item22)
                        <td>
                        {{ $item22->id}}
                        </td>
                        <td>
                        {{ $item22->typeDocumnt}}
                        </td>
                        <td
                        {{ $item22->created_at}}
                        </td>
                       
                        <td>
                        {{ $item22->Nom_Etudiant}}
                        </td>
                        <td>
                        {{ $item22->Prenom_Etudiant}}
                        </td>
                        <td>
                        None
                        </td>
                        <td>
                        {{ $item22->CNE}}
                        </td>
                        
                          
                     
                      </tr>
                      @endforeach
                      


                      <tr>
                      @foreach($result2 as $item33)
                        <td>
                        {{ $item33->id}}
                        </td>
                        <td>
                        {{ $item33->typeDocumnt}}
                        </td>
                        <td>
                        {{ $item33->created_at}}
                        </td>
                       
                        <td>
                        {{ $item33->Nom_Representant}}
                        </td>
                        <td>
                        {{ $item33->Nom_Representant}}
                        </td>
                        <td>
                        {{ $item33->Niveau_Representant}}
                        </td>
                        <td>
                        {{ $item33->CNE_Representant}}
                        </td>
                        
                          
                        
                      </tr>
                      @endforeach


                      <tr>
                      @foreach($result3 as $item44)
                        <td>
                        {{ $item44->id}}
                        </td>
                        <td>
                        {{ $item44->typeDocumnt}}
                        </td>
                        <td>
                        {{ $item44->created_at}}
                        </td>
                       
                        <td>
                        {{ $item44->Nom_Representant}}
                        </td>
                        <td>
                        {{ $item44->Nom_Representant}}
                        </td>
                        <td>
                        {{ $item44->Niveau_Representant}}
                        </td>
                        <td>
                        {{ $item44->CNE_Representant}}
                        </td>
                        
                    
                      
                        
                      </tr>
                      @endforeach





                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assetss/js/core/jquery.min.js"></script>
  <script src="../assetss/js/core/popper.min.js"></script>
  <script src="../assetss/js/core/bootstrap.min.js"></script>
  <script src="../assetss/js/core/bootstrap.min.js"></script>

  <script type="text/javascript"src="{{asset('assetss/js/dataTables.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assetss/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assetss/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assetss/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assetss/demo/demo.js"></script>
  <script >
    $(document).ready( function () {
    $('#datatab').DataTable();
} );
  </script>
 
</body>

</html>