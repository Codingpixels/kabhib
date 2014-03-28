<?php
	
	class EmployeeOrdersController extends AppController {
		public $name='EmployeeOrders';
		public $uses=array('EmployeeOrder','Eorderdetail','DeliveryMaster','DeliveryDetail','Bread','Cake',
							'NewArrival','EmployeeReturn','Pastry','Khari','New_arrival','Extra','CustomerOrderDetail','Customer',
							'Chocolate','Pudding');
		public $helper=array('Html','Form');

		public function sell() {

		}

		public function takeaway() {
			if(!empty($this->request->data)) {
				$data['Customer']['name']=$this->request->data['Customer']['name'];
				$data['Customer']['number']=$this->request->data['Customer']['number'];
				$customer = $this->Customer->find('first',array('conditions' => array('Customer.number' => 
				           $this->request->data['Customer']['number']
				        )));

				$order_id_temp = $this->CustomerOrderDetail->find('first',array('order' => array('CustomerOrderDetail.order_id DESC'),
				          'fields' => array('CustomerOrderDetail.order_id')
				          ));
				$order_id = $order_id_temp['CustomerOrderDetail']['order_id'] + 1;
				if(!empty($customer)) {
					$customer_id = $customer['Customer']['customer_id'];
				} else {
					$this->Customer->save($data);
					$customer_id = $this->Customer->getLastInsertID();
				}
				$item_count = (count($this->request->data)-1)/5;
				$item_array = array();
				$item_final_array = array();
				$i=1;
				while ($i<=$item_count) {
					if($i==substr($this->request->data[$i.'orderno'],0)) {
			      		$item_array = array($i => array('Customer' => 
														            array(
														              'orderno' => $this->request->data[$i.'orderno'],
														              'itemname' => $this->request->data[$i.'itemname'],
														              'quantity' => $this->request->data[$i.'quantity'],
														              'price' => $this->request->data[$i.'price'],
														              'type'=> $this->request->data[$i.'type']
														              )));
			      		$type = $this->request->data[$i.'type'];
						$old_qty = $this->$type->find('first',array('conditions'=>array($type.'.item_name' =>
														$item_array[$i]['Customer']['itemname']),'fields'=>
														array($type.'.quantity',$type.'.item_id')
														));
						$new_qty[$type]['quantity'] = $old_qty[$type]['quantity'] - $item_array[$i]['Customer']['quantity'];
						$this->$type->id = $old_qty[$type]['item_id'];
						$this->$type->save($new_qty);          
						if(!empty($lastinserid)){
							$this->CustomerOrderDetail->id = $lastinserid;
						}
						$order['CustomerOrderDetail']['order_id']=$order_id;
						$order['CustomerOrderDetail']['order_date']=date('Y-m-d');
						$order['CustomerOrderDetail']['customer_id']=$customer_id;
						$order['CustomerOrderDetail']['item_name']=$item_array[$i]['Customer']['itemname'];
						$order['CustomerOrderDetail']['item_quantity']=$item_array[$i]['Customer']['quantity'];
						$order['CustomerOrderDetail']['employee_id']=$this->Session->read('eid');
						$order['CustomerOrderDetail']['total_bill']=$item_array[$i]['Customer']['price'];
						$order['CustomerOrderDetail']['type']=$item_array[$i]['Customer']['type'];

						$this->CustomerOrderDetail->save($order);
						$lastinserid = $this->CustomerOrderDetail->getlastInsertId();
						$lastinserid++;
			    	} else {
			    		$item_count+=1;
			   		}
			    	$i++;
			    }
				$this->redirect(array('controller' => 'EmployeeDetails','action' => 'home'));
			}
		}

		public function sellajax() {
			$this->layout='ajax';
			$item_name=$this->request->data['item_name'];
			
				$finditem=$this->$item_name->find('all');
			
			$this->set('list',$finditem);
			$this->set('item_name',$item_name);
			$this->set('order_no',$this->request->data['order_number']);
			
		}

		public function sell_item() {
			$this->layout='ajax';
			$this->set('itmname',$this->request->data['item_name']);
			$this->set('order_no',$this->request->data['order_no']);	
			$tabname=$this->request->data['name'];
			$itmname=$this->request->data['item_name'];

			$price=$this->$tabname->find('first',array('conditions'=>array($tabname.'.item_name'=>$itmname),
														'field'=>array($tabname.'.price')));
			$total_price=$price[$tabname]['price']*1;
			$this->set('price',$total_price);
			$this->set('name',$tabname);
			$this->set('itmname',$itmname);
			$this->set('type',$tabname);
		}

		public function sellprice() {
			$this->layout=false;
			$this->autoRender = false;
			$tabname=$this->request->data['name'];
			$itmqty=$this->request->data['item_qty'];
			$itmname=$this->request->data['item_name'];
			$initial_amount = $this->request->data['price'];
			$price=$this->$tabname->find('first',array('conditions'=>array($tabname.'.item_name'=>$itmname),
			          'field'=>array($tabname.'.price')));
			$total_price=$price[$tabname]['price']*$itmqty;
			return json_encode($total_price);
		}

		public function billtypes() {

		}

		public function special() {
		}

		public function specialajax() {
			$this->layout='ajax';
			//echo "<pre>"; print_r($this->request->data);exit;

			if($this->request->data['flavour']=="Others")
			{
				$flavour=$this->request->data['flavour2'];
			}
			else
			{
				$flavour=$this->request->data['flavour'];

			}

			$customer_name=$this->request->data['customer_name'];
			$number=$this->request->data['customer_no'];
			$weight=$this->request->data['weight'];
			$delivery_date=$this->request->data['date'];
			$coupon=$this->request->data['coupon'];
			$advance=$this->request->data['advance'];
			$remark=$this->request->data['remark'];
			$time=$this->request->data['time'];
			$deposite=$this->request->data['deposite'];
			$current_date=date('Y-m-d');

			$data['Customer']['name']=$customer_name;
			$data['Customer']['number']=$number;

			$customer = $this->Customer->find('first',array('conditions' => array('Customer.number' =>$number)));
			if(!empty($customer)){
				$customer_id = $customer['Customer']['customer_id'];
			} else {
				$this->Customer->save($data);
				$customer_id = $this->Customer->getLastInsertID();
			}
			$order_id_temp = $this->CustomerOrderDetail->find('first',array('order' => array('CustomerOrderDetail.order_id DESC'),
               'fields' => array('CustomerOrderDetail.order_id','CustomerOrderDetail.id')
               ));
    		$order_id = $order_id_temp['CustomerOrderDetail']['order_id'] + 1; 
    		$billno=$order_id_temp['CustomerOrderDetail']['id'];
			$total_price= $weight*200;
			$a= $total_price +($total_price*0.15);
			$left_amt =$a - $advance + $deposite;
			
			$order['CustomerOrderDetail']['order_id'] = $order_id;
			$order['CustomerOrderDetail']['customer_id'] = $customer_id;
			$order['CustomerOrderDetail']['item_name'] = $flavour;
			$order['CustomerOrderDetail']['item_quantity']='1';
			$order['CustomerOrderDetail']['type'] = 'Cake';
			$order['CustomerOrderDetail']['order_date'] = $current_date;
			$order['CustomerOrderDetail']['delivery_date'] = $delivery_date;
			$order['CustomerOrderDetail']['employee_id'] = $this->Session->read('eid');
			$order['CustomerOrderDetail']['total_bill']= $total_price;
			$order['CustomerOrderDetail']['ordertype']='special';
			$order['CustomerOrderDetail']['advance']=$advance;

			$this->CustomerOrderDetail->save($order);
			
			$this->set('delivery_date',$delivery_date);
			$this->set('current_date',$current_date);
			$this->set('flavour',$flavour);
			$this->set('weight',$weight);
			$this->set('advance',$advance);
			$this->set('total_amt',$total_price);
			$this->set('left_amt',$left_amt);
			$this->set('time',$time);
			$this->set('billno',$billno);
			$this->set('deposite',$deposite);
		}

		public function advance() {
		   	if(!empty($this->request->data)) {
			    $item_count = (count($this->request->data)-1)/5;
			    if($item_count > '0') {
			    	$customer = $this->Customer->find('first',array('conditions' => array('Customer.number' => 
			                 $this->request->data['Customer']['number']
			              	)));
			    	if(!empty($customer)) {
			      		$customer_id = $customer['Customer']['customer_id'];
			    	} else {
				      	$this->Customer->save($this->request->data);
				     	$customer_id = $this->Customer->getLastInsertID();
			     	}
			     	$order_id_temp = $this->CustomerOrderDetail->find('first',array('order' => array('CustomerOrderDetail.order_id DESC'),
			                	'fields' => array('CustomerOrderDetail.order_id')
			                  	));
			        $order_id = $order_id_temp['CustomerOrderDetail']['order_id'] + 1;
				    $data['CustomerOrderDetail']['employee_id'] = $this->Session->read('eid');
				    $data['CustomerOrderDetail']['customer_id'] = $customer_id;
				    $data['CustomerOrderDetail']['order_date'] = date('Y-m-d');
			      	$i=1;
			        while ($i<=$item_count) {
				    	if($i==substr($this->request->data[$i.'orderno'],0)) {
							$item_array = array($i => array('Customer' => 
																	array(
																		'orderno' => $this->request->data[$i.'orderno'],
																		'itemname' => $this->request->data[$i.'itemname'],
																		'quantity' => $this->request->data[$i.'quantity'],
																		'price' => $this->request->data[$i.'price'],
																		'type'=> $this->request->data[$i.'type']
																	)));
			       			$type = $this->request->data[$i.'type'];
							$old_qty = $this->$type->find('first',array('conditions'=>array($type.'.item_name' =>
													$item_array[$i]['Customer']['itemname']),'fields'=>
													array($type.'.quantity',$type.'.item_id')
													));
							$new_qty[$type]['quantity'] = $old_qty[$type]['quantity'] - $item_array[$i]['Customer']['quantity'];
							$this->$type->id = $old_qty[$type]['item_id'];
							$this->$type->save($new_qty);
			        		if(!empty($lastinserid)) {
			         			$this->CustomerOrderDetail->id = $lastinserid;
			        		}
			           		$data['CustomerOrderDetail']['order_id']=$order_id;
			        		$data['CustomerOrderDetail']['item_name']=$this->request->data[$i.'itemname'];
					        $data['CustomerOrderDetail']['item_quantity']=$this->request->data[$i.'quantity'];         
					        $data['CustomerOrderDetail']['type']=$this->request->data[$i.'type'];
					        $data['CustomerOrderDetail']['total_bill']=$this->request->data[$i.'price'];
					        $data['CustomerOrderDetail']['ordertype']='advance';
					        $data['CustomerOrderDetail']['advance']=$this->request->data['Customer']['advance'];
					        $data['CustomerOrderDetail']['delivery_date']=$this->request->data['Customer']['date'];        
					        $this->CustomerOrderDetail->save($data);
					        $lastinserid = $this->CustomerOrderDetail->getlastInsertId();
					        $lastinserid++;
			        	} else {
			        		$item_count+=1;
			        	}
			         	$i++;
			     	}
			     	$this->redirect(array('controller'=>'EmployeeDetails','action'=>'home'));
			    }
		   	}
	  	}

		public function order() {
   			if($this->request->is('post')) {
			    $item_count = count($this->request->data)/4;
			    $item_array = array();
			    $item_final_array = array();
			    if($item_count > 0){
				    $data_result['EmployeeOrder']['order_date'] = date('Y-m-d');
				    $data_result['EmployeeOrder']['employee_id'] = $this->Session->read('eid');
				    if($this->EmployeeOrder->save($data_result)) {
					    $order_id = $this->EmployeeOrder->getLastInsertId();
					    $i  = 1;
					    while ($i <= $item_count) {
					       	if($i==$this->request->data[$i.'no']) {
						        $item_array = array($i => array('Customer' => 
						                 array(
						                  'no' => $this->request->data[$i.'no'],
						                  'itemname' => $this->request->data[$i.'itemname'],
						                  'quantity' => $this->request->data[$i.'quantity'],
						                  'name' => $this->request->data[$i.'name'],
					                  )));
					           	if(!empty($lastinserid)){
					            	$this->Eorderdetail->id = $lastinserid;
					           	}
						        $data['Eorderdetail']['item_id']=$this->request->data[$i.'itemname'];
						        $data['Eorderdetail']['quantity']=$this->request->data[$i.'quantity'];
						        $data['Eorderdetail']['order_id']=$order_id;
						        $data['Eorderdetail']['type']=$this->request->data[$i.'name'];
						        $this->Eorderdetail->save($data);
						        $lastinserid = $this->Eorderdetail->getlastInsertId();
					            $lastinserid++;
					        } else {
					          	$item_count+=1;
					        }
				         	$i++;
				      	}	
			    	}
			    }
			    $this->Session->setFlash(__('Your order ID is '.$order_id));
			    $this->redirect(array('controller'=>'EmployeeDetails','action'=>'home'));
		   	}
  		}

		public function orderajax() {
			$this->layout = 'ajax';
			$item_name=$this->request->data['item_name'];
			$finditem=$this->$item_name->find('all');
			$this->set('list',$finditem);
			$this->set('item_name',$item_name);
			$this->set('order_no',$this->request->data['order_number']);
		}
		public function order_item() {
			$this->layout = 'ajax';
			$this->set('order_item',$this->request->data);
		}
		
	}
?>