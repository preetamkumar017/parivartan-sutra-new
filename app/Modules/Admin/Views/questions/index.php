<?= $this->extend('App\Modules\Admin\Views\layout\main') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-3">

<h4 class="mb-0">
Questions
</h4>

<button class="btn btn-primary btn-sm"
data-toggle="modal"
data-target="#questionModal">

<i class="fa fa-plus"></i> Add Question

</button>

</div>


<div class="row mb-3">

<div class="col-md-4">

<input type="text"
class="form-control"
id="searchBox"
placeholder="Search question">

</div>

</div>


<div class="card">

<div class="card-body">

<div class="table-responsive">

<table class="table table-striped table-hover">

<thead class="thead-light">

<tr>

<th>ID</th>
<th>Question</th>
<th>Type</th>
<th>Marks</th>
<th class="text-right">Action</th>

</tr>

</thead>

<tbody id="questionTable">

<?php foreach($questions as $q): ?>

<tr>

<td><?= $q['id'] ?></td>

<td><?= $q['question_text'] ?></td>

<td><?= $q['question_type'] ?></td>

<td><?= $q['marks'] ?></td>

<td class="text-right">

<button
class="btn btn-sm btn-outline-primary editBtn"
data-id="<?= $q['id'] ?>">

<i class="fa fa-edit"></i>

</button>

<button
class="btn btn-sm btn-outline-danger deleteBtn"
data-id="<?= $q['id'] ?>">

<i class="fa fa-trash"></i>

</button>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</div>

</div>


<!-- MODAL -->

<div class="modal fade" id="questionModal">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header">

<h5 id="modalTitle">

Add Question

</h5>

<button class="close" data-dismiss="modal">
×
</button>

</div>


<div class="modal-body">

<form id="questionForm">

<input type="hidden" name="id" id="id">

<div class="form-group">

<label>Question</label>

<textarea
name="question_text"
id="question_text"
class="form-control"></textarea>

</div>


<div class="form-group">

<label>Type</label>

<select
name="question_type"
id="question_type"
class="form-control">

<option value="mcq">MCQ</option>

<option value="true_false">True / False</option>

</select>

</div>


<div class="form-group">

<label>Marks</label>

<input
type="number"
name="marks"
id="marks"
class="form-control">

</div>

</form>

</div>


<div class="modal-footer">

<button class="btn btn-success" id="saveBtn">

Save

</button>

</div>

</div>

</div>

</div>



<script>


$('#searchBox').on('keyup',function(){

var value=$(this).val().toLowerCase();

$('#questionTable tr').filter(function(){

$(this).toggle($(this).text().toLowerCase().indexOf(value)>-1);

});

});



$('#saveBtn').click(function(){

$.post('/admin/questions/save',
$('#questionForm').serialize(),
function(){

location.reload();

});

});



$('.editBtn').click(function(){

var id=$(this).data('id');

$.get('/admin/questions/get/'+id,function(data){

$('#modalTitle').text('Edit Question');

$('#id').val(data.id);
$('#question_text').val(data.question_text);
$('#question_type').val(data.question_type);
$('#marks').val(data.marks);

$('#questionModal').modal('show');

});

});



$('.deleteBtn').click(function(){

if(confirm('Delete Question?')){

var id=$(this).data('id');

$.post('/admin/questions/delete',{id:id},function(){

location.reload();

});

}

});


</script>


<?= $this->endSection() ?>