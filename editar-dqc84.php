<h1>Editar DQC84</h1>
<?php
    $sql = "SELECT * FROM DQC84 WHERE ID=".$_REQUEST["ID"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page-dqc84=salvar-dqc84" method="POST">
    <input type="hidden" name="acao-dqc84" value="editar-dqc84">
    <input type="hidden" name="ID" value="<?php print $row->ID; ?>">
    <div class="mb-3">
        <label>Model_ID</label>
        <input type="text" name="MODEL" readonly value="<?php print $row->MODEL_ID; ?>" class="form-control">
        <label>FAT_PART_NO</label>
        <input type="text" name="FAT_PART_NO" value="<?php print $row->FAT_PART_NO; ?>" class="form-control">
        <label>TOTAL_LOCATION</label>
        <input type="text" name="TOTAL_LOCATION" value="<?php print $row->TOTAL_LOCATION; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-success">Enviar</button>
    </div>
</form>