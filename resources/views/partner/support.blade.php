@extends('layouts.partner')
@section('content')
<h1>Support Tickets</h1><p class="muted">Handle customer support or forward advanced issues to ResellNom.</p>
<div class="panel"><button class="btn" style="float:right">+ New Ticket</button><h3>All Tickets (14)</h3><table class="table"><tr><th>#</th><th>Customer</th><th>Subject</th><th>Status</th><th>Priority</th><th>Action</th></tr>
@foreach([['1024','Rahim Uddin','Website not working','Open','High'],['1023','Karim Hossain','DNS configuration','Partner Handling','Medium'],['1022','Hasan Mahmud','Server issue','Forwarded to ResellNom','High'],['1021','Arif Khan','Email not working','Resolved','Low']] as $t)
<tr><td>#{{ $t[0] }}</td><td>{{ $t[1] }}</td><td>{{ $t[2] }}</td><td><span class="badge {{ $t[3]=='Open'?'open':'paid' }}">{{ $t[3] }}</span></td><td>{{ $t[4] }}</td><td><button class="btn">View</button></td></tr>
@endforeach</table></div>
@endsection