@extends('master')

@section('content')
    <div class="container">
        <div class="col-xs-6 ">
          <h1>Kontaktirajte nas</h1>
            <form class="form">
                <div class="form-group">
                    <label for="nameField">Ime i Prezime</label>
                    <input type="text" class="form-control" id="nameField" placeholder="Ime i Prezime" />
                </div>
                <div class="form-group">
                    <label for="emailField">Email</label>
                    <input type="email" class="form-control" id="emailField" placeholder="E-mail" /> </div>
                <div class="form-group">
                    <label for="descField">Vas komentar</label>
                    <textarea class="form-control" rows="10" id="descField" placeholder="Vasa Poruka"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Posalji</button>
            </form>
        </div>
    </div><!-- /.container -->
@endsection