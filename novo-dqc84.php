<h1>Novo DQC84</h1>
<?php
require 'config.php';
$sql = "SELECT MODEL, ID FROM DQCMODEL;";
$res = mysqli_query($conn, $sql);
?>
<form action="?page-dqc84=salvar-dqc84" method="POST">
    <input type="hidden" name="acao-dqc84" value="cadastrar-dqc84">
    <div class="mb-3">
        <label>MODEL</label>
        <select name="MODEL_ID">
            <option value="selecione" selected>Selecione</option>
            <?php
                while($dados=mysqli_fetch_assoc($res)){
            ?>
            <option value="<?php echo $dados['ID'] ?>">
            <?php echo $dados['MODEL'] ?>
            </option>
            <?php
                }
            ?>
        </select>
        </br>
        <label>FAT_PART_NO</label>
        <input type="text" name="FAT_PART_NO" class="form-control">
        <label>TOTAL_LOCATION</label>
        <input type="text" name="TOTAL_LOCATION" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-success">Enviar</button>
    </div>
</form>