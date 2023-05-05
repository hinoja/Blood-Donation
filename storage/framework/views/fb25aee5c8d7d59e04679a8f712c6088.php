<?php $__env->startSection('signleTitle', __('Appointments list')); ?>
<?php $__env->startSection('title', 'All Appointments'); ?>
<?php $__env->startSection('sub-title', 'Description text here...'); ?>

<?php $__env->startSection('content'); ?>

    <h3 class="page-title">
        
    </h3>
    <div class="card">
        <div class="card-header">
            
        </div>

        <div class="card-body">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
            

            <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#profile"><?php echo app('translator')->get('TABLE'); ?></a>
                    </li>
                    <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#home"><?php echo app('translator')->get('CALENDAR'); ?></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="profile">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.manage-appointment')->html();
} elseif ($_instance->childHasBeenRendered('YKgQlIe')) {
    $componentId = $_instance->getRenderedChildComponentId('YKgQlIe');
    $componentTag = $_instance->getRenderedChildComponentTagName('YKgQlIe');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YKgQlIe');
} else {
    $response = \Livewire\Livewire::mount('admin.manage-appointment');
    $html = $response->html();
    $_instance->logRenderedChild('YKgQlIe', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                    <div role="tabpanel"  id="home">
                        <div class="container">
                            <div id="calendar-container" wire:ignore>

                                <style>
                                    #calendar {
                                        margin: 0px auto;
                                        padding: 0px;
                                        height: 1000px;
                                        max-width: 1500px;
                                    }
                                </style>
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            




        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />

    <script>
        // $(document).ready(function() {
        //     // page is now ready, initialize the calendar...
        //     events = <?php echo json_encode($events); ?>;
        //     $('#calendar').fullCalendar({
        //         // put your options and callbacks here
        //         headerToolbar: {
        //             left: 'prev,next today',
        //             center: 'title',
        //             right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        //         },
        //         locale: '<?php echo e(config('app.locale')); ?>',
        //         events: events,
        //     })
        // });
        document.addEventListener('DOMContentLoaded', function() {


            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                eventTimeFormat: { // like '14:30:00'
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                },
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                // eventBackgroundColor:'#378006',
                eventColor: '#378006',
                allDay: true,
                events: <?php echo json_encode($events, 15, 512) ?>,
            });

            calendar.render();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/admin/appointments/index.blade.php ENDPATH**/ ?>