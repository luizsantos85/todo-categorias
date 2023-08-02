@csrf
<label for="title">Nome da Tarefa:</label>
<input type="text" id="title" name="title" value="{{ $data->title ?? ''}}" required>

<label for="description">Descrição:</label>
<textarea id="description" name="description" rows="4" required>{{ $data->description ?? ''}}</textarea>

<label>
    <input type="checkbox" name="is_done" {{ isset($data) && $data->is_done == true ? 'checked' : ''}}>
    Concluída?
</label>
<div class="row">
    <div class="col-50">
        <label for="category">Categoria:</label>
        <select id="category" name="category_id" required>
            <option value="" selected disabled>Selecione...</option>
            @if (isset($categories) && $categories)
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="col-50">
        <label for="due_date">Data de realização:</label>
        <input type="date" id="due_date" name="due_date" value="{{ isset($data) && !empty($data->due_date) ? date('d/m/Y', strtotime($data->due_date)) : ''}}" required>
    </div>
</div>

{{-- <input type="hidden" name="user_id" value="{{$user_id}}"> --}}

<input type="submit" value="{{isset($buttonText) ? $buttonText : ''}}">