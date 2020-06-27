<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Element[]|\Cake\Collection\CollectionInterface $elements
 */
?>
<!--<div class="elements index content">
    <?= $this->Html->link(__('New Element'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Elements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('offre_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($elements as $element): ?>
                <tr>
                    <td><?= $this->Number->format($element->id) ?></td>
                    <td><?= h($element->name) ?></td>
                    <td><?= h($element->created) ?></td>
                    <td><?= h($element->modified) ?></td>
                    <td><?= $element->has('offre') ? $this->Html->link($element->offre->name, ['controller' => 'Offres', 'action' => 'view', $element->offre->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $element->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $element->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $element->id], ['confirm' => __('Are you sure you want to delete # {0}?', $element->id)]) ?>
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
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des éléments</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href=<?= $this->Url->build(['controller'=>'Elements', 'action'=>'add']) ?> class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter un élément</span>
                </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    
    

    <!-- Content Row -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des éléments</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('Nom d\'élément') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th><?= $this->Paginator->sort('offre_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('Nom d\'élément') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th><?= $this->Paginator->sort('offre_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($elements as $element): ?>
                    <tr>
                        <td><?= $this->Number->format($element->id) ?></td>
                        <td><?= h($element->name) ?></td>
                        <td><?= h($element->created) ?></td>
                        <td><?= h($element->modified) ?></td>
                        <td><?= $element->has('offre') ? $this->Html->link($element->offre->name, ['controller' => 'Offres', 'action' => 'view', $element->offre->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__(''), ['action' => 'view', $element->id],['class' => 'btn btn-primary fas fa-list btn-circle btn-sm']) ?>
                            <?= $this->Html->link(__(''), ['action' => 'edit', $element->id],['class' => 'btn btn-success fas fa-pencil-alt btn-circle btn-sm']) ?>
                            <?= $this->Form->postLink(__(''), ['action' => 'delete', $element->id], ['confirm' => __('Voulez-vous supprimer l\'élément? # {0}?', $element->id), 'class' => 'btn btn-danger fas fa-trash btn-circle btn-sm']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    <!-- Content Row -->
    <div class="row">
    </div>

</div>