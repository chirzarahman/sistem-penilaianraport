<?php
session_start();

if (isset($_SESSION["loggedin_admin"]) && $_SESSION["loggedin_admin"] === true) {
    header("location: ../dashboard/admin/list-guru.php");
    exit;
} else if (isset($_SESSION["loggedin_guru"]) && $_SESSION["loggedin_guru"] === true) {
    header("location: ../dashboard/guru/");
    exit;
} else if (isset($_SESSION["loggedin_murid"]) && $_SESSION["loggedin_murid"] === true) {
    header("location: ../dashboard/murid/");
    exit;
}

require_once "../config/connect.php";

$username = $password = "";
$username_err = $password_err = $login_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Mohon masukkan username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Mohon masukkan password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, username, password FROM admin WHERE username = :username";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            $param_username = trim($_POST["username"]);

            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if (password_verify($password, $hashed_password)) {
                            session_start();

                            $_SESSION["loggedin_admin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            header("location: ../dashboard/admin/list-guru.php");
                        } else {
                            $login_err = "Password salah.";
                        }
                    }
                } else {
                    $login_err = "Username tidak terdaftar.";
                }
            } else {
                echo "Ups! Ada yang salah. Silakan coba lagi nanti.";
            }

            unset($stmt);
        }
    }

    unset($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMK Arimbi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/style-login.css">
    <link rel="icon" href="../assets/logo.png" />
</head>

<body>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <main
        class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden py-6 sm:py-12">
        <div class="relative py-3 mx-10 md:mx-auto text-center">
            <span class="text-3xl font-semibold text-white">Login Admin</span>
            <div class="mt-4 bg-white shadow-lg rounded-lg text-left w-full md:w-96">
                <div class="h-2 bg-pink-500 rounded-t-md"></div>

                <?php
                if (!empty($login_err)) {
                    echo '<div id="alert-error" class="bg-red-100 bg-opacity- p-2 flex flex-row w-full">
                    <div class="bg-red-500 rounded-lg p-1 mr-1"></div>
                    <div class="flex items-center gap-x-2">
                    <b>Erorr</b>
                    <p class="capitalize">'
                        . $login_err .
                        '</p><p class="text-xs font-medium"> Hilang dalam <span id="countdowntimer">5 </span> detik</p>
                    </div></div>';
                }
                ?>

                <form class="px-8 py-6" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label class="block font-medium">Username</label>
                    <input type="text" name="username" placeholder="Username"
                        class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" />
                    <span class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $username_err; ?></span>
                    <label class=" block mt-3 font-medium">Password</label>
                    <input type="password" name="password" placeholder="Password"
                        class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" />
                    <span class="mt-2 peer-invalid:visible text-pink-600 text-sm"><?php echo $password_err; ?></span>
                    <div class="flex justify-between items-baseline">
                        <input type="submit"
                            class="mt-4 bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-700 cursor-pointer"
                            value="Login" />
                        <a href="murid.php" class="text-sm">Masuk Sebagai Siswa</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <div class="fixed bottom-4 right-4">
        <a
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full shadow-lg cursor-not-allowed">
            Masuk Sebagai Admin
        </a>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
setTimeout(function() {
    $('#alert-error').fadeOut('slow');
}, 2500);

var timeleft = 5;
var downloadTimer = setInterval(function() {
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if (timeleft <= 0)
        clearInterval(downloadTimer);
}, 500);
</script>

</html>