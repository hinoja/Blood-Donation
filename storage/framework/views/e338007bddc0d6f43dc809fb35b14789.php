<div>


    <!-- start step indicators -->
    <div class=" multi-step">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-danger p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                    <form id="msform"  >
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="<?php if($step === 0 || $step === 1 || $step === 2 || $step === 3): ?> active <?php endif; ?>" id="account">
                                <strong>Account</strong>
                            </li>
                            <li id="personal" class="<?php if($step === 1 || $step === 2 || $step === 3): ?> active <?php endif; ?> ">
                                <strong>files</strong>
                            </li>
                            <li id="payment" class="<?php if($step === 2 || $step === 3): ?> active <?php endif; ?> ">
                                <strong>Services</strong>
                            </li>
                            <li id="confirm" class="<?php if($step === 3): ?> active <?php endif; ?> ">
                                <strong>Finish</strong>
                            </li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0"
                                style="width:<?php if($step === 0): ?> 25% <?php elseif($step === 1): ?> 50% <?php elseif($step === 2): ?> 75% <?php elseif($step === 4): ?> 100% ; <?php endif; ?>"
                                aria-valuemax="100"></div>
                        </div>
                        <br>
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>

                                </div>

                            </div>

                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>

                                </div>

                            </div>

                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end step indicators -->
    <div class="registration-area__form">
        <form action="#" method="post" wire:submit.prevent="submit()">
            <?php if($step === 0): ?>
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Name Hospital'); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="hospital_name"> <?php echo app('translator')->get('Full Name'); ?></label>
                                <input name="hospital_name" wire:model.defer="hospital_name" class="form-control"
                                    type="text" required>
                            </div>
                        </div>
                        <?php $__errorArgs = ['hospital_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="input">
                                <span class="text-danger"><small><?php echo e($message); ?></small></span>
                                <br>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Date Of Birth'); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="birth_date">Birth Date</label>
                                <input wire:model.defer="birth_date" class="form-control" type="date"
                                    name="birth_date" required>
                            </div>

                        </div>
                        <?php $__errorArgs = ['birth_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="input">
                                <small> <span class="text-danger"><?php echo e($message); ?></span></small>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Urgency Number'); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="urgency_number">Number</label>
                                <input wire:model.defer="urgency_number" class="form-control" type="number"
                                    name="urgency_number" required>
                            </div>
                        </div>
                        <?php $__errorArgs = ['urgency_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="input">
                                <small class="text-left text-danger"> <?php echo e($message); ?></small>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Email'); ?> </p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="description">email</label>
                                <input wire:model.defer="email" class="form-control" type="email" name="email"
                                    required>
                            </div>

                        </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="input">
                                <small><span class="text-danger"><?php echo e($message); ?></span></small>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            <?php endif; ?>
            

            
            

            <?php if($step === 1): ?>
                <div>
                    <div class="registration-area__form-single">
                        <p class="secondary"><?php echo app('translator')->get('Add a logo'); ?> <span class="text-danger">*</span></p>
                        <div class="registration-area__form-single__inner">
                            <div class="input-group-column">
                                <div class="input">
                                    <label for="logo"><?php echo app('translator')->get('Image'); ?>>
                                        <input wire:model.defer="logo" class="form-control" type="file"
                                            name="logo" required>
                                </div>

                            </div>
                            <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="input">
                                    <small> <span class="text-danger"><?php echo e($message); ?></span></small>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="registration-area__form-single">
                        <p class="secondary"><?php echo app('translator')->get('Website'); ?> </p>
                        <div class="registration-area__form-single__inner">
                            <div class="input-group-column">
                                <div class="input">
                                    <label for="website">url</label>
                                    <input wire:model.defer="website" class="form-control" type="url"
                                        name="website" required>
                                </div>

                            </div>
                            <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="input">
                                    <small> <span class="text-danger"><?php echo e($message); ?></span></small>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <br>
                    <hr>

                    <div class="registration-area__form-single">
                        <p class="secondary"><?php echo app('translator')->get('Description'); ?> </p>
                        <div class="registration-area__form-single__inner">
                            <div class="input-group-column">
                                <div class="input">
                                    <label for="description_file"><?php echo app('translator')->get('File'); ?></label>
                                    <input wire:model.defer="description_file" class="form-control" type="file"
                                        name="description_file" required>
                                </div>

                            </div>
                            <?php $__errorArgs = ['description_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="input">
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                </div>
            <?php endif; ?>



            <?php if($step === 2): ?>
                <div class="  contact-area__content " style="display: block;">
                    <p class="secondary"><?php echo app('translator')->get('Services '); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__innercontact-area-single contact-area__content-form">
                        <div class="input-group-column ">
                            <div class="input">
                                <label for=" ">text</label>
                                <input wire.model.defer="services.0" class="input-lg input-control" type="text"
                                    name="services.0" required>
                                

                            </div>

                            <div class="input-group-column ">
                                <div wire:click.prevent="add(<?php echo e($i); ?>)" class="btn btn-primary btn-lg">+
                                </div>
                            </div>
                        </div>
                        <?php $__errorArgs = ['services.0'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="input">
                                <small><span class="text-danger"><?php echo e($message); ?></span></small>
                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <?php $__currentLoopData = $servicesInput; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="registration-area__form-single__inner">
                            <div class="input-group-column" wire:key="<?php echo e($index); ?>">
                                <div class="input">
                                    <label for="">text</label>
                                    
                                    <input wire:model.defer="services.<?php echo e($index + 1); ?>"
                                        class="input-lg input-control" type="text" required>

                                </div>

                                <div class="input-group-column ">
                                    <div wire:click.prevent="remove(<?php echo e($key); ?>)"
                                        class="btn btn-danger btn-lg">
                                        ___
                                    </div>
                                </div>
                            </div>
                            <?php $__errorArgs = ['services.' . $index];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="input">
                                    <small><span class="text-danger"><?php echo e($message); ?></span></small>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            <?php endif; ?>
            
            <?php if($step === 3): ?>
                <div>
                    <h3 class="text-danger"> <?php echo app('translator')->get('Localisation'); ?></h3>
                    <div class=" ">
                        <div class=" text-danger">
                            <span style="text-align: center;"> <b><?php echo app('translator')->get('Country'); ?></b> <?php echo e($location->countryName); ?>

                            </span>
                        </div>
                    </div>
                    <hr style="color: white">
                    <hr style="color: white">
                    <div class="registration-area__form-single">
                        <div class="registration-area__form-single">
                            <span> <b class="px-4"><?php echo app('translator')->get('Region'); ?></b> <?php echo e($location->regionName); ?> </span>
                        </div>
                        <div class="">
                            <span> <b class="px-1"> <?php echo app('translator')->get('Town'); ?></b> <?php echo e($location->cityName); ?> </span>
                        </div>

                    </div>
                    <hr style="color: white">
                    <hr style="color: white">
                    <div class="registration-area__form-single">
                        <div class="registration-area__form-single">
                            <span> <b class="px-2"><?php echo app('translator')->get('Longitude'); ?></b> <?php echo e($location->longitude); ?> </span>
                        </div>
                        <div class="registration-area__form-single">
                            <span> <b class="px-1"><?php echo app('translator')->get('Latitude'); ?></b><?php echo e($location->latitude); ?> </span>
                        </div>
                    </div>
                    
                </div>
            <?php endif; ?>

        </form>
    </div>
    <div class="row"></div>
    <hr style="color:white;">

    <div class="form-footer donate-area">
        <?php if($step > 0): ?>
            <button wire:click="previous()" style="float: left;" class="button button--effect">
                <?php echo app('translator')->get('Previous'); ?></button>
        <?php endif; ?>

        <button
            wire:click="<?php if($step === 0): ?> submit1()<?php elseif($step === 1): ?>submit2()<?php elseif($step === 2): ?>submit3() <?php elseif($step === 3): ?>submit4() <?php endif; ?>"
            style="float: right;" class="button button--effect">
            <?php echo app('translator')->get('Next'); ?></button>
        

    </div>
</div>
<?php /**PATH C:\Users\Benutzer\Blood\resources\views/livewire/front/register-hospital.blade.php ENDPATH**/ ?>