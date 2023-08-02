<div class="content-alerts">
    <div class="messages">
        @if (session()->has('success'))
        <div class="alert-success">
            {{session('success')}}
        </div>
        @endif

        @if (session()->has('error'))
        <div class="alert-danger">
            {{session('error')}}
        </div>
        @endif
    </div>

    @if (isset($errors) && $errors->any())
    <ul class="list-group">
        @foreach ($errors->all() as $error)
        <li class="list-group-item error-item">{{$error}}</li>
        @endforeach
    </ul>
    @endif
</div>