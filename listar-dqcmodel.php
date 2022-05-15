<h1>Listar DQCModel</h1>
<?php
	$sql = "SELECT * FROM DQCMODEL";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print "<table class='table table-hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>ID</th>";
			print "<th>Model</th>";
			print "<th>Ações</td>";
			print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->ID."</td>";
			print "<td>".$row->MODEL."</td>";
			print "<td> 
					<button onclick=\"location.href='?page=editar&ID=".$row->ID."';\" class='btn btn-primary btn-sm'>Editar</button>

					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&ID=".$row->ID."';}else{false}\" class='btn btn-danger btn-sm'>Excluir</button>
					</td>";
			print "</tr>";
		}
		print "</table>";
	} else {
		print "<p class='alert-danger'>Sem resultados</p>";
	}
?>