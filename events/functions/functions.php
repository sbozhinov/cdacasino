<?php

	//include configuration
	require("config.php");

	// use SQL_Single to retrieve a single record from the database
	// example: echo SQL_Single("SELECT email_address FROM users WHERE username LIKE 'Howard'");
	function SQL_Single($query){
		$result = mysql_query($query);
		if (!$result) {
			exit;
		}
		$row = mysql_fetch_row($result);
		
		if(isset($row)){
			return $row[0];
		} else {
			return false;
		}
	}

	// use SQL_Array to retrieve an array of values
	// example: $my_array = SQL_Array("SELECT email_address FROM users");
	function SQL_Array($query){

		$result = mysql_query($query);
		if (!$result) {
			exit;
		}

		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			$results[] = $row[0];
		}
		
		if(isset($results)){
			return $results;	
		} else {
			return false;
		}
		
		mysql_free_result($result);
	}
	
	// return event titles for the matching date
	function get_event_titles($date, $popup){
	
		// get all the events with a startdate of the current calendar date
		$this_date_events = SQL_Array("SELECT evt_id FROM event_form WHERE evt_startdate LIKE '$date' and web  != '' ");
		$this_date_promos = SQL_Array("SELECT pmo_id FROM promo_form WHERE pmo_startdate  LIKE '$date' and web  != '' ");
                $this_date_general = SQL_Array("SELECT gen_id FROM gen_form WHERE gen_startdate LIKE '$date' and web  != '' ");
		// store the event titles
		$event_titles = '';
                $evt_detail= '';
                $pmo_detail= '';
                $gen_detail= '';
                $popup_detail ='';
		// compile events
		if($this_date_events){

                    //event_form table

			foreach ($this_date_events as $event){

				$event_title = SQL_Single("SELECT evt_evtname FROM event_form WHERE evt_id = $event");
				$event_titles .= "<h4>$event_title</h4>";

                                $event_time1 = SQL_Single("SELECT evt_time1 FROM event_form WHERE evt_id = $event");
                                $event_detail .= $event_titles."<p>$event_time1</p>";

                                $evt_example = SQL_Single("SELECT example FROM event_form WHERE evt_id = $event");
                                if($evt_example)$event_detail .= "<div class='popup_img'><img src='$evt_example' width='50' height='50' /> </div><div class='clear'></div>";

                                $event_time2 = SQL_Single("SELECT evt_time1 FROM event_form WHERE evt_id = $event");
                                if($event_time2)$event_detail .= "<p>$event_time2</p>";

                                $event_time3 = SQL_Single("SELECT evt_time1 FROM event_form WHERE evt_id = $event");
                                if($event_time3)$event_detail .= "<p>$event_time3</p>";

                                $event_time4 = SQL_Single("SELECT evt_time1 FROM event_form WHERE evt_id = $event");
                                if($event_time4)$event_detail .= "<p>$event_time4</p>";

                                $event_type = SQL_Single("SELECT evt_type FROM event_form WHERE evt_id = $event");
                                if($event_type)$event_detail .= "<p>Type: $event_type</p>";

                                $event_price1 = SQL_Single("SELECT evt_price1 FROM event_form WHERE evt_id = $event");
                                if($event_price1)$event_detail .= "<p>Price: $event_price1</p>";

                                $event_price2 = SQL_Single("SELECT evt_price2 FROM event_form WHERE evt_id = $event");
                                if($event_price2)$event_detail .= "<p>Price: $event_price2</p>";

                                $event_price3 = SQL_Single("SELECT evt_price3 FROM event_form WHERE evt_id = $event");
                                if($event_price3)$event_detail .= "<p>Price: $event_price3</p>";

                                $event_whyhow = SQL_Single("SELECT evt_whyhow FROM event_form WHERE evt_id = $event");
                                if($event_example)$event_detail .= "<p>$event_example </p>";


                                $event_detail .= "<hr/>";

			}
                       $evt_detail= $event_detail;

		}

                 //promo_form table
                if($this_date_promos){
                    foreach ($this_date_promos as $event){
				$event_title = SQL_Single("SELECT pmo_promoname FROM promo_form WHERE pmo_id = $event");
				$event_titles .= "<h4>$event_title</h4>";

                                $event_time1 = SQL_Single("SELECT pmo_time1 FROM promo_form WHERE pmo_id = $event");
                                $event_detail .= "<div class='event'><h4>$event_title</h4>"."<p> $event_time1  </p>";

                                $pmo_example = SQL_Single("SELECT example FROM promo_form WHERE pmo_id = $event");
                                if($pmo_example)$event_detail .= "<div class='popup_img'><img src='$pmo_example' width='50' height='50' /> </div><div class='clear'></div>";
                                
                                $event_time2 = SQL_Single("SELECT pmo_time2 FROM promo_form WHERE pmo_id = $event");
                                if($event_time2)$event_detail .= "<p>$event_time2</p>";

                                $event_time3 = SQL_Single("SELECT pmo_time3 FROM promo_form WHERE pmo_id = $event");
                                if($event_time3)$event_detail .= "<p>$event_time3</p>";

                                $event_time4 = SQL_Single("SELECT pmo_time4 FROM promo_form WHERE pmo_id = $event");
                                if($event_time4)$event_detail .= "<p>$event_time4</p>";

                                $pmo_whyhow = SQL_Single("SELECT pmo_whyhow FROM promo_form WHERE pmo_id = $event");
                                if($pmo_whyhow)$event_detail .= "<p>$pmo_whyhow  </p>";

                                
                                $event_detail .="<hr/></div>";

			}
                        $pmo_detail = $event_detail;
                }


                //gen_form table
                if($this_date_general){
                    foreach ($this_date_general as $event){
				$event_title = SQL_Single("SELECT gen_projectname FROM gen_form WHERE gen_id = $event");
				$event_titles .= "<h4>$event_title</h4>";

                                $event_starttime = SQL_Single("SELECT gen_startdate FROM gen_form WHERE gen_id = $event");
                                $event_detail .= "<h4>Project name: $event_title</h4>"."<p>Event starts on $event_starttime  </p>";

                                $gen_example = SQL_Single("SELECT example FROM gen_form WHERE gen_id = $event");
                                if($gen_example)$event_detail .= "<div class='popup_img'><img src='$gen_example' width='50' height='50' /> </div>";

                                $event_endtime = SQL_Single("SELECT gen_enddate FROM gen_form WHERE gen_id = $event");
                                if($event_endtime)$event_detail .= "<p>Event ends on $event_endtime</p>";

                                $event_proj_location = SQL_Single("SELECT gen_projectlocation FROM gen_form WHERE gen_id = $event");
                                if($event_proj_location)$event_detail .= "<p>Project location: $event_proj_location</p>";

                                $gen_whyhow = SQL_Single("SELECT gen_whyhow FROM gen_form WHERE gen_id = $event");
                                if($gen_whyhow)$event_detail .= "<p>$gen_whyhow</p>";

 
                                $event_detail .="<hr/>";

			}
                }
                
           $popup_detail = $pmo_detail.$evt_detail;
                

	                if ($popup == 0){
                        return $event_titles;
                        }


                        if ($popup == 1){
                            return $popup_detail;
                        }
	}

?>

