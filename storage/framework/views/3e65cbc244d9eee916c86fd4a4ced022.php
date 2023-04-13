<div>


    <!-- start step indicators -->
    <div class="container-fluid multi-step">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">


                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="<?php if($step === 1 || $step === 2 || $step === 3 || $step === 4): ?> active <?php endif; ?>" id="account">
                                <strong>Account</strong>
                            </li>
                            <li id="personal" class="<?php if($step === 2 || $step === 3 || $step === 4): ?> active <?php endif; ?> ">
                                <strong>Personal</strong>
                            </li>
                            <li id="payment" class="<?php if($step === 3 || $step === 4): ?> active <?php endif; ?> ">
                                <strong>Image</strong>
                            </li>
                            <li id="confirm" class="<?php if($step === 4): ?> active <?php endif; ?> ">
                                <strong>Finish</strong>
                            </li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0"
                                style="width:<?php if($step === 1): ?> 25% <?php elseif($step === 2): ?> 50% <?php elseif($step === 3): ?> 75% <?php elseif($step === 4): ?> 100% ; <?php endif; ?>"
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
        <form action="#" method="post" name="registration__form">
            <?php if($step === 1): ?>
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Name Hospital'); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="nameHos"> <?php echo app('translator')->get('Full Name'); ?></label>
                                <input name="nameHos" class="form-control" type="text" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Date Of Birth'); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">Birth Date</label>
                                <input class="form-control" type="date" name="regi_number" required>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Urgency Number'); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">Number</label>
                                <input class="form-control" type="number" name="regi_number" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Description '); ?> </p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">text</label>
                                <textarea class="form-control" type="number" name="regi_number" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if($step === 2): ?>
                
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Manager Name'); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">Full Name</label>
                                <input class="form-control" type="text" name="regi_number" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary"><?php echo app('translator')->get('Manager Number'); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">number</label>
                                <input class="form-control" type="number" name="regi_number" required>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($step === 3): ?>
                    <div>
                        <div class="registration-area__form-single">
                            <p class="secondary"><?php echo app('translator')->get('Add a logo'); ?> <span class="text-danger">*</span></p>
                            <div class="registration-area__form-single__inner">
                                <div class="input-group-column">
                                    <div class="input">
                                        <label for="regiNumber"><?php echo app('translator')->get('image'); ?>>
                                            <input class="form-control" type="file" name="regi_number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br> <hr>
                        <div class="registration-area__form-single">
                            <p class="secondary"><?php echo app('translator')->get(' description'); ?> </p>
                            <div class="registration-area__form-single__inner">
                                <div class="input-group-column">
                                    <div class="input">
                                        <label for="regiNumber"><?php echo app('translator')->get('File'); ?></label>
                                        <input class="form-control" type="file" name="regi_number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endif; ?>

            

            <?php if($step === 4): ?>
                <div class="registration-area__form-single " style="display: block;">
                    <p class="secondary"><?php echo app('translator')->get('Services '); ?> <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner ">
                        <div class="input-group-column ">
                            <div class="input">
                                <label for="services1">text</label>
                                <input class="form-control" type="text" name="services1" required>
                            </div>
                            <div class="input-group-column ">
                                <div class="btn btn-primary btn-lg">+</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-group-column ">
                        <div class="input">
                            <label for="regiNumber">text</label>
                            <input class="form-control" type="text" name="regi_number" required>
                        </div>
                        <div class="input-group-column ">
                            <div class="btn btn-danger btn-lg">---</div>
                        </div>
                    </div>
                    



                </div>
            <?php endif; ?>

        </form>
    </div>
    <div class="row"></div>
    <hr style="color:white;">

    <div class="form-footer donate-area">
        <?php if($step > 1): ?>
            <button wire:click="previous()" style="float: left;" class="button button--effect">
                <?php echo app('translator')->get('Previous'); ?></button>
        <?php endif; ?>

        <button wire:click="next()" style="float: right;" class="button button--effect">
            <?php echo app('translator')->get('Next'); ?></button>

    </div>
</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/front/register-hospital.blade.php ENDPATH**/ ?>