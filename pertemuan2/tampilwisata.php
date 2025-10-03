<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/pertemuan2/getwisata.php");
$data = json_decode($send, TRUE);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Wisata</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Daftar Tarif Landmark</h2>

<table>
    <tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
    </tr>
    <?php foreach($data as $row): ?>
    <tr>
        <td><?php echo $row["kota"]; ?></td>
        <td><?php echo $row["landmark"]; ?></td>
        <td><?php echo $row["tarif"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>