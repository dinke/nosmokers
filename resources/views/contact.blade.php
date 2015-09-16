@extends('master')

@section('content')
    <div class="container">
        <div class="col-xs-6 ">
          <h1>Kontaktirajte nas</h1>
            <form class="form" method="post" action="{{ url('contact') }}">
                <div class="form-group">
                    <label for="nameField">Ime i Prezime</label>
                    <input type="text" name="name" class="form-control" id="nameField" placeholder="Ime i Prezime" value="{{ old('name') }}" />
                </div>
                <div class="form-group">
                    <label for="emailField">Vaš Email</label>
                    <input type="email" name="email" class="form-control" id="emailField" placeholder="E-mail" value="{{ old('email') }}" /> </div>
                <div class="form-group">
                    <label for="descField">Vaša poruka</label>
                    <textarea class="form-control" name="message" rows="10" id="descField" placeholder="Vaša Poruka" value="{{ old('message') }}"></textarea>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-primary">Pošalji</button>
            </form>

        </div>
    </div><!-- /.container -->
@endsection