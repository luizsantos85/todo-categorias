<x-layout titlePage="Editar Tarefa">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section class="form-container">
        <h2>Editar Tarefa</h2>
        <form action="">
            <x-form buttonText="Editar tarefa" :data=$task />
        </form>
    </section>
</x-layout>