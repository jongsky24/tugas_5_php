<?php
$a = true;
$b = false;
$food = [
    [
        "ac" => "false",
        "dc" => "false",
        "xc" => $b && $b,
        "cc" => $b || $b
    ],
    [
        "ac" => "false",
        "dc" => "true",
        "xc" => $b && $a,
        "cc" => $b || $a
    ],
    [
        "ac" => "true",
        "dc" => "false",
        "xc" => $a && $b,
        "cc" => $a || $b
    ],
    [
        "ac" => "true",
        "dc" => "true",
        "xc" => $a && $a,
        "cc" => $a || $a
    ]
];
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
    <title>Tugas5_1 PHP</title>
</head>

<body>
    <p>Table Logika 1111</p>
    <table style="width: 30%;">
        <thead>
            <tr>
                <td>Input true</td>
                <td>Input 2</td>
                <td>AND</td>
                <td>OR</td>
            </tr>
        </thead>
        <tbody>


            <?php $i = 1; ?>
            <?php foreach ($food as $f) : ?>
                <tr>

                    <td>
                        <?= $f["ac"]; ?>
                    </td>
                    <td>
                        <?= $f["dc"]; ?>
                    </td>
                    <td>
                        <?php printf("%b", $f["xc"]); ?>
                    </td>
                    <td>
                        <?php printf("%b", $f["cc"]); ?>
                    </td>
                </tr>

                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>