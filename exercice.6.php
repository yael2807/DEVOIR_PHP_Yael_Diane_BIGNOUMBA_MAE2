<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $classe = [
        'Licence 1' => [
            'IAGE1', 'GRLS1', 'Mae1',

        ],
        'Licence 2' => [
            'IAGE2', 'GRLS2', 'Mae2',

        ],

        'Licence 3' => [
            'IAGE3', 'GRLS3', 'Mae3',

        ]


    ]

    ?>
    <ul class="">
        <?php
        foreach ($classe as $key => $cla) {
        ?>
            <li class=""><?= $key ?></li>
            <ul class="">
                <?php
                foreach ($cla as  $cl) {
                ?>
                    <li class=""><?= $cl ?></li>
                <?php
                }

                ?>
            </ul>
            </li>
        <?php
        }

        ?>
    </ul>

</body>

</html>