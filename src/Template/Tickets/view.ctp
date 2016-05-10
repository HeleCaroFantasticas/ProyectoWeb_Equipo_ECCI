<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tickets view large-9 medium-8 columns content">
    <h3><?= h($ticket->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Modelo') ?></th>
            <td><?= h($ticket->modelo) ?></td>
        </tr>
        <tr>
            <th><?= __('Serie') ?></th>
            <td><?= h($ticket->serie) ?></td>
        </tr>
        <tr>
            <th><?= __('Marca') ?></th>
            <td><?= h($ticket->marca) ?></td>
        </tr>
        <tr>
            <th><?= __('Placa Universitaria') ?></th>
            <td><?= h($ticket->placa_universitaria) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Activo') ?></th>
            <td><?= h($ticket->tipo_activo) ?></td>
        </tr>
        <tr>
            <th><?= __('Observaciones') ?></th>
            <td><?= h($ticket->observaciones) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($ticket->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Users Correo Solicita') ?></th>
            <td><?= h($ticket->users_correo_solicita) ?></td>
        </tr>
        <tr>
            <th><?= __('Users Correo Aprueba') ?></th>
            <td><?= h($ticket->users_correo_aprueba) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticket->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Solicitud') ?></th>
            <td><?= h($ticket->fecha_solicitud) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Expiracion') ?></th>
            <td><?= h($ticket->fecha_expiracion) ?></td>
        </tr>
    </table>
</div>
