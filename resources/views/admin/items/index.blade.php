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
                        <th scope="col">actions </th>

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
                        <td class="d-flex flex-column">
                            <a class="btn btn-primary" href="{{route('items.edit',$item->id)}}">edit</a>
                            <a class="btn btn-primary" href="{{route('items.show',$item->id)}}">show</a>
                            <form action="{{route('items.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">delete</button>
                            </form>
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