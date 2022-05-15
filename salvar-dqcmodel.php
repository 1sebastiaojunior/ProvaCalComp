<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $MODEL = $_POST["MODEL"];

            $sql = "INSERT INTO DQCMODEL (MODEL) VALUES ('{$MODEL}')";
            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível realizar o cadastro');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        case 'editar':
             $MODEL = $_POST["MODEL"];

             $sql = "UPDATE DQCMODEL SET MODEL = '{$MODEL}'
             WHERE
             ID = ".$_REQUEST["ID"];

             $res = $conn->query($sql);
             
            if ($res==true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM DQCMODEL WHERE ID=".$_REQUEST["ID"];
            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }