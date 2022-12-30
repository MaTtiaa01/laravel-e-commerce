@extends('layouts.app')

@section('content')

<section class="py-5"></section>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-head">
                {{$item->title}}
            </div>
            <div class="card-body">
                <div class="img">
                    <img src="{{$item->img}}" alt="">
                </div>
                {{$item->details}}
            </div>
        </div>
    </div>
</div>
</section>

@endsection