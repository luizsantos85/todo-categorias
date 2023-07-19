<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/layout.css">
    <title>Todo APP</title>
</head>
<body>

    <div class="container">
        <div class="sidebar">
            <div class="logo"></div>
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar tarefa
                </a>

            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do dia</h2>
                        <hr class="line_graph_header"/>
                        Data
                    </div>

                    <div class="subtitle_graph_header">
                        Tarefas:
                        <b>3/7</b>
                    </div>

                    <div class="graph_body"></div>

                    <div class="graph_footer">
                        <p>Restam 4 tarefas para serem feitas.</p>
                    </div>
                </section>

                <section class="list">
                    <div class="list_header">
                        <select name="" id="" class="list_header_select">
                            <option value="">Selecione...</option>
                            <option value="">Todas as tarefas</option>
                        </select>
                    </div>
                    <div class="task_list">
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
                                Editar - Excluir
                            </div>
                        </div>
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
                                Editar - Excluir
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</body>
</html>