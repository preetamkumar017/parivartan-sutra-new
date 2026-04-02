<?= $this->extend('App\Modules\Admin\Views\layout\main') ?>

<?= $this->section('content') ?>

<h4 class="mb-4">
Dashboard
</h4>

<div class="row">

<div class="col-md-3">

<div class="card text-center">

<div class="card-body">

<h3>120</h3>

<p class="mb-0">
Parents
</p>

</div>

</div>

</div>


<div class="col-md-3">

<div class="card text-center">

<div class="card-body">

<h3>340</h3>

<p class="mb-0">
Students
</p>

</div>

</div>

</div>


<div class="col-md-3">

<div class="card text-center">

<div class="card-body">

<h3>25</h3>

<p class="mb-0">
Tests
</p>

</div>

</div>

</div>


<div class="col-md-3">

<div class="card text-center">

<div class="card-body">

<h3>85</h3>

<p class="mb-0">
Strategies
</p>

</div>

</div>

</div>

</div>


<div class="row mt-4">

<div class="col-md-12">

<div class="card">

<div class="card-header">

Recent Activity

</div>

<div class="card-body">

<table class="table table-bordered">

<thead>

<tr>

<th>User</th>

<th>Action</th>

<th>Date</th>

</tr>

</thead>

<tbody>

<tr>

<td>Parent</td>

<td>Purchased Strategy</td>

<td>02 Apr 2026</td>

</tr>

<tr>

<td>Student</td>

<td>Completed Test</td>

<td>02 Apr 2026</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

</div>

<?= $this->endSection() ?>