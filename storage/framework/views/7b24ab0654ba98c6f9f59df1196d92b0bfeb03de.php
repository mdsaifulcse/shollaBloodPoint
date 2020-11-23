<?php $__env->startSection('title'); ?>
     Home | Sholla Blood Point
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 theme-default">
                    <div class="slider-events-list">
                        <?php if(count($sliders)>0): ?>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset($slider->slider_img)); ?>"  title="#<?php echo e($slider->id); ?>" />
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <img src="<?php echo e(asset('public/frontend/demo/images/groupblood.jpg')); ?>" data-thumb="<?php echo e(asset('public/frontend/demo/images/toystory.jpg')); ?>" alt="" title="#htmlcaption" />
                        <?php endif; ?>
                    </div>
                    <?php if(count($sliders)>0): ?>
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="<?php echo e($slider->id); ?>" class="nivo-caption">
                        <span class=""><?php echo e($slider->caption); ?></span>
                    </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div id="htmlcaption" class="nivo-caption">
                            <span class="">caption</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div> <!--end row-->
        </div> <!--end container-->

    </section>
    <!-- slider Area End Here -->
    <!-- Doner List start-->
    <section class="speech-member-register">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-mb-12">
                    <h4 class="text-primary"><img src="<?php echo e(asset($primaryInfo->logo)); ?>" width="15"> About Organization</h4>
                    <div class="text-justify well">
                        <p class="text-justify">
                            <?php
                            $siteInfo=explode(' ',$primaryInfo->short_description);
                            echo(implode(' ',array_slice($siteInfo, 0, 150)));
                            ?>
                        </p>

                        <a title="<?php echo e($primaryInfo->company_name); ?>" href="<?php echo e(URL::to('/about-organization/1')); ?>"><i class="fa fa-chevron-circle-down" aria-hidden="true" ></i> <span class="text-success">Read More</span></a>
                    </div>

                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-mb-12">
                    <h4 class=""><i class="fa fa-check-square-o" aria-hidden="true"></i></i> All Eligible Blood Donors</h4>

                    <div class="table-responsive">
                        <table id="eligibleDonors" class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr class="my-bg">
                                <th width="2%">Sl</th>
                                <th>Blood Group</th>
                                <th>Name</th>
                                <th>Thana</th>
                                <th>Union</th>
                                <th>Village</th>
                                <th>Profile</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div><!-- end col-->

            </div>
        </div> <!-- end containder-->
    </section>
 <hr>
    <div id="register-login-profile">
        <div class="container">
            <div class="register-login">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="<?php echo e(URL::to('/member-register.html')); ?>">
                            <img src="<?php echo e(asset('/images/banner/registration.png')); ?>" class="login-reg-img image-responsive center-block img-thumbnail">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="<?php echo e(URL::to('/member-register.html')); ?>">
                            <img src="<?php echo e(asset('/images/banner/inspiration.png')); ?>" class="login-reg-img image-responsive center-block img-thumbnail"></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="#" data-toggle="modal"
                        <?php if(!Auth::user()): ?>
                        data-target="#loginModal"
                        <?php endif; ?>>
                            <img src="<?php echo e(asset('/images/banner/login.png')); ?>" class="login-reg-img image-responsive center-block img-thumbnail"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php if(count($topMembers)>0): ?>
    <div class="container">
        <?php $__currentLoopData = $topMembers->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-mb-12 table-responsive top-ten-donors">
            <h3>Top blood donors list</h3>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr class="bg-info">
                        <th>Name</th>
                        <th>Photo</th>
                    </tr>
                    </thead>
                    <?php $i=1?>
                    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a href="javascript:void(0);" onclick="topTenDonorProfile(<?php echo e($topMember->user_id); ?>)"><?php echo e($topMember->name); ?></a></td>
                            <td>
                                <?php if(!empty($topMember->photo)): ?>
                                <img src="<?php echo e(asset($topMember->photo)); ?>" class="img-responsive" style="width: 50px; height: 50px;cursor: pointer" onclick="topTenDonorProfile(<?php echo e($topMember->user_id); ?>)">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('images/default/photo.png')); ?>" class="img-responsive" style="width: 50px; height: 50px;cursor: pointer" onclick="topTenDonorProfile(<?php echo e($topMember->user_id); ?>)">
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
        </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!-- end container -->
    <?php else: ?>
        <h3 class="text-center text-danger"><i class="fa fa-warning"></i> No Data available here </h3>
    <?php endif; ?>
    <br>

    <!-- Modal Start-->
    <div class="modal fade" id="donor-profile" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-default-bold mb-none">
                        <h3>Donor's Profile <strong id="hName" class="text-success"></strong>
                        </h3>
                        <h3>Admin Contact: <strong id="contact" class="text-danger" title="Use this number for blood request"> </strong>, Name: <strong id="admin"></strong> </h3>

                    </div>
                    <div id="myIds"></div>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped text-success">
                            <tr>
                                <td>Photo</td>
                                <td><img id="donorPhoto" src="" class="img-responsive img-thumbnail" style="width: 100px;"></td>
                            </tr>
                            <tr>
                                <td width="40%">Name </td>
                                <td id="name"></td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                <td id="BloodGroup"></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td class="text-primary"><i class=" fa fa-check-circle"></i> </td>
                            </tr>
                            <tr>
                                <td>Last Blood Donation</td>
                                <td id="lastDonation"> </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td id="gender"> </td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td id="district"> </td>
                            </tr>
                            <tr>
                                <td>Thana</td>
                                <td id="thana"> </td>
                            </tr>
                            <tr>
                                <td>Union</td>
                                <td id="union"> </td>
                            </tr>
                            <tr>
                                <td>Village</td>
                                <td id="village"> </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End--><!-- Modal Start-->
    <div class="modal fade" id="top-donor-profile" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="title-default-bold mb-none">
                        <h3>Donor's Profile <strong id="htopName" class="text-primary"></strong></h3>
                        <h3>Total no of donation <strong id="totalDonation" class="text-danger"></strong></h3>

                    </div>
                    <div id="myIds"></div>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped text-success">
                            <tr>
                                <td>Photo</td>
                                <td><img id="topdonorPhoto" src="" class="img-responsive img-thumbnail" style="width: 100px;"></td>
                            </tr>
                            <tr>
                                <td width="40%">Name </td>
                                <td id="topname"></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td id="topgender"> </td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                <td id="topBloodGroup"></td>
                            </tr>
                            <tr>
                                <td>Last Blood Donation</td>
                                <td id="toplastDonation"> </td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td id="topdistrict"> </td>
                            </tr>
                            <tr>
                                <td>Thana</td>
                                <td id="topthana"> </td>
                            </tr>
                            <tr>
                                <td>Union</td>
                                <td id="topunion"> </td>
                            </tr>
                            <tr>
                                <td>Village</td>
                                <td id="topvillage"> </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <script type="text/javascript">
        $(function() {
            $('#eligibleDonors').DataTable( {
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: "<?php echo e(url('/all-eligible-donors')); ?>",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    { data: 'blood_group',name:'blood_groups.name'},
                    { data: 'name',name:'users.name'},
                    { data: 'thana_upazila',name:'thana_upazilas.thana_upazila'},
                    { data: 'union',name:'unions.union'},
                    { data: 'village',name:'villages.village'},
                    { data: 'profile'},
                ]
            });

        });

    </script>

    <script>
            function loadDonorProfile(id) {
                $("#donor-profile").modal('show');
                    $.ajax({
                    url:'<?php echo e(url('/donor-profile')); ?>'+'/'+id ,
                    type: 'GET',
                    'dataType' : 'json',
                    success: function(data) {
                        $('#hName').empty().html(data.name);
                        $('#contact').empty().html(data.mobile);
                        $('#admin').empty().html(data.admin_name);
                        $('#donorPhoto').attr('src',data.photo);
                        $('#name').empty().html(data.name);
                        $('#BloodGroup').empty().html(data.blood_group);
                        var myDate=new Date(data.last_blood_donation).getDate()
                        var myMonth=new Date(data.last_blood_donation).getMonth()+Number(1)
                        var myYear=new Date(data.last_blood_donation).getFullYear()
                        $('#lastDonation').empty().html(myDate+'-'+myMonth+'-'+myYear);
                        $('#gender').empty().html(data.gender);
                        $('#district').empty().html(data.district);
                        $('#thana').empty().html(data.thana_upazila);
                        $('#union').empty().html(data.union);
                        $('#village').empty().html(data.village);
                    }
                })
            }
            function topTenDonorProfile(useId) {
                $("#top-donor-profile").modal('show');
                    $.ajax({
                    url:'<?php echo e(url('/top-ten-donor-profile')); ?>'+'/'+useId ,
                    type: 'GET',
                    'dataType' : 'json',
                    success: function(data) {
                        console.log(data)
                        $('#totalDonation').empty().html(data.maxVal);
                        $('#htopName').empty().html(data.topMember.name);
                        $('#topdonorPhoto').attr('src',data.topMember.photo);
                        $('#topname').empty().html(data.topMember.name);
                        $('#topBloodGroup').empty().html(data.topMember.blood_group);
                        var myDate=new Date(data.topMember.last_blood_donation).getDate()
                        var myMonth=new Date(data.topMember.last_blood_donation).getMonth()+Number(1)
                        var myYear=new Date(data.topMember.last_blood_donation).getFullYear()
                        $('#toplastDonation').empty().html(myDate+'-'+myMonth+'-'+myYear);
                        $('#topgender').empty().html(data.topMember.gender);
                        $('#topdistrict').empty().html(data.topMember.district);
                        $('#topthana').empty().html(data.topMember.thana_upazila);
                        $('#topunion').empty().html(data.topMember.union);
                        $('#topvillage').empty().html(data.topMember.village);
                    }
                })
            }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>