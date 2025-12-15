<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

    <section class="p-8 bg-[#1F4E3A] min-h-screen">
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
        <h2 class="text-3xl font-bold mb-6 text-white">Liste des thèmes</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="p-4 bg-[#FFFBF0] bg-opacity-70 rounded shadow flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-semibold text-black mb-2">Productivité</h3>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-full h-2 rounded-full" style="background-color: #4DC2C3;"></span>
                    </div>
                    <p class="text-sm text-black">Notes associées : 5</p>
                </div>
                <div class="flex gap-2 mt-4">
                    <button class="flex-1 bg-blue-500 text-white py-1 rounded hover:bg-blue-600">Modifier</button>
                    <button class="flex-1 bg-red-500 text-white py-1 rounded hover:bg-red-600">Supprimer</button>
                </div>
            </div>
            <div class="p-4 bg-[#FFFBF0] bg-opacity-70 rounded shadow flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-semibold text-black mb-2">Voyage</h3>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-full h-2 rounded-full" style="background-color: #98CA43;"></span>
                        
                    </div>
                    <p class="text-sm text-black">Notes associées : 2</p>
                </div>
                <div class="flex gap-2 mt-4">
                    <button class="flex-1 bg-blue-500 text-white py-1 rounded hover:bg-blue-600">Modifier</button>
                    <button class="flex-1 bg-red-500 text-white py-1 rounded hover:bg-red-600">Supprimer</button>
                </div>
            </div>
            <div class="p-4 bg-[#FFFBF0] bg-opacity-70 rounded shadow flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-semibold text-black mb-2">Créativité</h3>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-full h-2 rounded-full" style="background-color: #FFC107;"></span>
                    </div>
                    <p class="text-sm text-black">Notes associées : 3</p>
                </div>
                <div class="flex gap-2 mt-4">
                    <button class="flex-1 bg-blue-500 text-white py-1 rounded hover:bg-blue-600">Modifier</button>
                    <button class="flex-1 bg-red-500 text-white py-1 rounded hover:bg-red-600">Supprimer</button>
                </div>
            </div>
        </div>
        
    </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>