<?php
		/**
		*@author  Xu Ding
		*@email   thedilab@gmail.com
		*@website http://www.StarTutorial.com
		**/
		class Calendar {  
			 
			/**
			 * Constructor
			 */
			public function __construct(){     
				$this->naviHref = htmlentities($_SERVER['PHP_SELF']);
			}
			 
			/********************* PROPERTY ********************/  
			private $dayLabels = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
			 
			private $currentYear=0;
			 
			private $currentMonth=0;
			 
			private $currentDay=0;
			 
			private $currentDate=null;
			 
			private $daysInMonth=0;
			 
			private $naviHref= null;
			 
			/********************* PUBLIC **********************/  
				
			/**
			* print out the calendar
			*/
			public function show() {
				 
				if(isset($_GET['year'])){
		 
					$year = $_GET['year'];
				 
				}else{
		 
					$year = date("Y",time());  
				 
				}          
				 
				if(isset($_GET['month'])){
		 
					$month = $_GET['month'];
				 
				}else{
		 
					$month = date("m",time());
				 
				}                  
				 
				$this->currentYear=$year;
				 
				$this->currentMonth=$month;
				 
				$this->daysInMonth=$this->_daysInMonth($month,$year);  

				$content='<div class="container" id = "scheds">'.'<div class="jumbotron"></div>'.
                    '<div class = "schedsA">
                        <div id="dDate" class="dDate text-center"></div> 
                        <div class="timeSched">
                            <input type="radio" name="time" id="time" class = "time" value="1"/>08:00am - 10:00am <button class="timeStat" id="timeStat1">Available</button><br/>
                            <input type="radio" name="time" id="time" class = "time" value="2"/>09:00am - 11:00am <button class="timeStat" id="timeStat2">Available</button><br/>
                            <input type="radio" name="time" id="time" class = "time" value="3"/>10:00am - 12:00pm <button class="timeStat" id="timeStat3">Available</button><br/>
                            <input type="radio" name="time" id="time" class = "time" value="4"/>11:00am - 01:00pm <button class="timeStat" id="timeStat4">Available</button><br/>
                            <input type="radio" name="time" id="time" class = "time" value="5"/>12:00pm - 02:00pm <button class="timeStat" id="timeStat5">Available</button><br/>
                            <input type="radio" name="time" id="time" class = "time" value="6"/>01:00pm - 03:00pm <button class="timeStat" id="timeStat6">Available</button><br/>
                            <input type="radio" name="time" id="time" class = "time" value="7"/>02:00pm - 04:00pm <button class="timeStat" id="timeStat7">Available</button><br/>
                            <input type="radio" name="time" id="time" class = "time" value="8"/>03:00pm - 05:00pm <button class="timeStat" id="timeStat8">Available</button>
                        </div>
                        </div>'.
                    
                    '<div id="calendar" class="mr-0">'.
								'<div class="box mx-auto">'.
								$this->_createNavi().
								'</div>'.
								'<div class="box-content">'.
										'<ul class="label">'.$this->_createLabels().'</ul>';  
										$content.='<div class="clear"></div>';     
										$content.='<ul class="dates" id = "dates" >';    
										 
										$weeksInMonth = $this->_weeksInMonth($month,$year);
										// Create weeks in a month
										for( $i=0; $i<$weeksInMonth; $i++ ){
											 
											//Create days in a week
											for($j=0;$j<7;$j++){
												$content.=$this->_showDay($i*7+$j);
											}
										}
										 
										$content.='</ul>';
										 
										$content.='<div class="clear"></div>';     
					 
								$content.='</div>';
						 
				$content.='</div></div>';
				return $content;   
			}
			 
			/********************* PRIVATE **********************/ 
			/**
			* create the li element for ul
			*/
			private function _showDay($cellNumber){
				 
				if($this->currentDay==0){
					 
					$firstDayOfTheWeek = date('N',strtotime($this->currentYear.'-'.$this->currentMonth.'-01'));
							 
					if(intval($cellNumber) == intval($firstDayOfTheWeek)){
						 
						$this->currentDay=1;
						 
					}
				}
				 
				if( ($this->currentDay!=0)&&($this->currentDay<=$this->daysInMonth) ){
					 
					$this->currentDate = date('Y-m-d',strtotime($this->currentYear.'-'.$this->currentMonth.'-'.($this->currentDay)));
					 
					$cellContent = $this->currentDay;
					 
					$this->currentDay++;   
					 
				}else{
					 
					$this->currentDate =null;
		 
					$cellContent=null;
				}
					 
				 
				return '<li onclick="datesClicked(this.id)" onmouseover="datesHover(this.id,1)" onmouseout="datesHover(this.id,0)" id="li-'.$this->currentDate.'" class="'.($cellNumber%7==1?' start ':($cellNumber%7==0?' end ':' ')).
						($cellContent==null?'mask':'').'">'.$cellContent.'</li>';
			}
			 
			/**
			* create navigation
			*/
			private function _createNavi(){
				 
				$nextMonth = $this->currentMonth==12?1:intval($this->currentMonth)+1;
				 
				$nextYear = $this->currentMonth==12?intval($this->currentYear)+1:$this->currentYear;
				 
				$preMonth = $this->currentMonth==1?12:intval($this->currentMonth)-1;
				 
				$preYear = $this->currentMonth==1?intval($this->currentYear)-1:$this->currentYear;
				 
				return
					'<div class="header">'.
						'<a class="prev" href="'.$this->naviHref.'?month='.sprintf('%02d',$preMonth).'&year='.$preYear.'">Prev</a>'.
							'<span class="title">'.date('Y M',strtotime($this->currentYear.'-'.$this->currentMonth.'-1')).'</span>'.
						'<a class="next" href="'.$this->naviHref.'?month='.sprintf("%02d", $nextMonth).'&year='.$nextYear.'">Next</a>'.
					'</div>';
			}
				 
			/**
			* create calendar week labels
			*/
			private function _createLabels(){  
						 
				$content='';
				 
				foreach($this->dayLabels as $index=>$label){
					 
					$content.='<li class="'.($label==6?'end title':'start title').' title">'.$label.'</li>';
		 
				}
				 
				return $content;
			}
			 
			 
			 
			/**
			* calculate number of weeks in a particular month
			*/
			private function _weeksInMonth($month=null,$year=null){
				 
				if( null==($year) ) {
					$year =  date("Y",time()); 
				}
				 
				if(null==($month)) {
					$month = date("m",time());
				}
				 
				// find number of days in this month
				$daysInMonths = $this->_daysInMonth($month,$year);
				 
				$numOfweeks = ($daysInMonths%7==0?0:1) + intval($daysInMonths/7);
				 
				$monthEndingDay= date('N',strtotime($year.'-'.$month.'-'.$daysInMonths));
				 
				$monthStartDay = date('N',strtotime($year.'-'.$month.'-01'));
				 
				if($monthEndingDay<$monthStartDay){
					 
					$numOfweeks++;
				 
				}
				 
				return $numOfweeks;
			}
		 
			/**
			* calculate number of days in a particular month
			*/
			private function _daysInMonth($month=null,$year=null){
				 
				if(null==($year))
					$year =  date("Y",time()); 
		 
				if(null==($month))
					$month = date("m",time());
					 
				return date('t',strtotime($year.'-'.$month.'-01'));
			}
			 
		}
		?>