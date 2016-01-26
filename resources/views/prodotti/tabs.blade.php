<div class="row filtri">
  <div class="col-sm-4 no-pad">
    <div class="filtri-img @if($active == 'prodotti-export') active @endif">
      <a href="prodotti-export">
        <!-- <img src="/img/ibi-export-logo.jpg" alt="" class="img-responsive"> -->
        {{$menu['export']['label']}}
      </a>
    </div>
  </div>
  <div class="col-sm-4 no-pad">
    <div class="filtri-img  @if($active == 'prodotti-ibisqus') active @endif">
      <a href="prodotti-ibisqus">
        <!-- <img src="/img/ibisqus-ospedale-logo.jpg" alt="" class="img-responsive"> -->
        {{$menu['hospital']['label']}}
      </a>
    </div>
  </div>
  <div class="col-sm-4 no-pad">
    <div class="filtri-img  @if($active == 'prodotti-italia') active @endif">
      <a href="prodotti-italia">
        <!-- <img src="/img/ibi-italia-logo.jpg" alt="" class="img-responsive"> -->
        {{$menu['retail']['label']}}
      </a>
    </div>
  </div>
</div>