<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<section class="p-8 bg-[#1F4E3A] min-h-screen">
    <a href="formNote.php" class="flex-1 bg-green-500 text-white py-1 rounded-lg  p-2 ">
        Add new thémes 
    </a>
    <h2 class="text-3xl font-bold mb-6 text-white mt-3">Liste des thèmes</h2>
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