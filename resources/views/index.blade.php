<h1>
    <b>Hellou! bem vindo</b>
</h1>

<div>

        @forelse ($tasks as $task)
            <div><a href="{{ route('tasks.show', ['id' => $task -> id])}}" > {{ $task -> title}}</a></div>
        @empty
            <div>sem tasks</div>
        @endforelse

</div>
