<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create([$product, $categories]) ?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name:</label>
                <input name="name" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price:</label>
                <input name="price" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category:</label>
                <select name="categoryId" class="form-select" aria-label="Default select example" style="font-size: 20px;">
                    <?php foreach($categories as $category) {?>
                    <option value="<?= h($category->id)?>" selected><?= h($category->name)?></option>
                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description:</label>
                <textarea name="description" type="text" class="form-control" style="font-size: 20px;"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Point:</label>
                <input name="point" type="number" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image:</label>
                <input name="image" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Create at:</label>
                <input name="create_at" type="date" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Update at:</label>
                <input name="update_at" type="date" class="form-control" style="font-size: 20px;">
            </div>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
