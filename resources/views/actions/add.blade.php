@include('partials.error_block')


<form action="{{ route('actionsAdd')}}" method="post">
	<div id="myDIV" class="header">
		<h2>My To Do List</h2>
		<input type="text" name="newTask" placeholder="Title...">
		@csrf
		<button type="submit" class="addBtn">Add</button>
	</div>
</form>