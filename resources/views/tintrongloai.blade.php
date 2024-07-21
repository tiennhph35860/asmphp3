@extends('layout')
@section('tieudetrang')
    Tin trong loại {{ $id }}
@endsection
@section('noidung')
    <h1>Các tin trong loại {{ $id }}</h1>
    @foreach ($listtin as $t)
        <div class="row">
            <h3>
                <a href="{{ url('/tin',[$t->id]) }}">{{$t->tieuDe}}</a>
            </h3>
            <p>{{$t->tomTat}}</p>
        </div>

    @endforeach
@endsection
