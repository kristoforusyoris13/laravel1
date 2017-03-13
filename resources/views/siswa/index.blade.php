<h1>List Siswa</h1>
<br>

@foreach($data as $siswa)
{{$siswa->nama}} <br>
{{$siswa->kontak}}<br>
{{$siswa->umur}}<br>

<hr>
@endforeach