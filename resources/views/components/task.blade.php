<div class="task">
    <div class="task_title">
        <input type="checkbox" name="is_done" {{ $data && $data['is_done'] == true ? 'checked' : ''}}/>
        <span> {{ $data['title'] ?? ''}} </span>
    </div>
    <div class="task_color">
        <div class="priority_color"></div>
        <span> {{$data['category']->title ?? '' }} </span>
    </div>
    <div class="task_buttons">
        <a href="{{route('task.edit', ['id' => $data['id']])}}">
            <img src="{{asset('assets/images/icon-edit.png')}}" alt="icon edit">
        </a>
        <a href="{{route('task.delete', ['id' => $data['id']])}}">
            <img src="{{asset('assets/images/icon-delete.png')}}" alt="icon edit">
        </a>
    </div>
</div>