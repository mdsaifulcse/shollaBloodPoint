<style>
    .no-print{display: none;}
    .printable{display: inline-block;}
</style>
<?php $companyInfo= MyHelper::company(); ?>
<div class="invoice_top " style="A_CSS_ATTRIBUTE:all;position: fixed;top:0;width: 100%;display:block;border-bottom:1px solid #ddd;margin-top:85px;padding: 10px 20px;background: #f1f1f1">

    <div class="view_logo" style="width: 100%;text-align: left;position: relative;top:10px;">
        <img class="print-logo" src='{{asset("$companyInfo->logo")}}' style="width:180px;height:auto;">
        <div class="pad_top_content" style="display: inline-block;text-align: left">
            <h3 style="margin: 0;margin-left: 20px;display: inline-block;"><strong>{{$companyInfo->company_name}}</strong></h3>
            <p style="margin: 0;margin-left: 20px;font-size: 13px;"><?php echo $companyInfo->address; ?><br />
                Phone: {{$companyInfo->mobile_no}}, Email: {{$companyInfo->email}}</p>
        </div>
    </div>
</div>
<div class="invoice_bottom" style="A_CSS_ATTRIBUTE:all;position: fixed;bottom:68px;width: 100%;display:block;border-bottom:1px solid #ddd;margin-bottom:0px;padding: 10px 20px;background: #f1f1f1;">

    <div class="view_logo" style="width: 100%;text-align: left;position: relative;top:10px;">
        <h3 style="margin: 0;margin-left: 20px;display: inline-block;"><strong>{{$companyInfo->company_name}}</strong><br><small style="font-size: 14px">{{$companyInfo->web}}</small></h3>
        <div class="pad_top_content" style="display: inline-block;text-align: left">

            <p style="margin: 0;margin-left: 20px;font-size: 13px;">
                <b>Corporate Office</b>
                <br><?php echo $companyInfo->address; ?><br />
                Phone: {{$companyInfo->mobile_no}}, Email: {{$companyInfo->email}}</p>
        </div>
    </div>
</div>



    <style>
        .page-break {

            page-break-after: always;

        }
        @page {
            size: auto;   /* auto is the initial value */
            margin:0px;   /* this affects the margin in the printer settings */

        }
    </style>
