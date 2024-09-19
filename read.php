<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #0073e6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #0073e6;
            text-align: left;
        }

        table th {
            background-color: #0073e6;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        @media (max-width: 600px) {
            table, th, td {
                display: block;
                width: 100%;
            }
            table th {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            table td {
                border: none;
                position: relative;
                padding-left: 50%;
            }
            table td:before {
                position: absolute;
                top: 0;
                left: 0;
                width: 50%;
                padding-right: 10px;
                white-space: nowrap;
            }
            table td:nth-of-type(1):before { content: "Name"; }
            table td:nth-of-type(2):before { content: "Email"; }
            table td:nth-of-type(3):before { content: "Memo"; }
        }
    </style>
</head>
<body>

<h1>Survey Data</h1>

<?php
// データ読み込み
$file = fopen("data.csv", "r");
if ($file) {
    echo '<table>';
    echo '<tr><th>Name</th><th>Email</th><th>Memo</th></tr>';
    
    // データを1行ずつ読み込んで表示
    while (($line = fgetcsv($file)) !== false) {
        echo '<tr>';
        foreach ($line as $cell) {
            echo '<td>' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr>';
    }
    
    echo '</table>';
    fclose($file);
} else {
    echo "Error: Unable to read file.";
}
?>

</body>
</html>
