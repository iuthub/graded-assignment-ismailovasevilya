
@foreach($tasks as $task)
<ul id="myUL">
  <li>
    <div class="task">
       {{$task->newTask}}
    </div>
    <div class="action">
      <a href="{{route('actionsEdit', ['id' => $task->id]) }}"><i class="fa fa-edit"></i></a>
    </div>
    <div class="action">
      <a href="{{route('actionsDelete', ['id' => $task->id]) }}"><i class="fa fa-trash-alt"></i></a>
    </div>
    Author: {{$task->user->name}}
  </li>
@endforeach  