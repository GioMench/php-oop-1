<?php

require_once __DIR__ . "./dp.php";

//var_dump($book_1->get_title());
//var_dump($film_2->get_title());
?>

<!doctype html>
<!--head-doc-->
<?php include_once __DIR__ . '/layout/head.php'; ?>

<body class="bg-secondary">

    <div class="container">

        <h1 class="text-center p-3 text-white">TOP 3 BOOKS AND FILMS OF THE MONTH</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">BOOKS/FILMS</th>
                    <th scope="col" class="text-center">Vote</th>
                    <th scope="col" class="text-center">Language</th>
                    <th scope="col" class="text-center">More info</th>



                </tr>
            </thead>
            <tbody>
                <?php foreach ($productions as $production): ?>
                    <tr>
                        <th scope="row"><span class="text-uppercase fw-bold"><?= $production->get_type() ?> :
                            </span><?= $production->get_title() ?></th>
                        <td class="text-center"><?= $production->get_vote() ?></td>
                        <td class="text-center"><?= $production->get_lang() ?></td>
                        <td class="text-center">
                            <?= $production->get_genre()->get_type() ?>/<?= $production->get_genre()->get_description() ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!--cdn-->
    <?php include_once __DIR__ . '/layout/foo.php'; ?>
</body>

</html>