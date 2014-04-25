<?php

	class EmployeeDetailsController extends AppController {

		public $name = 'EmployeeDetails';
		public $uses = array('EmployeeDetail','NewArrival','Extra','Bread','Cake','Chocolate','Cookie','CreamRoll','CupCake','DryCake','Khakhra','Khari','Pastry',
							'Puff','Pudding','Savories');
		public $components = array('Email', 'Cookie');
		public $helpers= array('Html' , 'Form');

		public function index() {
			if($this->Session->check('Employee')) {
				if($this->Session->read('Employee.position') == '0'){
					$this->redirect(array('controller' => 'EmployeeDetails', 'action' => 'home'));
				} else {
					$this->redirect(array('controller' => 'Admins', 'action' => 'admin'));
				}
			}
			if(!empty($this->request->data)) {
					if(!empty($this->request->data['EmployeeDetail']['employee_id']) ||
						!empty($this->request->data['EmployeeDetail']['password'])) {
	       					$employee=$this->EmployeeDetail->find('first',array('conditions'=>
			       					 array('EmployeeDetail.name' => $this->request->data['EmployeeDetail']['employee_id'],
									        'EmployeeDetail.password' => $this->request->data['EmployeeDetail']['password'])
									        ));
	       				if(!empty($employee)) {
							$this->Session->write('Employee.id',$employee['EmployeeDetail']['id']);
							$this->Session->write('Employee.name',$employee['EmployeeDetail']['name']);
							$this->Session->write('Employee.role',$employee['EmployeeDetail']['position']);
							$this->Session->setFlash(__('You are Logged In.'));
							if($employee['EmployeeDetail']['position'] == 'Employee'){
								$this->redirect(array('controller'=>'EmployeeDetails','action'=>'home'));
							} else {
								$this->redirect(array('controller'=>'Admins','action'=>'admin'));
							}
						} else {
							$this->Session->setFlash(__('Invalid ID and Password!'));
							$this->redirect(array('controller'=>'EmployeeDetails','action'=>'index'));
						}
	      			} else {
						$this->Session->setFlash(__('Both fields are mandatory!'));
						$this->redirect(array('action' => 'index'));
	      			}
		    }
		}

		public function login() {	

 		}
		
		public function home() {
		}

		public function stock_check() {
		}

		public function update_stock() {
			if(!empty($this->request->data)) {
				$type = $this->request->data['type'];
				$count = (count($this->request->data)-1)/5;
				$diff = array();
				$new_qty = array();
				$stock = array();
				for ($i=0;$i<$count;$i++) {
					$data[$type]['quantity'] = $this->request->data[$i.'new_qty'];
					$new[$i] = $this->request->data[$i.'new_qty'];
					$old = $this->request->data[$i.'old_qty'];
					$diff[$i] = $old - $new[$i];
					$stock[$i][$type]['item_id'] = $this->request->data[$i.'id'];
					$stock[$i][$type]['item_code'] = $this->request->data[$i.'code'];
					$stock[$i][$type]['item_name'] = $this->request->data[$i.'name'];
					$stock[$i][$type]['quantity'] = $old;
					$this->$type->id = $this->request->data[$i.'id'];
					$this->$type->save($data);
				}
				$this->set('stock',$stock);
				$this->set('diff',$diff);
				$this->set('new',$new);
				$this->set('table_name',$type);
				$this->set('flag','true');
			} else {
				$table_name = $this->request->params['pass']['0'];
				$stock = $this->$table_name->find('all',array('fields'=>array($table_name.'.item_id',$table_name.'.item_code',
													$table_name.'.item_name',$table_name.'.quantity')));
				$this->set('stock',$stock);
				$this->set('table_name',$table_name);
				$this->set('flag','false');
			}
		}

		public function logout(){
			$this->Session->delete('Employee');
			$this->Session->setFlash(__('You are logged out.'));
			$this->redirect(array('controller' => 'EmployeeDetails','action' => 'index'));
		}

		// public function customerajax() {
		// 	$this->layout='ajax';
		// 	$item_name=$this->request->data['item_name'];
		// 	if($item_name == "Cake"){
		// 		$list=array('select'=>'select','WhiteForest'=>'WhiteForest','Choco'=>'Choco');
		// 		$size=array('select'=>'select','500g'=>'500g','1kg'=>'1kg');
		// 	} else {
		// 		$list=array('select'=>'select','white'=>'white','brown'=>'brown');
		// 		$size=array('select'=>'select','small'=>'small','medium'=>'medium','large'=>'large');
		// 	} 
		// 	$qty=array('select'=>'select','1'=>'1','2'=>'2','3'=>'3');
		// 	$this->set('list', $list);
		// 	$this->set('size', $size);
		// 	$this->set('qty', $qty);
		// 	$this->set('order_number', $this->request->data['order_number']);
		// 	$this->set('item_name',$item_name);
		// }

		// public function customer_item() {
		// 	$this->layout = 'ajax';
		// }

		// public function total_return() {
			
		// }
	}
?>
