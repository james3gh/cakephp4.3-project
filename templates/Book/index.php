<div class="row">
    <div class="col-md-12">
        <div class="border border-3 rounded border-secondary">
            <div class="panel-heading bg-primary p-2 clearfix ">
                <span class="align-middle text-white">Book List</span>
            <?php
echo $this->Html->link(
    'Create Book',
    '/book/create',
    ['class' => 'btn btn-success float-end']
);
?>
            </div>
            <div class="panel-body">
            <table class="table  text-center">
                <thead>
                    <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Book name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Email Adress</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
foreach ($books as $key => $book) { ?>
    <tr>
        <td><?=$book->id ?></td>
        <td><?=$book->name ?></td>
        <td><?=$book->author ?></td>
        <td><?=$book->email ?></td>
     <td><img src="<?php if ($book->img != null) {
    echo $this->Url->image(strval($book->img));
}
    ?>" alt="Book image" style="height: 50px; width: 50px;"></td>
        <td>
    <?php

    echo $this->Html->link(
        'Edit',
        '/book/edit/' . $book->id,
        ['class' => 'btn btn-info me-1']
    );
    echo $this->Html->link(
        'Delete',
        '/book/delete/' . $book->id,
        ['class' => 'btn btn-danger']
    );

    ?>
        </td>
    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
