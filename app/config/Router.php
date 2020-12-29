<?php

$this->get('/', function () {
    echo 'Home!!! :D';
});

$this->get('/home', function () {
    echo 'Estou na Home!!! :D';
});

$this->get('/about/teste', function () {
    echo 'Estou no Teste do About!!! :D';
});