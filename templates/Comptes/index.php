<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte[]|\Cake\Collection\CollectionInterface $comptes
 */
?>
<div class="comptes index content">
    <?= $this->Html->link(__('New Compte'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comptes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('login') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comptes as $compte): ?>
                <tr>
                    <td><?= $this->Number->format($compte->id) ?></td>
                    <td><?= h($compte->login) ?></td>
                    <td><?= h($compte->password) ?></td>
                    <td><?= h($compte->created) ?></td>
                    <td><?= h($compte->modified) ?></td>
                    <td><?= $compte->has('client') ? $this->Html->link($compte->client->name, ['controller' => 'Clients', 'action' => 'view', $compte->client->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $compte->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compte->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compte->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
