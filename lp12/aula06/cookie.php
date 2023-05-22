<?php 

if(!isset($_COOKIE['logged_user']))
    echo 'Cookie não encontrado...';
else print_r($_COOKIE);