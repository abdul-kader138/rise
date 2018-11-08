<?php
load_css(array(
    "assets/js/fullcalendar/fullcalendar.min.css"
));

load_js(array(
    "assets/js/fullcalendar/fullcalendar.min.js",
    "assets/js/fullcalendar/lang-all.js",
    "assets/js/bootstrap-confirmation/bootstrap-confirmation.js"
));

$client = "";
if (isset($client_id)) {
    $client = $client_id;
}
?>

<div id="page-content<?php echo $client; ?>" class="p20<?php echo $client; ?> clearfix">
    <div class="panel panel-default">
        <div class="page-title clearfix">
            <?php if ($client) { ?>
                <h4><?php echo lang('events'); ?></h4>
            <?php } else { ?>
                <h1><?php echo lang('client_event_calendar'); ?></h1>
            <?php } ?>
            <div class="title-button-group">
                <!--                --><?php //echo modal_anchor(get_uri("events/modal_form"), "<i class='fa fa-plus-circle'></i> " . lang('add_event'), array("class" => "btn btn-default", "title" => lang('add_event'), "data-post-client_id" => $client)); ?>
                <!--                --><?php //echo modal_anchor(get_uri("events/modal_form"), "", array("class" => "hide", "id" => "add_event_hidden", "title" => lang('add_event'), "data-post-client_id" => $client)); ?>
                <!--                --><?php //echo modal_anchor(get_uri("events/view"), "", array("class" => "hide", "id" => "show_event_hidden", "data-post-client_id" => $client, "data-post-cycle" => "0", "data-post-editable" => "1", "title" => lang('event_details'))); ?>
                <!--                --><?php //echo modal_anchor(get_uri("leaves/application_details"), "", array("class" => "hide", "data-post-id" => "", "id" => "show_leave_hidden")); ?>
            </div>
        </div>
        <div class="panel-body">
            <div id="event-calendar1"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        $("#event-calendar1").fullCalendar({
//            lang: AppLanugage.locale,
            header: {
                left: 'prev,next today',
                center: 'title'
//                right: 'month,agendaWeek,agendaDay'
            },
            events: '<?php base_url(); ?>clients_events/calendar_events/'
//            events: [{"title" : "Hello","start" :"2018-11-07"}]

        });

            setTimeout(function () {
                $('#event-calendar1').fullCalendar('today');
            });
    });
</script>