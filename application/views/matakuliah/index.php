<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mata Kuliah</title>
</head>
<body>
    <h2>Data Mata Kuliah</h2>
    <table border="1" cellpadding="8">
        <thead>
            <tr><th>No</th><th>Kode Mata Kuliah</th><th>Nama Mata Kuliah</th><th>SKS</th><th>Semester</th></tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($matakuliah as $mk): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo html_escape($mk->kode_mk); ?></td>
                <td><?php echo html_escape($mk->nama_mk); ?></td>
                <td><?php echo html_escape($mk->sks); ?></td>
                <td><?php echo html_escape($mk->semester); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo base_url(); ?>">
        Kembali ke Beranda
    </a>
</body>
</html>