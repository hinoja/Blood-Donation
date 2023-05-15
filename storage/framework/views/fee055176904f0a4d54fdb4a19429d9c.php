<div>
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-12">
            
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo app('translator')->get('Full Name'); ?></th>
                    
                    <th><?php echo app('translator')->get('Town'); ?></th>
                    <th><?php echo app('translator')->get('Receipt'); ?></th>
                    <th><?php echo app('translator')->get('Active'); ?></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($hospital->name); ?></td>
                        
                        <td><?php echo e($hospital->town); ?></td>
                        <td>
                            <span class="badge badge-success"><?php echo e($hospital->created_at->diffForHumans()); ?></span>
                        </td>
                        <td>
                            <div class="py-2 px-2">
                                <span
                                    class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-<?php echo e($hospital->is_active ? 'info' : 'dark'); ?> ">
                                    <?php echo e($hospital->is_active ? 'Yes' : 'No'); ?></span>
                            </div>
                        </td>
                        <td>
                            <button type="button"
                                class="<?php if($hospital->is_active): ?> btn btn-primary <?php else: ?> btn btn-danger <?php endif; ?>"
                                wire:click="showModalForm(<?php echo e($hospital); ?>)" class="btn bg-grey waves-effect"> <i
                                    class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            <?php echo e($hospitals->links()); ?>

        </ul>
    </div>



    
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="HospitalModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="MessageModalLabel"><?php echo app('translator')->get('Hospital Details'); ?></h5>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <div class="text-center"> <img class="text-center"
                                src="<?php echo e(asset('storage/hospitals/logo/' . $displayHospital?->logo)); ?>" height="80px"
                                width="100px" alt="" class="text-center"></div>
                        <br>
                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label"><?php echo app('translator')->get('Name'); ?></label>
                            <div style="float:right;"><?php echo e($displayHospital?->name); ?></div>
                            <br>
                            <br>
                            <?php echo app('translator')->get('Go to website'); ?> : <a class="text-center" target="_blank"
                                href="<?php echo e($displayHospital?->siteInternet); ?>"><?php echo e($displayHospital?->siteInternet); ?></a>
                            <br>
                            <hr>
                            <div><label for="control-label" style="font-weight:bold;float:left;">Email</label>
                                <a style="float:right;"
                                    href="mailto:<?php echo e($displayHospital?->email); ?>"><?php echo e($displayHospital?->email); ?></a>
                            </div>

                        </div>
                        <br>
                        <hr>

                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label"><?php echo app('translator')->get('Urgence Number'); ?></label>
                            <div class="text-danger" style="float:right;"><?php echo e($displayHospital?->urgenceNumber); ?></div>
                        </div>
                        <br>
                        <hr>
                        <div class="text-center">
                            <span class="text-center" style="color: orange;"> <?php echo app('translator')->get('Map'); ?> <i
                                    class="fas fa-map-marker-alt  text-lg text-center"></i></span>
                        </div>
                        <div class="form-group">
                            
                            <span class="mr-3" style="font-weight: bold;"><?php echo app('translator')->get('Town'); ?>: </span>
                            <?php echo e($displayHospital?->town); ?> <br>
                            <span class="mr-3" style="font-weight: bold;"><?php echo app('translator')->get('Region'); ?>: </span>
                            <?php echo e($displayHospital?->region); ?> <br>
                            <span class="mr-3" style="font-weight: bold;"><?php echo app('translator')->get('Long'); ?>: </span> <span
                                class="text-danger"><?php echo e($displayHospital?->longitude); ?></span> <br>
                            <span class="mr-3" style="font-weight: bold;"><?php echo app('translator')->get('Lati'); ?>: </span> <span
                                class="text-danger"><?php echo e($displayHospital?->latitude); ?></span>

                        </div>


                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label"><?php echo app('translator')->get('Description'); ?></label>
                            <br>
                            <div style="text-align:justify;">
                                <?php if($displayHospital?->description): ?>
                                    <?php echo e($displayHospital?->description); ?>

                                <?php else: ?>
                                    Null
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" wire:click="closeModal()"
                            data-dismiss="modal"><?php echo app('translator')->get('Cancel'); ?> </button>
                        <div>
                            <?php if(!$displayHospital?->is_active): ?>
                                <button style="display: block;" type="button" id="buttonReply"
                                    wire:click="showConfirmationModal(<?php echo e($displayHospital); ?>)"
                                    class="btn btn-<?php echo e(!$displayHospital?->is_active ? 'success' : 'danger'); ?>">
                                    <i class="fa fa-check"></i> <?php echo app('translator')->get('Active'); ?>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="ConfirmationModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteModalLabel"><?php echo app('translator')->get('Active this account'); ?> : <?php if(isset($this->data)): ?>
                            <?php echo e($this->data->name); ?>

                        <?php endif; ?>
                    </h5>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <p class="text-danger font-weight-bold"><?php echo app('translator')->get('Are you sure you want to active this account ?'); ?>
                            <br>
                            
                        </p>
                        </span>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success" wire:click="closeModal()"
                            data-dismiss="modal"><?php echo app('translator')->get('Cancel'); ?></button>
                        

                        <div>
                            <button wire:click="ConfirmationActivate()" style="float: right;" wire:loading.remove type="button"
                                class="btn btn-danger">
                                
                                <?php echo app('translator')->get('Yes,active'); ?>
                            </button>
                            <button wire:loading style="float: right;" class="btn btn-danger" >
                                <span class="spinner-border spinner-border-sm" role="status"
                                    aria-hidden="true"></span>
                                <?php echo app('translator')->get('Loading'); ?>...
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    



</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/admin/hospitals/manage-hospital.blade.php ENDPATH**/ ?>