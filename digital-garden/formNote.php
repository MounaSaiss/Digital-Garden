<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . '/../config/database.php';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';

// creer une note
if (isset($_POST['ajoute'])) {
    $theme = $_POST['theme'];
    $titre = $_POST['titre'];
    $importance = $_POST['importance'];
    $contenu = $_POST['contenu'];
    
    print_r($_POST);

    $query = "INSERT INTO theme(nom, badgeCouleur, id_user) VALUES ('$name', '$color', $userId)";

    if (mysqli_query($conn, $query)) {
        header('Location: themes.php');
    }
}
?>
<div class="flex justify-center m-12 ">
    <div class="w-[800px] bg-white/90  p-6 rounded-2xl">

        <h3 class="text-2xl font-bold mb-6 text-[#173B2D] text-center">
            Ajouter
        </h3>
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
                <label class="text-[#173B2D] mb-1 flex items-center gap-2">
                    <i class="fa-solid fa-tag"></i> Thème
                </label>
                <select class="border border-[#98CA43] p-2 rounded-lg focus:ring-2 focus:ring-[#4DC2C3]" name="theme">
                    <option>Productivité</option>
                    <option>Voyage</option>
                    <option>Créativité</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label class="text-[#173B2D] mb-1 flex items-center gap-2">
                    <i class="fa-solid fa-heading"></i> Titre
                </label>
                <input type="text" name="titre"
                    class="border border-[#98CA43] p-2 rounded-lg ">
            </div>
            <div class="flex flex-col">
                <label class="text-[#173B2D] mb-1 flex items-center gap-2">
                    <i class="fa-solid fa-star"></i> Importance
                </label>
                <select class="border border-[#98CA43] p-2 rounded-lg focus:ring-2 focus:ring-[#4DC2C3]" name="importance">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="flex flex-col md:col-span-2">
                <label class="text-[#173B2D] mb-1 flex items-center gap-2">
                    <i class="fa-solid fa-align-left"></i> Contenu
                </label>
                <p rows="4" placeholder="Résumé ou contenu..." name="contenu"
                    class="border border-[#98CA43] p-2 rounded-lg focus:ring-2 focus:ring-[#4DC2C3]" ></p>
            </div>
            <div class="md:col-span-2">
                <button
                    name="ajoute" value="ajoute"
                    class="w-full bg-green-900 text-white py-2 rounded-xl">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>