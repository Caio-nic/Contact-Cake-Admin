<?php 

class ContactsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $uses = array('Contact'); // Carrega o model Contact

    public function index() {
        // $this->set('contacts', $this->Contact->find('all'));
        $contacts = $this->Contact->find('all');
        $this->set(array(
            'contacts' => $contacts,
            '_serialize' => array('contacts')
        ));
    }
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid contact'));
        }
        $contact = $this->Contact->findById($id);
        if (!$contact) {
            throw new NotFoundException(__('Invalid contact'));
        }
        $this->set('contact', $contact);
    }
}