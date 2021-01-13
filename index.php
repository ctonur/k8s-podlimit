<?php

  echo "CPU performans izleme icin yuk olusturan kod.";

  $x = 0.0001;
  for ($i = 0; $i <= 10000000; $i++) {
    $x += sqrt($x);
  }
  echo "OK!";
?>
