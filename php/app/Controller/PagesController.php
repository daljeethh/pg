<?php

App::uses('AppController', 'Controller');


class PagesController extends AppController {

	public $name = 'Pages';
	public $uses = array( 'State' );

	public function index() {
		$states = $this->State->find( 'list', array( 'fields' => array( 'id', 'name' ) ) );
		$this->set( 'states', $states );
		if( $data = $this->request->data ) {
			if( $data['searchpgid'] == 'Go' ) $this->redirect( array( 'controller' => 'registration', 'action' => 'pg/' .  $data['pgid'] ) );
		}
	}
	
}
