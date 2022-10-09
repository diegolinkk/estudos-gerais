<?php

include "./05-arquivo-para-importar.php"; //importa
require "./05-arquivo-para-importar.php"; //importa, se não existir sobe erro e para de executar
include_once  "./05-arquivo-para-importar.php"; //o mesmo de cima só que caso ja importou, não importa novamente
require_once "./05-arquivo-para-importar.php"; //o mesmo de cima só que caso ja importou, não importa novamente