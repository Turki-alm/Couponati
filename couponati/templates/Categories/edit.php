<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <div class="column-responsive ">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <legend><?= __('تعديل التصنيف ') ?></legend>
                <?php
                    echo $this->Form->control('الاسم',['name'=>'name' , 'value'=>$category->name]);
                ?>
            </fieldset> <br>
            <?= $this->Form->button(__('حفظ')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
