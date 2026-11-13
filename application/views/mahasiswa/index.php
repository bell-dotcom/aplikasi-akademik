<h3>Data Mahasiswa</h3> 
<table border="1" cellpadding="8"> 
    <tr><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Fakultas</th></tr> 
    <?php foreach ($mahasiswa as $row): ?> 
    <tr> 
        <td><?= $row->nim ?></td> 
        <td><?= $row->nama ?></td> 
        <td><?= $row->jurusan ?></td> 
        <td><?= $row->fakultas ?></td> 
    </tr> 
    <?php endforeach; ?> 
</table> 