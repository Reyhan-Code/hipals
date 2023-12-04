<!DOCTYPE html>

<html>

<head>
    <title>
        <?= $title; ?>
    </title>
    <style>
        .info-box {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .info-box h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .info-box p {
            margin: 0;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <?php foreach ($tugas as $a) : ?>
        <div class="info-box">
            <h2>Tugas Ke-2</h2>
            <ul>
                <li><?= $a['Nama']; ?></li>
                <li><?= $a['Nim']; ?></li>
                <li><?= $a['Kelas']; ?></li>
            </ul>
        <?php endforeach; ?>
        </div>
</body>

</html>