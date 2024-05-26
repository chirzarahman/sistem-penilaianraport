<?php
session_start();

if (!isset($_SESSION["loggedin_murid"]) || $_SESSION["loggedin_murid"] !== true) {
    header("location: ../../login/murid.php");
    exit;
}

require_once "../../config/connect.php";

$param_nis = $_SESSION["nis"];
if (isset($_GET['kelas']) && $_GET['kelas'] != '') {
    $kelas = $_GET['kelas'];
    $list = $conn->query("SELECT tbnilai.*, tbmurid.*, tbmapel.*, tbguru.nama_guru FROM tbnilai JOIN tbmurid ON tbnilai.nis=tbmurid.nis
    JOIN tbmapel ON tbnilai.kode=tbmapel.kode JOIN tbguru ON tbmapel.nig=tbguru.nig WHERE tbmurid.nis = $param_nis AND tbmapel.kelas = $kelas");
} else {
    $list = $conn->query("SELECT tbnilai.*, tbmurid.*, tbmapel.*, tbguru.nama_guru FROM tbnilai JOIN tbmurid ON tbnilai.nis=tbmurid.nis
    JOIN tbmapel ON tbnilai.kode=tbmapel.kode JOIN tbguru ON tbmapel.nig=tbguru.nig WHERE tbmurid.nis = $param_nis");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Murid - SMK Arimbi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../../assets/logo.png" />
</head>

<body>
    <main class="text-[#44566C]">
        <div class="flex-row lg:flex mt-10 mb-20 mx-4 lg:mx-20 gap-5">
            <div class="bg-white w-full lg:w-[40%] h-fit rounded-md drop-shadow-2xl mb-10 lg:mb-0">
                <div class="flex flex-col items-center justify-center pt-8">
                    <img class="w-40 bg-white rounded-3xl object-cover" alt src="../../assets/logo.png" />
                    <p class="text-[29px] mb-[14px] mt-2 text-center">
                        <?php echo htmlspecialchars($_SESSION["nama"]); ?>
                    </p>
                    <div class="bg-[#F0F0F6] py-2 px-4 rounded-full w-fit text-sm mb-4">
                        Murid SMK Arimbi
                    </div>
                </div>
                <div class="bg-[#F3F6F6] flex flex-col justify-center px-12 py-8 rounded-b-md">
                    <div class="mt-5">
                        <span class="capitalize font-semibold text-lg">
                            Deskripsi
                        </span>
                        <ul class="text-gray-700 text-sm">
                            <li class="flex border-b py-2">
                                <span class="font-bold w-32">NIS</span>
                                <span class="text-gray-700">:
                                    <?php echo htmlspecialchars($_SESSION["nis"]); ?></span>
                            </li>
                            <!-- <li class="flex border-b py-2">
                                <span class="font-bold w-32">Kelas</span>
                                <span class="text-gray-700">:
                                    6</span>
                            </li> -->
                        </ul>
                    </div>
                    <a href="../../logout.php"
                        class="bg-[#fd3030] rounded-xl text-white px-8 py-3 mt-10 w-full text-center hover:shadow-xl hover:shadow-[#fd30306a] transition hover:duration-500 cursor-pointer flex items-center justify-center gap-x-2">
                        <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                            <path clip-rule="evenodd"
                                d="M14.75 12C14.75 11.5858 14.4142 11.25 14 11.25H2C1.58579 11.25 1.25 11.5858 1.25 12C1.25 12.4142 1.58579 12.75 2 12.75H14C14.4142 12.75 14.75 12.4142 14.75 12Z"
                                fill="currentColor" fill-rule="evenodd" />
                            <path clip-rule="evenodd"
                                d="M6.03033 7.96967C5.73744 7.67678 5.26256 7.67678 4.96967 7.96967L1.46967 11.4697C1.17678 11.7626 1.17678 12.2374 1.46967 12.5303L4.96967 16.0303C5.26256 16.3232 5.73744 16.3232 6.03033 16.0303C6.32322 15.7374 6.32322 15.2626 6.03033 14.9697L3.06066 12L6.03033 9.03033C6.32322 8.73744 6.32322 8.26256 6.03033 7.96967Z"
                                fill="currentColor" fill-rule="evenodd" />
                            <path clip-rule="evenodd"
                                d="M14.5956 5.25C12.017 5.25 9.77484 6.73848 8.66955 8.9258C8.48274 9.29549 8.0316 9.44375 7.66191 9.25693C7.29221 9.07012 7.14396 8.61898 7.33077 8.24929C8.67788 5.58343 11.422 3.75 14.5956 3.75C19.1083 3.75 22.7502 7.45274 22.7502 12C22.7502 12.7598 22.6485 13.4967 22.4576 14.1972C22.3487 14.5968 21.9364 14.8325 21.5368 14.7236C21.1372 14.6147 20.9015 14.2025 21.0104 13.8028C21.1665 13.2298 21.2502 12.6254 21.2502 12C21.2502 8.26299 18.2618 5.25 14.5956 5.25ZM7.66191 14.7431C8.0316 14.5563 8.48274 14.7045 8.66955 15.0742C9.77484 17.2615 12.017 18.75 14.5956 18.75C16.0768 18.75 17.4437 18.26 18.5499 17.4296C18.8812 17.1809 19.3513 17.2479 19.6 17.5791C19.8486 17.9104 19.7817 18.3805 19.4504 18.6292C18.0947 19.6469 16.4141 20.25 14.5956 20.25C11.422 20.25 8.67788 18.4166 7.33077 15.7507C7.14396 15.381 7.29221 14.9299 7.66191 14.7431Z"
                                fill="currentColor" fill-rule="evenodd" />
                        </svg>
                        <span>Keluar</span>
                    </a>
                </div>
            </div>
            <div class="bg-white w-full lg:w-fit h-fit rounded-md shadow-2xl mb-10 lg:mb-0 lg:hidden">
                <h1 class="text-2xl font-semibold pt-5 pl-5">Menu</h1>
                <div class="flex flex-col justify-center px-12 py-6 gap-y-4">
                    <a href="index.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-blue-500 text-white">
                        <span class=" text-sm font-medium mt-1 capitalize">Raport</span>
                    </a>
                    <a href="profile.php" class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                    hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500 text-center">
                        <span class=" text-sm font-medium mt-1 capitalize">ganti password</span>
                    </a>
                </div>
            </div>
            <div class="bg-white w-full h-max rounded-md shadow-2xl py-7">
                <div class="relative w-max pb-3 ml-4 lg:mx-10">
                    <div class="absolute border-b-4 border-blue-500 bottom-0 left-0 w-14 rounded-full"></div>
                    <h2 class="font-semibold text-[2rem] uppercase">Dashboard</h2>
                </div>
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <div class="flex flex-col md:flex-row gap-y-3 md:gap-y-0 md:items-center md:justify-between">
                            <div>
                                <?php
                                if (isset($_GET['kelas']) && $_GET['kelas'] != '') {
                                    if ($list->rowCount() > 0) {
                                        $kelas = $_GET['kelas'];
                                        echo '<a href="export-pdf.php?kelas=' . $kelas . '"
                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm
                                px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700
                                focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto
                                sm:text-sm">
                                Export</a>';
                                    } else {
                                        echo 'Data Kosong';
                                    }
                                } else {
                                    echo 'Jika Export Pilih Kelas Terlebih dahulu';
                                }
                                ?>

                            </div>
                            <div class="flex gap-x-2">
                                <form action="" method="GET" class="flex items-center gap-x-2">
                                    <select required name="kelas"
                                        class="p-2 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none border-neutral-700 border">
                                        <option selected disabled>Pilih Kelas</option>
                                        <option value="1"
                                            <?= isset($_GET['kelas']) == true ? ($_GET['kelas'] == '1' ? 'selected' : '') : '' ?>>
                                            1
                                        </option>
                                        <option value="2"
                                            <?= isset($_GET['kelas']) == true ? ($_GET['kelas'] == '2' ? 'selected' : '') : '' ?>>
                                            2</option>
                                        <option value="3"
                                            <?= isset($_GET['kelas']) == true ? ($_GET['kelas'] == '3' ? 'selected' : '') : '' ?>>
                                            3</option>
                                    </select>
                                    <button
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm"
                                        type="submit">
                                        Filter
                                    </button>
                                    <a href="index.php"
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:w-auto sm:text-sm">
                                        Reset</a>
                                </form>
                            </div>
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Mata Pelajaran
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Guru Pengampu
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Hasil Raport
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list as $row) : ?> <tr class="hover:bg-gray-200">
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <?= $row["mata_pelajaran"]; ?></p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <?= $row["nama_guru"]; ?></p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <?php
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

                                                        if ($raport == 'A' || $raport == 'B' || $raport == 'C') {
                                                            $final = 'Lulus';
                                                        } elseif ($raport == 'D') {
                                                            $final = 'Diambang Tidak Lulus';
                                                        } else {
                                                            $final = 'Tidak Lulus';
                                                        }
                                                        ?>
                                                    <?= $raport . ' - ' . $final ?>
                                                </p>
                                            </td>
                                            <td
                                                class="px-5 py-5 border-b border-gray-200 text-sm flex justify-center items-baseline">
                                                <div x-data="{ showModal: false }">
                                                    <a href='#' @click="showModal = true"
                                                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded hover:bg-blue-500 hover:text-white">
                                                        Detail Raport
                                                    </a>
                                                    <div x-show="showModal"
                                                        class="fixed inset-0 transition-opacity z-20" aria-hidden="true"
                                                        @click="showModal = false">
                                                        <div class="absolute inset-0 bg-gray-500 opacity-75">
                                                        </div>
                                                    </div>
                                                    <div x-show="showModal"
                                                        x-transition:enter="transition ease-out duration-300 transform"
                                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave="transition ease-in duration-200 transform"
                                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        class="fixed z-30 inset-0 overflow-y-auto" x-cloak>
                                                        <div
                                                            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                            <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                                role="dialog" aria-modal="true"
                                                                aria-labelledby="modal-headline">
                                                                <div
                                                                    class="bg-white bg-opacity-25 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                    <div class="sm:flex sm:items-start">
                                                                        <div class="mt-3 sm:mt-0 sm:ml-4 w-full">
                                                                            <h3
                                                                                class="text-lg font-medium text-gray-900">
                                                                                Detail
                                                                                Raport
                                                                            </h3>
                                                                            <div class="mt-2">
                                                                                <ul class="text-gray-700">
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">NIS</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $row["nis"]; ?></span>
                                                                                    </li>
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">Nama</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $row["nama"]; ?></span>
                                                                                    </li>
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">Kelas</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $row["kelas"]; ?></span>
                                                                                    </li>
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">Mata
                                                                                            Pelajaran</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $row["mata_pelajaran"]; ?></span>
                                                                                    </li>
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">Guru
                                                                                            Pengampu</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $row["nama_guru"]; ?></span>
                                                                                    </li>
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">Nilai
                                                                                            Ulangan</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $row["nilai_ulangan"]; ?></span>
                                                                                    </li>
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">Nilai
                                                                                            UTS</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $row["nilai_uas"]; ?></span>
                                                                                    </li>
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">Nilai
                                                                                            UAS</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $row["nilai_uas"]; ?></span>
                                                                                    </li>
                                                                                    <li class="flex border-b py-2">
                                                                                        <span
                                                                                            class="font-bold w-32">Hasil
                                                                                            Raport</span>
                                                                                        <span class="text-gray-700">:
                                                                                            <?= $raport . ' - ' . $final ?></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                    <button @click="showModal = false" type="button"
                                                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                        Kembali</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full lg:w-fit h-fit rounded-md shadow-2xl hidden lg:block">
                <div class="flex flex-col justify-center px-12 py-8 gap-y-4">
                    <a href="index.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-blue-500 text-white">
                        <span class=" text-sm font-medium mt-1 capitalize">Raport</span>
                    </a>
                    <a href="profile.php" class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                    hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500 text-center">
                        <span class=" text-sm font-medium mt-1 capitalize">ganti password</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

</html>