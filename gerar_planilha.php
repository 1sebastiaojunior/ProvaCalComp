<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PLANILHA</title>
</head>
<body>
    <?php
        $arquivo = 'DQCMODEL.xls';

        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr">';
        $html .= '</tr">';

        $html .= '<tr">';
        $html .= '<td><b>MODEL</b></td>';
        $html .= '</tr">';

        $resdqcmodel = "SELECT * FROM DQCMODEL";
        $res_dqcmodel = mysqli_query($conn, $resdqcmodel);

        while($row_dqcmodel = mysqli_fetch_assoc($res_dqcmodel)){
            $html .= '<tr>';
            $html .= '<td>'.$row_dqcmodel["MODEL"].'</td>';
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