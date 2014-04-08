<?php
	
	class ReturnItemsController extends AppController {

		public $name = 'ReturnItems';
		public $uses = array('EmployeeDetails','NewArrival','CustomerOrderDetail','EmployeeReturn','CustomerReturn','Signup',
							'Extra','DeliveryDetail','DeliveryMaster','FreshReturn','Bread','Cake','Chocolate','Cookie','CreamRoll','CupCake','DryCake','Khakhra','Khari','Pastry',
							'Puff','Pudding','Savories');
		public $components = array('Email', 'Cookie');
		public $helpers= array('Html' , 'Form');

		public function customer_return() {
		    if(!empty($this->request->data)) {
	          	foreach ($this->request->data['Customer'] as $key => $value) {
		            if(!empty($value['qty'])):
		            if(!empty($lastinserid)) {
		            	$this->CustomerReturn->id = $lastinserid;
		            }
		            $data['CustomerReturn']['order_id']=$value['v1'];
		            $data['CustomerReturn']['item_name']=$value['v2'];
		            $data['CustomerReturn']['item_type']=$value['v3'];
		            $data['CustomerReturn']['item_return']=$value['qty']; 
		            $data['CustomerReturn']['note']=$value['note'];
		            $data['CustomerReturn']['remark']=$value['remark'];
		            $data['CustomerReturn']['item_purchase_quantity']=$value['v4'];	            
		            $item_tab = $value['v3'];
		            if($this->CustomerReturn->save($data)) {
		            	if($value['note'] == 'Reuse') {
		            		$db_data = $this->$item_tab->find('first', array('conditions'=>array($item_tab.'.item_name' =>$value['v2']),
		            													'fields'=>array($item_tab.'.quantity',$item_tab.'.item_id')));
		            	}
		            	$total_quantity = $db_data[$item_tab]['quantity'] + $value['qty'];
		            	$id = $db_data[$item_tab]['item_id'];
		            	$this->$item_tab->updateAll(array($item_tab.'.quantity' => $total_quantity),
		            								array($item_tab.'.item_id' => $id));
		            }
		            $lastinserid = $this->CustomerReturn->getlastInsertId();
		            $lastinserid++;
		            endif;

		            $db_customer = $this->CustomerOrderDetail->find('first',array('conditions'=>
		            														array('CustomerOrderDetail.order_id' =>$value['v1'],
		            															   'CustomerOrderDetail.item_name' =>$value['v2'],
		            															   'CustomerOrderDetail.item_quantity'=>$value['v4'])));
		           	
		            $this->CustomerOrderDetail->saveField('item_retun_quantity',$value['qty']);

	           	}
	           	$this->redirect(array('controller'=>'EmployeeDetails','action'=>'home'));
		    } 
    	}

		public function return_item() {
	     	$this->layout="ajax";
	     	if(!empty($this->request->data['orderno'])){
		      	$oid = $this->request->data['orderno'];
		      	$db_data=$this->CustomerOrderDetail->find('all',array('conditions'=>array('CustomerOrderDetail.order_id'=>$oid)));
		      	$this->set('db_data',$db_data);
		      	/*if($db_data[0]['CustomerOrderDetail']['item_retun_quantity'] != 0) {
		      		$this->set('flag', 'false');
		      	}*/
     		}
  		}

  		public function damage_return() {
		}

		public function select_return() {
			if($this->request->is('post')) {
				$data = $this->request->data['stock_return'];
				foreach ($data as $key => $value) {
					if(!empty($lastinsertid)) {
				       $this->EmployeeReturn->id = $lastinsertid;
				    }
					$list['EmployeeReturn']['order_id'] = $value['order_id'];
					$list['EmployeeReturn']['return_qty'] = $value['return_qty'];
					$list['EmployeeReturn']['note'] = $value['note'];
					$list['EmployeeReturn']['reason'] = $value['reason'];
					$list['EmployeeReturn']['item_name'] = $value['item_name'];
					$list['EmployeeReturn']['type'] = $value['type'];
					$type = $value['type'];
					if($this->EmployeeReturn->save($list)){
						$new_data = $this->$type->find('first',array('conditions'=>array($type.'.item_name' => $value['item_name']),
														'fields' => array($type.'.item_id',$type.'.quantity')));
						$new_qty[$type]['quantity'] = $new_data[$type]['quantity'] - $value['return_qty'] ;
						$this->$type->id = $new_data[$type]['item_id'];
						$this->$type->save($new_qty);
					}
					$lastinsertid = $this->EmployeeReturn->getlastInsertId();
      				$lastinsertid++;
				}
				$this->redirect(array('controller' => 'EmployeeDetails', 'action' => 'home'));
			}
		}

		public function stock_return() {
			$this->layout = 'ajax';
			$order_id = $this->request->data['EmployeeOrder']['order_id'];
			$delivery_id = $this->DeliveryMaster->find('first',array('conditions'=>array('DeliveryMaster.order_id'=>$order_id),
													'fields'=>array('DeliveryMaster.id')));
			if(!empty($delivery_id)){
				$id = $delivery_id['DeliveryMaster']['id'];
				$db_data = $this->DeliveryDetail->find('all',array('conditions'=>array('DeliveryDetail.delivery_id'=>$id)));
				$this->set('db_data',$db_data);
				$this->set('order_id',$order_id);
			}
		}

		public function fresh_return() {
			if($this->request->is('post')) {
				$data = $this->request->data['stock_return'];
				foreach ($data as $key => $value) {
					
						if(!empty($lastinsertid)){
					      	$this->FreshReturn->id = $lastinsertid;
					    }
						$list['FreshReturn']['order_id'] = $value['order_id'];
						$list['FreshReturn']['return_qty'] = $value['return_qty'];
						//$list['FreshReturn']['note'] = $value['note'];
						$list['FreshReturn']['item_name'] = $value['item_name'];
						$list['FreshReturn']['return_type'] = $value['type1'];
						$list['FreshReturn']['item_type'] = $value['type'];
						$type = $value['type'];
 						if($value['return_qty']!='0') {
							if($this->FreshReturn->save($list)) {
								$new_data = $this->$type->find('first',array('conditions'=>array($type.'.item_name' => $value['item_name']),
																'fields' => array($type.'.item_id',$type.'.quantity')));
								$new_qty[$type]['quantity'] = $new_data[$type]['quantity'] - $value['return_qty'] ;
								$this->$type->id = $new_data[$type]['item_id'];
								$this->$type->save($new_qty);
							}
							$lastinsertid = $this->FreshReturn->getlastInsertId();
		      				$lastinsertid++;

						}
				}
				$this->redirect(array('controller' => 'EmployeeDetails', 'action' => 'home'));
			}
		}

		public function stock_fresh() {
			$this->layout = 'ajax';
			$order_id = $this->request->data['EmployeeOrder']['order_id'];
			$return_type=$this->request->data['EmployeeOrder']['type'];
			if($return_type=="stock") {
				$delivery_id = $this->DeliveryMaster->find('first',array('conditions'=>array('DeliveryMaster.order_id'=>$order_id),
													'fields'=>array('DeliveryMaster.id')));
				if(!empty($delivery_id)){
					$id = $delivery_id['DeliveryMaster']['id'];
					$db_data = $this->DeliveryDetail->find('all',array('conditions'=>array('DeliveryDetail.delivery_id'=>$id)));
					$this->set('db_data',$db_data);
					$this->set('name','DeliveryDetail');
					
				}

			} else {
				$db_data = $this->CustomerOrderDetail->find('all',array('conditions'=>array('CustomerOrderDetail.order_id'=>$order_id),
																		'fields'=>array('*')));
				$this->set('db_data',$db_data);
				$this->set('name','CustomerOrderDetail');	
			}

			$this->set('order_id',$order_id);
			$this->set('return_type',$return_type);			
		}

  	}

?>