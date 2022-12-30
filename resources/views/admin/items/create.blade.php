@extends('layouts.app')


@section('content')

<section class="py-5">

    <div class="container">
        <form action="{{route('items.store')}}" method="post" class="card p-3">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="insert a name" aria-describedby="helpId">
                <small id="helpId" class="text-muted">insert a product name</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="insert a price" aria-describedby="helpId">
                <small id="helpId" class="text-muted">insert a product price</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="text" name="image" id="image" class="form-control" placeholder="insert a image url" aria-describedby="helpId">
                <small id="helpId" class="text-muted">insert a product image url</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Details</label>
                <input type="text" name="details" id="details" class="form-control" placeholder="insert product details" aria-describedby="helpId">
                <small id="helpId" class="text-muted">insert product details</small>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</section>

@endsection