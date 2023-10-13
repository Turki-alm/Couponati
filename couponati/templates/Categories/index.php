<div class="categories index content">
    <?= $this->Html->link(__('إضافة تصنيف جديد '), ['action' => 'add'], ['class' => 'button float-left']) ?>
    <h3><?= __('كل التصنيفات') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                     <th><?= $this->Paginator->sort('name',['name'=>'اسم التصنيف']) ?></th>
                    <th class="actions"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= h($category->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('تعديل'), ['action' => 'edit', $category->id ], ['class'=>'btn btn-primary' , 'style'=>'width:100px;padding:10px']) ?>
                        <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $category->id ], ['confirm' => __('سيتم حذف التصنيف'),'class'=>'btn btn-danger' , 'style'=>'width:100px;padding:10px']) ?>
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
