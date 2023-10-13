<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($category->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Coupons') ?></h4>
                <?php if (!empty($category->coupons)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Logo') ?></th>
                            <th><?= __('Company') ?></th>
                            <th><?= __('Short Description') ?></th>
                            <th><?= __('Coupon') ?></th>
                            <th><?= __('Webiste') ?></th>
                            <th><?= __('Is Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->coupons as $coupons) : ?>
                        <tr>
                            <td><?= h($coupons->id) ?></td>
                            <td><?= h($coupons->logo) ?></td>
                            <td><?= h($coupons->company) ?></td>
                            <td><?= h($coupons->short_description) ?></td>
                            <td><?= h($coupons->coupon) ?></td>
                            <td><?= h($coupons->webiste) ?></td>
                            <td><?= h($coupons->is_active) ?></td>
                            <td><?= h($coupons->created) ?></td>
                            <td><?= h($coupons->modified) ?></td>
                            <td><?= h($coupons->category_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Coupons', 'action' => 'view', $coupons->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Coupons', 'action' => 'edit', $coupons->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Coupons', 'action' => 'delete', $coupons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coupons->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
