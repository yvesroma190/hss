<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<!--<div class="categories index content">
    <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categories') ?></h3>
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
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $this->Number->format($category->id) ?></td>
                    <td><?= h($category->name) ?></td>
                    <td><?= h($category->created) ?></td>
                    <td><?= h($category->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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


<?= $this->element('header'); ?>
<?= $this->element('slider'); ?>





<section id="content">
    <div class="container">
    <div class="row">
    <div class="span12">
        <h4><strong>NOS OFFRES</strong></h4>
        </div>
    </div>
    <!-- divider -->
    <div class="row">
        <div class="span12">
        <div class="solidline">
        </div>
        </div>
    </div>
    <!-- end divider -->
    
    <div class="row">
        <?php foreach ($categories as $category): ?>
        <div class="span12">
            <h4><strong><?= h($category->name) ?></strong></h4>
        </div>
        <?php foreach ($category->offres as $offres) : ?>
        <div class="span4">
            <div class="pricing-box-alt">
                <div class="pricing-heading">
                    <h3><strong><?= @h($offres->name) ?></strong></h3>
                </div>
                <div class="pricing-terms">
                    <h6> <?= @h($offres->prix) ?> FCFA / Mois</h6>
                </div>
                <div class="pricing-content">
                    <ul>
                    <?php foreach ($offres as $offre) : ?>
                        <?php foreach ($offre->elements as $elements) : ?>
                        <li><i class="icon-ok"></i><?= @h($elements->name) ?></li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                        
                    </ul>
                </div>
                <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Souscrire</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
    <!-- divider -->
    <div class="row">
        <div class="span12">
        <div class="solidline">
        </div>
        </div>
    </div>
    <!-- end divider -->
    
    <!--<div class="row">
        <div class="span12">
        <div class="row">
            <div class="span3">
            <div class="box aligncenter">
                <div class="aligncenter icon">
                <i class="icon-briefcase icon-circled icon-64 active"></i>
                </div>
                <div class="text">
                <h6>Securité physique</h6>
                <p>
                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                </p>
                <a href="#">Détails</a>
                </div>
            </div>
            </div>
            <div class="span3">
            <div class="box aligncenter">
                <div class="aligncenter icon">
                <i class=" icon-truck icon-circled icon-64 active"></i>
                </div>
                <div class="text">
                <h6>Escorte</h6>
                <p>
                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                </p>
                <a href="#">Détails</a>
                </div>
            </div>
            </div>
            <div class="span3">
            <div class="box aligncenter">
                <div class="aligncenter icon">
                <i class=" icon-camera icon-circled icon-64 active"></i>
                </div>
                <div class="text">
                <h6>Télésurveillance</h6>
                <p>
                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                </p>
                <a href="#">Détails</a>
                </div>
            </div>
            </div>
            <div class="span3">
            <div class="box aligncenter">
                <div class="aligncenter icon">
                <i class=" icon-bell icon-circled icon-64 active"></i>
                </div>
                <div class="text">
                <h6>Alarme</h6>
                <p>
                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                </p>
                <a href="#">Détails</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>-->

    <!--<div class="row">
        <div class="span12">
        <h4>Nos clients <strong>satisfaits</strong></h4>
        <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
            <li>
            <a href="#">
                <img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client1.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client2.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client3.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client4.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client5.png" class="client-logo" alt="" />
                </a>
            </li>
            <li>
            <a href="#">
                <img src="img/dummies/clients/client6.png" class="client-logo" alt="" />
                </a>
            </li>
        </ul>
        </div>
    </div>-->
    </div>
</section>





<?= $this->element('footer'); ?>

