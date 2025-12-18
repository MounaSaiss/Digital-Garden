<?php
$con = mysqli_connect("localhost", "root", "", "garden");
if (!$con) {
    die("erreur");
}
if (isset($_POST["Register"])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $password_confirm = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_SPECIAL_CHARS);

    $errors = [];
    if (!$username) {
        $errors['username'] = 'Username  required';
    } elseif (!preg_match('/^[a-zA-Z]{3,}$/', $username)) {
        $errors['username'] = 'Username Invalid ';
    }

    if (!$email) {
        $errors['email'] = 'Invalide email';
    }

    if (!$password || !$password_confirm) {
        $errors['password'] = 'Password  required';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be  6 characters';
    } elseif ($password !== $password_confirm) {
        $errors['password'] = 'Passwords not match';
    }


    if (count($errors) == 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username ,email,password)values('$username', '$email','$password')";

        try {
            $res = mysqli_query($con, $query);
            header("Location: login.php");
            exit;
        } catch (\Throwable $th) {
            echo '<script> alert("erreur disnscription")</script>';
        }
    } else {
        header("Location: inscrit.php?" . http_build_query(['errors' => $errors]));
        exit;
    }
}
?>
<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<section class="bg-[#1F4E3A] min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md ">
        <h1 class="text-2xl font-bold mb-6 text-center text-[#1F4E3A]">Créer un compte</h1>
        <form id="form" class="flex flex-col gap-4" action="inscrit.php" method="post">
            <div>
                <label for="username" class="block text-sm font-semibold mb-1">Nom d’utilisateur</label>
                <input type="text" id="username" name="username" placeholder="User Name "
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
                <?= isset($_GET['errors']['username']) ? "<p>{$_GET['errors']['username']}</p>" : "" ?>
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold mb-1">Email </label>
                <input type="email" id="email" name="email" placeholder="Email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
                <?= isset($_GET['errors']['email']) ? "<p>{$_GET['errors']['email']}</p>" : "" ?>
            </div>
            <div>
                <label for="password" class="block text-sm font-semibold mb-1">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de Passe"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
                <?= isset($_GET['errors']['password']) ? "<p>{$_GET['errors']['password']}</p>" : "" ?>
            </div>
            <div>
                <label for="confirm_password" class="block text-sm font-semibold mb-1">Confirmation mot de
                    passe</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmer mot de passe"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
            </div>
            <p id="errorMsg" class="text-red-500 text-sm"></p>
            <button type="submit" value="Register" name="Register"
                class="bg-[#98CA43] text-black font-semibold py-2 rounded-full ">
                S’inscrire
            </button>
        </form>
        <p class="text-sm text-center mt-4 text-gray-500">
            Déjà un compte ? <a href="login.php" class="text-[#98CA43] hover:underline">Se connecter</a>
        </p>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>