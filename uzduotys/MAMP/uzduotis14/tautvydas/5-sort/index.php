<?php

  $algos = [380, 400, 200, 1000, 440, 350, 50];

  print_r($algos);

  // rikevimas
  for ($i=0; $i < count($algos); $i++) {
      for ($k=0; $k < count($algos)-1; $k++) {
          if ( $algos[$k]  < $algos[$k + 1]) {
              $temp = $algos[$k];           // 400
              $algos[$k] = $algos[$k + 1];  // vietoj 400 irasome 200
              $algos[$k + 1] = $temp;       // vietoj 200 irasome 400
          }
      }
  }
  print_r($algos);
