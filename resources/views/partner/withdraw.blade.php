@extends('layouts.partner')
@section('content')
<h1>Withdraw Earnings</h1><p class="muted">Request a payout from your available partner balance.</p>
<div class="cards"><div class="card"><div class="label">Available Balance</div><div class="value">৳18,500</div></div><div class="card"><div class="label">Pending</div><div class="value">৳6,300</div></div><div class="card"><div class="label">Total Earned</div><div class="value">৳45,800</div></div></div>
<div class="panel"><h3>Request Withdrawal</h3><div style="display:grid;gap:14px;max-width:500px"><input placeholder="Amount" style="padding:12px;border:1px solid #ddd;border-radius:8px"><select style="padding:12px;border:1px solid #ddd;border-radius:8px"><option>bKash</option><option>Nagad</option><option>Bank</option></select><input placeholder="Account number" style="padding:12px;border:1px solid #ddd;border-radius:8px"><button class="btn">Request Withdrawal</button></div></div>
@endsection