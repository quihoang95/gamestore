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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create([$product, $categories]) ?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name:</label>
                <input name="name" value="<?= $product->name?>" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price:</label>
                <input name="price" value="<?= $product->price?>" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category:</label>
                <select name="categoryId" class="form-select" aria-label="Default select example" style="font-size: 20px;">
                    <?php foreach($categories as $category) {?>
                    <option value="<?= h($category->id)?>" <?=$category->id = $product->categoryId ? "selected":"" ?>selected ><?= h($category->name)?></option>
                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description:</label>
                <textarea name="description" type="text" class="form-control" style="font-size: 20px;"><?= $product->description?> </textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Point:</label>
                <input name="point" value="<?= $product->point?>" type="number" class="form-control" style="font-size: 20px;">
            </div>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
