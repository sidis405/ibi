<div class="main-carousel">
@foreach($sliders as $slider)
  <div class="slide"  style="background: url(/images/{{$slider->immagine}}) no-repeat center center;">
    <div class="container caption-container">
      <div class="caption">
        <a href="{{$slider->link}}"><h3>{{$slider->titolo}}</h3><span>{{$slider->sottotitolo}}</span></a>
      </div>
    </div>
  </div>
  @endforeach
</div>

    
