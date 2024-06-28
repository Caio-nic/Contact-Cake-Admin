<?php 

class ContactsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('contact', $this->Contact->find('all'));
    }
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid message'));
        }

        $contact = $this->Contact->findById($id);
        if (!$contact) {
            throw new NotFoundException(__('Invalid message'));
        }
        $this->set('contact', $contact);
    }
}