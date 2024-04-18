<div class="container p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">BOOKS</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Language</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1 <?= $book_1->get_title() ?></th>
                        <td class="text-center"><?= $book_1->get_vote() ?></td>
                        <td class="text-center"><?= $book_1->get_lang() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2 <?= $book_2->get_title() ?></th>
                        <td class="text-center"><?= $book_2->get_vote() ?></td>
                        <td class="text-center"><?= $book_2->get_lang() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3 <?= $book_3->get_title() ?></th>
                        <td class="text-center"><?= $book_3->get_vote() ?></td>
                        <td class="text-center"><?= $book_3->get_lang() ?></td>
                    </tr>
                    <tr>
                        <th class="text-danger">
                            <?= $book_2->best_book() ?>
                        </th>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>