<div class="row">
    <div class="col-md-12">
        <div class="border border-3 rounded border-secondary">
            <div class="panel-heading bg-primary p-2 clearfix">
                <span class="align-middle text-white">Book Create</span>
                <?php
echo $this->Html->link(
    'Back',
    '/book',
    ['class' => 'btn btn-success float-end']
);
?>
            </div>
            <div class="panel-body">
                <?php
echo $this->Form->create(
    null,
    [
        'url' => ['controller' => 'Book',
            'action' => 'saveData'],
        'type' => 'file',
        'class' => 'row g-3 p-3',
    ]
);
?>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <?php echo $this->Form->text('name', ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter name']); ?>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Author</label>
                    <?php echo $this->Form->text('author', ['id' => 'author', 'class' => 'form-control', 'placeholder' => 'Enter author']); ?>
                    <!-- <input type="text" class="form-control" id="author" placeholder="Enter author"> -->
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email</label>
                    <?php echo $this->Form->text('email', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter email address']); ?>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Description</label>
                    <?php echo $this->Form->textarea('description', ['class' => 'form-control', 'placeholder' => 'Enter description']); ?>
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Upload Image </label>
                    <?php echo $this->Form->file('file', ['class' => 'form-control']); ?>
                </div>
                <div class="col-12">
                <?php echo $this->Form->button('Submit', ['class' => 'btn btn-success']); ?>
                </div>
               <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
