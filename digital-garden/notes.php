<?php require_once __DIR__ . '/../config/database.php'; ?>
<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<section class="p-8 bg-[#1F4E3A]  min-h-screen">
    <a href="formNote.php" class="flex-1 bg-green-500 text-white py-1 rounded-lg  p-2 ">
        Add new notes 
    </a>
    <div class="bg-white p-4 rounded mb-8 text-white mt-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <select class="p-2 text-black rounded">
                <option>Tous les thèmes</option>
                <option>Productivité</option>
                <option>Voyage</option>
                <option>Créativité</option>
            </select>
            <select class="p-2 text-black rounded">
                <option>Toutes les importances</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <input type="text" placeholder="Rechercher par mot-clé..."
                class="p-2 text-black rounded">
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="p-4 bg-[#4DC2C3] rounded-2xl shadow-lg backdrop-blur-sm flex flex-col justify-between">
            <div>
                <h3 class="text-lg font-bold text-[#173B2D] mb-2">Organiser ma semaine</h3>
                <p class="text-sm text-black font-semibold mb-1">Thème : Productivité</p>
                <span class="inline-block px-2 py-1 bg-[#FFC107]/60 rounded-full text-xs font-bold mb-2">Importance : 4</span>
                <p class="text-sm text-[#173B2D] mb-2">Planifier les tâches importantes chaque dimanche pour éviter le stress...</p>
                <p class="text-xs text-black">Créée le : 15/12/2025</p>
            </div>
            <div class="flex gap-2 mt-4">
                <button class="flex-1 bg-blue-500 text-white py-1 rounded-lg ">Modifier</button>
                <button class="flex-1 bg-red-500 text-white py-1 rounded-lg ">Supprimer</button>
            </div>
        </div>
        <div class="p-4 bg-[#98CA43]  rounded-2xl shadow-lg backdrop-blur-sm flex flex-col justify-between ">
            <div>
                <h3 class="text-lg font-bold text-[#173B2D] mb-2">Idées de voyage</h3>
                <p class="text-sm text-black font-semibold mb-1">Thème : Voyage</p>
                <span class="inline-block px-2 py-1 bg-[#4DC2C3]/60 rounded-full text-xs font-bold mb-2">Importance : 3</span>
                <p class="text-sm text-[#173B2D] mb-2">Lister les destinations possibles pour l’été prochain...</p>
                <p class="text-xs text-black">Créée le : 10/12/2025</p>
            </div>
            <div class="flex gap-2 mt-4">
                <button class="flex-1 bg-blue-500 text-white py-1 rounded-lg hover:scale-105 transition-transform">Modifier</button>
                <button class="flex-1 bg-red-500 text-white py-1 rounded-lg hover:scale-105 transition-transform">Supprimer</button>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>