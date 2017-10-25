@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

   @if(Session::has('flash_messageDelete'))
   <div class="alert alert-danger">
   		{{Session::get('flash_messageDelete')}}
   </div>
   @endif
	<table class="table table-striped table-hover">

	  <tbody>
		<thead>
			<tr>
				
				<td>PRODUCT_ID</td>
				<td>PRODUCT NAME</td>
				<td>QUANTITY</td>
				<td>AMOUNT</td>
				<td>BARCODE</td>
				<td>&nbsp;</td>
			</tr>
		</thead>

	</tbody>
	@foreach($cartItems as $cartItems)
	<tr>

		<td>{{$cartItems->product_id}}</td>
		<td>{{$cartItems->name}}</td>
		<td>{{$cartItems->quantity}}</td>
		<td>{{$cartItems->amount}}</td>
		<td>{{$cartItems->barcode}}</td>

		<form action="/remove/{{$cartItems->product_id}}" method="get">
		<td><button class="btn btn-md btn-danger">REMOVE</button></td>
	</tr>
	@endforeach
