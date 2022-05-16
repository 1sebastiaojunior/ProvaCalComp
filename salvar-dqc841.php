<?php
    switch ($_REQUEST["acao-dqc841"]) {
        case 'cadastrar-dqc841':

            $FAT_PART_NO_ID = $_POST["FAT_PART_NO_ID"];
            $PARTS_NO = $_POST["PARTS_NO"];
            $UNT_USG = $_POST["UNT_USG"];
            $DESCRIPTION = $_POST["DESCRIPTION"];
            $REF_DESIGNATOR = $_POST["REF_DESIGNATOR"];

            $sql = "INSERT INTO DQC841 (FAT_PART_NO_ID, PARTS_NO, UNT_USG, `DESCRIPTION`, REF_DESIGNATOR) 
            VALUES ('{$FAT_PART_NO_ID}', '{$PARTS_NO}', '{$UNT_USG}', '{$DESCRIPTION}', '{$REF_DESIGNATOR}')";
            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Cadastrado com sucesso da DQC841');</script>";
                print "<script>location.href='?page-dqc841=listar-dqc841';</script>";
            } else {
                print "<script>alert('Não foi possível realizar o cadastro da DQC841');</script>";
                print "<script>location.href='?page-dqc841=listar-dqc841';</script>";
            }

            break;
        case 'editar-dqc841':
            $FAT_PART_NO_ID = $_POST["FAT_PART_NO_ID"];
            $PARTS_NO = $_POST["PARTS_NO"];
            $UNT_USG = $_POST["UNT_USG"];
            $DESCRIPTION = $_POST["DESCRIPTION"];
            $REF_DESIGNATOR = $_POST["REF_DESIGNATOR"];

             $sql = "UPDATE DQC841 SET FAT_PART_NO_ID = '{$FAT_PART_NO_ID}', PARTS_NO = '{$PARTS_NO}', UNT_USG = '{$UNT_USG}', DESCRIPTION = '{$DESCRIPTION}', REF_DESIGNATOR = '{$REF_DESIGNATOR}'
             WHERE
             ID = ".$_REQUEST["ID"];

             $res = $conn->query($sql);
             
            if ($res==true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page-dqc841=listar-dqc841';</script>";
            } else {
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page-dqc841=listar-dqc841';</script>";
            }
            break;
        case 'excluir-dqc841':
            $sql = "DELETE FROM DQC841 WHERE ID=".$_REQUEST["ID"];
            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page-dqc841=listar-dqc841';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page-dqc841=listar-dqc841';</script>";
            }

            break;
    }