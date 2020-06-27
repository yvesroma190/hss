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



<?= $this->element('header'); ?>

<section id="inner-headline">
    <div class="container">
    <div class="row">
        <div class="span4">
        <div class="inner-heading">
            <h2>NOS OFFRES</h2>
        </div>
        </div>
        <div class="span8">
        <ul class="breadcrumb">
            <li><a href="<?= $this->Url->build(['controller' => 'Categories', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
            <li class="active">Offres</li>
        </ul>
        </div>
    </div>
    </div>
</section>


<section id="content">
    <div class="container">
    <div class="row">
    <!--<div class="span12">
        <h4><strong>NOS OFFRES</strong></h4>
        </div>-->
    </div>
    <!-- divider -->
    <!--<div class="row">
        <div class="span12">
        <div class="solidline">
        </div>
        </div>
    </div>-->
    <!-- end divider -->
    
    <div class="row">
        <!--<div class="span12">
            <h4><strong><?= @h($offre->category->name) ?></strong></h4>
        </div>-->
        <?php foreach ($offres as $offre): ?>
        <div class="span4">
            <div class="pricing-box-alt">
                <div class="pricing-heading">
                    <h3><strong><?= @h($offre->name) ?></strong></h3>
                </div>
                <div class="pricing-terms">
                    <h6> <?= @h($offre->prix) ?> FCFA / Mois</h6>
                </div>
                <div class="pricing-content">
                    <ul>
                        <?php foreach ($offre->elements as $elements) : ?>
                        <li><i class="icon-ok"></i><?= @h($elements->name) ?></li>
                        <?php endforeach; ?>
                        <!--<li><i class="icon-ok"></i> 24x7 support available</li>
                        <li><i class="icon-ok"></i> No hidden fees</li>
                        <li><i class="icon-ok"></i> Free 30-days trial</li>
                        <li><i class="icon-ok"></i> Stop anytime easily</li>-->
                    </ul>
                </div>
                <div class="pricing-action">
                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Souscrire</a>
                </div>
            </div>
        </div>
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

