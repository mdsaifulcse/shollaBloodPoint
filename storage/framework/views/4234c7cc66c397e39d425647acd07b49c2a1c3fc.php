<header>
    <div id="header-three" class="header-style1 header-fixed">
        <div class="main-menu-area bg-primary" id="sticker">
            <div class="container-fluid">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-1 col-md-1 col-sm-3">
                        <div class="logo-area">
                            <a href="<?php echo e(URL::to('/')); ?>" class="img-responsive img-circle">
                                <img src="<?php echo e(asset($primaryInfo->logo)); ?>" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-11 col-md-11 col-sm-6 possition-static">
                        <div class="cp-main-menu">
                            <nav>
                                <ul class="mobile-menu">
                                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(URL::to($menu->url)); ?>"><?php echo e($menu->name); ?><?php if(count($menu->frontendSubMenu)>0): ?> <span class="caret"></span><?php endif; ?></a>
                                            <?php if(count($menu->frontendSubMenu)>0): ?>
                                                <ul class="cp-dropdown-menu">

                                                    <?php $__currentLoopData = $menu->frontendSubMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href="<?php echo e(URL::to($subMenu->url)); ?>"><i class="fa fa-tint blood" aria-hidden="true"></i> <?php echo e($subMenu->name); ?> </a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                        <?php if(Auth::user()): ?>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?>

                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li ><a href="<?php echo e(URL::to('/member-area')); ?>"><i class="fa fa-tint text-danger"></i> Member area</a></li>
                                    <li ><a href="<?php echo e(URL::to('/last-blood-donation')); ?>"><i class="fa fa-tint text-danger"></i> Last Blood donation</a></li>

                                    <li ><a href="<?php echo e(URL::to('/member-change-password')); ?>"><i class="fa fa-key"></i> Change Password</a></li>

                                    <li ><a href="<?php echo e(URL::to('/blood-donation-details')); ?>"><i class="fa fa-tint text-danger"></i> Blood Donation Details</a></li>
                                    <li ><a href="<?php echo e(URL::to('/edit-profile')); ?>"><i class="fa fa-edit"></i> Edit Profile</a></li>

                                    <li  class="divider"></li>
                                    <li ><a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-log-out"></i> logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </ul>
                            </div>
                        <?php else: ?>

                            <a href="#" class="cp-default-btn" data-toggle="modal" data-target="#loginModal"
                            >Login</a>
                            <a href="<?php echo e(URL::to('/member-register.html')); ?>" class="cp-default-btn" title="Register as Blood donors Or General Member">Registration </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- Header Area End Here -->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-xs-8 col-sm-offset-3 col-xs-offset-2 hidden-md hidden-lg">
            <?php if(Auth::user() && Auth::user()->type===2): ?>
                <div class="dropdown mobile-login">
                    <button class="btn btn-success dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?>

                         <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li ><a href="<?php echo e(URL::to('/edit-profile')); ?>"><i class="fa fa-edit"></i> Edit Profile</a></li>
                        <li ><a href="<?php echo e(URL::to('/last-blood-donation')); ?>"><i class="fa fa-tint text-danger"></i> last Blood donation</a></li>
                        <li ><a href="<?php echo e(URL::to('/member-change-password')); ?>"><i class="fa fa-key"></i> Change Password</a></li>
                        <li ><a href="<?php echo e(URL::to('/blood-donation-details')); ?>"><i class="fa fa-tint text-danger"></i> Blood Donation Details</a></li>
                        <li  class="divider"></li>
                        <li ><a href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-log-out"></i> logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </ul>
                </div>
            <?php else: ?>

                <div class="mobile-login">
                    <a href="#" class="cp-default-btn" data-toggle="modal" data-target="#loginModal"
                    >Login</a>
                    <a href="<?php echo e(URL::to('/member-register.html')); ?>" class="cp-default-btn" title="Register as Blood donors Or General Member">Registration</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img src="<?php echo e(asset('images/banner/Sholl Blood Point.png')); ?>" class="img-responsive img-thumbnail center-block banner-img" title="Sholla blood Point" alt="sholla Blood point ">
        </div>
    </div>
</div>

<div class="container">
    <div> <!-- for marquee notice ===========  -->
        <div class="row marquee">
            <div class="col-md-1 col-sm-2 col-xs-2 my-notic">
                <h5>News</h5>
            </div>
            <div class="col-md-11 col-sm-8 col-xs-8">
                <marquee onmouseover="stop();" onmouseout="start();">
                    <h5>
                        <?php if(count($notices)>0): ?>
                            <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="blood" href="<?php echo e(URL::to('/show-notice/'.$notice->id)); ?>" target="blank"><span>»</span> <?php echo e($notice->title); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <span class="text-danger">No Notice available here</span>
                        <?php endif; ?>
                    </h5>
                </marquee>
            </div>
        </div>
    </div>
</div>
