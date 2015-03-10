
<div class="monthly_activitycon">
<?php
if(isset($medium) && !empty($medium)  || isset($small) && !empty($small))
{

?>
    <h1 class="text-center">{{ trans('greet.In') }} {{ trans('greet.March') }} {{ trans('greet.Santa_Marta') }}</h1>

    <div class="row margin_none">

        <div class="col-md-6 col-sm-6 padding_none">
            <div class="example js--hovercap04">
            <img class="imgfull-width" src="../uploads/events/<?php echo $medium[0]->event_image;?>" alt="" />
            <div class="example__caption">
            <?php echo $medium[0]->event_title;?><br>
            <?php echo $medium[0]->event_text;?>
            </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-6 padding_none">
            <div class="exe_yellow_wrapper">
                <h2><?php echo $small[0]->event_title; ?></h2>
                <p><?php echo $small[0]->event_text; ?></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 padding_none rev_clr">
            <div class="example js--hovercap04">
            <img class="imgfull-width"  src="../uploads/events/<?php echo $small[1]->event_image; ?>" alt="<?php echo $small[1]->event_title; ?>" />
            <div class="example__caption">
                 <?php echo $small[1]->event_title;?><br>
                  <?php echo $small[1]->event_text;?><br>
             </div>
             </div>
        </div>
        <div class="col-md-3 col-sm-4 padding_none">
            <div class="example js--hovercap04">
            <img class="imgfull-width"  src="../uploads/events/<?php echo $small[2]->event_image;?>" alt="<?php echo $small[2]->event_title; ?>" />
            <div class="example__caption">
                <?php echo $small[2]->event_title;?><br>
                 <?php echo $small[2]->event_text;?><br>
             </div>
             </div>
        </div>
        <div class="col-md-3 col-sm-4 padding_none">
             <div class="example js--hovercap04">
            <img class="imgfull-width"  src="../uploads/events/<?php echo $small[3]->event_image;?>" alt="<?php echo $small[3]->event_title; ?>" />
            <div class="example__caption">
               <?php echo $small[3]->event_title;?><br>
                <?php echo $small[3]->event_text;?><br>
            </div>
            </div>
        </div>
    </div>

<?php
}
else
if(isset($mediumevent) && !empty($mediumevent)  || isset($smallevent) && !empty($smallevent))
{
    if($mediumevent[0]->month_id == 1)
    {
        $month  = "January";
    }
    else
    if($mediumevent[0]->month_id == 2)
    {
        $month  = "February";
    }
    else
    if($mediumevent[0]->month_id == 3)
    {
        $month  = "March";
    }
    else
    if($mediumevent[0]->month_id == 4)
    {
       $month  = "April";
    }
    else
    if($mediumevent[0]->month_id == 5)
    {
        $month  = "May";
    }
    else
    if($mediumevent[0]->month_id == 6)
    {
        $month  = "June";
    }
    else
    if($mediumevent[0]->month_id == 7)
    {
      $month  = "July";
    }
    else
    if($mediumevent[0]->month_id == 8)
    {
         $month  = "August";
    }
    else
    if($mediumevent[0]->month_id == 9)
    {
       $month  = "September";
    }
    else
    if($mediumevent[0]->month_id == 10)
    {
      $month  = "October";
    }
    else
    if($mediumevent[0]->month_id == 11)
    {
      $month  = "November";
    }
    else
    if($mediumevent[0]->month_id == 12)
    {
       $month  = "December";
    }
?>
    <h1 class="text-center">{{ trans('greet.In') }} {{ trans('greet.'.$month)}} {{ trans('greet.Santa_Marta') }}</h1>

    <div class="row margin_none">
        <div class="col-md-6 col-sm-6 padding_none">
            <div class="example js--hovercap04">
            <img class="imgfull-width" src="../uploads/events/<?php echo $mediumevent[0]->event_image;?>" alt="" />
            <div class="example__caption">
            <?php echo $mediumevent[0]->event_title;?><br>
            <?php echo $mediumevent[0]->event_text;?>
            </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 padding_none">
            <div class="exe_yellow_wrapper">
                <h2><?php echo $smallevent[0]->event_title; ?></h2>
                <p><?php echo $smallevent[0]->event_text; ?></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 padding_none rev_clr">
            <div class="example js--hovercap04">
            <img class="imgfull-width"  src="../uploads/events/<?php echo $smallevent[1]->event_image; ?>" alt="<?php echo $smallevent[1]->event_title; ?>" />
             <div class="example__caption">
             <?php echo $smallevent[1]->event_title;?><br>
             <?php echo $smallevent[1]->event_text;?><br>
            </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 padding_none">
            <div class="example js--hovercap04">
            <img class="imgfull-width"  src="../uploads/events/<?php echo $smallevent[2]->event_image;?>" alt="<?php echo $smallevent[2]->event_title; ?>" />
             <div class="example__caption">
             <?php echo $smallevent[2]->event_title;?><br>
             <?php echo $smallevent[2]->event_text;?><br>
            </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 padding_none">
            <div class="example js--hovercap04">
            <img class="imgfull-width"  src="../uploads/events/<?php echo $smallevent[3]->event_image;?>" alt="<?php echo $smallevent[3]->event_title; ?>" />
             <div class="example__caption">
             <?php echo $smallevent[3]->event_title;?><br>
             <?php echo $smallevent[3]->event_text;?><br>
            </div>
            </div>
        </div>
    </div>

    <script>
      $('.js--hovercap04').hovercap({
        toggleElement: '.example__caption',
        toggleAnimataion: 'slide',
        toggleDirection: 'toRight'
      });
      SyntaxHighlighter.all();
    </script>
<?php
}
?>
    </div>

<!-- Scripts for Title Caption on event page  By Sandeep -->
<link rel="stylesheet" href="../assets/css/layout.css">
<link rel="stylesheet" href="../assets/css/sh/shCore.css">
<link rel="stylesheet" href="../assets/css/sh/shThemeDefault.css">

<script src="../assets/js/sh/shCore.js"></script>
<script src="../assets/js/sh/shBrushJScript.js"></script>
<script src="../assets/js/sh/shBrushXml.js"></script>


<script src="../assets/js/jquery.hovercap.js"></script>
<script>
$(function() {


  $('.js--hovercap04').hovercap({
    toggleElement: '.example__caption',
    toggleAnimataion: 'slide',
    toggleDirection: 'toRight'
  });

  SyntaxHighlighter.all();
});
</script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<!-- End scripts for Title Caption on event page -->
