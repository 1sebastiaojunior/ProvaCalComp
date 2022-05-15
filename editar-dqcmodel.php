<h1>Editar DQCModel</h1>
<?php
    $sql = "SELECT * FROM DQCMODEL WHERE ID=".$_REQUEST["ID"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="ID" value="<?php print $row->ID; ?>">
    <div class="mb-3">
        <label>Model</label>
        <input type="text" name="MODEL" value="<?php print $row->MODEL; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-success">Enviar</button>
    </div>
</form>