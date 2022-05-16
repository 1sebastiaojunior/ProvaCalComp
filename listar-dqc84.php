<h1>Listar DQC84</h1>

<a href="gerar_planilha84.php"><button type='button' class='btn btn-sm btn-success mb-3'>GERAR PLANILHA</button></a>

<?php
	$sql = "SELECT * FROM DQC84 A INNER JOIN DQCMODEL B ON A.MODEL_ID = B.ID";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print "<table class='table table-hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>FAT_PART_NO</th>";
            print "<th>Model_ID</th>";
            print "<th>TOTAL_LOCATION</th>";
            print "<th>UPDATE_DT</th>";
            print "<th>CREATE_DT</th>";
			print "<th>Ações</td>";
			print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->FAT_PART_NO."</td>";
            print "<td>".$row->MODEL."</td>";
            print "<td>".$row->TOTAL_LOCATION."</td>";
            print "<td>".$row->UPDATE_DT."</td>";
            print "<td>".$row->CREATE_DT."</td>";
			print "<td> 
					<button onclick=\"location.href='?page-dqc84=editar-dqc84&ID=".$row->ID."';\" 
                    class='btn btn-primary btn-sm'>Editar</button>

					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page-dqc84=salvar-dqc84&acao-dqc84=excluir-dqc84&ID=".$row->ID."';}else{false}\" 
                    class='btn btn-danger btn-sm'>Excluir</button>
					</td>";
			print "</tr>";
		}
		print "</table>";
	} else {
		print "<p class='alert-danger'>Sem resultados</p>";
	}
?>