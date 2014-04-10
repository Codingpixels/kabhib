<?php 

	class DeliveriesController extends AppController {

			public $name = 'Deliveries';
			public $uses = array('NewArrival','Extra','EmployeeOrder','DeliveryDetail','DeliveryMaster','Eorderdetail',
								'Bread','Cake','Chocolate','Cookie','CreamRoll','CupCake','DryCake','Khakhra','Khari','Pastry',
							'Puff','Pudding','Savories');
			public $components = array('Email', 'Cookie');
			public $helpers= array('Html' , 'Form');

			public function order_select() {
				$db_id = $this->EmployeeOrder->find('first',array('order' => array('EmployeeOrder.id' => 'DESC'),
																		'fields' => array('EmployeeOrder.id')));
				$lastinsertid = $db_id['EmployeeOrder']['id'];
				$this->set ('lastinsertid',$lastinsertid);

				if(!empty($this->request->data)) {
					$oid =$this->request->data['Ereturn']['oid'];
					$db_data = $this->EmployeeOrder->find('first',array('conditions'=>array('EmployeeOrder.id'=>$oid),
															'fields'=>array('EmployeeOrder.flag')));
					if(!empty($db_data)) {
						if($db_data['EmployeeOrder']['flag'] == '0'){
							$this->redirect(array('controller'=>'Deliveries','action'=>'delivery',
													$this->request->data['Ereturn']['oid']));
						} else {
							$this->Session->setFlash(__('Delivery was taken already.'));
						}
					} else {
						$this->Session->setFlash(__('Sorry, Data not found.'));
					}
					
				}
			}

			public function delivery() {
				if(!empty($this->request->params['pass']['0'])) {
					$oid = $this->request->params['pass']['0'];
					$this->Session->write('OID',$oid);
					$order_data = $this->Eorderdetail->find('all',array('conditions'=>array('Eorderdetail.order_id'=>$oid)));
					$this->set('order_data',$order_data);
				}
				if($this->request->is('post')) {
					$this->EmployeeOrder->id = $this->request->data['EmployeeDetail']['0']['v3'];
					$flag['EmployeeOrder']['flag'] = '1';
					$this->EmployeeOrder->save($flag);
					$eid=$this->Session->read('eid');
					$data_result['DeliveryMaster']['employee_id']=$eid;
					$data_result['DeliveryMaster']['order_id']=$this->request->data['EmployeeDetail']['0']['v3'];
					$data_result['DeliveryMaster']['created']=date('Y-m-d');
					if($this->DeliveryMaster->save($data_result)) {
					    $data = $this->request->data['EmployeeDetail'];
					    $new_qty= 0;
						foreach ($data as $key => $value) {
							if(!empty($lastinsertid)) {
						       $this->DeliveryDetail->id = $lastinsertid;
						    }
						    $data['DeliveryDetail']['type'] = $value['v1'];
							$data['DeliveryDetail']['item_name'] = $value['v2'];
							$data['DeliveryDetail']['quantity'] = $value['qty'];
							$data['DeliveryDetail']['order_id'] = $value['v3'];
							$data['DeliveryDetail']['delivery_id'] = $this->DeliveryMaster->getlastInsertId();
							$type = $value['v1'];
							if($this->DeliveryDetail->save($data)){
								$new_data = $this->$type->find('first',array('conditions'=>array($type.'.item_name' => $value['v2']),
																'fields' => array($type.'.item_name',$type.'.quantity'))); 
								$new_qty= $new_data[$type]['quantity'] + $value['qty'] ;
								$this->$type->updateAll(array($type.'.quantity'=> $new_qty),
		            									array($type.'.item_name' => $new_data[$type]['item_name']));

							}

							$lastinsertid = $this->DeliveryDetail->getlastInsertId();
	          				$lastinsertid++;
						}
						$this->Session->setFlash(__('Delivery saved successfully.'));
						$this->redirect(array('controller' => 'EmployeeDetails','action' => 'home'));
					}
				}
			}
	}

?>