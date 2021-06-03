<!DOCTYPE html>
<html lang="en">
<Style>
    #fundo{
        height:auto;
        padding: 40px 0;
        color:#fff;
        font-size:20px;
        text-align:center;
        border-radius:4px;
        border:1px solid #234321;
        box-shadow: inset 0 2px 3px 0 rgba(255,255,255,.3), inset 0 -3px 6px 0 rgba(0,0,0,.2), 0 3px 2px 0 rgba(0,0,0,.2);
        background-image: linear-gradient(to bottom, #122c2f, #236021 130%);        text-align: justify;
            }
    h3{
        text-align: center;
    }
    .titulo{
        color: #0018ff;
        font-family: Arial, Helvetica, sans-serif;
        font-style: italic;
        text-align: center;
            }
    table{
        width: 70%;
        margin: auto;
        text-align: center;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body id="fundo">

<h1 class="titulo"><?=$titulo?></h1>

<h2 class="titulo"><?=$subtitulo?></h2>

<br/>
<table border="1">
<tr>
    <?php foreach($carros as $carro): ?>
    <td><?=$carro?></td>
    <?php endforeach; ?>
</tr>
<tr>
    <?php foreach($ano as $ano): ?>
    <td><?=$ano?></td>
    <?php endforeach; ?>
</tr>
<tr>
    <?php foreach($fabricante as $fabricante): ?>
    <td><?=$fabricante?></td>
    <?php endforeach; ?>
</tr>
</table>

<br/>
<br/>
<h3><?=$endereco?></h3>

<h3><?=$telefone?></h3>

</body>
</html>
