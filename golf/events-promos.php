
<?php $meta_keywords = "julyamsh, concerts, entertainment, keno, boxing, house of fury, games, northwest"; ?>
<?php $meta_description = "Our entertainment rocks the region and matches every taste in music or comedy. Concerts, boxing and special events are all part of the fun."; ?>
<?php $wrapper_bg = "sunrisetour_bg"; ?>
<?php $page_title = "Coeur d'Alene Casino Resort: All Events and Promos"; ?>

<?php include('../includes_2ndlevel/header.php'); ?>
<script src="../js/calendar.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="../events/calendar.css" type="text/css" />

<?php
// include functions
require("../events/functions/functions.php");
?>

<div id="main_secondary"  ><!--  main -->


<?php

/**
 * Draw Calendar
 *
 * @param	int		$month	One-digit integer of current month (ie. 1, 2, 3...12)
 * @param	int		$year	Four-digit integer of current year	 (ie. 2009)
 * @author	David Walsh
 * @link 	http://davidwalsh.name/php-calendar
 *
 * PLEASE NOTE:
 *
 * I added lines 47 - 56 to add a unique id to each hyperlink for each day.
 */

/* top row month navigation */
$current_year = date("Y");
$current_month = $_GET["month"];
if (!isset($current_month)) {

    $current_month = date("n");
}

$current_date = mktime(0, 0, 0, $current_month, 1);
$prev_m = mktime(0, 0, 0, ($current_month - 1), 1);
$prev_month = date("F", $prev_m);
$next_m = mktime(0, 0, 0, ($current_month+1),1);
$next_month = date("F", $next_m);
$prev_url = "<a  class='prev_month_link_golf' href=\"events-promos.php?month=" . ($current_month - 1) . "\">" . $prev_month . " Events </a>";
$next_url = "<a class='next_month_link_golf' href=\"events-promos.php?month=" . ($current_month + 1) . "\">". $next_month ." Events </a>";

$month_str = date("F", $current_date);
echo "<div class='calendar_heading_golf'>".$prev_url."<div class='heading1'><h1> ".$month_str." Events Calendar</h1></div>".$next_url."</div>";
/***********end top row month nav****************************/


echo "<div class='clear'> </div>";

function draw_calendar($month, $year) {

    /* draw table */
    $calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

    /* table headings */
    $headings = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    $calendar.= '<tr class="calendar-row"><td class="calendar-day-head">' . implode('</td><td class="calendar-day-head">', $headings) . '</td></tr>';

    /* days and weeks vars now ... */
    $running_day = date('w', mktime(0, 0, 0, $month, 1, $year));
    $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
    $days_in_this_week = 1;
    $day_counter = 0;
    $dates_array = array();

    /* row for week one */
    $calendar.= '<tr class="calendar-row">';

    /* print "blank" days until the first of the current week */
    for ($x = 0; $x < $running_day; $x++):
        $calendar.= '<td class="calendar-day-np">&nbsp; </td>';
        $days_in_this_week++;
    endfor;

    /* keep going with days.... */ // this for statement creates all the calendar cells
    for ($list_day = 1; $list_day <= $days_in_month; $list_day++):

        // convert the current calendar date for SQL varchar comparison and to identify the current calendar date
        $this_date = date("m/d/Y", strtotime("$month/$list_day/$year"));

        // create an id for the popup div based on the current calendar date
        $popup_id = "1" . strtotime($this_date);

        // create a cell id for the table cell based on the current calendar date
        $table_cell_id = "2" . strtotime($this_date);

        // javascript for displaying the hidden div popup window and hiding it
        $popup_javascript = "OnMouseOver='showPopup($popup_id,getElementById($table_cell_id).offsetLeft,getElementById($table_cell_id).offsetTop);' OnMouseOut='hidePopup($popup_id);'";

        // create the table cell for the calendar for this date
        $calendar.= "<td id='$table_cell_id' class='calendar-day' $popup_javascript>";

        // event titles for this date
        $event_titles = get_event_titles($this_date, 0);
        //data for event popup window
        $event_details = get_event_titles($this_date, 1);
        // include the event titles in the calendar cell
        $calendar .= $event_titles;

        // generate the div container for the popup window if there are events on this date
        if (strlen($event_titles) > 0)
            echo "<div id='$popup_id' class='popup_window' $popup_javascript><div id='popup_content'><h4>Events on $this_date</h4><br/> $event_details</div></div>";


        /**
         * Assign a unique id to the day number. This unique id will be
         * used by jQuery to locate events from the database that are
         * on this day. The unique id is the timestamp for the first minute
         * of $list_day of $month of $year.
         *
         * @author Josh Lockhart, http://www.newmediacampaigns.com, lines 40-41
         */
        $timestamp = mktime(0, 0, 0, $month, $list_day, $year);
        $calendar.= '<div class="day-number">'. $list_day .' </div>';

        $calendar.= '</td>';

        if ($running_day == 6):
            $calendar.= '</tr>';
            if (($day_counter + 1) != $days_in_month):
                $calendar.= '<tr class="calendar-row">';
            endif;
            $running_day = -1;
            $days_in_this_week = 0;
        endif;
        $days_in_this_week++;
        $running_day++;
        $day_counter++;
    endfor;

    /* finish the rest of the days in the week */
    if ($days_in_this_week < 8):
        for ($x = 1; $x <= (8 - $days_in_this_week); $x++):
            $calendar.= '<td class="calendar-day-np" > &nbsp;</td>';
        endfor;
    endif;

    /* final row */
    $calendar.= '</tr>';
    /* end the table */
    $calendar.= '</table>';
    /* all done, return result */
    return $calendar;
}


echo draw_calendar($current_month, $current_year);

?>

<span class="sunrise_quicklinks" >
 <?php include('../includes_2ndlevel/quicklinks.php'); ?>
</span>


</div><!-- end main -->


<?php include('../includes_2ndlevel/footer.php'); ?>

