<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Element $element
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $element->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $element->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Elements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="elements form content">
            <?= $this->Form->create($element) ?>
            <fieldset>
                <legend><?= __('Edit Element') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
