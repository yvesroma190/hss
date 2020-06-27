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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Offres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offres form content">
            <?= $this->Form->create($offre) ?>
            <fieldset>
                <legend><?= __('Edit Offre') ?></legend>
                <?php
                    echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
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
                <a href=<?= $this->Url->build(['controller'=>'Offres', 'action'=>'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-list"></i>
                    </span>
                    <span class="text">Liste des offres</span>
                </a>
                <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'Supprimer cette offre', $offre->id],
                ['confirm' => __('Voulez-vous supprimer cette offre? # {0}?', $offre->id), 'class' => 'btn btn-danger']
                ) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier l'offre</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($offre) ?>
                <div class="form-group">
                    <?= $this->Form->control('category_id', ['options' => $categories, 'empty' => true, 'class'=>'form-control', 'label'=>'Nom de la catégorie:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('name', ['type'=>'text', 'class'=>'form-control', 'label'=>'Nom de l\'offre:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('prix', ['type'=>'text', 'class'=>'form-control', 'label'=>'Prix de l\'offre:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('description', ['type'=>'textarea', 'class'=>'form-control', 'label'=>'Description:']);?>
                </div>

                <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier</span>
                </button>

                <button class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-times-circle "></i>
                </span>
                <span class="text">Annuler</span>
                </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>