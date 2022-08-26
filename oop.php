<?php
class koneksi {
    function getkoneksi(){
        return new pdo("mysql=local:host;dbname=dbjnm",'root','');
    }
} 