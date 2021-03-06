<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tickets form large-9 medium-8 columns content">
    <?= $this->Form->create($ticket) ?>
    <fieldset>
        <legend><?= __('Add Ticket') ?></legend>
        <?php
            echo $this->Form->input('modelo');
            echo $this->Form->input('serie');
            echo $this->Form->input('marca');
            echo $this->Form->input('placa_universitaria');
            echo $this->Form->input('tipo_activo');
            echo $this->Form->input('observaciones');
            echo $this->Form->input('fecha_solicitud', ['empty' => true]);
            echo $this->Form->input('fecha_expiracion', ['empty' => true]);
            echo $this->Form->input('estado');
            echo $this->Form->input('users_correo_aprueba');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
