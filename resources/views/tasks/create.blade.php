<x-layout titlePage="Criar Tarefa">

    <section class="form-container">
        <h2>Cadastrar Tarefa</h2>
        <form>
            <label for="title">Nome da Tarefa:</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Descrição:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label>
                <input type="checkbox" name="is_done">
                Concluída?
            </label>
            <div class="row">
                <div class="col-50">
                    <label for="category">Categoria:</label>
                    <select id="category" name="category" required>
                        <option value="" selected disabled>Selecione...</option>
                        <option value="baixa">Baixa</option>
                        <option value="media">Média</option>
                        <option value="alta">Alta</option>
                    </select>
                </div>
                <div class="col-50">
                    <label for="due_date">Data de realização:</label>
                    <input type="date" id="due_date" name="due_date" required>
                </div>
            </div>

            <input type="submit" value="Salvar">
        </form>
    </section>

</x-layout>