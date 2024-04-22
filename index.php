<?php

require_once __DIR__ . "./dp.php";

?>

<!doctype html>
<!--head-doc-->
<?php include_once __DIR__ . '/layout/head.php'; ?>

<body>

    <header>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Books <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Films</a>
                </li>
            </ul>
        </nav>

    </header>

    <div class="container">

        <h1 class="text-center p-3 text-white">TOP 3 BOOKS AND FILMS OF THE MONTH</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">BOOKS/FILMS</th>
                    <th scope="col" class="text-center">Vote</th>
                    <th scope="col" class="text-center">Language</th>
                    <th scope="col" class="text-center">More info</th>
                    <th scope="col" class="text-center">Profits</th>
                    <th scope="col" class="text-center">Duration</th>
                    <th scope="col" class="text-center">Saghe</th>
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