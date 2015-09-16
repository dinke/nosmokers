@extends('master')

@section('content')
    <div class="container">
        <p>@if ($success)
                Vaša poruka je uspešno poslata.
            @else
                Došlo je do greške prilikom slanja.
            @endif
        </p>
    </div><!-- /.container -->
@endsection


