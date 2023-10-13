<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coupon $coupon
 */
?>
<div class="row">
    <div class="column-responsive">
        <div class="coupons form content">
            <?= $this->Form->create($coupon,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('إضافة كوبون خصم جديد') ?></legend> <br>
                <?php
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('اسم المتجر',['name'=>'company','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('لوجو المتجر',['type'=>'file' ,'name'=>'logo','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('رابط المتجر',['name'=>'webiste','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('كوبون الخصم',['name'=>'coupon','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('وصف مختصر للكوبون',['name'=>'short_description','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('التصنيف',['name'=>'category_id' , 'options'=>$categories,'class'=>'form-control']).'</div>'; 
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('حفظ')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
