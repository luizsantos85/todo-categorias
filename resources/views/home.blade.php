<x-layout titlePage="Home">

    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar tarefa
        </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <hr class="line_graph_header" />
            <div class="date_graph_header">
                <img src="{{asset('assets/images/icon-prev.png')}}" alt="">
                20/07/2023
                <img src="{{asset('assets/images/icon-next.png')}}" alt="">
            </div>
        </div>

        <div class="subtitle_graph_header">
            Tarefas:
            <b>3/7</b>
        </div>

        <div class="graph_body"></div>

        <div class="graph_footer">
            <img src="{{asset('assets/images/icon-info.png')}}" alt="icon info">
            <p>Restam 4 tarefas para serem feitas.</p>
        </div>
    </section>

    <section class="list">
        <div class="list_header">
            <select name="" id="" class="list_header_select">
                <option value="" selected>Todas as tarefas</option>
            </select>
        </div>
        <div class="task_list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach

            <x-alerts />
        </div>
    </section>
</x-layout>


{{-- @push('scripts')
<script></script>
@endpush --}}