#!/bin/bash

# Script de inicialização do servidor embutido do php
# Caso você esteja ultilizando programas como Laragon ou XAMPP, ignorar este script

port=9090


echo "[*] Inicializando o servidor na porta " $port
php -S localhost:$port && firefox index.php
