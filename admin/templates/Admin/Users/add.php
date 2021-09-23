<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Back'), $this->request->referer()) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create([$user, $roles]) ?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name:</label>
                <input name="name" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Birthday:</label>
                <input name="birthday" type="date" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                <input name="email" type="email" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone number:</label>
                <input name="phone" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address:</label>
                <input name="address" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">User name:</label>
                <input name="username" type="text" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password:</label>
                <input name="password" type="password" class="form-control" style="font-size: 20px;">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Role:</label>
                <select name="roleId" class="form-select" aria-label="Default select example" style="font-size: 20px;">
                    <?php foreach($roles as $role) {?>
                    <option value="<?= h($role->id)?>" selected><?= h($role->name)?></option>
                    <?php }?>
                </select>
            </div>
           
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
