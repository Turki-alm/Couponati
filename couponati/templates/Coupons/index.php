<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Coupon> $coupons
 */
?>
<div class="coupons index content">
    <?= $this->Html->link(__('اضافة كوبون جديد '), ['action' => 'add'], ['class' => 'button float-left']) ?>
    <h3><?= __('الكوبونات') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('logo',['name'=>'لوجو']) ?></th>
                    <th><?= $this->Paginator->sort('company',['name'=>'اسم المتجر']) ?></th>
                    <th><?= $this->Paginator->sort('short_description',['name'=>'وصف مختصر']) ?></th>
                    <th><?= $this->Paginator->sort('coupon',['name'=>'كود الخصم']) ?></th>
                    <th><?= $this->Paginator->sort('webiste',['name'=>'رابط المتجر']) ?></th>
                     <th><?= $this->Paginator->sort('created',['name'=>'تاريخ الانشاء']) ?></th>
                     <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coupons as $coupon): ?>
                <tr>
                    <td><img src="<?=URL?><?= h($coupon->logo) ?>"  height="100px" width="100px"></td>
                    <td><?= h($coupon->company) ?></td>
                    <td><?= h($coupon->short_description) ?></td>
                    <td><?= h($coupon->coupon) ?></td>
                    <td><?= h($coupon->webiste) ?></td>
                    <td><?= h($coupon->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('تعديل'), ['action' => 'edit', $coupon->id ], ['class'=>'btn btn-primary' , 'style'=>'width:100px;padding:10px']) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $coupon->id ], ['confirm' => __('سيتم حذف الكوبون'),'class'=>'btn btn-danger' , 'style'=>'width:100px;padding:10px']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('الاول')) ?>
            <?= $this->Paginator->prev('< ' . __('السابق')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('التالى') . ' >') ?>
            <?= $this->Paginator->last(__('الاخير') . ' >>') ?>
        </ul>
    </div>
</div>
