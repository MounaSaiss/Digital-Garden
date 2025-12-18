<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "garden");
if (!$conn){
    die("Erreur connexion");
} 

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $req = "SELECT * FROM users where email ='$email'";
    $res = mysqli_query($conn, $req);

    if (mysqli_num_rows($res) === 1) {
        $user = mysqli_fetch_assoc($res);
        if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user["username"];
            header("Location: dashboard.php");
            exit;
        } 
    }
    header("location: login.php");
    exit;
}
?>
<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<section class="bg-[#1F4E3A]  flex items-center justify-center py-12">
    <div class="bg-white rounded-xl shadow-lg p-4 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center text-[#1F4E3A]">Se connecter</h1>
        <form id="loginForm" class="flex flex-col gap-4" action="login.php" method="post">
            <div>
                <label for="email" class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" id="email_login" name="email" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
            </div>
            <div>
                <label for="password" class="block text-sm font-semibold mb-1">Mot de passe</label>
                <input type="password" id="passwordlogin" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
            </div>
            <p id="errorMsglogin" class="text-red-500 text-sm"></p>
            <button type="submit" value="login" name="login"
                class="bg-[#98CA43] text-black font-semibold py-2 rounded-full hover:bg-[#86b53c] transition">
                Se connecter
            </button>
        </form>
        <p class="text-sm text-center mt-4 text-gray-500">
            Pas encore de compte ? <a href="inscrit.php" class="text-[#98CA43] hover:underline">S’inscrire</a>
        </p>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>