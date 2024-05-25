<?php
session_start();

if (!isset($_SESSION["loggedin_murid"]) || $_SESSION["loggedin_murid"] !== true) {
    header("location: ../../login/murid.php");
    exit;
}

require_once "../../config/connect.php";
require "../../vendor/autoload.php";

$param_nis = $_SESSION["nis"];
if (isset($_GET['kelas']) && $_GET['kelas'] != '') {
    $kelas = $_GET['kelas'];
    $list = $conn->query("SELECT tbnilai.*, tbmurid.*, tbmapel.*, tbguru.nama_guru FROM tbnilai JOIN tbmurid ON tbnilai.nis=tbmurid.nis
    JOIN tbmapel ON tbnilai.kode=tbmapel.kode JOIN tbguru ON tbmapel.nig=tbguru.nig WHERE tbmurid.nis = $param_nis AND tbmapel.kelas = $kelas");
}

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$logo = file_get_contents("../../assets/logo.png");
$logobase64 = base64_encode($logo);
$logoURL = 'data:image;base64,'.$logobase64;
$nama_murid = $_SESSION["nama"];
$nis_murid = $_SESSION["nis"];

$html = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    img {
        display: block;
        margin: auto;
    }
    </style>
</head>

<body>
    <div style="display: flex; justify-content: center;">
        <div style="text-align: center;">
            <img src=' . $logoURL . ' width="80" height="80" />
            <h2>Raport SMK Arimbi</h2>
            <p>Sistem Penilaian Raport Pada SMK Arimbi</p>
        </div>
    </div>
    <div>
        <p>Nama : '.$nama_murid. '</p>
        <p>NIS : '.$nis_murid.'</p>
        <p>Kelas : '. $_GET['kelas'].'</p>
    </div>
    <table>
        <tr>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
        </tr>';
        foreach ($list as $row) {
            $ulangan = $row["nilai_ulangan"];
            $uts = $row["nilai_uts"];
            $uas = $row["nilai_uas"];
            $result = ($ulangan + $uts + $uas) / 3;
            if ($result >= 85) {
                $raport = 'A';
            } else if ($result >= 75) {
                $raport = 'B';
            } else if ($result >= 65) {
                $raport = 'C';
            } else if ($result >= 45) {
                $raport = 'D';
            } else {
                $raport = 'E';
            }
            $html .= '<tr>
                <td>'.$row["mata_pelajaran"].'</td>
                <td>'.$raport.'</td>
            </tr>';
        }
    $html .= '</table></body></html>';

// $file = file_get_contents("cetak.php");
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("raport.pdf", array("Attachment" => 0));