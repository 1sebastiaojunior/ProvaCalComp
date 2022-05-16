<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PLANILHA DQC841</title>
</head>
<body>
    <?php
        $arquivo = 'DQC841.xls';

        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr">';
        $html .= '</tr">';

        $html .= '<tr">';
        $html .= '<td><b>FAT_PART_NO</b></td>';
        $html .= '<td><b>PARTS_NO</b></td>';
        $html .= '<td><b>UNT_USG</b></td>';
        $html .= '<td><b>DESCRIPTION</b></td>';
        $html .= '<td><b>REF_DESIGNATOR</b></td>';
        $html .= '<td><b>UPDATE_DT</b></td>';
        $html .= '<td><b>CREATE_DT</b></td>';
        $html .= '</tr">';

        $resdqc841 = "SELECT * FROM DQC841 A INNER JOIN DQC84 B ON A.FAT_PART_NO_ID = B.ID";
        $res_dqc841 = mysqli_query($conn, $resdqc841);

        while($row_dqc841 = mysqli_fetch_assoc($res_dqc841)){
            $html .= '<tr>';
            $html .= '<td>'.$row_dqc841["FAT_PART_NO"].'</td>';
            $html .= '<td>'.$row_dqc841["PARTS_NO"].'</td>';
            $html .= '<td>'.$row_dqc841["UNT_USG"].'</td>';
            $html .= '<td>'.$row_dqc841["DESCRIPTION"].'</td>';
            $html .= '<td>'.$row_dqc841["REF_DESIGNATOR"].'</td>';
            $html .= '<td>'.$row_dqc841["UPDATE_DT"].'</td>';
            $html .= '<td>'.$row_dqc841["CREATE_DT"].'</td>';
            $html .= '</tr>';
        }

        header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header ("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
        header ("Cacche-Control: no-cache, must-revalidate");
        header ("Pragma: no-cache");
        header ("Content-type: application/x-msexcel");
        header ("Content-Disposition: attachment; filename=\"{$arquivo}\"");
        header ("Content-Description: PHP Generated Data");
        echo $html;
        exit;
    ?>
</body>
</html>