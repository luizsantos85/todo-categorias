<x-layout titlePage="Login">

    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>

    <section class="form-container">
        <h2>Login de usuário</h2>

        <x-alerts />

        <form action="{{route('task.store')}}" method="post">

            <x-auth-form btnText="Logar" login="true"/>

        </form>
    </section>
</x-layout>