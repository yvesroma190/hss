<?php
declare(strict_types=1);


namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Cake\Event\Event;


class AppController extends Controller
{
    
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }
}
