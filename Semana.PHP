<?php
        //algoritmo que aponta o dia da semana atual
        function dia_atual() {
            $hoje = getdate();
            switch($hoje["wday"]){
                case 0: return "Domingo"; break;
                case 1: return "Segundo"; break;
                case 2: return "Terça"; break;
                case 3: return "Quarta"; break;
                case 4: return "Quinta"; break;
                case 5: return "Sexta"; break;
                case 6: return "Sábado"; break;
            }
            
        }
        $dia = dia_atual();
        echo $dia;
       ?>
