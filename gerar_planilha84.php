<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PLANILHA DQC84</title>
</head>
<body>
    <?php
        $arquivo = 'DQC84.xls';

        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr">';
        $html .= '</tr">';

        $html .= '<tr">';
        $html .= '<td><b>FAT_PART_NO</b></td>';
        $html .= '<td><b>MODEL</b></td>';
        $html .= '<td><b>TOTAL_LOCATION</b></td>';
        $html .= '<td><b>UPDATE_DT</b></td>';
        $html .= '<td><b>CREATE_DT</b></td>';
        $html .= '</tr">';

        $resdqc84 = "SELECT * FROM DQC84 A INNER JOIN DQCMODEL B ON A.MODEL_ID = B.ID";
        $res_dqc84 = mysqli_query($conn, $resdqc84);

        while($row_dqc84 = mysqli_fetch_assoc($res_dqc84)){
            $html .= '<tr>';
            $html .= '<td>'.$row_dqc84["FAT_PART_NO"].'</td>';
            $html .= '<td>'.$row_dqc84["MODEL"].'</td>';
            $html .= '<td>'.$row_dqc84["TOTAL_LOCATION"].'</td>';
            $html .= '<td>'.$row_dqc84["UPDATE_DT"].'</td>';
            $html .= '<td>'.$row_dqc84["CREATE_DT"].'</td>';
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