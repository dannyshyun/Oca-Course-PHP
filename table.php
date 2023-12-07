<!DOCTYPE html>
<?php
$photoDataArray = [
    [
        "title" => "CAT",
        "photo" => "http://localhost/php/table/001.jpg",
        "place" => "甲斐町",
        "date" => "2020/11/20"
    ],
    [
        "title" => "PIGEON",
        "photo" => "http://localhost/php/table/002.jpg",
        "place" => "開口神社",
        "date" => "2020/12/01"
    ],
    [
        "title" => "SEA ANGEL",
        "photo" => "http://localhost/php/table/003.jpg",
        "place" => "海遊館",
        "date" => "2021/01/24"
    ],
    [
        "title" => "UNDERDEVELOPMENT",
        "photo" => "",
        "place" => "靭公園",
        "date" => "2023/12/07"
    ]
];
?>
<html>

<head>
    <meta charset="UTF-8" />
    <style>
        img {
            max-width: 320px;
            height: auto;
        }
    </style>
</head>

<body>
    <table border="1" cellspacing="0">
        <tr>
            <th>TITLE</th>
            <th>PHOTO</th>
            <th>PLACE</th>
            <th>DATE</th>
        </tr>
        <?php foreach ($photoDataArray as $data) : ?>
            <?php if (!empty($data)) : ?>
                <tr>
                    <td><?= $data['title'] ?></td>
                    <td>
                        <?php if (!empty($data['photo'])) : ?>
                            <img src='<?= $data['photo'] ?>'>
                        <?php else : ?>
                            <img src='http://localhost/php/table/noImage.jpg'>
                        <?php endif; ?>
                    </td>
                    <td><?= $data['place'] ?></td>
                    <td><?= $data['date'] ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>