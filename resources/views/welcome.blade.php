@extends ('layouts.app')

@section('content')

<div class="container">

    <div class="row g-5">

        @foreach ($comics as $comic)

        <div class="col-2">

            <div class="card">

                <img class="card-img-top" src="{{ $comic['thumb']}}">

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection