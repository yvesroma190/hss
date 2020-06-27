<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<div class="row">
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
            <div class="related">
                <h4><?= __('Related Elements') ?></h4>
                <?php if (!empty($offre->elements)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Offre Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offre->elements as $elements) : ?>
                        <tr>
                            <td><?= h($elements->id) ?></td>
                            <td><?= h($elements->name) ?></td>
                            <td><?= h($elements->created) ?></td>
                            <td><?= h($elements->modified) ?></td>
                            <td><?= h($elements->offre_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Elements', 'action' => 'view', $elements->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Elements', 'action' => 'edit', $elements->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Elements', 'action' => 'delete', $elements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elements->id)]) ?>
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
