@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                     @if(Session::has('flash_message'))
    <div class="alert alert-danger">
        {{Session::get('flash_message')}}
    </div>
    @endif
                    <form action="/showCart" method="get">
                        <button type="submit" class="btn btn-md btn-primary">SHOWCARTS</button>
                        <table class="table table-striped table-hover">
                    </form>
            <thead>
                <tr>
                <td><b>PRODUCT ID</td>
                <td><b>PRODUCT NAME</td>
                <td><b>DESCRIPTIONS</td>
                <td><b>CAREGORY ID</td>
                <td><b>BARCODE</td>
                <td><b>AMOUNT</b></td>
                <td>&nbsp;</td>

            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->barcode}}</td>
                    <td>{{$product->price}}
                    <td>

                    <form action="/add" method="post">
                    {{ csrf_field() }}
                        <input type="hidden" name ="product_id" value="{{$product->id}}">
                        <input type="hidden" name ="barcode" value="{{$product->barcode}}">
                        <input type="hidden" name ="price" value="{{$product->price}}">
                        <button type="submit" class="btn btn-md btn-primary"> ADD TO CART</button>
                    </form>
                    </td>
                    
                    
                </tr>
                @endforeach
            </tbody>        
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
