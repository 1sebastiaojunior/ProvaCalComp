<h1>Listar DQC841</h1>

<a href="gerar_planilha841.php"><button type='button' class='btn btn-sm btn-success mb-3'>GERAR PLANILHA</button></a>

<?php
	$sql = "SELECT * FROM DQC841 A INNER JOIN DQC84 B ON A.FAT_PART_NO_ID = B.ID";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print "<table class='table table-hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>FAT_PART_NO</th>";
            print "<th>PARTS_NO</th>";
            print "<th>UNT_USG</th>";
            print "<th>DESCRIPTION</th>";
            print "<th>REF_DESIGNATOR</th>";
            print "<th>UPDATE_DT</th>";
            print "<th>CREATE_DT</th>";
			print "<th>Ações</td>";
			print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->FAT_PART_NO."</td>";
            print "<td>".$row->PARTS_NO."</td>";
            print "<td>".$row->UNT_USG."</td>";
            print "<td>".$row->DESCRIPTION."</td>";
            print "<td>".$row->REF_DESIGNATOR."</td>";
            print "<td>".$row->UPDATE_DT."</td>";
            print "<td>".$row->CREATE_DT."</td>";
			print "<td> 
					<button onclick=\"location.href='?page-dqc841=editar-dqc841&ID=".$row->ID."';\" 
                    class='btn btn-primary btn-sm'>Editar</button>

					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page-dqc841=salvar-dqc841&acao-dqc84=excluir-dqc841&ID=".$row->ID."';}else{false}\" 
                    class='btn btn-danger btn-sm'>Excluir</button>
					</td>";
			print "</tr>";
		}
		print "</table>";
	} else {
		print "<p class='alert-danger'>Sem resultados</p>";
	}
?>