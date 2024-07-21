<?php
$loaitin_arr = DB::table('loaitin')->select('id', 'ten')->orderby('thuTu', 'asc')->where('anHien', '=', '1')->limit(5)->get();
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="1">Home</a>
                @foreach ($loaitin_arr as $lt)
                    <a class="nav-link" href="{{url('/cat',[$lt->id])}}">{{$lt->ten}}</a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
