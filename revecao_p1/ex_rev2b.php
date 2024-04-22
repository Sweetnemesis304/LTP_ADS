<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Curso</title>
</head>
<body>
    <?php
    $array1 = ["Nome" => "Maria", "Curso" => "ADS", "Media"=> "7.0","Situação"=> ""];
    $array2 = ["Nome" => "João", "Curso" => "CD", "Media"=> "5.0","Situação"=> ""];
    $array3 = ["Nome" => "José", "Curso" => "CD", "Media"=> "8.0","Situação"=> ""];   
    $array4 = ["Nome" => "Pedro", "Curso" => "ADS", "Media"=> "1.5","Situação"=> ""]; 
    $array5 = ["Nome" => "Paulo", "Curso" => "ADS", "Media"=> "6.0","Situação"=> ""];  
    $array = [$array1 , $array2 , $array3 , $array4 ,$array5];


    foreach ($array as &$al){
        if($al["Media"] < 2.00){
            $al["Situação"] = "Reprovado"; 
        }
        elseif($al["Media"] >= 2.00 && $al["Media"] < 6.00){
            $al["Situação"] = "Exame Final";
        }
        elseif($al["Media"] >= 6.00 && $al["Media"] <= 10.00){
            $al["Situação"] = "Aprovado";
        }
        else{
            $al["Situação"] = "Erro";
        }
    }
    unset($al); 


    echo "<hr>"; 
    echo '<table border="1">';
    echo '<tr><th>Nome</th><th>Curso</th><th>Media</th><th>Situação</th></tr>';
    foreach($array as $al){
        echo "<tr>";
        echo "<td>".$al["Nome"]."</td>";
        echo "<td>".$al["Curso"]."</td>";
        echo "<td>".$al["Media"]."</td>";
        echo "<td>".$al["Situação"]."</td>";
        echo "</tr>";
    }
    echo '</table>';


    $countAprovado = 0;
    $countReprovado = 0;
    $countExameFinal = 0;
  $countAprovadocd = 0;
  $countReprovadocd = 0;
  $countExameFinalcd = 0;
    foreach($array as $al){
        if ($al["Curso"] == "ADS"){
            if($al["Situação"] == "Aprovado"){
                $countAprovado++;
            }
            elseif($al["Situação"] == "Reprovado"){
                $countReprovado++;
            }
            elseif($al["Situação"] == "Exame Final"){
                $countExameFinal++;
            }
        }
        else{
          if($al["Situação"] == "Aprovado"){
              $countAprovadocd++;
          }
          elseif($al["Situação"] == "Reprovado"){
              $countReprovadocd++;
          }
          elseif($al["Situação"] == "Exame Final"){
              $countExameFinalcd++;
          }
          
        }
    }
  
 echo "ADS <br>";
    echo "Aprovados: $countAprovado<br>";
    echo "Reprovados: $countReprovado<br>";
    echo "Exame Final: $countExameFinal<br>";

echo "CD <br>";
  echo "Aprovados: $countAprovadocd<br>";
  echo "Reprovados: $countReprovadocd<br>";
  echo "Exame Final: $countExameFinalcd<br>";
  
    ?>
</body>
</html>