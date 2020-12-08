<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
        table,tr,td{
            border: 1px, solid, black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h2>Associative Array </h2>
    <?php
        
            $mobil['Merk'] = 'Toyota';
            $mobil['Type'] = 'Fortuner';
            $mobil['Year'] = 2018;
        
        echo'<table>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>';
        foreach ($mobil as $key => $value){
            echo'<tr>
                    <td>'. $key.'</td>
                    <td>'. $value.'</td>
                </tr>';
        }
        echo '</table>';
    ?>
</body>
</html>