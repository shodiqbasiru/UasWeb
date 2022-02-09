<div class="container mt-2">

<div class="row">
    <div class="col-5">
        <h2>Data Dosen</h2>
        <?php
            foreach ($data['dosen'] as $dsn):?>
        <ul>
            <li><?= $dsn['nama']; ?></li>
            <li><?= $dsn['alamat']; ?></li>
            <li><?= $dsn['Dosen_MK']; ?></li>
        </ul>
        <?php endforeach; ?>
    </div>
</div>
</div>