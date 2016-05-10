<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tickets index large-9 medium-8 columns content">
    <h3><?= __('Tickets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('modelo') ?></th>
                <th><?= $this->Paginator->sort('serie') ?></th>
                <th><?= $this->Paginator->sort('marca') ?></th>
                <th><?= $this->Paginator->sort('placa_universitaria') ?></th>
                <th><?= $this->Paginator->sort('tipo_activo') ?></th>
                <th><?= $this->Paginator->sort('observaciones') ?></th>
                <th><?= $this->Paginator->sort('fecha_solicitud') ?></th>
                <th><?= $this->Paginator->sort('fecha_expiracion') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th><?= $this->Paginator->sort('users_correo_solicita') ?></th>
                <th><?= $this->Paginator->sort('users_correo_aprueba') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td><?= h($ticket->modelo) ?></td>
                <td><?= h($ticket->serie) ?></td>
                <td><?= h($ticket->marca) ?></td>
                <td><?= h($ticket->placa_universitaria) ?></td>
                <td><?= h($ticket->tipo_activo) ?></td>
                <td><?= h($ticket->observaciones) ?></td>
                <td><?= h($ticket->fecha_solicitud) ?></td>
                <td><?= h($ticket->fecha_expiracion) ?></td>
                <td><?= h($ticket->estado) ?></td>
                <td><?= h($ticket->users_correo_solicita) ?></td>
                <td><?= h($ticket->users_correo_aprueba) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
