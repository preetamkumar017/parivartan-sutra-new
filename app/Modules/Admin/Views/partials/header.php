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

<div class="collapse navbar-collapse">

<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle"
href="#"
data-toggle="dropdown">

<i class="fa fa-user"></i> Admin

</a>

<div class="dropdown-menu dropdown-menu-right">

<a class="dropdown-item"
href="/admin/dashboard">

Dashboard

</a>

<div class="dropdown-divider"></div>

<form method="post" action="/admin/logout">

<button class="dropdown-item text-danger">

Logout

</button>

</form>

</div>

</li>

</ul>

</div>

</nav>