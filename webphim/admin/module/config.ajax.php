<?php
ob_start();
session_start();

// Thư mục gốc (root) của website.
$PATH = '/Thegioiphim';

// Thông tin về Database.
$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'thegioiphim';

set_include_path($_SERVER['DOCUMENT_ROOT'].$PATH.'/');
chdir($_SERVER['DOCUMENT_ROOT'].$PATH.'/');
?>
