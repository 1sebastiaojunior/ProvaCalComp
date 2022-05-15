<?php
    switch ($_REQUEST["acao-dqc84"]) {
        case 'cadastrar-dqc84':

            $MODEL_ID = $_POST["MODEL_ID"];
            $FAT_PART_NO = $_POST["FAT_PART_NO"];
            $TOTAL_LOCATION = $_POST["TOTAL_LOCATION"];

            $sql = "INSERT INTO DQC84 (MODEL_ID, FAT_PART_NO, TOTAL_LOCATION) 
            VALUES ('{$MODEL_ID}', '{$FAT_PART_NO}', '{$TOTAL_LOCATION}')";
            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Cadastrado com sucesso da DQC84');</script>";
                print "<script>location.href='?page-dqc84=listar-dqc84';</script>";
            } else {
                print "<script>alert('Não foi possível realizar o cadastro da DQC84');</script>";
                print "<script>location.href='?page-dqc84=listar-dqc84';</script>";
            }

            break;
        case 'editar-dqc84':
            $FAT_PART_NO = $_POST["FAT_PART_NO"];
            $TOTAL_LOCATION = $_POST["TOTAL_LOCATION"];

             $sql = "UPDATE DQC84 SET FAT_PART_NO = '{$FAT_PART_NO}', TOTAL_LOCATION = '{$TOTAL_LOCATION}'
             WHERE
             ID = ".$_REQUEST["ID"];

             $res = $conn->query($sql);
             
            if ($res==true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page-dqc84=listar-dqc84';</script>";
            } else {
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page-dqc84=listar-dqc84';</script>";
            }
            break;
        case 'excluir-dqc84':
            $sql = "DELETE FROM DQC84 WHERE ID=".$_REQUEST["ID"];
            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page-dqc84=listar-dqc84';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page-dqc84=listar-dqc84';</script>";
            }

            break;
    }