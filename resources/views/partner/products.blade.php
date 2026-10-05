@extends('layouts.partner')
@section('content')
<h1>Products & Pricing</h1><p class="muted">Manage your products and set your own selling price.</p>
<div class="panel"><table class="table"><tr><th>Product</th><th>Base Price</th><th>Your Price</th><th>Your Profit</th><th>Status</th><th>Action</th></tr>
@foreach([['Cloud Hosting 10',500,700],['Cloud Hosting 20',800,1100],['WordPress Hosting',600,850],['VPS Basic',1200,1500],['.com Domain',800,950],['SSL Certificate',1500,1800]] as $p)
<tr><td><b>{{ $p[0] }}</b><br><small class="muted">ResellNom Product</small></td><td>৳{{ number_format($p[1]) }}</td><td><input value="{{ $p[2] }}" style="width:90px;padding:8px;border:1px solid #ddd;border-radius:7px"></td><td>৳{{ number_format($p[2]-$p[1]) }}</td><td><span class="badge paid">Active</span></td><td><button class="btn">Edit</button></td></tr>
@endforeach</table></div>
@endsection