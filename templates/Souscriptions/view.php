<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription $souscription
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Souscription'), ['action' => 'edit', $souscription->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Souscription'), ['action' => 'delete', $souscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Souscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Souscription'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="souscriptions view content">
            <h3><?= h($souscription->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Offre') ?></th>
                    <td><?= $souscription->has('offre') ? $this->Html->link($souscription->offre->name, ['controller' => 'Offres', 'action' => 'view', $souscription->offre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($souscription->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($souscription->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($souscription->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
