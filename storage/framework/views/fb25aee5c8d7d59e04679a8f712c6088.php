<?php $__env->startSection('signleTitle', __('appintement list')); ?>
<?php $__env->startSection('title', 'All Messages'); ?>
<?php $__env->startSection('sub-title', 'Description text here...'); ?>
<?php $__env->startPush('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/fullcalendar/fullcalendar.min.css')); ?>">
    
<?php $__env->stopPush(); ?>


<?php $__env->startPush('js'); ?>
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    
    



<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
 <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: <?php echo json_encode($events, 15, 512) ?>,
            });
            calendar.render();
        });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">

                    </div>
                    <div class="body">
                        
                        <div class="col-md-12 col-lg-8 col-xl-9">
                            <div class="card m-t-20">
                                <div class="body">
                                    <button class="btn btn-raised btn-success btn-sm m-r-0 m-t-0"
                                        id="change-view-today">today</button>
                                    <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0"
                                        id="change-view-day">Day</button>
                                    <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0"
                                        id="change-view-week">Week</button>
                                    <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0"
                                        id="change-view-month">Month</button>
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/admin/appointments/index.blade.php ENDPATH**/ ?>