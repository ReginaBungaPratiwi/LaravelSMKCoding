<?php
$judul = "Ini Adalah Judul Dari Class Component"; 
?>
<x-halaman-layout :title="$judul">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Nisi maiores error id totam quis nobis ea sapiente facere a ad.</p>

    <x-slot name="tanggal">17 Agustus 2045</x-slot>
    <x-slot name="penulis">Joko</x-slot>
</x-halaman-layout>
