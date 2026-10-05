@extends('layouts.partner')
@section('content')
<h1>Good evening, Mahfuz 👋</h1><p class="muted">Here's an overview of your business performance.</p>
<div class="cards">
<div class="card"><div class="label">Total Sales</div><div class="value">৳125,400</div><div class="up">↑ 12% from last month</div></div>
<div class="card"><div class="label">Total Earnings</div><div class="value">৳24,800</div><div class="up">↑ 18% from last month</div></div>
<div class="card"><div class="label">Available Balance</div><div class="value">৳18,500</div><div class="up">↑ 8% from last month</div></div>
<div class="card"><div class="label">Total Customers</div><div class="value">82</div><div class="up">↑ 14% from last month</div></div>
</div>
<div class="grid2"><div class="panel"><h3>Sales Overview</h3><div class="chart">@for($i=0;$i<9;$i++)<div class="bar"></div>@endfor</div></div><div class="panel"><h3>Quick Actions</h3><div class="quick"><a class="btn" href="#">View My Store</a><a class="btn" href="{{ route('partner.support') }}">Add New Ticket</a><a class="btn" href="{{ route('partner.withdraw') }}">Request Withdrawal</a><a class="btn" href="{{ route('partner.products') }}">Edit Product Prices</a></div></div></div>
<br><div class="grid2"><div class="panel"><h3>Recent Orders</h3><table class="table"><tr><th>#</th><th>Customer</th><th>Product</th><th>Amount</th><th>Status</th></tr><tr><td>#10021</td><td>Rahim Uddin</td><td>Cloud Hosting</td><td>৳700</td><td><span class="badge paid">Paid</span></td></tr><tr><td>#10020</td><td>Karim Hossain</td><td>.com Domain</td><td>৳950</td><td><span class="badge paid">Paid</span></td></tr><tr><td>#10019</td><td>Hasan Mahmud</td><td>VPS Basic</td><td>৳2,500</td><td><span class="badge pending">Pending</span></td></tr></table></div><div class="panel"><h3>Recent Support Tickets</h3><table class="table"><tr><th>#</th><th>Subject</th><th>Status</th></tr><tr><td>#1024</td><td>Website not working</td><td><span class="badge open">Open</span></td></tr><tr><td>#1023</td><td>DNS configuration</td><td>Partner Handling</td></tr><tr><td>#1022</td><td>Server issue</td><td>Forwarded</td></tr></table></div></div>
@endsection