<?php $__env->startSection('title'); ?>
    Sholla Blood Point Contact Info | Sholla Blood Point
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Contact start -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="gradient-wrapper mb--xs">
                        <div class="gradient-title">
                            <h2>Contact With us (<?php echo e($primaryInfo->company_name); ?>)</h2>
                        </div>
                        <div class="contact-layout1 gradient-padding">
                            <div class="google-map-area">
                                <div class="google-map-area">
                                <div style="overflow:hidden;width: 100%px;position: relative;"><iframe width="800" height="250" src="https://maps.google.com/maps?width=800&amp;height=250&amp;hl=en&amp;q=Bangladesh%2C%20Dhaka%2C%20Nawabgonj%2C%20Sholla+(Sholla%20Blood%20Point)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;"><small style="line-height: 1.8;font-size: 8px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/">Embedgooglemaps.com/</a> &amp; <a href="https://buyinstagramfollowersreviews.net">Boosting Instagram Account</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br>    
                                </div>
                            </div>
                            <p>If you did not find the answer to your question or problem, please get in touch with us using the form below and we will respond to your message as soon as possible.</p>
                            <?php echo Form::open(['url'=>'user-message','method'=>'POST','class'=>'']); ?>

                                <fieldset>
                                    <div class="row">
                                        <h3 class="text-center text-success">
                                            <?php
                                            $success=Session::get('success');
                                            echo $success;
                                            $error=Session::get('error');
                                            echo $error;
                                            ?>
                                        </h3>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group  has-danger">
                                                <?php echo e(Form::text('name',$value=old('name'),['class'=>'form-control','placeholder'=>'Your Name','required'=>true])); ?>

                                                <span class="text-danger"><?php echo e($errors->has('name')?$errors->first('name'):''); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group  has-danger">
                                                <?php echo e(Form::email('email',$value=old('email'),['class'=>'form-control','placeholder'=>'Your email','required'=>true])); ?>

                                                <span class="text-danger"><?php echo e($errors->has('email')?$errors->first('email'):''); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group  has-danger">
                                                <?php echo e(Form::number('mobile',$value=old('mobile'),['class'=>'form-control','min'=>0,'placeholder'=>'Your Mobile','required'=>true])); ?>

                                                <span class="text-danger"><?php echo e($errors->has('mobile')?$errors->first('mobile'):''); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group has-danger">
                                                <?php echo e(Form::text('subject',$value=old('subject'),['class'=>'form-control','placeholder'=>'Subject','required'=>true])); ?>

                                                <span class="text-danger"><?php echo e($errors->has('subject')?$errors->first('subject'):''); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group  has-info">
                                                <?php echo e(Form::textarea('message',$value=old('message'),['class'=>'form-control','placeholder'=>'Your Message','required'=>true])); ?>

                                                <span class="text-danger"><?php echo e($errors->has('message')?$errors->first('message'):''); ?></span>

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" class="cp-default-btn-sm disabled">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                            <div class="form-response"></div>
                                        </div>
                                    </div>
                                </fieldset>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="sidebar-item-box">
                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h3>Contact Information</h3>
                            </div>
                            <ul class="sidebar-seller-information">

                                <li>
                                    <div class="media">
                                        <i class="fa fa-envelope-o pull-left"></i>
                                        <div class="media-body">
                                            <h4><?php echo e($primaryInfo->email); ?></h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <i class="fa fa-phone pull-left"></i>
                                        <div class="media-body">
                                            <h4><?php echo e($primaryInfo->mobile_no); ?></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!--end sidebar-->
                    <div class="sidebar-item-box">
                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h3><i class="fa fa-map-marker"></i> Office Address</h3>
                            </div>
                            <ul class="sidebar-seller-information">

                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h4><?php echo e($primaryInfo->address); ?></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!--end sidebar-->
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!-- Contact end-->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>