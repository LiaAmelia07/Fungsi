<!DOCTYPE html>
<html" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1 Fungsi</title>
</head>
<body>
    <fieldset>
        <legend>Latihan 1 Nilai Default</legend>
        <form action ="" method="POST">
        <table>
            <tr>
                <td>Masukan Jari-Jari</td>
                <td>:</td> 
                <td><input type="number" name="jari" ></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="hitung" value="hitung"></td>
            </tr>

        <?php 
            if (isset($_POST['hitung'])){
                $jari = $_POST['jari'];

                function luas($jari, $phi = 3.14){
                    $luas = $phi * $jari * $jari;
                    return $luas;
                }
                function kelilinglingkaran($jari, $phi = 3.14){
                    $keliling = 2 * ($phi * $jari);
                    return $keliling;
                }
                echo "<tr>";
                echo "<td>Jari - Jari Lingkaran</td> <td>:</td> <td>$jari</td>" . "</tr>";

                echo "<tr>";
                echo "<td>Luas Lingkaran</td> <td>:</td> <td>" . luas($jari) . "</td>" . "</tr>";

                echo "<tr>";
                echo "<td>Keliling Lingkaran</td> <td>:</td> <td>" . kelilinglingkaran($jari). "</td>" . "</tr>";
            }
        ?>
            </form>
        </legend>
    </fieldset>
</body>
</html>