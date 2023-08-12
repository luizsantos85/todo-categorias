<x-layout titlePage="Editar Tarefa">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section class="form-container">
        <h2>Atualizar Tarefa</h2>

        <x-alerts />

        <form action="{{route('task.update', $task->id)}}" method="POST">
            @method('PUT')
            <x-task-category-form buttonText="Atualizar tarefa" :data=$category />
        </form>
    </section>
</x-layout>