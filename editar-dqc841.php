<h1>Editar DQC841</h1>
<?php
    $sql = "SELECT * FROM DQC841 A INNER JOIN DQC84 B ON A.FAT_PART_NO_ID = B.ID";
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page-dqc841=salvar-dqc841" method="POST">
    <input type="hidden" name="acao-dqc841" value="editar-dqc841">
    <input type="hidden" name="ID" value="<?php print $row->ID; ?>">
    <div class="mb-3">
        <label>FAT_PART_NO</label>
        <input type="text" name="FAT_PART_NO" readonly value="<?php print $row->FAT_PART_NO; ?>" class="form-control">
        <label>PARTS_NO</label>
        <input type="text" name="PARTS_NO" value="<?php print $row->PARTS_NO; ?>" class="form-control">
        <label>UNT_USG</label>
        <input type="text" name="UNT_USG" value="<?php print $row->UNT_USG; ?>" class="form-control">
        <label>DESCRIPTION</label>
        <input type="text" name="DESCRIPTION" value="<?php print $row->DESCRIPTION; ?>" class="form-control">
        <label>REF_DESIGNATOR</label>
        <input type="text" name="REF_DESIGNATOR" value="<?php print $row->REF_DESIGNATOR; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-success">Enviar</button>
    </div>
</form>