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

<?= view('App\Modules\Admin\Views\partials\header') ?>

<div class="container-fluid">

<div class="row">

<?= view('App\Modules\Admin\Views\partials\sidebar') ?>

<div class="col-md-10 pt-4">

<?= $this->renderSection('content') ?>

</div>

</div>

</div>

<?= view('App\Modules\Admin\Views\partials\footer') ?>

</body>

</html>