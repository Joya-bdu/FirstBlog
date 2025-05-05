<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->title }}- {{ $task->description }}
            <a href="{{ route('tasks.show', $task->id) }}">view</a>
            
        </li>
    @endforeach
</ul>