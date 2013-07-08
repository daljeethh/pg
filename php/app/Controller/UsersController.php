<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');


class UsersController extends AppController {

	public $name = 'Users';
    public $uses = array( 'Registration', 'User', 'State' );

	public function signup() {
		if($this->request->data) {
			if( $this->commonElements() ) {
				$data['User'] = $this->data;
				$this->set('data', $this->data );
			} else {
				$this->User->create();
				$data = Sanitize::clean( $this->request->data, array('encode' => false) );
				$data = array_merge($data, array( 'user_pass' => md5($data['user_pass'] )) ); 
				$this->User->save($data);
				$this->Session->setFlash(__('New user created'), 'default', array( 'class' => 'alert alert-success' ) );
				$this->redirect( array( 'controller' => 'pages' ) );
			}
		}
	}

	public function commonElements( $id = null ) {
		if( $id )  $conditions = array( 'OR' => array( 'user_name' => $this->data['user_name'], 'email' => $this->data['email'], 'mobile' => $this->data['mobile'] ), 'id NOT' => $id );
		else $conditions = array( 'OR' => array( 'user_name' => $this->data['user_name'], 'email' => $this->data['email'], 'mobile' => $this->data['mobile'] ) );
		$userData = $this->User->find('first', array( 'fields' => array( 'user_name AS User_name', 'email AS Email_Id', 'mobile AS Mobile_No' ), 'conditions' => $conditions ) );
		if( $userData ) {
			$commonElements = array_intersect($userData['User'], array( $this->data['user_name'], $this->data['mobile'], $this->data['email'] ) );
			if( $commonElements ) {
				$message = null;
				foreach( $commonElements as $key => $value ) {
					$message .= str_replace( '_', ' ', $key) . " ";
				}
				$message .= 'already exist!!';
				$this->Session->setFlash(__( $message ), 'default', array( 'class' => 'alert alert-error' )  );
			}
			return true;
		} else return false;
	}

	public function login() {
		if( $this->Session->read( "User" ) ) $this->redirect( array( 'controller' => 'pages', 'action' => 'index' ) );
		if( $data = $this->request->data) {
			$user = $this->User->find( 'first', array( 'conditions' => array( 'user_name' => $data['User']['user_name'], 'user_pass' => md5( $data['User']['user_pass'] ), 'is_active' => 1 )));
			$pg = $this->Registration->find( 'count', array( 'conditions' => array( 'user_id' => $user['User']['id'] ) ) );
			$this->Session->write( 'Pg', $pg );
			if( $user ){
				$this->User->save(array( 'id' => $user['User']['id'], 'last_login' => date("Y-m-d H:i:s") ) );
				$this->Session->write( 'User', $user['User']);
           		$this->redirect( array( 'controller' => 'pages', 'action' => 'index' ) );
			}
		}
	}

	public function logout() {
		$this->Session->destroy();
   		$this->redirect( array( 'controller' => 'pages', 'action' => 'index' ) );
	}
	
	public function view( $id ) {
		if( $this->Session->read( 'User.role_id' ) == '1' || $this->Session->read( 'User.id' ) == $id ) $id = $id;
		else $id = $this->Session->read( 'User.id' );
		$userDetails = $this->User->find( 'first', array( 'conditions' => array( 'id' => $id ) ) );
		$this->set( 'user', $userDetails );
	}
	
	public function all() {
		if($this->Session->read('User') ) {
			$users = $this->User->find( 'all' );
			$this->set( 'users', $users ); 
		} else $this->redirect( array( 'controller' => 'pages', 'action' => 'index' ) );
	}
	
	public function setStatus( $userId = null, $status = null ) {
        $this->layout = 'ajax';
        $this->User->id = $userId;
        $this->User->save(array('is_active' => $status) );
        echo ($status+1)%2;
        exit;
    }

}
