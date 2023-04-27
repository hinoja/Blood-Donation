<section class="appointment section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment-area">
                    <div class="row neutral-row">
                        <div class="col-lg-6 row-item">
                            <div class="appointment-area__single appointment-area__content">
                                <h4>Current Blood Request</h4>
                                <ul>
                                    <li><i class="fa-solid fa-heart"></i>B+ Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>O- Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>B- Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>AB- Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>O+ Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>B+ Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>AB+ Washington, USA (13.02.2022)</li>
                                    <li><i class="fa-solid fa-heart"></i>B+ Washington, USA (13.02.2022)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 row-item">
                            <div class="appointment-area__single appointment-area__form">
                                <h4>Request Appointment Here</h4>
                                <form action="#" method="post" name="appointmentForm" class="form-row">
                                    
                                    <div class="input">
                                        <select class="select-donation  form-control">
                                            <option data-display="Hospital"> <?php echo app('translator')->get('Hospital'); ?></option>
                                            <option value="free">Free Donation</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="paid">Paid Donation</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <hr style="color:white">
                                        <hr style="color:white">
                                        <hr style="color:white">
                                    </div>

                                    <div class="input">
                                        <select class="select form-control ">
                                            <option data-display="Date"><?php echo app('translator')->get('Day'); ?></option>
                                            <option value="free">Free Donation</option>
                                            <option value="free">Free Donation</option>
                                            <option value="free">Free Donation</option>
                                            <option value="free">Free Donation</option>

                                            
                                        </select>
                                    </div>
                                    
                                    <div class="row">
                                        <hr style="color:white">
                                        <hr style="color:white">
                                        <hr style="color:white">
                                    </div>
                                    
                                    
                                    <div class="input">
                                        <select class=" form-control select-donation-type">
                                            <option data-display="Time"><?php echo app('translator')->get('Time'); ?></option>
                                            <option value="free">Free Donation</option>
                                            <option value="health">Health Checkup</option>
                                            <option value="paid">Paid Donation</option>
                                        </select>
                                    </div>
                                    
                                    <button type="submit" class="button button--tertiary button--effect">Submit
                                        Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/includes/front/appointement.blade.php ENDPATH**/ ?>