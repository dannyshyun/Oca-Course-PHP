<!DOCTYPE html>
<?php
$photoDataArray = [
    [
        "title" => "CAT",
        "photo" => "http://localhost/table/001.jpg",
        "place" => "甲斐町",
        "date" => "2020/11/20"
    ],
    [
        "title" => "PIGEON",
        "photo" => "http://localhost/table/002.jpg",
        "place" => "開口神社",
        "date" => "2020/12/01"
    ],
    [
        "title" => "SEA ANGEL",
        "photo" => "http://localhost/table/003.jpg",
        "place" => "海遊館",
        "date" => "2021/01/24"
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
            <tr>
                <td><?= $data['title'] ?></td>
                <td><img src='<?= $data['photo'] ?>'></td>
                <td><?= $data['place'] ?></td>
                <td><?= $data['date'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>


</html>