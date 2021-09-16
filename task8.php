<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,td,th,tr{
        border: 1px solid black;

    }
    table,td{border-collapse: collapse;}

    </style>
</head>
<body>
    <table>
    <tr>
        <td>
            <h5>The array to declare</h5>
        </td>
        <td>
            <h5>Shapes to print</h5>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $arr=array(
                array(1,2,3,4),
                array("A","B","C","D","E","F")
                );
                for($i=4;$i>0;$i--)
                {
                    for($j=1;$j<5;$j++)
                    {
                        echo $arr[$i][$j];
                    }
                    echo "<br>";
                }
            ?>
        </td>
        <td><?php  
            $n = 4;
            for($i=4;$i>1;$i--){	
                for ($j=1; $j<$i; $j++){
                    echo "$j";
                }
                echo "<br>";
            }
            $num = 65; 
           // $alpha = range('A', 'Z');  
            for($i=0;$i<3;$i++){   
            for($j = 0;$j<=$i;$j++ ){  
                $ch = chr($num);
                    echo $ch." ";
                    $num = $num + 1; 
                }  
                echo "<br>";  
            }  
        ?></td>
    </tr>
    </table>
</body>
</html>