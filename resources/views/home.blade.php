<x-layout>

    <x-slot:btn>
        <a href="#" class="btn btn-primary">
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
            @for ($i = 0; $i < 3; $i++)
            <div class="task">
                <div class="task_title">
                    <input type="checkbox" name="" id="" />
                    <span>Título da tarefa </span>
                </div>
                <div class="task_color">
                    <div class="priority_color"></div>
                    <span>Prioridade </span>
                </div>
                <div class="task_buttons">
                    <a href="#">
                        <img src="{{asset('assets/images/icon-edit.png')}}" alt="icon edit">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/images/icon-delete.png')}}" alt="icon edit">
                    </a>

                </div>
                </div>
        @endfor
        </div>
    </section>
</x-layout>