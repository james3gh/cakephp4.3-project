<div class="row">
    <div class="col-md-12">
        <div class="border border-3 rounded border-secondary">
            <div class="panel-heading bg-primary p-2 clearfix">
                <span class="align-middle text-white">Book Edit</span>
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
            'action' => 'update'],
        'class' => 'row g-3 p-3',
    ]
);
?>
                <?php echo $this->Form->hidden('id', ['value' => $book->id]); ?>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <?php echo $this->Form->text('name', ['value' => $book->name, 'id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter name']); ?>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Author</label>
                    <?php echo $this->Form->text('author', ['value' => $book->author, 'id' => 'author', 'class' => 'form-control', 'placeholder' => 'Enter author']); ?>
                    <!-- <input type="text" class="form-control" id="author" placeholder="Enter author"> -->
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email</label>
                    <?php echo $this->Form->text('email', ['value' => $book->email, 'id' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter email address']); ?>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Description</label>
                    <?php echo $this->Form->textarea('description', ['value' => $book->description, 'class' => 'form-control', 'placeholder' => 'Enter description']); ?>
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Upload Image </label>
                    <?php echo $this->Form->file('file', ['class' => 'form-control']); ?>
                </div>
                <div class="col-12">
                <?php echo $this->Form->button('Submit', ['class' => 'btn btn-success']); ?>
                </div>
               <?php echo $this->Form->end(); ?>
                </form>
            </div>
        </div>
    </div>
</div>
