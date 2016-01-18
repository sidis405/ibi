@if(Session::get('locale') == 'it')

    {!! app('captcha')->display([], 'it'); !!}

@else

    {!! app('captcha')->display([], 'en'); !!}

@endif


