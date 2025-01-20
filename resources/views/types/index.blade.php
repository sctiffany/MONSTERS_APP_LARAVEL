<select id="type_id" name="type_id" class="w-full border rounded px-3 py-2 text-gray-700">
    <option value="" disabled selected>Choisir un type</option>
    @foreach ($types as $type)
        <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endforeach
</select>
