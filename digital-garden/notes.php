<?php include __DIR__ . '/../includes/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<section class="p-8 bg-[#1F4E3A]  min-h-screen">
    <div class="bg-white p-4 rounded mb-8 text-white">
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
                    <select class="border border-[#98CA43] p-2 rounded-lg focus:ring-2 focus:ring-[#4DC2C3]">
                        <option>Productivité</option>
                        <option>Voyage</option>
                        <option>Créativité</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label class="text-[#173B2D] mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-heading"></i> Titre
                    </label>
                    <input type="text"
                        class="border border-[#98CA43] p-2 rounded-lg ">
                </div>
                <div class="flex flex-col">
                    <label class="text-[#173B2D] mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-star"></i> Importance
                    </label>
                    <select class="border border-[#98CA43] p-2 rounded-lg focus:ring-2 focus:ring-[#4DC2C3]">
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
                    <textarea rows="4" placeholder="Résumé ou contenu..."
                        class="border border-[#98CA43] p-2 rounded-lg focus:ring-2 focus:ring-[#4DC2C3]"></textarea>
                </div>
                <div class="md:col-span-2">
                    <button
                        class="w-full bg-green-900 text-white py-2 rounded-xl">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>