<?php
App::uses('CakeEmail', 'Network/Email');
App::uses('Sanitize', 'Utility');

class RegistrationController extends AppController {
    
    public $name = "Registrations";
    public $uses = array( 'Registration', 'User', 'State' );
    
    public function index() {
		$states = $this->State->find( 'list', array( 'fields' => array( 'id', 'name' ) ) );
		$this->set( 'states', $states );
		if( $data = $this->request->data) {
			$data = Sanitize::clean( $data, array('encode' => false) );
			$data['user_id'] = $this->Session->read('User.id');
			$this->Registration->save( $data );
			$regId = $this->Registration->getLastInsertId();
			$this->generatePgid( $data['user_id'], $regId, $data['pg_state'] );
		}
	}
	
	public function generatePgid( $userId = null, $regId = null, $stateId = null ) {
		$stateShort = $this->State->find( 'first', array( 'fields' => array( 'short_name' ), 'conditions' => array( 'id' => $stateId ) ) );
		$pgid = strtoupper( 'PGU' . $userId . $stateShort['State']['short_name'] . 'R' . $regId );
		$this->Registration->save(array( 'id' => $regId, 'pgid' => $pgid ) );
		$pg = '0';
		$this->Session->write( 'Pg', $pg );
		$this->Session->setFlash(__( "PG Registered" ), 'default', array( 'class' => 'alert alert-success' )  );
        $this->redirect( array( 'action' => 'success', $pgid ) );
	}
	
	public function success( $pgid = null ) {
		$this->set( 'pgid', $pgid );
	}
	
	public function pg( $pgid = null ) {
		$regData = $this->Registration->find( 'first', array( 'conditions' => array( 'pgid' => $pgid ) ) );
		$this->set( 'regData', $regData );
	}
	
}
