<?= $this->extend('App\Modules\Admin\Views\layout\main') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

<h4 class="mb-4">
Dashboard
</h4>

<!-- STATS -->

<div class="row">

<div class="col-lg-3 col-md-6 col-12 mb-3">

<div class="card">

<div class="card-body text-center">

<h5 class="card-title">
Parents
</h5>

<h3>
120
</h3>

</div>

</div>

</div>


<div class="col-lg-3 col-md-6 col-12 mb-3">

<div class="card">

<div class="card-body text-center">

<h5 class="card-title">
Students
</h5>

<h3>
340
</h3>

</div>

</div>

</div>


<div class="col-lg-3 col-md-6 col-12 mb-3">

<div class="card">

<div class="card-body text-center">

<h5 class="card-title">
Tests
</h5>

<h3>
25
</h3>

</div>

</div>

</div>


<div class="col-lg-3 col-md-6 col-12 mb-3">

<div class="card">

<div class="card-body text-center">

<h5 class="card-title">
Revenue
</h5>

<h3>
₹ 45,000
</h3>

</div>

</div>

</div>

</div>


<!-- QUICK ACTIONS -->

<div class="row mt-3">

<div class="col-md-12">

<div class="card">

<div class="card-header">

Quick Actions

</div>

<div class="card-body">

<a href="#" class="btn btn-primary btn-sm mr-2">
Create Test
</a>

<a href="#" class="btn btn-success btn-sm mr-2">
Add Question
</a>

<a href="#" class="btn btn-warning btn-sm mr-2">
Create Strategy
</a>

<a href="#" class="btn btn-info btn-sm">
View Payments
</a>

</div>

</div>

</div>

</div>


<!-- RECENT STUDENTS -->

<div class="row mt-4">

<div class="col-md-6">

<div class="card">

<div class="card-header">
Recent Students
</div>

<div class="card-body">

<table class="table table-bordered table-sm">

<thead>

<tr>
<th>Name</th>
<th>Date</th>
</tr>

</thead>

<tbody>

<tr>
<td>Rahul</td>
<td>02 Apr 2026</td>
</tr>

<tr>
<td>Aman</td>
<td>01 Apr 2026</td>
</tr>

<tr>
<td>Sneha</td>
<td>01 Apr 2026</td>
</tr>

</tbody>

</table>

</div>

</div>

</div>


<!-- RECENT PAYMENTS -->

<div class="col-md-6">

<div class="card">

<div class="card-header">
Recent Payments
</div>

<div class="card-body">

<table class="table table-bordered table-sm">

<thead>

<tr>
<th>Parent</th>
<th>Amount</th>
<th>Date</th>
</tr>

</thead>

<tbody>

<tr>
<td>Ravi</td>
<td>₹2000</td>
<td>02 Apr</td>
</tr>

<tr>
<td>Neha</td>
<td>₹1500</td>
<td>01 Apr</td>
</tr>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>

<?= $this->endSection() ?>