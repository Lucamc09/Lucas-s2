<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <a href="index.php?action=create">Criar nova Tarefas</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>tarefa</th>
                <th>Prazo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $tarefa): ?>
                <tr>
                    <td><?php echo htmlspecialchars($tarefa['id'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($tarefa['tarefa'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($tarefa['prazo'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <a href="index.php?action=read&id=<?php echo $tarefa['id']; ?>">Ver</a>
                        <a href="index.php?action=update&id=<?php echo $tarefa['id']; ?>">Editar</a>
                        <a href="index.php?action=delete&id=<?php echo $tarefa['id']; ?>">Apagar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>