<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coupon $coupon
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Coupon'), ['action' => 'edit', $coupon->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Coupon'), ['action' => 'delete', $coupon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coupons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Coupon'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coupons view content">
            <h3><?= h($coupon->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($coupon->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($coupon->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Short Description') ?></th>
                    <td><?= h($coupon->short_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coupon') ?></th>
                    <td><?= h($coupon->coupon) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webiste') ?></th>
                    <td><?= h($coupon->webiste) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Active') ?></th>
                    <td><?= h($coupon->is_active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($coupon->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coupon->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coupon->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
