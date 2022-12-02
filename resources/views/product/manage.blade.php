@extends('layout')

@section('title', 'Products')

@section('content')

<script type="text/javascript" src="{{asset('app.js')}}"></script>
<form action="{{route('add-product')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>Manage your products</h1>
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Size</th>
            <th>Gender</th>
            <th>Image</th>
            <th scope="col"></th>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}"></td>
                <td><input type="text" class="form-control" placeholder="Description" name="desc" value="{{old('desc')}}"></td>
                <td><input type="number" class="form-control" placeholder="Price" name="price" step="0.01" min="0.00" value="{{old('price')}}"></td>
                <td><input type="number" class="form-control" placeholder="0" name="stock" min="0" value="{{old('stock')}}"></td>
                <td><input type="number" class="form-control" placeholder="0" name="size" step="0.5" min="0.00" value="{{old('size')}}"></td>
                <td><select class="form-control" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select></td>
                <td><input type="file" name="product_image" class="form-control"></td>
                <td><button type="submit">Add product</button></td>
            </tr>
        </tbody>
    </table>
</form>

<span class="text-danger">@error('name') {{$message}} @enderror</span>
<span class="text-danger">@error('desc') {{$message}} @enderror</span>
<span class="text-danger">@error('price') {{$message}} @enderror</span>
<span class="text-danger">@error('stock') {{$message}} @enderror</span>
<span class="text-danger">@error('size') {{$message}} @enderror</span>
<span class="text-danger">@error('gender') {{$message}} @enderror</span>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Size</th>
            <th scope="col">Gender</th>
            <th scope="col">Image</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $product)
        <form action="{{route('update-product', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <tr id="product_{{$product->id}}">
                <input type="hidden" value="{{$product->id}}" name="id">
                <td><input type="text" value="{{$product->name}}" name="name"></td>
                <td><input type="text" value="{{$product->desc}}" name="desc"></td>
                <td><input type="number" value="{{$product->price}}" name="price" step="0.01" min="0.00"></td>
                <td><input type="number" value="{{$product->stock}}" name="stock" min="0"></td>
                <td><input type="number" value="{{$product->size}}" name="size" step="0.5" min="0.00"></td>

                <td><select name="gender" selected="{{$product->gender}}">
                        @if ($product->gender =="male")
                        <option value="male" selected>male</option>
                        <option value="female">female</option>
                        @else
                        <option value="male">male</option>
                        <option value="female" selected>female</option>
                        @endif
                    </select></td>
                <td>
                    <!-- <label for="getFile">{{$product->imgPath}}</label><input type="button" value="Change image" style="display:block;width:105px; height:28px;" onclick="document.getElementById('getFile').click()"> -->
                    <input type='file' id="getFile" class="hidden" name="product_image">
                    <!-- <label for="getFile" >Select new image</label> -->
                </td>
                <td><button name="button" type="submit">Save</button></td>
            </tr>
        </form>
        @empty
        <td>No products</td>
        @endforelse
    </tbody>
</table>

<link rel="stylesheet" href="css/basket.css">
<div class="container-log manage_product" style="max-width:60rem;">
    <div class="title"><h4>Manage Products</h4></div>
    <br>
    <table class="fn_table_manage">
      <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Size</th>
            <th scope="col">Gender</th>
            <th scope="col">Image</th>
            <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @forelse($data as $product)
        <form action="{{route('update-product', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <tr id="product_{{$product->id}}">
                <input type="hidden" value="{{$product->id}}" name="id">
                <td><input type="text" value="{{$product->name}}" name="name" style="width:10rem;"></td>
                <td><input type="text" value="{{$product->desc}}" name="desc" style="width:10rem;"></td>
                <td><input type="number" value="{{$product->price}}" name="price" style="width:5rem;" step="0.01" min="0.00"></td>
                <td><input type="number" value="{{$product->stock}}" name="stock" style="width:5rem;" min="0"></td>
                <td><input type="number" value="{{$product->size}}" name="size" style="width:5rem;" step="0.5" min="0.00"></td>

                <td><select name="gender" selected="{{$product->gender}}">
                        @if ($product->gender =="male")
                        <option value="male" selected>male</option>
                        <option value="female">female</option>
                        @else
                        <option value="male">male</option>
                        <option value="female" selected>female</option>
                        @endif
                    </select></td>
                <td>
                    <!-- <label for="getFile">{{$product->imgPath}}</label><input type="button" value="Change image" style="display:block;width:105px; height:28px;" onclick="document.getElementById('getFile').click()"> -->
                    <input type='file' id="getFile" class="hidden" name="product_image" style="width:15rem;">
                    <!-- <label for="getFile" >Select new image</label> -->
                </td>
                <td><button name="button" type="submit">Save</button></td>
            </tr>
        </form>
        @empty
        <td>No products</td>
        @endforelse
      </tbody>
  </table>
</div>

<a href="{{url('home')}}"><button>Home</button></a>
<a href="{{url('products')}}"><button>Products</button></a>

@endsection