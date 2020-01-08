<?php
$a = "Ayo";
$b = "Belajar";
$c = "Bersama";
$d = "Niomic";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    <title>Tugas5_2 PHP</title>
</head>

<body>
    <h1>Operator String</h1>
    <table>
        <thead>
            <tr>
                <td>Input 1</td>
                <td>Input 2</td>
                <td>Hasil</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?= $a; ?>
                </td>
                <td>
                    <?= $b; ?>
                </td>
                <td>
                    <?= $a . " " . $b; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $c; ?>
                </td>
                <td>
                    <?= $d; ?>
                </td>
                <td>
                    <?= $c . " " . $d; ?>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <p>Gabungan : <?= $a . " " . $b . " " . $c . " " . $d; ?> :)</p>
</body>

</html>