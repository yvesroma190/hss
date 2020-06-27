<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre[]|\Cake\Collection\CollectionInterface $offres
 */
?>
<!--<div class="offres index content">
    <?= $this->Html->link(__('New Offre'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Offres') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($offres as $offre): ?>
                <tr>
                    <td><?= $this->Number->format($offre->id) ?></td>
                    <td><?= $offre->has('category') ? $this->Html->link($offre->category->name, ['controller' => 'Categories', 'action' => 'view', $offre->category->id]) : '' ?></td>
                    <td><?= h($offre->name) ?></td>
                    <td><?= h($offre->prix) ?></td>
                    <td><?= h($offre->created) ?></td>
                    <td><?= h($offre->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $offre->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offre->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id)]) ?>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des Offres</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href="<?= $this->Url->build(['controller'=>'Offres', 'action'=>'add']) ?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Ajouter une offre</span>
                </a>
                <a href=<?= $this->Url->build(['controller'=>'Categories', 'action'=>'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-list-ul"></i>
                    </span>
                    <span class="text">Catégories d'offres</span>
                </a>
                <a href=<?= $this->Url->build(['controller'=>'Elements', 'action'=>'index']) ?> class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-database"></i>
                    </span>
                    <span class="text">Eléments d'offres</span>
                  </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    
    

    <!-- Content Row -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des offres</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><?= $this->Paginator->sort('id') ?></th>
                      <th><?= $this->Paginator->sort('Catégorie') ?></th>
                      <th><?= $this->Paginator->sort('Nom d\'offre') ?></th>
                      <th><?= $this->Paginator->sort('prix') ?></th>
                      <th><?= $this->Paginator->sort('created') ?></th>
                      <th><?= $this->Paginator->sort('modified') ?></th>
                      <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><?= $this->Paginator->sort('id') ?></th>
                      <th><?= $this->Paginator->sort('Catégorie') ?></th>
                      <th><?= $this->Paginator->sort('Nom d\'offre') ?></th>
                      <th><?= $this->Paginator->sort('prix') ?></th>
                      <th><?= $this->Paginator->sort('created') ?></th>
                      <th><?= $this->Paginator->sort('modified') ?></th>
                      <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php foreach ($offres as $offre): ?>
                      <tr>
                          <td><?= $this->Number->format($offre->id) ?></td>
                          <td><?= $offre->has('category') ? $this->Html->link($offre->category->name, ['controller' => 'Categories', 'action' => 'view', $offre->category->id]) : '' ?></td>
                          <td><?= h($offre->name) ?></td>
                          <td><?= h($offre->prix) ?></td>
                          <td><?= h($offre->created) ?></td>
                          <td><?= h($offre->modified) ?></td>
                          <td class="actions">
                              <?= $this->Html->link(__(''), ['action' => 'view', $offre->id],['class' => 'btn btn-primary fas fa-list btn-circle btn-sm']) ?>
                              <?= $this->Html->link(__(''), ['action' => 'edit', $offre->id],['class' => 'btn btn-success fas fa-pencil-alt  btn-circle btn-sm ']) ?>
                              <?= $this->Form->postLink(__(''), ['action' => 'delete', $offre->id], ['confirm' => __('Voulez-vous supprimer cette offre? # {0}?', $offre->id), 'class' => 'btn btn-danger fas fa-trash btn-circle btn-sm ']) ?>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



</div>