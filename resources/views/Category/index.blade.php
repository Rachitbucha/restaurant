@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Category</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($categories)>0)
                        @foreach($categories as $key=>$category)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$category -> name}}</td>
                                <td>
                                    <a href="{{route('category.edit', [$category->id])}}"><button class="btn btn-outline-success">Edit</button></a>
                                </td>
                                <td>
                                <a href="{{route('category.destroy', [$category->id])}}"><button class="btn btn-outline-danger">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <td> No Category to Display </td>
                        @endif
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
