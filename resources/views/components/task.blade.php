<div class="task">
    <div class="task_title">
        <input type="checkbox" name="done" {{ $data && $data['done'] == true ? 'checked' : ''}}/>
        <span> {{ $data['title'] ?? ''}} </span>
    </div>
    <div class="task_color">
        <div class="priority_color"></div>
        <span> {{$data['category'] ?? '' }} </span>
    </div>
    <div class="task_buttons">
        <a href="#{{$data['id']}}">
            <img src="{{asset('assets/images/icon-edit.png')}}" alt="icon edit">
        </a>
        <a href="#{{$data['id']}}">
            <img src="{{asset('assets/images/icon-delete.png')}}" alt="icon edit">
        </a>

    </div>
</div>