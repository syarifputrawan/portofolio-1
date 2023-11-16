<?php include "../../includes/header.php" ?>
<?php include "../../includes/alert1.php"; ?>
<!-- Menampilkan Waktu -->
<!-- Menampilkan Waktu -->
<div class="current-time">
    <?php echo "Saat ini: " . date("Y-m-d H:i:s"); ?>
</div>
<?php function draw_calendar($month,$year){

// Draw table for Calendar 
$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

// Draw Calendar table headings 
$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

//days and weeks variable for now ... 
$running_day = date('w',mktime(0,0,0,$month,1,$year));
$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
$days_in_this_week = 1;
$day_counter = 0;
$dates_array = array();

// row for week one 
$calendar.= '<tr class="calendar-row">';

// Display "blank" days until the first of the current week 
for($x = 0; $x < $running_day; $x++):
    $calendar.= '<td class="calendar-day-np">&nbsp;</td>';
    $days_in_this_week++;
endfor;

// Show days.... 
for($list_day = 1; $list_day <= $days_in_month; $list_day++):
    if($list_day==date('d') && $month==date('n'))
    {
        $currentday='currentday';
    }else
    {
        $currentday='';
    }
    $calendar.= '<td class="calendar-day '.$currentday.'">';
    
        // Add in the day number
        if($list_day<date('d') && $month==date('n'))
        {
            $showtoday='<strong class="overday">'.$list_day.'</strong>';
        }else
        {
            $showtoday=$list_day;
        }
        $calendar.= '<div class="day-number">'.$showtoday.'</div>';

    // Draw table end
    $calendar.= '</td>';
    if($running_day == 6):
        $calendar.= '</tr>';
        if(($day_counter+1) != $days_in_month):
            $calendar.= '<tr class="calendar-row">';
        endif;
        $running_day = -1;
        $days_in_this_week = 0;
    endif;
    $days_in_this_week++; $running_day++; $day_counter++;
endfor;

// Finish the rest of the days in the week
if($days_in_this_week < 8):
    for($x = 1; $x <= (8 - $days_in_this_week); $x++):
        $calendar.= '<td class="calendar-day-np">&nbsp;</td>';
    endfor;
endif;

// Draw table final row
$calendar.= '</tr>';

// Draw table end the table 
$calendar.= '</table>';

// Finally all done, return result 
return $calendar;
}
?>
<a class="weatherwidget-io" href="https://forecast7.com/en/40d71n74d01/new-york/" data-label_1="indonesia" data-label_2="WEATHER" data-theme="original" >indonesia</a>
<br>
<body>
<div class="row">
    <div class="col-md-7">
        <?php
        echo '<h2>November 2023</h2>';
        echo draw_calendar(11, 2023); 
        ?>
    </div>
    <div class="col-md-5">
        <canvas id="myChart" width="400" height="350"></canvas>
    </div>
</div>
</body>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Data untuk grafik (contoh data)
var data = {
    labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
    datasets: [{
        label: 'Contoh Data',
        data: [12, 19, 3, 5, 2],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
        ],
        borderWidth: 1
    }]
};

// Mendapatkan elemen canvas grafik
var ctx = document.getElementById('myChart').getContext('2d');

// Inisialisasi grafik
var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
<?php include "../../includes/footer.php" ?>