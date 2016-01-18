<div id="area-riservata-modal" class="white-popup mfp-fade"><img src="/img/ibi-lorenzini-logo.png" alt="">
@include('layouts.errors')
              @include('flash::message')
      <h3>Area Riservata</h3>
      <form role="form" method="POST" action="/area-riservata" class="form-horizontal">
        {!! csrf_field(); !!}
        <div class="form-group">
          <label class="control-label">Email</label>
          <div>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control fields">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label">Password</label>
          <div>
            <input type="password" name="password" class="form-control fields">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember"> Ricorda la mia password
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12"><a href="{{ url('/auth/register') }}">Registrati</a><br><a href="{{ url('/password/email') }}">Hai smarrito la password                    </a></div>
        </div>
      </form>
    </div>