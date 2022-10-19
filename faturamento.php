
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registros de Faturamentos Diários</title>
</head>
<body>
<section>
    <pre>
        <?php
          /* $valores = array(
                'Semana 1'=> array  ('Dia 01' => 22174.1664,
                /*$dados*/           'Dia 02' => 24537.6698,
                                     /*data*/    /*user_data*/
                                     'Dia 03' => 26139.6134,
                                     'Dia 04' => 0.0,
                                     'Dia 05' => 0.0,
                                     'Dia 06' => 26742.6612,
                                     'Dia 07' => 0.0),
                'Semana 2'=> array  ('Dia 08' => 42889.2258,
                                     'Dia 09' => 46251.174,
                                     'Dia 10' => 11191.4722,
                                     'Dia 11' => 0.0,
                                     'Dia 12' => 0.0,
                                     'Dia 13' => 3847.4823,
                                     'Dia 14' => 373.7838),
                'Semana 3'=> array  ('Dia 15' => 2659.7563,
                                     'Dia 16' => 48924.2448,
                                     'Dia 17' => 18419.2614,
                                     'Dia 18' => 0.0,
                                     'Dia 19' => 0.0,
                                     'Dia 20' => 35240.1826,
                                     'Dia 21' => 43829.1667),
                'Semana 4'=> array  ('Dia 22' => 18235.6852,
                                     'Dia 23' => 4355.0662,
                                     'Dia 24' => 13327.1025,
                                     'Dia 25' => 0.0,
                                     'Dia 26' => 0.0,
                                     'Dia 27' => 25681.8318,
                                     'Dia 28' => 1718.1221),
                'Semana 5'=> array  ('Dia 29' => 13220.495,
                                     'Dia 30' => 8414.61)
           );
    
    
            $s1 = array_sum($valores['Semana 1']);
            $s2 = array_sum($valores['Semana 2']);
            $s3 = array_sum($valores['Semana 3']);
            $s4 = array_sum($valores['Semana 4']);
            $s5 = array_sum($valores['Semana 5']);
            $soma = $s1 + $s2 + $s3 + $s4 + $s5;
            $media = $soma / 30;
    
            var_export($valores);
            echo "</br>";
            echo "</br>Faturamento da primeira semana: R$ ".$s1;
            echo "</br>Faturamento da segunda semana: R$ ".$s2;
            echo "</br>Faturamento da terceira semana: R$ ".$s3;
            echo "</br>Faturamento da quarta semana: R$ ".$s4;
            echo "</br>Faturamento da quinta semana: R$ ".$s5;
            echo "</br></br>O faturamento mensal é de: R$ ".$soma;
            echo "</br>A média do faturamento mensal é de: R$ ".$media;
            echo "</br>";
    
            echo "</br>Os dias com faturamento acima da média foram: ";
            foreach($valores as $semana => $dados_array) {                    //$valores é o nome do vetor.
                foreach($dados_array as $dia => $valorDoDia) {
                     if ($valorDoDia > $media) {
                       echo"</br>$dia com valor: $valorDoDia";
                     }
                }
         }
            $maiorValor1 = max( 22174.1664,
                                24537.6698,
                                26139.6134,
                                0.0,
                                0.0,
                                26742.6612,
                                0.0);
    
            $maiorValor2 = max( 42889.2258,
                                46251.174,
                                11191.4722,
                                0.0,
                                0.0,
                                3847.4823,
                                373.7838);
    
            $maiorValor3 = max( 2659.7563,
                                48924.2448,
                                18419.2614,
                                0.0,
                                0.0,
                                35240.1826,
                                43829.1667);
    
            $maiorValor4 = max( 18235.6852,
                                4355.0662,
                                13327.1025,
                                0.0,
                                0.0,
                                25681.8318,
                                1718.1221);
    
            $maiorValor5 = max( 13220.495,
                                8414.61);
    
            echo "</br>";
    
            $maiorValor = max($valores);
            $menorValor = min($valores);
    
            //Encontrar o maior faturamento mensal
    
            if($maiorValor1 > $maiorValor2) {
                if($maiorValor1 > $maiorValor3) {
                    if($maiorValor1 > $maiorValor4) {
                        if($maiorValor1 > $maiorValor5) {
                            $maiorValor = $maiorValor1;
                            echo "</br>O maior faturamento mensal foi de: ".$maiorValor;
                        }
                    }
                }
            }
    
            if($maiorValor2 > $maiorValor1) {
                if($maiorValor2 > $maiorValor3) {
                    if($maiorValor2 > $maiorValor4) {
                        if($maiorValor2 > $maiorValor5) {
                            $maiorValor = $maiorValor2;
                            echo "</br>O maior faturamento mensal foi de: ".$maiorValor;
                        }
                    }
                }
            }
    
            if($maiorValor3 > $maiorValor1) {
                if($maiorValor3 > $maiorValor2) {
                    if($maiorValor3 > $maiorValor4) {
                        if($maiorValor3 > $maiorValor5) {
                            $maiorValor = $maiorValor3;
                            echo "</br>O maior faturamento mensal foi de: ".$maiorValor;
                        }
                    }
                }
            }
    
            if($maiorValor4 > $maiorValor1) {
                if($maiorValor4 > $maiorValor2) {
                    if($maiorValor4 > $maiorValor3) {
                        if($maiorValor4 > $maiorValor5) {
                            $maiorValor = $maiorValor4;
                            echo "</br>O maior faturamento mensal foi de: ".$maiorValor;
                        }
                    }
                }
            }
    
            if($maiorValor5 > $maiorValor1) {
                if($maiorValor5 > $maiorValor2) {
                    if($maiorValor5 > $maiorValor3) {
                        if($maiorValor5 > $maiorValor4) {
                            $maiorValor = $maiorValor5;
                            echo "</br>O maior faturamento mensal foi de: ".$maiorValor;
                        }
                    }
                }
            }
    
              // Verificando o menor valor dentro da matriz
    
            if($menorValor > 0) {
    
                $menor = min($menorValor);
                echo "</br>";
                echo "O menor faturamento mensal foi de: R$ ".$menor;
            }

         ?>
    </pre>
    <a href="index.html">Voltar</a>
</section>
<br>


</body>
</html>

