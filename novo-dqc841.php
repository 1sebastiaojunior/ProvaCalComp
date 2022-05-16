<h1>Novo DQC841</h1>
<?php
require 'config.php';
$sql = "SELECT FAT_PART_NO, ID FROM DQC84;";
$res = mysqli_query($conn, $sql);
?>
<form action="?page-dqc841=salvar-dqc841" method="POST">
    <input type="hidden" name="acao-dqc841" value="cadastrar-dqc841">
    <div class="mb-3">
        <label>FAT_PART_NO</label>
        <br>
        <select name="FAT_PART_NO_ID">
            <option value="selecione" selected>Selecione</option>
            <?php
                while($dados=mysqli_fetch_assoc($res)){
            ?>
            <option value="<?php echo $dados['ID'] ?>">
            <?php echo $dados['FAT_PART_NO'] ?>
            </option>
            <?php
                }
            ?>
        </select>
        </br>
        <label>PARTS_NO</label>
        <input type="text" name="PARTS_NO" class="form-control">
        <label>UNT_USG</label>
        <input type="text" name="UNT_USG" class="form-control">
        <label>DESCRIPTION</label>
        <input type="text" name="DESCRIPTION" class="form-control">
        <label>REF_DESIGNATOR</label>
        <input type="text" name="REF_DESIGNATOR" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-success">Enviar</button>
    </div>
</form>