<div class="container p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">FILMS</th>
                        <th scope="col" class="text-center">Vote</th>
                        <th scope="col" class="text-center">Language</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1 <?= $film_1->get_title() ?></th>
                        <td class="text-center"><?= $film_1->get_vote() ?></td>
                        <td class="text-center"><?= $film_1->get_lang() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2 <?= $film_2->get_title() ?></th>
                        <td class="text-center"><?= $film_2->get_vote() ?></td>
                        <td class="text-center"><?= $film_2->get_lang() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3 <?= $film_3->get_title() ?></th>
                        <td class="text-center"><?= $film_3->get_vote() ?></td>
                        <td class="text-center"><?= $film_3->get_lang() ?></td>
                    </tr>
                    <tr>
                        <th class="text-danger">
                            <?= $film_3->best_film() ?>
                        </th>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>