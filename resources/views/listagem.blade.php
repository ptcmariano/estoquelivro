<html>
<body>
    <h1>Listagem	de	produtos</h1>
    <table border=1>
        <?php	foreach	($produtos as $p):	?>
        <tr>
            <td><?=	$p->nome	?></td>
            <td><?=	$p->valor	?></td>
            <td><?=	$p->descricao	?></td>
            <td><?=	$p->quantidade	?></td>
        </tr>
        <?php	endforeach	?>
    </table>
</body>
