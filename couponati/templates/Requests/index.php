<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Request> $requests
 */
?>
<div class="requests index content">
    <h3><?= __('طلبات المتاجر') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('full_name',['name'=>'الاسم بالكامل']) ?></th>
                    <th><?= $this->Paginator->sort('email',['name'=>'البريد الالكترونى']) ?></th>
                    <th><?= $this->Paginator->sort('phone',['name'=>'رقم الهاتف']) ?></th>
                    <th><?= $this->Paginator->sort('website',['name'=>'رابط المتجر']) ?></th>
                    <th><?= $this->Paginator->sort('trade_mark',['name'=>'العلامة التجارية']) ?></th>
                    <th><?= $this->Paginator->sort('monthly_orders_average',['name'=>'متوسط عدد الطلبات الشهرية']) ?></th>
                    <th><?= $this->Paginator->sort('purchases_average',['name'=>'متوسط سلة المشتريات']) ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requests as $request): ?>
                <tr>
                    <td><?= h($request->full_name) ?></td>
                    <td><?= h($request->email) ?></td>
                    <td><?= h($request->phone) ?></td>
                    <td><?= h($request->website) ?></td>
                    <td><?= h($request->trade_mark) ?></td>
                    <td><?= $this->Number->format($request->monthly_orders_average) ?></td>
                    <td><?= $this->Number->format($request->purchases_average) ?></td>
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
