<select id="rarety_id" name="rarety_id" class="w-full border rounded px-3 py-2 text-gray-700">
    <option value="" disabled selected>Choisir une rareté</option>
    @foreach ($rareties as $rarety)
        <option value="{{ $rarety->id }}">{{ $rarety->name }}</option>
    @endforeach
</select>
