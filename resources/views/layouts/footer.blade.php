<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-sm-6">
        <div class="footer-box">
          <h4>
          
          About <i>Ibi</i>
          </h4>
          @include('layouts.content_footer', array('key' => 'footer_prima_colonna', 'permesso'=> 'modifica_contatti'))
        </div>
      </div>
      <div class="col-sm-3 col-sm-6">
        <div class="footer-box">
          <h4>Worldwide</h4>
          @include('layouts.content_footer', array('key' => 'footer_seconda_colonna', 'permesso'=> 'modifica_contatti'))
      </div>
    </div>
    <div class="col-sm-3 col-sm-6">
      <div class="footer-box">
        <h4>Stay connected</h4>
        @include('layouts.content_footer', array('key' => 'footer_terza_colonna', 'permesso'=> 'modifica_contatti'))
    </div>
  </div>
  <div class="col-sm-3 col-sm-6">
    <div class="footer-box">
      <h4>Link utili</h4>
      <ul>
        <li> <a href="/farmaco-vigilanza">Farmacovigilanza</a></li>
        <li><a href="/privacy-policy">Privacy Policy</a></li>
        <li><a href="/contatti">Contatti</a></li>
        <li><a href="#area-riservata-modal" class="area-riservata open-area-riservata-modal">Area Riservata</a></li>
        <li><a href="/trasferimenti-di-valore">Trasferimenti di valore</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="copyright">
<div class="container"></div>
</div>
</footer>