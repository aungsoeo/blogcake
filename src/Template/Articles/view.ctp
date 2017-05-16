<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="articles view large-12 medium-12 columns content">
    <h3><?= h($article->title) ?></h3>
    <div class="">
       <p><?= h($article->title) ?></p>
       <time> <?= h($article->created) ?></time>
    </div>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($article->body)); ?>
    </div>

        <div class="comments form large-12 medium-12 columns content">
            <h4><?= __('Comments') ?></h4>
            <?php if (!empty($article->comments)): ?>
                <?php foreach ($article->comments as $comments): ?>
                  <div class="comment">
                    <div class="topright">
                      <?= $this->Form->postLink('Delete', ['controller'=>'comments','action' => 'delete', $comments['id']], ['confirm' => 'Are you sure ?', $comments['id']]) ?>
                    </div>
                    <p><?= ($comments->comment) ?></p>
                    <time><?= h($comments->created) ?></time>
                  </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="comments form large-12 medium-12 columns comment_box">
              <?= $this->Form->create('$comment',['url'=>['controller'=>'Comments','action'=>'add']]) ?>
            <fieldset>
                <legend><?= __('Add Comment') ?></legend>
                <?php
                    echo $this->Form->control('comment');
                    echo $this->Form->control('article_id', ['value'=>$article['id'],'type'=>'hidden']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div>
