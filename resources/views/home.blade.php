<x-layout titlePage="Home">

    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar tarefa
        </a>

        <a href="{{route('category.create')}}" class="btn btn-primary">
            Criar Categoria
        </a>

        <a href="{{route('logout')}}" class="btn btn-primary">
            Sair
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
            <x-alerts />
            @foreach ($tasks as $task)
            <x-task :data=$task />
            @endforeach

        </div>
    </section>
</x-layout>


<script>
    async function updateStatusTask(e){
        let isDone = e.checked;
        // let id = e.getAttribute('data-id');
        let taskId = e.dataset.id;
        const url = "/task/status_action/" + taskId;

        let rawResult = await fetch(url, {
            method: "put",
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
                },
            body: JSON.stringify({
                _token: '{{ csrf_token()}}',
                id: taskId,
                is_done: isDone
            })
        });

        let result = await rawResult.json();

        if(result.success){
            const successAlert = document.createElement('div');
            successAlert.classList.add('alert-success');
            successAlert.textContent = 'Tarefa editada com sucesso.'

            const contentAlerts = document.querySelector('.content-alerts .messages');
            contentAlerts.appendChild(successAlert);

            // Remova o alerta após um tempo
            setTimeout(() => {
                contentAlerts.removeChild(successAlert);
            }, 5000);
        }else{
            e.checked != e.checked;
        }
    }
</script>