<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->correo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->correo], ['confirm' => __('Are you sure you want to delete # {0}?', $user->correo)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->correo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Correo') ?></th>
            <td><?= h($user->correo) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($user->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedula') ?></th>
            <td><?= $this->Number->format($user->cedula) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Usuario') ?></th>
            <td><?= $this->Number->format($user->tipo_usuario) ?></td>
        </tr>
    </table>
</div>
