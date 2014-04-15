<?php

	class AdminsController extends AppController {

		public $name = 'Admins';
		public $uses = array('EmployeeOrder','CustomerOrderDetail','CustomerReturn','DeliveryDetail','DeliveryMaster','Eorderdetail',
							'EmployeeReturn','Extra','NewArrival','Category','Bread','Cake','Chocolate','Cookie','CreamRoll','CupCake','DryCake',
							'Khakhra','Khari','Pastry','Puff','Pudding','Savouries');
		public $components = array('Email', 'Cookie');
		public $helpers= array('Html' , 'Form');

		public function admin() {
		}
		public function select_interval() {

		}
		public function fresh_return() {
			
		}
		public function sales_report() {
			$date = date('Y-m-d');
			$date=date_create($date);
			if($this->request->params['pass']['0'] == 'week') {
				date_add($date,date_interval_create_from_date_string("-7 days"));
				$this->set('title','Weekly Sales Chart');

			} elseif ($this->request->params['pass']['0'] == 'month') {
				date_add($date,date_interval_create_from_date_string("-1 months"));
				$this->set('title','Monthly Sales Chart');
			} else {
				$this->set('title',"Today's Sales Chart");
			}
			$date=date_format($date,"Y-m-d");
			$data = $this->CustomerOrderDetail->find('all',array('conditions'=>array('CustomerOrderDetail.order_date >='=>$date,
													'CustomerOrderDetail.ordertype !='=>'special'),'fields'=>array('CustomerOrderDetail.item_name',
													'CustomerOrderDetail.item_quantity','CustomerOrderDetail.type')));
			$i=0;
			foreach ($data as $key => $value) {
				$info[$i] = $value['CustomerOrderDetail'];
				$i ++;
			}
			if(!empty($info)){
				$this->set('info',$info);
			} else {
				$this->Session->setFlash(__('Data Not Available. Please Choose Valid Option!'));
				$this->redirect(array('action'=>'admin'));	
			}
		}

		public function supply_demand() {
		}

		public function sd_report($month) {
			$date = date('Y-m-d');
			$year = substr($date,0,4) ;
			switch ($month) {
				case 'jan':
					$date1 = $year.'-1-1';
					$date2 = $year.'-1-31';
					break;
				
				case 'feb':
					$date1 = $year.'-2-1';
					$date2 = $year.'-2-29';
					break;
				
				case 'mar':
					$date1 = $year.'-3-1';
					$date2 = $year.'-3-31';
					break;

				case 'apr':
					$date1 = $year.'-4-1';
					$date2 = $year.'-4-30';
					break;

				case 'may':
					$date1 = $year.'-5-1';
					$date2 = $year.'-5-31';
					break;

				case 'jun':
					$date1 = $year.'-6-1';
					$date2 = $year.'-6-30';
					break;

				case 'july':
					$date1 = $year.'-7-1';
					$date2 = $year.'-1-31';
					break;

				case 'aug':
					$date1 = $year.'-8-1';
					$date2 = $year.'-8-31';
					break;

				case 'sep':
					$date1 = $year.'-9-1';
					$date2 = $year.'-9-30';
					break;

				case 'oct':
					$date1 = $year.'-10-1';
					$date2 = $year.'-10-31';
					break;

				case 'nov':
					$date1 = $year.'-11-1';
					$date2 = $year.'-11-30';

				default:
					$date1 = $year.'-12-1';
					$date2 = $year.'-12-31';
					break;
			}
			$demand_data = $this->CustomerOrderDetail->find('all',array('conditions'=>array('AND'=>array('CustomerOrderDetail.order_date >='=>$date1,
													'CustomerOrderDetail.order_date <='=>$date2),'CustomerOrderDetail.ordertype !='=>'special'),
													'fields'=>array('CustomerOrderDetail.item_name','CustomerOrderDetail.item_quantity','CustomerOrderDetail.type')));

			$item_name = array();
			foreach ($demand_data as $key => $value) {
				foreach ($value as $key1 => $value1) {
					if(!in_array($value1['item_name'], $item_name)){
						$item_name[$value1['item_name']] = $value1['item_name'];
						$demand[ $value1['type'] ] [ $value1['item_name'] ] = 0;
					}
					$demand[ $value1['type'] ] [ $value1['item_name'] ] = $demand[ $value1['type'] ] [ $value1['item_name'] ] + $value1['item_quantity'];
				}
			}
			$supply_id = $this->DeliveryMaster->find('all',array('conditions'=>array('AND'=>array('DeliveryMaster.created >='=>$date1,
													'DeliveryMaster.created <='=>$date2)),'fields'=>array('DeliveryMaster.id')));
			foreach ($supply_id as $key => $value) {
				$supply_data = $this->DeliveryDetail->find('all',array('conditions'=>array('DeliveryDetail.delivery_id' => $value['DeliveryMaster']['id']),
													'fields'=>array('DeliveryDetail.item_name','DeliveryDetail.quantity','DeliveryDetail.type')));
			}
			$item_name = array();
			if(!empty($demand_data) || !empty($supply_data)){
				foreach ($supply_data as $key => $value) {
					foreach ($value as $key1 => $value1) {
						if(!in_array($value1['item_name'], $item_name)){
							$item_name[$value1['item_name']] = $value1['item_name'];
							$supply[ $value1['type'] ] [ $value1['item_name'] ] = 0;
						}
						$supply[ $value1['type'] ] [ $value1['item_name'] ] = $supply[ $value1['type'] ] [ $value1['item_name'] ] + $value1['quantity'];
					}
				}
			}
			if(empty($demand) || empty($supply)){
				$this->Session->setFlash(__('Data Not Available. Please Choose Valid Option!'));
				$this->redirect(array('action'=>'admin'));
			} else {
				$this->set('demand',$demand);
				$this->set('supply',$supply);
			}

		}

		public function view_chart() {
			$i = 0;
			$count = (count($this->request->params['pass'])-1);
			while ($i < $count) {
				$data[$this->request->params['pass'][$i]] = $this->request->params['pass'][++$i];
				$i++;
			}
			$this->set('item',$data);
			$this->set('title',$this->request->params['pass'][$i]);
		}

		public function item_chart() {
			if(!empty($this->request->data)){
				$item_array = $this->request->data['item_chart'];
				$x_axis = array();
				$y_axis = array();
				$new_array = array(array('Item', 'Quantity', array('role' => 'style')));
				$i = 0;
				foreach ($item_array as $key => $value) {
					$new_array = array_merge($new_array, array(array($key, intval($value), '#b87333')));
					$x_axis[$i] = intval($value);
					$y_axis[$i] = $key;
					$i++;
				}
				$this->set('new_item_array',json_encode($new_array));
			}
		}

		public function damage_report() {
			if(!empty($this->request->data)){
				$month = $this->request->data['EmployeeDetail']['month'];
				$branch = $this->request->data['EmployeeDetail']['branch'];
				$report_type = $this->request->data['EmployeeDetail']['report_type'];
				$date1 = date('Y-m-01',strtotime($month));
				$date2 = date('Y-m-t',strtotime($month)) ;
				if($report_type == 'Customer Return') {
					$this->redirect(array('controller'=>'Admins','action'=>'customer_return_report',$date1,$date2,$month,$branch));
				}
				else {
					$this->redirect(array('controller'=>'Admins','action'=>'fresh_return_report',$date1,$date2,$month,$branch));
				}
			}

		} 
		public function fresh_return_report($date1,$date2,$month,$branch) {
			
				$total_quantity = $this->EmployeeReturn->find('all',
												array('conditions'=>array(
																	'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
																						date('Y-m-d',strtotime($date1)).'%',
													 									date('Y-m-d', strtotime($date2)).'%')),
													  'fields'=>array(
													  				'EmployeeReturn.return_qty',
													  				'EmployeeReturn.item_purchase_quantity',
													 				'EmployeeReturn.return_date',
													 				'EmployeeReturn.item_name',
													 				'EmployeeReturn.id')));
				
				$total_purchase_quantity =  0; //total of all purchase quantities
				$total_return_quantity =  0; //total of all return quantities
				$actual_purchase_array = array(); //total purchase array itemwise with no repeated key value
				$actual_return_array = array();//total damage return array itemwise with no repeated key value
				$datewise_return_array = array();//key value pair of distinct date with corresponding total purchase of that particular date
				$difference_array = array();

				foreach ($total_quantity as $key => $value) {
					$total_purchase_quantity = $total_purchase_quantity + intval($value['EmployeeReturn']['item_purchase_quantity']);
					$total_return_quantity = $total_return_quantity + intval($value['EmployeeReturn']['return_qty']);

						if(array_key_exists($value['EmployeeReturn']['item_name'], $actual_purchase_array)){
							$actual_purchase_array[$value['EmployeeReturn']['item_name']] = $actual_purchase_array[$value['EmployeeReturn']['item_name']] + $value['EmployeeReturn']['item_purchase_quantity'];
							$actual_return_array[$value['EmployeeReturn']['item_name']] = $actual_return_array[$value['EmployeeReturn']['item_name']] + $value['EmployeeReturn']['return_qty'];
						} else {
							$actual_purchase_array = array_merge($actual_purchase_array, array($value['EmployeeReturn']['item_name'] => $value['EmployeeReturn']['item_purchase_quantity']));
							$actual_return_array = array_merge($actual_return_array, array($value['EmployeeReturn']['item_name'] => $value['EmployeeReturn']['return_qty']));
						}

						$temp_dateTime = $value['EmployeeReturn']['return_date'];
						$date = date('Y-m-d',strtotime($temp_dateTime));

						if (array_key_exists($date, $datewise_return_array)) {
							$datewise_return_array[$date] = $datewise_return_array[$date] + $value['EmployeeReturn']['return_qty'];
						}
						else {
							$datewise_return_array[$date] = $value['EmployeeReturn']['return_qty'];
						}
				
				}
				// echo '<pre>';echo "datewise_return_array: "; print_r($datewise_return_array);
				// echo '<pre>';echo "total_return_quantity: "; print_r($total_return_quantity);
				// echo '<pre>';echo "total_purchase_quantity: "; print_r($total_purchase_quantity);
				// echo '<pre>';echo "actual_purchase_quantity: "; print_r($actual_purchase_array);
				// echo '<pre>';echo "actual_return_quantity: "; print_r($actual_return_array);
				// exit;
				
				$year = substr($date2,0,4);	
				$this->set('actual_purchase_array',$actual_purchase_array);
				$this->set('actual_return_array',$actual_return_array);
				$this->set('total_purchase_quantity',$total_purchase_quantity);
				$this->set('total_return_quantity',$total_return_quantity);
				$this->set('month',$month);
				$this->set('year',$year);
				$this->set('branch',$branch);
				$this->set('datewise_return_array', $datewise_return_array);
		}
		public function fresh_return_chart() {
			$chart_data_array = array();
			$i = 1;
			$chart_data_array[0] = array('Item', 'Purchase', 'Return');
			foreach ($this->request->data['result_purchase'] as $key => $value) {
				$chart_data_array[$i] = array($key, intval($value), intval($this->request->data['result_damage'][$key]));
				$i++;
			}
			$chart_data_json = json_encode($chart_data_array);
			$this->set('chart_data_json', $chart_data_json);
		}
		
		public function new_arrival() {
			if($this->request->data){
				$data['NewArrival']['item_name'] = $this->request->data['item_name'];
				$data['NewArrival']['quantity'] = $this->request->data['quantity'];
				$data['NewArrival']['price'] = $this->request->data['price'];
				$data['NewArrival']['item_code'] = ucfirst($this->request->data['item_code']);
				$data['NewArrival']['shelf_life'] = ucfirst($this->request->data['shelf_life']);
				$data['NewArrival']['unit'] = ucfirst($this->request->data['unit']);
				if ($this->NewArrival->save($data)) {
					$pid=$this->NewArrival->getlastInsertId();
					$tab_name = 'NewArrival';
					$data['EmployeeOrder']['employee_id'] = $this->Session->read('eid');
					$data['EmployeeOrder']['order_date'] = date('Y-m-d');
					$this->EmployeeOrder->save($data);
					$order_id = $this->EmployeeOrder->getLastInsertId();
					$data['Eorderdetail']['order_id'] = $order_id;
					$data['Eorderdetail']['item_id'] = $this->request->data['item_name'];
					$data['Eorderdetail']['quantity'] = $this->request->data['quantity'];
					$data['Eorderdetail']['type'] = 'NewArrival';
					$this->Eorderdetail->save($data);
					$data['DeliveryMaster']['order_id'] = $order_id;
					$data['DeliveryMaster']['created'] = date('Y-m-d');
					$data['DeliveryMaster']['employee_id'] = $this->Session->read('eid');
					$this->DeliveryMaster->save($data);
					$delivery_id = $this->DeliveryMaster->getLastInsertId();
					$data['DeliveryDetail']['delivery_id'] = $delivery_id;
					$data['DeliveryDetail']['item_name'] = $this->request->data['item_name'];
					$data['DeliveryDetail']['quantity'] =  $this->request->data['quantity'];
					$data['DeliveryDetail']['type'] = 'NewArrival';
					$this->DeliveryDetail->save($data);
					$this->redirect(array('controller' => 'Admins','action' => 'add_image',$pid,$tab_name));
				}
			}
		}

		public function add_image($lastInsert,$tab_name) {
			$this->set('pid',$lastInsert);
			$this->set('tab_name', $tab_name);
		}
		public function getimage($pid,$tab_name) {
		       	$path = "img/itemsPhoto/".$tab_name."/";
		        $valid_formats = array("jpg", "png", "gif", "bmp");
			        if(isset($_FILES)){
				            $name = $_FILES['photoimg']['name'];
				            $size = $_FILES['photoimg']['size'];
			            if(strlen($name)){
				                list($txt, $ext) = explode(".", $name);
				                if(in_array($ext,$valid_formats)){
				                    if($size<(1024*1024)){
				                        $actual_image_name = $pid.".".$ext;
				                        $tmp = $_FILES['photoimg']['tmp_name'];
				                        if(move_uploaded_file($tmp, $path.$actual_image_name)){
				                            $uploadedfile = $path.$actual_image_name;
				                            list($width,$height)=getimagesize($uploadedfile);
				                            if($width < 100)
				                                $newwidth = $width;
				                            else
				                                $newwidth=100;
				                            if($height < 300)
				                                $newheight = $height;
				                            else
				                                $newheight=100;
				                            if($ext=="jpg" || $ext=="jpeg" ){
					                                $src = imagecreatefromjpeg($uploadedfile);
						                            }else if($ext=="png") {
						                                $src = imagecreatefrompng($uploadedfile);
						                            }else {
						                                $src = imagecreatefromgif($uploadedfile);
						                            }
			                            			$tmp1 = @imagecreatetruecolor($newwidth,$newheight)
			                                		or die('Cannot Initialize new GD image stream');
						                            imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
						                            $filename1 = "$path"."img".$actual_image_name;
						                            if($ext=="jpg" || $ext=="jpeg" ){
						                                imagejpeg($tmp1,$filename1,100);
						                            }else if($ext=="png") {
						                                imagepng($tmp1,$filename1);
						                            }else {
						                                imagegif($tmp1,$filename1);
						                            }
						                            imagedestroy($src);
						                            imagedestroy($tmp1);
						                            unlink($path.$actual_image_name);
						                            echo '<script type="text/javascript" src="/theme/TwitterBootstrap/js/jquery.min.js"></script>';
						                            echo "<img src='../".$path.'img'.$actual_image_name."' id='cropbox' class='preview thumbnoimage'>";
			                           				echo "<script>$('#cropbox').Jcrop({onSelect: updateCoords}); callCropImage(); </script>";
													$data['New_arrival']['path'] = $filename1;
													$filename1 = "'".$filename1."'";
							                        if($this->$tab_name->updateAll(array('path'=>$filename1),array('item_id'=>$pid))){
							                        	$this->Session->setFlash(__('Data Added Succesfully'));	
							                        	$this->redirect(array('controller' => 'Admins','action' => 'admin'));
							                        }
			                        		}
			                        		else
			                            		echo "failed";
			                    		}
			                    		else
			                        		echo "Image file size max 1 MB";
			                		}
			                else
			                    echo "Invalid file format..";
			            }
			            else
			                echo "Please select image..!";
			            exit;
			        }
	  	}

		public function existing() {

			if(!empty($this->request->data)) {
				$tab_name=$this->request->data['item_type'];
				$data[$tab_name]['item_name']=$this->request->data['item_name'];
				$data[$tab_name]['quantity']=$this->request->data['quantity'];
				$data[$tab_name]['price']=$this->request->data['price'];
				$data[$tab_name]['path']='';
				$data[$tab_name]['item_code']=$this->request->data['item_code'];
				$data[$tab_name]['shelf_life']=$this->request->data['shelf_life'];
				$data[$tab_name]['unit']=$this->request->data['unit'];
				$data[$tab_name]['category_id']=$this->request->data['item_category'];
				$this->$tab_name->save($data);
				$lastInsert = $this->$tab_name->getLastInsertId();
				if($this->$tab_name->save($data)) {
					$this->redirect(array('controller'=>'Admins','action'=>'add_image',$lastInsert,$tab_name));
				}
				
			}
		}

		public function existingajax() {
			$this->layout="ajax";
			$item_name=$this->request->data['item_name'];
			$this->set('item_name',$item_name);

			$category_list = $this->Category->find('list',array('conditions'=>array('Category.item_type'=>$item_name),
																'fields'=>array('Category.id','Category.category')));
			$this->set('category_array',$category_list);
			if(empty($category_list)) {
				$category_array=array(0=>'NO CATEGORY');
				$this->set('category_array',$category_array);
			}
		}

	}
?>
