<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'deletar', $pessoa->id],
                ['confirm' => __('Rea # {0}?', $pessoa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Pessoas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Editar Pessoa') ?></legend>
        <?php
            echo $this->Form->input('Nome');
            echo $this->Form->input('Idade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>
