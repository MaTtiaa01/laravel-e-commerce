@extends('layouts.app')


@section('content')

<section class="items py-5">
    <div class="container">
        @forelse($items as $item)
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title </th>
                        <th scope="col">price </th>
                        <th scope="col">details </th>
                        <th scope="col">image </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->details}}</td>
                        <td>
                            <img width="50" src="{{$item->img}}" alt="">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        @empty
        <tr>
            Ops! No products available yet!
        </tr>
        @endforelse
    </div>
</section>

@endsection