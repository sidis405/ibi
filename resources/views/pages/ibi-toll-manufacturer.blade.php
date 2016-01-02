@extends('layouts.master')
@section('content')
    <!-- Page content -->
    <div class="main-header ibi-manufacturer">
      <div class="container">
        <div class="main-caption">
          <h1>Toll Development</h1>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8"><img src="/img/ibi-toll-manufacturer-logo.jpg" alt="">
            <div class="tabs manufactoring-tabs">
              <!-- Nav tabs-->
              <ul role="tablist" class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#manufactoring" aria-controls="manufactoring" role="tab" data-toggle="tab">Manufactoring</a></li>
                <li role="presentation"><a href="#development" aria-controls="development" role="tab" data-toggle="tab">Development			</a></li>
              </ul>
              <!-- Tab panes-->
              <div class="tab-content">
                <div id="manufactoring" role="tabpanel" class="tab-pane active">
                  <p>
                    Ne sitatius excea que vende as explignis exerem renditia estius que aria quae iunt, nat esed quatus invendae nia dis ex expersped ma net, eost que venem que pel ea sam et acerem conet esti volorum quia sime elecus.
                    Ihilit esto dipsam fuga. Itas eum volorae ipsunt eum et dolor audandunt ius enit, il ipsunt lab ium acearci desseque et facea prat.
                    Se voles eos is sitat dunt lab iunt, idunt hicitatis ma nus nullabo rersperio consedi gendell aborum rerferumet ulpa si doluptat.
                    <br><br>
                    Is expe nus por sim volupta sum reici que moluptat aut voluptatus.
                    Ilitass imolor sunt miliqui sciatur? Rumendam, sunt.
                    Duciur moloriat. Natem licias eatum aut omnis essum vel in pro iniminctem. Ab inulpa sandita eptatem porita destion eatet estis ni apitior porruptatium et providis net eum quia dus everiosto endandus voluptat. Evenientia sequam voluptatur sin re voluptibus ipsapitatem nihil idunt apelect atiustrum
                  </p>
                </div>
                <div id="development" role="tabpanel" class="tab-pane">								<img src="/img/grafico-development.jpg" class="img-responsive">
                  <p><b>cGMP production of sterile penicillins (API)<br></b>Ne sitatius excea que vende as explignis exerem renditia estius que aria quae iunt, nat esed quatus invendae nia dis ex expersped ma net, eost que venem que pel ea sam et acerem conet esti volorum quia sime elecus.
                    Ihilit esto dipsam fuga. Itas eum volorae ipsunt eum et dolor audandunt ius enit, il ipsunt lab ium acearci desseque et facea prat.
                    Se voles eos is sitat dunt lab iunt, idunt hicitatis ma nus nullabo rersperio consedi gendell aborum rerferumet ulpa si doluptat.
                  </p>
                  <p><b>CDMS for orals, topicals, injectables<br></b>Ne sitatius excea que vende as explignis exerem renditia estius que aria quae iunt, nat esed quatus invendae nia dis ex expersped ma net, eost que venem que pel ea sam et acerem conet esti volorum quia sime elecus.
                    Ihilit esto dipsam fuga. Itas eum volorae ipsunt eum et dolor audandunt ius enit, il ipsunt lab ium acearci desseque et facea prat.
                    Se voles eos is sitat dunt lab iunt, idunt hicitatis ma nus nullabo rersperio consedi gendell aborum rerferumet ulpa si doluptat.
                  </p>
                  <p><b>GMP production of Rec-proteins (API)<br></b>Ne sitatius excea que vende as explignis exerem renditia estius que aria quae iunt, nat esed quatus invendae nia dis ex expersped ma net, eost que venem que pel ea sam et acerem conet esti volorum quia sime elecus.
                    Ihilit esto dipsam fuga. Itas eum volorae ipsunt eum et dolor audandunt ius enit, il ipsunt lab ium acearci desseque et facea prat.
                    Se voles eos is sitat dunt lab iunt, idunt hicitatis ma nus nullabo rersperio consedi gendell aborum rerferumet ulpa si doluptat.								
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            @include('layouts.news_sidebar')
          </div>
        </div>
      </div>
    </section>
    @stop