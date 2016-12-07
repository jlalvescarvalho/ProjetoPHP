<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $pessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'deletar', $pessoa->id], ['confirm' => __('Realmente deseja deletar # {0}?', $pessoa->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Pessoas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Pessoa'), ['action' => 'adicionar']) ?> </li>
    </ul>
</nav>
<div class="pessoas recuperar large-9 medium-8 columns content">
    <h3><?= h($pessoa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->Nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idade') ?></th>
            <td><?= $this->Number->format($pessoa->Idade) ?></td>
        </tr>
    </table>
</div>
