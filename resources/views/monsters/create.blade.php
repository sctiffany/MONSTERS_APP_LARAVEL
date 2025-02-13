@extends('layouts.app')

@section('title')
    Ajouter un monstre
@endsection

@section('content')
    <div class="container mx-auto pb-12">
        <div class="flex flex-wrap justify-center">
            <div class="w-full">
                <div class="bg-gray-700 p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4 text-center creepster">
                        Ajouter un monstre
                    </h2>

                    <form class="space-y-6" method="POST" action="{{ route('monsters.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name" class="block mb-1">Nom</label>
                            <input type="text" id="name" name="name"
                                class="w-full border rounded px-3 py-2 text-gray-700" placeholder="Nom du Monstre" />
                        </div>
                        <div>
                            <label for="description" class="block mb-1">Description</label>
                            <textarea class="w-full border rounded px-3 py-2 text-gray-700" name="description" id="description"
                                placeholder="Description"></textarea>
                        </div>
                        <div>
                            <label for="image_url" class="block mb-1">Image du monstre</label>
                            <input type="file" id="image_url" name="image_url"
                                class="w-full border rounded px-3 py-2 text-gray-700">
                        </div>
                        <div>
                            <label for="pv" class="block mb-1">Nombre de PV</label>
                            <input type="text" id="pv" name="pv"
                                class="w-full border rounded px-3 py-2 text-gray-700" placeholder="Nombre de PV" />
                        </div>
                        <div>
                            <label for="attack" class="block mb-1">Points d'attaque</label>
                            <input type="text" id="attack" name="attack"
                                class="w-full border rounded px-3 py-2 text-gray-700" placeholder="Points d'attaque" />
                        </div>
                        <div>
                            <label for="defense" class="block mb-1">Points de défense</label>
                            <input type="text" id="defense" name="defense"
                                class="w-full border rounded px-3 py-2 text-gray-700" placeholder="Points de défense" />
                        </div>
                        <div>
                            <label for="rarety_id" class="block mb-1">Rareté</label>
                            @include('rareties.index', ['rareties' => App\Models\Rarety::all()])
                        </div>
                        <div>
                            <label for="type_id" class="block mb-1">Type</label>
                            @include('types.index', ['types' => App\Models\Type::all()])
                        </div>


                        <div class="flex justify-between items-center">
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Ajouter
                            </button>
                            <button type="reset" class="text-red-400 hover:text-red-500">
                                Annuler
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
