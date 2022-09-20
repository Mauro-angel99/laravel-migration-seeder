@extends('layouts.main')

@section('main-content')
<h1>My movies</h1>
<section>
    <div class="container">
        @foreach($trains as $train)
        <div class="card">
            <h4>{{ $train->Azienda }}</h4>
            <h6>{{ $train->Stazione_di_partenza }}</h6>
            <h6>{{ $train->Stazione_di_arrivo }}</h6>
            <h6>{{ $train->Orario_di_partenza }}</h6>
            <h6>{{ $train->Orario_di_arrivo }}</h6>
        </div>
        @endforeach
    </div>
</section>
@endsection