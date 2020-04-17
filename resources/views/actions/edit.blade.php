<div id="myDIV" class="header">
		<h2>Rename your title</h2>
		<input type="text" name="title" form="postForm" value="{{ $task->newTask}}" placeholder="Title...">
</div>


<form id="postForm" action="{{ route('actionsEdit')}}" method="post">
	@csrf
	<div id="myDIV" class="header">
		
		<input type="hidden" name="id" value="{{ $task->id}}">
		<button type="submit" class="addBtn">Edit</button>
	</div>
</form>