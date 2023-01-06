<?php

$value = array((int) $_POST["value_1"], (int) $_POST["value_2"], (int) $_POST["value_3"]);
sort($value);
echo "Ordem crescente: " . implode(", ", $value) . "\n";
