<form action="/admin/guru/update/{{ $guru->id }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block font-bold">Nama Guru</label>
        <input type="text" name="nama" value="{{ $guru->nama }}" class="w-full border p-2 rounded">
    </div>
    <div>
        <label class="block font-bold">Mata Pelajaran</label>
        <input type="text" name="mapel" value="{{ $guru->mapel }}" class="w-full border p-2 rounded">
    </div>
    <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded-lg">Update Data</button>
</form>