<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ContasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ContasController Test Case
 */
class ContasControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contas',
        'app.mesas',
        'app.agregacoes',
        'app.pedidos',
        'app.items_pedidos',
        'app.cardapios',
        'app.pedidos_cardapios',
        'app.reservas',
        'app.clientes',
        'app.mesas_reservas',
        'app.quotas_contas'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}