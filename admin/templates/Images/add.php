<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Images'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create([$image, $products],['type'=>'file']) ?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image:</label>
                <input name="image" type="file" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Product:</label>
                <select name="productId" class="form-select" aria-label="Default select example" style="font-size: 20px;">
                    <?php foreach($products as $product) {?>
                    <option value="<?= h($product->id)?>" selected><?= h($product->name)?></option>
                    <?php }?>
                </select>
            </div>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
