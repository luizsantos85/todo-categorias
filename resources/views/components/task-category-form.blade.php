@csrf
<label for="title">Nome da {{ isset($categories) && $categories ? 'Tarefa' : 'Categoria'}}:</label>
<input type="text" id="title" name="title" value="{{ $data->title ?? ''}}" required>

@if (isset($categories) && $categories)

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
                    <option value="{{$category->id}}"
                        {{isset($data) && $data->category_id === $category->id ? 'selected' : ''}}
                    >
                        {{$category->title}}
                    </option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="col-50">
        <label for="due_date">Data de realização:</label>
        <input type="datetime-local" id="due_date" name="due_date" value="{{ isset($data) && !empty($data->due_date) ? $data->due_date : ''}}" required>
    </div>
</div>

@else
<label for="color">Cor:</label>
    <input type="color" class="input-color" id="color"
        name="color" value="{{ $data->color ?? ''}}" required />

@endif

<input type="submit" value="{{isset($buttonText) ? $buttonText : ''}}">