<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articles index large-12 medium-12 columns content">
  <div class="add">
      <?= $this->Html->link(__('Add New Article'), ['controller'=>'Articles','action' => 'add']) ?>
  </div>
    <h3><?= __('Articles') ?></h3><hr>

          <?php foreach ($articles as $article) : ?>

            <div class="article">
                <article >
                  <?= $this->Html->link(__("$article->title"), ['action' => 'view', $article->id]) ?>
                </article>
                <time><?= h($article->created) ?></time>
                <br>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
            </div> <hr>
          <?php endforeach; ?>


    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
