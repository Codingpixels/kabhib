<?php

	class ReportsController extends AppController {

		public $name = 'Reports';
		public $uses = array('EmployeeReturn','Category');
		public $components = array('Email', 'Cookie');
		public $helpers= array('Html' , 'Form');

		public function index() {
		}
		public function fresh_return_type() {

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
					$damage_list = array();
					$chart_data_array = array();
					foreach ($total_return_quantity as $key => $value) {
						$total_damage = $total_damage + intval($value['EmployeeReturn']['total_price']);
						if($value['EmployeeReturn']['type'] == $category) {
							$damage_list[$value['EmployeeReturn']['type']] = $damage_list[$value['EmployeeReturn']['type']] + intval($value['EmployeeReturn']['total_price']);
						}
					}
					$chart_data_array[0] = array('Type', 'Damage');
					$chart_data_array[1] = array('Overall', $total_damage);
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
}

?>