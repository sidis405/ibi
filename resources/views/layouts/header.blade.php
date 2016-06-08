<header>
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 hidden-xs"><!-- <i class="fa fa-facebook-square"></i><i class="fa fa-google-plus-square"></i><i class="fa fa-twitter-square"></i><i class="fa fa-envelope"></i> --></div>
            <div class="col-sm-6">
              <div class="pull-right">
              @if($user)

              <a href="@if(!in_array($user_role, ['Medico', 'Farmacista']))/admin @else # @endif" class="area-riservata">{{$user->first_name[0]}}.{{$user->last_name}}</a>
              <a href="/logout" class="area-riservata">[{{$text['header']['logout']}}]</a>
              @else
              <a href="#area-riservata-modal" class="area-riservata open-area-riservata-modal">{{$text['header']['login']}}</a>
              @endif
                <p class="lang"><a href="#" class="lingua-btn @if(\Session::get('locale') == 'it' || \Session::get('locale') == '') active @endif" data-url="/langs/it">Ita</a>
                <span style="margin: 0 3px;">|</span>
                <a href="#"  class="lingua-btn @if(\Session::get('locale') == 'en') active @endif" data-url="/langs/en"> Eng</a></p>
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
              <li {{ Session::get('currentPage') =='chi-siamo' ? 'class=active' : '' }}><a href="/chi-siamo" >{{$menu['chi-siamo']['label']}}</a></li>
              <li class="dropdown  {{ Session::get('currentPage') =='prodotti' ? ' active ' : '' }}"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">{{$menu['prodotti']['label']}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/prodotti-export">{{$menu['export']['label']}}</a></li>
                  <li><a href="/prodotti-ibisqus">{{$menu['hospital']['label']}}</a></li>
                  <li><a href="/prodotti-italia">{{$menu['retail']['label']}}</a></li>
                </ul>
              </li>
              <li {{ Session::get('currentPage') =='ibi-toll-manufacturer' ? 'class=active' : '' }}><a href="/ibi-toll-manufacturer">{!!$menu['toll-development-manufacturer']['label']!!}</a></li>
              <li {{ Session::get('currentPage') =='ricerca-innovazione' ? 'class=active' : '' }}><a href="/ricerca-innovazione">{!!$menu['ricerca-innovazione']['label']!!}</a></li>
              <li class="dropdown  {{ Session::get('currentPage') =='contatti' ? ' active ' : '' }}"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">{{$menu['contatti']['label']}} <span class="caret"></span></a>
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