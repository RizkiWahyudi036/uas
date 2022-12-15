<?php
if (!defined('INDEX')) die("");

$halaman = array(
    "member", "edit", "edit_proses", "hapus", "index", "tambah_proses", "tambah"
);
if (isset($_GET['hal']))
    $hal = $_GET['hal'];
else
    $hal = "member";

foreach ($halaman as $h) {
    if ($hal == $h) {
        include 'content/' . $h . '.php';
        break;
    }
}