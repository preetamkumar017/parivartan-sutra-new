<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Panel</title>

<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="/admin/dashboard">
Admin Panel
</a>

<button class="navbar-toggler"
type="button"
data-toggle="collapse"
data-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle"
href="#"
id="adminMenu"
data-toggle="dropdown">

<i class="fa fa-user"></i> Admin

</a>

<div class="dropdown-menu dropdown-menu-right">

<a class="dropdown-item"
href="/admin/dashboard">

<i class="fa fa-home"></i> Dashboard

</a>

<div class="dropdown-divider"></div>

<form method="post" action="/admin/logout">

<button class="dropdown-item text-danger">

<i class="fa fa-sign-out-alt"></i> Logout

</button>

</form>

</div>

</li>

</ul>

</div>

</nav>


<div class="container-fluid">

<div class="row">

<!-- SIDEBAR -->

<div class="col-md-2 bg-light pt-3">

<div class="list-group">

<a href="/admin/dashboard"
class="list-group-item list-group-item-action">

<i class="fa fa-home"></i> Dashboard

</a>

<a href="#"
class="list-group-item list-group-item-action">

<i class="fa fa-users"></i> Parents

</a>

<a href="#"
class="list-group-item list-group-item-action">

<i class="fa fa-user"></i> Students

</a>

<a href="#"
class="list-group-item list-group-item-action">

<i class="fa fa-book"></i> Tests

</a>

<a href="#"
class="list-group-item list-group-item-action">

<i class="fa fa-lightbulb"></i> Strategies

</a>

<a href="#"
class="list-group-item list-group-item-action">

<i class="fa fa-credit-card"></i> Payments

</a>

</div>

</div>


<!-- CONTENT AREA -->

<div class="col-md-10 pt-4">

<?= $this->renderSection('content') ?>

</div>

</div>

</div>


<!-- JS -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>