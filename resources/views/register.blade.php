<x-layout titlePage="Registrar">

    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary">
            Login
        </a>
    </x-slot:btn>

    <section class="form-container">
        <h2>Cadastro de usuário</h2>

        <x-alerts />

        <form action="{{route('register.store')}}" method="post">

            <x-auth-form btnText="Registrar"/>

        </form>
    </section>


</x-layout>