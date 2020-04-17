@if(count($errors->all())>0)
<div id="myDIV" class="header">
	<div class="error">
	    <ul>
	        @foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
	    </ul>
    </div>
</div>
@endif