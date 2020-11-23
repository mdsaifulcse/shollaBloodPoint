

<?php $__env->startSection('title'); ?>
    Blood donation details | Sholla Blood Point
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        @media  screen and (max-width: 768px) {
            table {
                border: 0;
            }

            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                /*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }

        .pagination{
            margin: 0px;
        }
    </style>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <div class="gradient-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h2><i class="fa fa-tint blood"></i> Your blood donation list </h2>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <a href="<?php echo e(URL::to('/last-blood-donation')); ?>">
                                                        <span class="text-primary pull-right">
                                                           <i class="fa fa-pencil"></i> Last blood donation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="category-list-layout3">
                            <?php if($memberStatus!=null): ?>
                                <div class="login-form">
                                    <div class="row">
                                        <?php if($msg=Session::get('success')): ?>
                                            <h3 class="text-center text-success"><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo e($msg); ?></h3>
                                        <?php elseif($msg=Session::get('error')): ?>
                                            <h3 class="text-center text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php echo e($msg); ?></h3>
                                        <?php endif; ?>
                                        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 col-mb-12">
                                            <div class="table-responsive">
                                                <?php if(count($bloodDonationDetails)>0): ?>
                                                <table class="table table-bordered table-hover table-striped">
                                                    <thead>
                                                    <tr class="my-bg">
                                                        <th scope="col" width="3%">Sl</th>
                                                        <th scope="col" >Donation Date</th>
                                                        <th scope="col" >Patient </th>
                                                        <th scope="col" >Mobile</th>
                                                        <th scope="col" > Disease</th>
                                                        <th scope="col" >Hospital</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $i=1?>
                                                    <?php $__currentLoopData = $bloodDonationDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bloodDonation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td data-label="SL" ><?php echo e($i++); ?></td>
                                                            <td data-label="Donation Date" ><?php echo e(date('d-M-Y',strtotime($bloodDonation->last_blood_donation))); ?></td>
                                                            <td data-label="Patient " ><?php echo e($bloodDonation->patient_name); ?></td>
                                                            <td data-label="Mobile" ><?php echo e($bloodDonation->patient_mobile); ?></td>
                                                            <td data-label="Disease" ><?php echo e($bloodDonation->patient_diseases); ?></td>
                                                            <td data-label="Hospital" ><?php echo e($bloodDonation->hospital); ?></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    </tbody>
                                                </table>
                                                    <div class="pull-right">
                                                        <?php echo e($bloodDonationDetails->render()); ?>

                                                    </div>
                                                    <?php else: ?>
                                                    <h3 class="well text-danger text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> No Data available here</h3>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div> <!-- end col-->
                                </div> <!--end row-->
                            <?php else: ?>
                                <h3 class="well text-danger text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Your account is not active & waiting for approval</h3>
                            <?php endif; ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Blood Request end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>