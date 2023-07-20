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
            <img src="{{asset('assets/images/logo.png')}}" alt="logo image">
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
                        <div class="date_graph_header">
                            20/07/2023
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
                            <option value="">Selecione...</option>
                            <option value="">Todas as tarefas</option>
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
            </main>
        </div>
    </div>

</body>
</html>