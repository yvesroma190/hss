<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategorieArticle[]|\Cake\Collection\CollectionInterface $categorieArticles
 */
?>
<!--<div class="categorieArticles index content">
    <?= $this->Html->link(__('New Categorie Article'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorie Articles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorieArticles as $categorieArticle): ?>
                <tr>
                    <td><?= $this->Number->format($categorieArticle->id) ?></td>
                    <td><?= h($categorieArticle->name) ?></td>
                    <td><?= h($categorieArticle->created) ?></td>
                    <td><?= h($categorieArticle->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categorieArticle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorieArticle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorieArticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorieArticle->id)]) ?>
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
    <h1 class="h3 mb-0 text-gray-800">Gestion des catégories d'articles</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12"> 
                       
                <a href=<?= $this->Url->build(['controller'=>'CategorieArticles', 'action'=>'add']) ?> class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Créer une catégorie d'articles</span>
                </a>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    
    

    <!-- Content Row -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste des catégories d'articles</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('Nom') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('Nom') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </tfoot>
                    <tbody>
                        <?php foreach ($categorieArticles as $categorieArticle): ?>
                        <tr>
                            <td><?= $this->Number->format($categorieArticle->id) ?></td>
                            <td><?= h($categorieArticle->name) ?></td>
                            <td><?= h($categorieArticle->created) ?></td>
                            <td><?= h($categorieArticle->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__(''), ['action' => 'view', $categorieArticle->id],['class' => 'btn btn-primary fas fa-list btn-circle btn-sm']) ?>
                                <?= $this->Html->link(__(''), ['action' => 'edit', $categorieArticle->id],['class' => 'btn btn-success fas fa-pencil-alt btn-circle btn-sm']) ?>
                                <?= $this->Form->postLink(__(''), ['action' => 'delete', $categorieArticle->id], ['confirm' => __('Voulez-vous supprimer cette catégorie? # {0}?', $categorieArticle->id), 'class' => 'btn btn-danger fas fa-trash btn-circle btn-sm']) ?>
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