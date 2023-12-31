<x-layout titlePage="Criar Tarefa">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section class="form-container">
        <h2>Cadastrar Tarefa</h2>

        <x-alerts />

        <form action="{{route('task.store')}}" method="post">
            <x-task-category-form buttonText="Criar tarefa" :categories=$categories></x-task-category-form>
        </form>
    </section>

</x-layout>