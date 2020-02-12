<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Barbearia IFSP 2020</title>
    <style>
        input{
            margin:2px;
        }
    </style>
    <body>
        <a hef="agenda.php">Agenda</a>
        <hr />
        <h1>Agendamento Barbearia IFSP 200</h1>
        <form method="post" action="recebe_agenda.php">
            <input type="text" name="nome" placeholder="Nome..." />
            <br/>
            <input type="email" name="email" placeholder="Email..." />
            <br/>
            <input type="text" name="telefone" placeholder="Telefone..." />
            <br/>
            <label>Data</label>
            <input type="date" name="data" />
            <br/>
            <input type="number" name="hora" step="1" min="07" max="17" placeholder="Hora..." />
            :
            <input type="number" name="minuto" step="15" min="00" max="45" placeholder="Minuto..." />
            <br/>
            <input type="submit" value="Agendar" />
    </body>
</html>