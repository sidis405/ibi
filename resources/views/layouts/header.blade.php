<header>
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-sm-6"><i class="fa fa-facebook-square"></i><i class="fa fa-google-plus-square"></i><i class="fa fa-twitter-square"></i><i class="fa fa-envelope"></i></div>
            <div class="col-sm-6">
              <div class="pull-right">
              @if($user)
              <a href="#" class="area-riservata">{{$user->first_name[0]}}.{{$user->last_name}}</a>
              <a href="/logout" class="area-riservata">[Esci]</a>
              @else
              <a href="/area-riservata" class="area-riservata">Area riservata</a>
              @endif
                <p class="lang"><a href="/langs/it">Ita |</a><a href="/langs/en"> Eng</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display-->
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/">
              <h1 class="logo">Ibi Lorenzini</h1></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling-->
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">          
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/chi-siamo">{{$menu['chi-siamo']['label']}}</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">{{$menu['prodotti']['label']}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/prodotti-export"><span>Ibi </span>Export</a></li>
                  <li><a href="/prodotti-ibisqus"><span>Ibis<i>q</i>us </span>Ospedale</a></li>
                  <li><a href="/prodotti-italia"><span>Ibi </span>Italia</a></li>
                </ul>
              </li>
              <li><a href="/ibi-toll-manufacturer">Toll development<br> manufacturer</a></li>
              <li><a href="/ricerca-innovazione">Ricerca e<br> innovazione</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">{{$menu['contatti']['label']}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/contatti">{{$menu['informazioni']['label']}}</a></li>
                  <li><a href="/lavora-con-noi">{{$menu['lavora-con-noi']['label']}}</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse-->
        </div>
        <!-- /.container-fluid-->
      </nav>
    </header>