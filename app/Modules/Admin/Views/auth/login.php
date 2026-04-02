<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Login</title>

<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center align-items-center vh-100">

<div class="col-md-4">

<div class="card">

<div class="card-body">

<h4 class="text-center mb-4">
Admin Login
</h4>

<form method="post" action="/admin/login">

<div class="form-group">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter email"
required>

</div>

<div class="form-group">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Enter password"
required>

</div>

<button class="btn btn-primary btn-block">

Login

</button>

</form>

</div>

</div>

<div class="text-center mt-3">

<small class="text-muted">
Admin Panel
</small>

</div>

</div>

</div>

</div>

</body>

</html>