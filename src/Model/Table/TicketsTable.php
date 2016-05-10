<?php
namespace App\Model\Table;

use App\Model\Entity\Ticket;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tickets Model
 *
 */
class TicketsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tickets');
        $this->displayField('id');
        $this->primaryKey(['id', 'users_correo_solicita']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('modelo');

        $validator
            ->allowEmpty('serie');

        $validator
            ->allowEmpty('marca');

        $validator
            ->allowEmpty('codigo_QR');

        $validator
            ->allowEmpty('placa_universitaria');

        $validator
            ->allowEmpty('tipo_activo');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->date('fecha_solicitud')
            ->allowEmpty('fecha_solicitud');

        $validator
            ->date('fecha_expiracion')
            ->allowEmpty('fecha_expiracion');

        $validator
            ->allowEmpty('estado');

        $validator
            ->allowEmpty('users_correo_solicita', 'create');

        $validator
            ->allowEmpty('users_correo_aprueba');

        return $validator;
    }
}
