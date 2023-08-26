<div class="task">
    <div class="task_title">
        <input type="checkbox" name="is_done" {{ $data && $data['is_done'] == true ? 'checked' : ''}} onchange="updateStatusTask(this)" data-id="{{$data->id}}"/>
        <span> {{ $data['title'] ?? ''}} </span>
    </div>
    <div class="task_color">
        <div class="priority_color" style="background: {{$data['category']->color}};"></div>
        <span> {{$data['category']->title ?? '' }} </span>
    </div>
    <div class="task_buttons">
        <a href="{{route('task.edit', ['id' => $data['id']])}}">
            <img src="{{asset('assets/images/icon-edit.png')}}" alt="icon edit">
        </a>
        <a href="{{route('task.delete', ['id' => $data['id']])}}" onclick="return confirm('Deseja realmente excluir a tarefa?');">
            <img src="{{asset('assets/images/icon-delete.png')}}" alt="icon delete">
        </a>
    </div>
</div>

