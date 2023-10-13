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
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('اسم المتجر',['value'=>$coupon["company"],'name'=>'company','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.
                        $this->Form->control('لوجو المتجر',['type'=>'file' ,'name'=>'logo','class'=>'form-control']).
                        '<br><img src="'.URL.$coupon->logo.'"  height="100px" width="100px">'.
                        '</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('رابط المتجر',['value'=>$coupon["webiste"],'name'=>'webiste','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('كوبون الخصم',['value'=>$coupon["coupon"],'name'=>'coupon','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('وصف مختصر للكوبون',['value'=>$coupon["short_description"],'name'=>'short_description','class'=>'form-control']).'</div>'; 
                    echo '<div class="form-group col-sm-12 mt-5">'.$this->Form->control('التصنيف',['value'=>$coupon["category_id"],'name'=>'category_id' , 'options'=>$categories,'class'=>'form-control']).'</div>'; 
                ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('حفظ')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
