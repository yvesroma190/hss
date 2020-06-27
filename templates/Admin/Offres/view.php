<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Offre'), ['action' => 'edit', $offre->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Offre'), ['action' => 'delete', $offre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Offres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Offre'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offres view content">
            <h3><?= h($offre->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $offre->has('category') ? $this->Html->link($offre->category->name, ['controller' => 'Categories', 'action' => 'view', $offre->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($offre->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= h($offre->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($offre->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($offre->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($offre->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($offre->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Souscriptions') ?></h4>
                <?php if (!empty($offre->souscriptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Offre Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offre->souscriptions as $souscriptions) : ?>
                        <tr>
                            <td><?= h($souscriptions->id) ?></td>
                            <td><?= h($souscriptions->offre_id) ?></td>
                            <td><?= h($souscriptions->client_id) ?></td>
                            <td><?= h($souscriptions->created) ?></td>
                            <td><?= h($souscriptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des offres</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12">
            <?= $this->Html->link(__('Liste des Offres'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Créer une Offre'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $offre->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $offre->id], ['confirm' => __('Voulez-vous supprimer l\'offre? # {0}?', $offre->id), 'class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Ajouter un élément'), ['controller' => 'Elements','action' => 'add', $offre->id], ['class' => 'btn btn-warning']) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($offre->name) ?></h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Catégorie') ?></th>
                    <td><?= $offre->has('category') ? $this->Html->link($offre->category->name, ['controller' => 'Categories', 'action' => 'view', $offre->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nom de l\'offre') ?></th>
                    <td><?= h($offre->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= h($offre->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($offre->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date création') ?></th>
                    <td><?= h($offre->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date modification') ?></th>
                    <td><?= h($offre->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($offre->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Souscriptions associées') ?></h4>
                <?php if (!empty($offre->souscriptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Offre Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offre->souscriptions as $souscriptions) : ?>
                        <tr>
                            <td><?= h($souscriptions->id) ?></td>
                            <td><?= h($souscriptions->offre_id) ?></td>
                            <td><?= h($souscriptions->client_id) ?></td>
                            <td><?= h($souscriptions->created) ?></td>
                            <td><?= h($souscriptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
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