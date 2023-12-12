<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>To-do App - Laravel X Ajax</title>
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<body>
    <div class="container">
        <section id="data_section" class="todo">
            <ul class="todo-controls">
                <li><h3><img src="assets/images/app.png" width="25px" alt="" onclick="show_form('add_task')">Add to do task</h3></li>
            </ul>
            <ul id="task_list" class="todo-list">
                @foreach($todos as $todo)
                    @if ($todo->status)
                        <li id="{{$todo->id}}" class="done">
                            <a href="#" class="toggle"></a>
                            <span id="span_{{$todo->id}}" class="span">{{$todo->title}}</span>
                            <a href="#" onclick="edit_task('{{$todo->id}}','{{$todo->title}}')" class="icon-edit">Edit</a>
                            <a href="#" onclick="delete_task('{{$todo->id}}')" class="icon-delete">Delete</a>
                        </li>
                    @else
                        <li id="{{$todo->id}}">
                            <a href="#" class="toggle"></a>
                            <a href="#" onclick="task_done('{{$todo->id}}')" class="icon-done">Done</a>
                            <span id="span_{{$todo->id}}" class="span">{{$todo->title}}</span>
                            <a href="#" onclick="edit_task('{{$todo->id}}','{{$todo->title}}')" class="icon-edit">Edit</a>
                            <a href="#" onclick="delete_task('{{$todo->id}}')" class="icon-delete">Delete</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </section>
        <section id="form_section" >
                <form id="add_task" class="todo" style="display: none;">
                    <input id="task_title" type="text" name="title" placeholder="Enter a task name" value="" />
                    <button name="submit">Add Task</button>
                </form>
                <form id="edit_task" class="todo" style="display: none;">
                    <input type="hidden" id="edit_task_id" value="">
                    <input id="edit_task_title" type="text" name="title" placeholder="Enter a task name" value="" />
                    <button name="submit">Edit Task</button>
                </form>
        </section>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script>
        $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
        })
        </script>
    <script src="{{url('assets/js/todo.js')}}"></script>
</body>
</html>
