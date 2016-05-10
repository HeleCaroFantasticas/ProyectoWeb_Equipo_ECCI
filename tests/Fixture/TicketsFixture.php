<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketsFixture
 *
 */
class TicketsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modelo' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'serie' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'marca' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'codigo_QR' => ['type' => 'binary', 'length' => 4294967295, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'placa_universitaria' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo_activo' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'observaciones' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_solicitud' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_expiracion' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => '1000-01-01', 'comment' => '', 'precision' => null],
        'estado' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'users_correo_solicita' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'users_correo_aprueba' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_tickets_users_idx' => ['type' => 'index', 'columns' => ['users_correo_solicita'], 'length' => []],
            'fk_tickets_users1_idx' => ['type' => 'index', 'columns' => ['users_correo_aprueba'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'users_correo_solicita'], 'length' => []],
            'fk_tickets_users' => ['type' => 'foreign', 'columns' => ['users_correo_solicita'], 'references' => ['users', 'correo'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_tickets_users1' => ['type' => 'foreign', 'columns' => ['users_correo_aprueba'], 'references' => ['users', 'correo'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'modelo' => 'Lorem ipsum dolor ',
            'serie' => 'Lorem ipsum dolor sit amet',
            'marca' => 'Lorem ipsum d',
            'codigo_QR' => 'Lorem ipsum dolor sit amet',
            'placa_universitaria' => 'Lorem ipsum dolor sit amet',
            'tipo_activo' => 'Lorem ipsum d',
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'fecha_solicitud' => '2016-05-10',
            'fecha_expiracion' => '2016-05-10',
            'estado' => 'Lorem ipsum dolor ',
            'users_correo_solicita' => 'fd7ff2a6-56b2-4a83-959c-fdecef83e88e',
            'users_correo_aprueba' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
