<section class="mb-20">
    <div class="bg-gray-700 rounded-lg shadow-lg monster-card" data-monster-type="{{ Str::lower($monster->type->name) }}">
        <div class="md:flex">
            <!-- Image du monstre -->
            <div class="w-full md:w-1/2 relative">
                <img class="w-full h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none"
                    src="{{ asset('images/' . $monster->image_url) }}" alt="Nom du Monstre" />
                <div class="absolute top-4 right-4">
                    <button
                        class="text-white bg-gray-400 hover:bg-red-700 rounded-full p-2 transition-colors duration-300"
                        style="
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
              ">
                        <i class="fa fa-bookmark"></i>
                    </button>
                </div>
            </div>

            <!-- Détails du monstre -->
            <div class="p-6 md:w-1/2">
                <h2 class="text-3xl font-bold mb-2 creepster">
                    {{ $monster->name }}
                </h2>
                <p class="text-gray-300 text-sm mb-4">
                    {{ $monster->description }}
                </p>
                <!-- <div class="mb-4">
            <strong class="text-white">Créateur:</strong>
            <span class="text-red-400">Nom du Créateur</span>
          </div> -->
                <div class="mb-4">
                    <div>
                        <strong class="text-white">Type:</strong>
                        <span class="text-gray-300">{{ $monster->type->name }}</span>
                    </div>
                    <div>
                        <strong class="text-white">PV:</strong>
                        <span class="text-gray-300">{{ $monster->pv }}</span>
                    </div>
                    <div>
                        <strong class="text-white">Attaque:</strong>
                        <span class="text-gray-300">{{ $monster->attack }}</span>
                    </div>
                    <div>
                        <strong class="text-white">Défense:</strong>
                        <span class="text-gray-300">{{ $monster->defense }}</span>
                    </div>
                </div>
                <!-- Fonctionnalité à ne pas développer, donc pas dynamique -->
                <div class="mb-4">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-gray-300 text-sm">(4.0/5.0)</span>
                </div>
                <div class="">
                    <!-- <a
              href="monster.html"
              class="inline-block text-white bg-red-500 hover:bg-red-700 rounded-full px-4 py-2 transition-colors duration-300"
              >Ajouter à mon deck</a
            > -->
                    <a href="monster.html"
                        class="inline-block text-white bg-red-500 hover:bg-red-700 rounded-full px-4 py-2 transition-colors duration-300">Modifier</a>
                    <a href="monster.html"
                        class="inline-block text-white opacity-60 hover:opacity-100 rounded-full px-4 py-2 transition-colors duration-300">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</section>
