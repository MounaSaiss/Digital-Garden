<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>
<div class="flex justify-center">
    <div class=" w-[800px] bg-white  p-6 mt-8 rounded">
        <h3 class="text-2xl font-semibold mb-4 text-green-800 text-center">Ajouter un thème</h3>
        <form class="space-y-4">
            <div>
                <label class="block text-black mb-1">Nom du thème</label>
                <input type="text"
                    class="w-full border border-green-300 p-2"
                    placeholder="Ex: Productivité">
            </div>

            <div>
                <label class="block text-black mb-1">Couleur du thème</label>
                <input type="color" class="w-16 h-10 p-0 border-0">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-400">Créer</button>
        </form>
    </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
