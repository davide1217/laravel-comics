@extends('layout.main')

@section('content')

<div class="jumbotron">
    <div>current series</div>
</div>

<main>
    <div class="_container">
        <div class="container-fluid">
            <div class="row align-items-start">

                @foreach ($cards as $card)
                <div class="col-2">
                    <div class="image"><img src="{{$card->image}}" alt="{{$card->title}}"></div>
                    <h3>{{$card->title}}</h3>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div>load more</div>
</main>

<section id="blue">
    <div class="_container">
        <div class="container-fluid">
            <div class="row">

                @foreach ($icons as $icon)
                <div class="col _col">
                    <img src="{{ $icon['image'] }}" alt="{{ $icon['description'] }}">
                    <div>{{ $icon['description'] }}</div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
  </section>

@endsection
