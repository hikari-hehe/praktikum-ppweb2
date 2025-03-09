<?php
if (!isset($_POST['nama'])){
    echo '<script>alert("Anda harus mengisi form terlebih dahulu!")</script>
    <meta http-equiv="refresh" content="0; url=form_nilai.php">';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Nilai Mahasiswa</h1>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td><?= $_POST['nama'] ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?= $_POST['nim'] ?></td>
            </tr>
            <tr>
                <th>Rombel</th>
                <td><?= $_POST['rombel'] ?></td>
            </tr>
            <tr>
                <th>Mata Kuliah</th>
                <td><?= $_POST['matkul'] ?></td>
            </tr>
            <tr>
                <th>Nilai Tugas</th>
                <td><?= $_POST['tugas'] ?></td>
            </tr>
            <tr>
                <th>UTS</th>
                <td><?= $_POST['uts'] ?></td>
            </tr>
            <tr>
                <th>UAS</th>
                <td><?= $_POST['uas'] ?></td>
            </tr>
            <tr>
                <th>Predikat</th>
                <td>
                    <?php
                    $tugas = $_POST['tugas'] * (35/100);
                    $uts = $_POST['uts'] * (30/100);
                    $uas = $_POST['uas'] * (35/100);
                    $total = $tugas + $uts + $uas;

                    if ($total <= 35){
                        $pred = "E";
                        echo "E";
                    } elseif ($total <= 55){
                        $pred = "D";
                        echo "D";
                    } elseif ($total <= 69){
                        $pred = "C";
                        echo "C";
                    } elseif ($total <= 84){
                        $pred = "B";
                        echo "B";
                    } elseif ($total <= 100){
                        $pred = "A";
                        echo "A";
                    } else {
                        $pred = "tidak diketahui.";
                        echo "tidak diketahui.";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>
                    <?php
                    switch ($pred) {
                        case 'A':
                            echo "sangat baik";
                            break;
                        case 'B':
                            echo "baik";
                            break;
                        case 'C':
                            echo "cukup baik";
                            break;
                        case 'D':
                            echo "kurang baik";
                            break;
                        case 'E':
                            echo "buruk";
                            break;
                        default:
                            echo "tidak diketahui";
                            break;
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
