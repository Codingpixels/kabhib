<?php

	class ReportsController extends AppController {

		public $name = 'Reports';
		public $uses = array('EmployeeReturn','CustomerOrderDetail');
		public $components = array('Email', 'Cookie');
		public $helpers= array('Html' , 'Form');

		public function index() {

		}
		public function fresh_return_type() {

		}
		public function sales_report_type() {

		}
		public function fresh_overall_piechart() {
			if(!empty($this->request->params['pass']['0'])) {
				$period = $this->request->params['pass']['0'];
				if($period == 'today') {
					$date1 = date('Y-m-d');
					$conditions = array( 'EmployeeReturn.return_date LIKE' => $date1.'%');
				}
				elseif($period == 'weekly') {
					$date1 = date('Y-m-d', strtotime('-7 days'));
					$date2 = date('Y-m-d');
					$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				elseif($period == 'monthly') {
					$month = date('M');
					$date1 = date('Y-m-01',strtotime($month));
					$date2 = date('Y-m-t',strtotime($month));
					$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				elseif($period == 'yearly') {
					$year = date('Y');
					$date1 = date('Y-m-01',strtotime($year."-01-01"));
					$date2 = date('Y-m-t',strtotime($year."-12-31"));
					$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				
				$total_return_quantity = $this->EmployeeReturn->find('all',array('conditions'=> $conditions,
																				  'fields'=>array(
																				  				'EmployeeReturn.return_qty',
																				  				'EmployeeReturn.type',
																				 				'EmployeeReturn.return_date',
																				 				'EmployeeReturn.item_name',
																				 				'EmployeeReturn.total_price')));
				
				$i = 1;
				$total_damage = 0;
				$damage_list = array();
				$chart_data_array = array();
				foreach ($total_return_quantity as $key => $value) {
					$total_damage = $total_damage + intval($value['EmployeeReturn']['total_price']);

					if(array_key_exists($value['EmployeeReturn']['type'], $damage_list)){
					$damage_list[$value['EmployeeReturn']['type']] = $damage_list[$value['EmployeeReturn']['type']] + intval($value['EmployeeReturn']['total_price']);
					} else {
						$damage_list = array_merge($damage_list, array($value['EmployeeReturn']['type'] => $value['EmployeeReturn']['total_price']));
					}
				}
				
				$chart_data_array[0] = array('Type', 'Damage');
				foreach ($damage_list as $key => $value) {
					$chart_data_array[$i] = array($key, intval($value));
					$i++;
				}
				$chart_data_json = json_encode($chart_data_array);
				$this->set('chart_data_json', $chart_data_json);
				$this->set('period', $period);
			}
		}

		public function fresh_category_wise_piechart() {
			if(!empty($this->request->data)) {
				$category = $this->request->data['fresh_category_wise_piechart']['item_category'];
				$period = $this->request->data['fresh_category_wise_piechart']['report_span'];
					if($period == 'today') {
						$date1 = date('Y-m-d');
						$conditions = array( 'EmployeeReturn.return_date LIKE' => $date1.'%');
					}
					elseif($period == 'weekly') {
						$date1 = date('Y-m-d', strtotime('-7 days'));
						$date2 = date('Y-m-d');
						$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
													$date1.'%',
						 							$date2.'%'));
					}
					elseif($period == 'monthly') {
						$month = date('M');
						$date1 = date('Y-m-01',strtotime($month));
						$date2 = date('Y-m-t',strtotime($month));
						$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
													$date1.'%',
						 							$date2.'%'));
					}
					elseif($period == 'yearly') {
						$year = date('Y');
						$date1 = date('Y-m-01',strtotime($year."-01-01"));
						$date2 = date('Y-m-t',strtotime($year."-12-31"));
						$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
													$date1.'%',
						 							$date2.'%'));
					}
					
					$total_return_quantity = $this->EmployeeReturn->find('all',
																		array('conditions'=> $conditions,
																			  'fields'=>array(
																			  				'EmployeeReturn.return_qty',
																			  				'EmployeeReturn.type',
																			 				'EmployeeReturn.return_date',
																			 				'EmployeeReturn.item_name',
																			 				'EmployeeReturn.total_price')));

					$i = 2;
					$total_damage = 0;
					$other_category_damage = 0;
					
					$damage_list = array();
					$chart_data_array = array();
					foreach ($total_return_quantity as $key => $value) {
						$total_damage = $total_damage + intval($value['EmployeeReturn']['total_price']);
						if($value['EmployeeReturn']['type'] == $category) {
							$damage_list[$value['EmployeeReturn']['type']] = $damage_list[$value['EmployeeReturn']['type']] + intval($value['EmployeeReturn']['total_price']);
							$category_damage = $damage_list[$value['EmployeeReturn']['type']] + intval($value['EmployeeReturn']['total_price']);
						}
					}
					$other_category_damage = $total_damage - $category_damage;
					$chart_data_array[0] = array('Type', 'Damage');
					$chart_data_array[1] = array('Others', $other_category_damage);
					foreach ($damage_list as $key => $value) {
						$chart_data_array[$i] = array($key, intval($value));
						$i++;
					}
					$chart_data_json = json_encode($chart_data_array);
					$this->set('chart_data_json', $chart_data_json);
					$this->set('period',$period);
			}	
		}
		public function fresh_item_wise_piechart() {
			if(!empty($this->request->data)) {
				$category = $this->request->data['fresh_category_wise_piechart']['item_category'];
				$period = $this->request->data['fresh_category_wise_piechart']['report_span'];

					if($period == 'today') {
						$date1 = date('Y-m-d');
						$conditions = array( 'EmployeeReturn.return_date LIKE' => $date1.'%');
					}
					elseif($period == 'weekly') {
						$date1 = date('Y-m-d', strtotime('-7 days'));
						$date2 = date('Y-m-d');
						$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
													$date1.'%',
						 							$date2.'%'));
					}
					elseif($period == 'monthly') {
						$month = date('M');
						$date1 = date('Y-m-01',strtotime($month));
						$date2 = date('Y-m-t',strtotime($month));
						$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
													$date1.'%',
						 							$date2.'%'));
					}
					elseif($period == 'yearly') {
						$year = date('Y');
						$date1 = date('Y-m-01',strtotime($year."-01-01"));
						$date2 = date('Y-m-t',strtotime($year."-12-31"));
						$conditions = array( 'EmployeeReturn.return_date  BETWEEN ? AND ?' =>array(
													$date1.'%',
						 							$date2.'%'));
					}
					
					$total_return_quantity = $this->EmployeeReturn->find('all',
																		array('conditions'=> $conditions,
																			  'fields'=>array(
																			  				'EmployeeReturn.return_qty',
																			  				'EmployeeReturn.type',
																			 				'EmployeeReturn.return_date',
																			 				'EmployeeReturn.item_name',
																			 				'EmployeeReturn.total_price')));
					
					$i = 2;
					$total_damage = 0;
					$item_wise_array = array();
					$chart_data_array = array();
					foreach ($total_return_quantity as $key => $value) {
						$total_damage = $total_damage + intval($value['EmployeeReturn']['total_price']);
						if($value['EmployeeReturn']['type'] == $category) {
							if(array_key_exists($value['EmployeeReturn']['item_name'], $item_wise_array)){
								$item_wise_array[$value['EmployeeReturn']['item_name']] = $item_wise_array[$value['EmployeeReturn']['item_name']] + $value['EmployeeReturn']['total_price'];
							} else {
								$item_wise_array = array_merge($item_wise_array, array($value['EmployeeReturn']['item_name'] => $value['EmployeeReturn']['total_price']));
							}
						}
					}

					$chart_data_array[0] = array('Type', 'Damage');
					$chart_data_array[1] = array('Overall', $total_damage);
					foreach ($item_wise_array as $key => $value) {
						$chart_data_array[$i] = array($key, intval($value));
						$i++;
					}
					$chart_data_json = json_encode($chart_data_array);
					$this->set('chart_data_json', $chart_data_json);
					$this->set('period', $period);
			}
		}
		public function sales_overall_piechart() {
			if(!empty($this->request->params['pass']['0'])) {
				$period = $this->request->params['pass']['0'];
				if($period == 'today') {
					$date1 = date('Y-m-d');
					$conditions = array( 'CustomerOrderDetail.order_date LIKE' => $date1.'%');
				}
				elseif($period == 'weekly') {
					$date1 = date('Y-m-d', strtotime('-7 days'));
					$date2 = date('Y-m-d');
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				elseif($period == 'monthly') {
					$month = date('M');
					$date1 = date('Y-m-01',strtotime($month));
					$date2 = date('Y-m-t',strtotime($month));
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				elseif($period == 'yearly') {
					$year = date('Y');
					$date1 = date('Y-m-01',strtotime($year."-01-01"));
					$date2 = date('Y-m-t',strtotime($year."-12-31"));
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				
				$total_sold_qty = $this->CustomerOrderDetail->find('all',array('conditions'=> $conditions,
																				  	'fields'=>array(
																			  				'CustomerOrderDetail.item_quantity',
																			  				'CustomerOrderDetail.type',
																			 				'CustomerOrderDetail.order_date',
																			 				'CustomerOrderDetail.item_name',
																			 				'CustomerOrderDetail.each_qty_price',
																			 				'CustomerOrderDetail.item_return_quantity')));
				$sales_array =array();
				$i = 1;
				foreach ($total_sold_qty as $key => $value) {
					$actual_sale_qty = $value['CustomerOrderDetail']['item_quantity'] - $value['CustomerOrderDetail']['item_return_quantity'];
					$actual_sale_bill = $actual_sale_qty * $value['CustomerOrderDetail']['each_qty_price'];
					if(array_key_exists($value['CustomerOrderDetail']['type'], $sales_array)){
						$sales_array[$value['CustomerOrderDetail']['type']] = $sales_array[$value['CustomerOrderDetail']['type']] + $actual_sale_bill;
					} else {
						$sales_array = array_merge($sales_array, array($value['CustomerOrderDetail']['type'] => $actual_sale_bill));
					}
				}
				$chart_data_array[0] = array('Type', 'Damage');
				foreach ($sales_array as $key => $value) {
					$chart_data_array[$i] = array($key, intval($value));
					$i++;
				}
				$chart_data_json = json_encode($chart_data_array);
				$this->set('chart_data_json', $chart_data_json);
				$this->set('period', $period);
				
			}
		}
		public function sales_category_wise_piechart() {
			if(!empty($this->request->data['sales_category_wise_piechart']['item_category'])) {
				$category = $this->request->data['sales_category_wise_piechart']['item_category'];
				$period = $this->request->data['sales_category_wise_piechart']['report_span'];
				if($period == 'today') {
					$date1 = date('Y-m-d');
					$conditions = array( 'CustomerOrderDetail.order_date LIKE' => $date1.'%');
				}
				elseif($period == 'weekly') {
					$date1 = date('Y-m-d', strtotime('-7 days'));
					$date2 = date('Y-m-d');
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				elseif($period == 'monthly') {
					$month = date('M');
					$date1 = date('Y-m-01',strtotime($month));
					$date2 = date('Y-m-t',strtotime($month));
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				elseif($period == 'yearly') {
					$year = date('Y');
					$date1 = date('Y-m-01',strtotime($year."-01-01"));
					$date2 = date('Y-m-t',strtotime($year."-12-31"));
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				
				$total_sold_qty = $this->CustomerOrderDetail->find('all',array('conditions'=> $conditions,
																				  	'fields'=>array(
																			  				'CustomerOrderDetail.item_quantity',
																			  				'CustomerOrderDetail.type',
																			 				'CustomerOrderDetail.order_date',
																			 				'CustomerOrderDetail.item_name',
																			 				'CustomerOrderDetail.each_qty_price',
																			 				'CustomerOrderDetail.item_return_quantity')));
				$sales_array =array();
				$total_sale = 0;
				$i = 2;
				foreach ($total_sold_qty as $key => $value) {
					$actual_sale_qty = $value['CustomerOrderDetail']['item_quantity'] - $value['CustomerOrderDetail']['item_return_quantity'];
					$actual_sale_bill = $actual_sale_qty * $value['CustomerOrderDetail']['each_qty_price'];
					$total_sale = $total_sale + $actual_sale_bill;
					if($value['CustomerOrderDetail']['type'] == $category) {
						$sales_array[$value['CustomerOrderDetail']['type']] = $sales_array[$value['CustomerOrderDetail']['type']] + $actual_sale_bill;
					}
				}
				$chart_data_array[0] = array('Type', 'Damage');
				$chart_data_array[1] = array('Overall', $total_sale);
				foreach ($sales_array as $key => $value) {
					$chart_data_array[$i] = array($key, intval($value));
					$i++;
				}
				$chart_data_json = json_encode($chart_data_array);
				$this->set('chart_data_json', $chart_data_json);
				$this->set('period', $period);
				
			}
		}
		public function sales_item_wise_piechart() {
			if(!empty($this->request->data['sales_category_wise_piechart']['item_category'])) {
				$category = $this->request->data['sales_category_wise_piechart']['item_category'];
				$period = $this->request->data['sales_category_wise_piechart']['report_span'];
				if($period == 'today') {
					$date1 = date('Y-m-d');
					$conditions = array( 'CustomerOrderDetail.order_date LIKE' => $date1.'%');
				}
				elseif($period == 'weekly') {
					$date1 = date('Y-m-d', strtotime('-7 days'));
					$date2 = date('Y-m-d');
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				elseif($period == 'monthly') {
					$month = date('M');
					$date1 = date('Y-m-01',strtotime($month));
					$date2 = date('Y-m-t',strtotime($month));
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				elseif($period == 'yearly') {
					$year = date('Y');
					$date1 = date('Y-m-01',strtotime($year."-01-01"));
					$date2 = date('Y-m-t',strtotime($year."-12-31"));
					$conditions = array( 'CustomerOrderDetail.order_date  BETWEEN ? AND ?' =>array(
												$date1.'%',
					 							$date2.'%'));
				}
				
				$total_sold_qty = $this->CustomerOrderDetail->find('all',array('conditions'=> $conditions,
																				  	'fields'=>array(
																			  				'CustomerOrderDetail.item_quantity',
																			  				'CustomerOrderDetail.type',
																			 				'CustomerOrderDetail.order_date',
																			 				'CustomerOrderDetail.item_name',
																			 				'CustomerOrderDetail.each_qty_price',
																			 				'CustomerOrderDetail.item_return_quantity')));
				$sales_array =array();
				$total_sale = 0;
				$i = 2;
				foreach ($total_sold_qty as $key => $value) {
					$actual_sale_qty = $value['CustomerOrderDetail']['item_quantity'] - $value['CustomerOrderDetail']['item_return_quantity'];
					$actual_sale_bill = $actual_sale_qty * $value['CustomerOrderDetail']['each_qty_price'];
					$total_sale = $total_sale + $actual_sale_bill;
					if($value['CustomerOrderDetail']['type'] == $category) {
						if(array_key_exists($value['CustomerOrderDetail']['item_name'], $sales_array)){
								$sales_array[$value['CustomerOrderDetail']['item_name']] = $sales_array[$value['CustomerOrderDetail']['item_name']] + $actual_sale_bill;
							} else {
								$sales_array = array_merge($sales_array, array($value['CustomerOrderDetail']['item_name'] => $actual_sale_bill));
							}
					}
				}
				$chart_data_array[0] = array('Type', 'Damage');
				$chart_data_array[1] = array('Overall', $total_sale);
				foreach ($sales_array as $key => $value) {
					$chart_data_array[$i] = array($key, intval($value));
					$i++;
				}
				$chart_data_json = json_encode($chart_data_array);
				$this->set('chart_data_json', $chart_data_json);
				$this->set('period', $period);
				
			}
		}
	}

?>