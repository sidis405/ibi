@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            Per favore notare i seguenti errori<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif