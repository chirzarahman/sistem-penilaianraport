<?php
session_start();

if (!isset($_SESSION["loggedin_admin"]) || $_SESSION["loggedin_admin"] !== true) {
    header("location: ../../login/admin.php");
    exit;
}

require_once "../../../config/connect.php";

$nis = $nama = $no_telp = $nama_ortu = $alamat = $password = "";
$tgl_lahir = 0;
$nis_err = $nama_err = $tgl_lahir_err = $no_telp_err = $nama_ortu_err = $alamat_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validate NIS
    $input_nis = trim($_POST["nis"]);
    if (empty($input_nis)) {
        $nis_err = "Mohon masukkan nis.";
    } else {
        $nis = $input_nis;
    }

    //Validate Nama
    $input_nama = trim($_POST["nama"]);
    if (empty($input_nama)) {
        $nama_err = "Mohon masukkan nama.";
    } else {
        $nama = $input_nama;
    }

    //Validate Tanggal Lahir
    $input_tglLahir = trim($_POST["tanggal_lahir"]);
    if (empty($input_tglLahir)) {
        $tgl_lahir_err = "Mohon masukkan tanggal lahir.";
    } else {
        $tgl_lahir = $input_tglLahir;
    }

    //Validate Nomor Telepon
    $input_noTelp = trim($_POST["no_telepon"]);
    if (empty($input_noTelp)) {
        $no_telp_err = "Mohon masukkan nomor telepon.";
    } else {
        $no_telp = $input_noTelp;
    }

    //Validate Nama Orang Tua
    $input_namaOrtu = trim($_POST["nama_ortu"]);
    if (empty($input_namaOrtu)) {
        $nama_ortu_err = "Mohon masukkan nama orang tua.";
    } else {
        $nama_ortu = $input_namaOrtu;
    }

    //Validate Alamat
    $input_alamat = trim($_POST["alamat"]);
    if (empty($input_alamat)) {
        $alamat_err = "Mohon masukkan alamat.";
    } else {
        $alamat = $input_alamat;
    }

    if (empty($nis_err) && empty($nama_err) && empty($tgl_lahir_err) && empty($no_telp_err) && empty($nama_ortu_err) && empty($alamat_err) && empty($password_err)) {
        $sql = "INSERT INTO tbmurid (nis, nama, tanggal_lahir, no_telepon, nama_ortu, alamat, password) VALUES (:nis, :nama, :tanggal_lahir, :no_telepon, :nama_ortu, :alamat, :password)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bindParam(":nis", $param_nis);
            $stmt->bindParam(":nama", $param_nama);
            $stmt->bindParam(":tanggal_lahir", $param_tgl_lahir);
            $stmt->bindParam(":no_telepon", $param_no_telp);
            $stmt->bindParam(":nama_ortu", $param_nama_ortu);
            $stmt->bindParam(":alamat", $param_alamat);
            $stmt->bindParam(":password", $param_password);

            $param_nis = $nis;
            $param_nama = $nama;
            $param_tgl_lahir = $tgl_lahir;
            $param_no_telp = $no_telp;
            $param_nama_ortu = $nama_ortu;
            $param_alamat = $alamat;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if ($stmt->execute()) {
                header("location: ../list-murid.php");
                exit();
            } else {
                echo "Ups! Ada yang salah. Silakan coba lagi nanti";
            }
        }

        unset($stmt);
    }

    unset($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SMK Arimbi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../../../assets/logo.png" />
</head>

<body>
    <main class="text-[#44566C]">
        <div class="flex-row lg:flex mt-10 mb-20 mx-4 lg:mx-20 gap-5">
            <div class="bg-white w-full lg:w-[40%] h-fit rounded-md drop-shadow-2xl mb-10 lg:mb-0">
                <div class="flex flex-col items-center justify-center pt-8">
                    <img class="w-40 bg-white rounded-3xl object-cover" alt="" src="../../../assets/logo.png" />
                    <p class="text-[29px] mb-[14px] mt-2 text-center">
                        Admin SMK Arimbi
                    </p>
                    <div class="bg-[#F0F0F6] py-2 px-4 rounded-full w-fit text-sm mb-4">
                        Super Admin
                    </div>
                </div>
                <div class="bg-[#F3F6F6] flex flex-col justify-center px-12 py-8 rounded-b-md">
                    <div class="mt-5">
                        <span class="capitalize font-semibold text-lg">
                            Deskripsi
                        </span>
                        <p class="text-sm">
                            Admin dapat menambah, mengedit, menghapus data guru dan murid
                        </p>
                    </div>
                    <a href="../../../logout.php"
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
                    <a href="../list-guru.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-white">
                        <span class=" text-sm font-medium mt-1 capitalize">guru</span>
                    </a>
                    <a href="../list-murid.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500">
                        <span class=" text-sm font-medium mt-1 capitalize">murid</span>
                    </a>
                    <a href="../list-mapel.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500">
                        <span class=" text-sm font-medium mt-1 capitalize">mata pelajaran</span>
                    </a>
                </div>
            </div>
            <div class="bg-white w-full h-max rounded-md shadow-2xl py-7">
                <div class="relative w-max pb-3 ml-4 lg:mx-10">
                    <div class="absolute border-b-4 border-blue-500 bottom-0 left-0 w-14 rounded-full"></div>
                    <h2 class="font-semibold text-[2rem] uppercase">tambah murid</h2>
                </div>
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="mx-auto max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                            class="space-y-4">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div>
                                    <input class="w-full rounded-lg border-2 border-gray-200 p-3 text-sm"
                                        placeholder="NIS" name="nis" type="text" />
                                    <span
                                        class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $nis_err; ?></span>
                                </div>

                                <div>
                                    <input class="w-full rounded-lg border-2 border-gray-200 p-3 text-sm"
                                        placeholder="Nama" name="nama" type="text" />
                                    <span
                                        class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $nama_err; ?></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div>
                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-format="yyyy-mm-dd" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-3"
                                            placeholder="Tanggal Lahir" name="tanggal_lahir">
                                    </div>
                                    <span
                                        class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $tgl_lahir_err; ?></span>
                                </div>

                                <div>
                                    <input class="w-full rounded-lg border-2 border-gray-200 p-3 text-sm"
                                        placeholder="No Telp" name="no_telepon" type="text" />
                                    <span
                                        class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $no_telp_err; ?></span>
                                </div>
                            </div>
                            <div>
                                <input class="w-full rounded-lg border-2 border-gray-200 p-3 text-sm"
                                    placeholder="Nama Orang Tua" name="nama_ortu" type="text" />
                                <span
                                    class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $nama_ortu_err; ?></span>
                            </div>
                            <div>
                                <textarea class="w-full rounded-lg border-2 border-gray-200 p-3 text-sm"
                                    placeholder="Alamat" name="alamat" rows="8"></textarea>
                                <span
                                    class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $alamat_err; ?></span>
                            </div>

                            <div>
                                <input class="w-full rounded-lg border-2 border-gray-200 p-3 text-sm hidden"
                                    placeholder="Password" name="password" type="text" value="12345" />
                                <span
                                    class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $password_err; ?></span>
                            </div>
                            <div class="mt-4 flex items-center gap-x-4">
                                <a href="../list-murid.php"
                                    class="inline-block w-full rounded-lg bg-gray-200 px-5 py-3 font-medium text-gray-600 sm:w-auto text-center">
                                    Batal
                                </a>
                                <button type="submit"
                                    class="inline-block w-full rounded-lg bg-blue-500 px-5 py-3 font-medium text-white sm:w-auto">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full lg:w-fit h-fit rounded-md shadow-2xl hidden lg:block">
                <div class="flex flex-col justify-center px-12 py-8 gap-y-4">
                    <a href="../list-guru.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-white">
                        <span class=" text-sm font-medium mt-1 capitalize">guru</span>
                    </a>
                    <a href="../list-murid.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500">
                        <span class=" text-sm font-medium mt-1 capitalize">murid</span>
                    </a>
                    <a href="../list-mapel.php"
                        class="rounded-lg px-5 py-4 w-full transition hover:duration-700 hover:bg-blue-500
                                        hover:text-white flex flex-col items-center cursor-pointer bg-[#F3F6F6] text-gray-500">
                        <span class=" text-sm font-medium mt-1 capitalize">mata pelajaran</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</html>