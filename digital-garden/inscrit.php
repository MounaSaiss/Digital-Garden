<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

    <section class="bg-[#1F4E3A] min-h-screen flex items-center justify-center">
        <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md ">
            <h1 class="text-2xl font-bold mb-6 text-center text-[#1F4E3A]">Créer un compte</h1>
            <form id="form"  class="flex flex-col gap-4">
                <div>
                    <label for="username" class="block text-sm font-semibold mb-1">Nom d’utilisateur</label>
                    <input type="text" id="username" name="username" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold mb-1">Mot de passe</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
                </div>
                <div>
                    <label for="confirm_password" class="block text-sm font-semibold mb-1">Confirmation mot de
                        passe</label>
                    <input type="password" id="confirm_password" name="confirm_password" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#98CA43]">
                </div>
                <p id="errorMsg" class="text-red-500 text-sm"></p>
                <button type="submit"
                    class="bg-[#98CA43] text-black font-semibold py-2 rounded-full ">
                    S’inscrire
                </button>
            </form>
            <p class="text-sm text-center mt-4 text-gray-500">
                Déjà un compte ? <a href="login.html" class="text-[#98CA43] hover:underline">Se connecter</a>
            </p>
        </div>
    </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
