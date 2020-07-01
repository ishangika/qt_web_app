<?php defined('_JEXEC') or die;
// die("aa");
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$sitename = $app->getCfg('sitename');
// Detecting Active Variables
$itemid   = $app->input->getCmd('Itemid', '');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<jdoc:include type="head" />
<?php
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

/* FOR BOOTSTRAP 2 
// Add Stylesheets
JHtmlBootstrap::loadCss();
// Load optional rtl Bootstrap css and Bootstrap bugfixes
JHtmlBootstrap::loadCss($includeMaincss = false, $this->direction); */


// REMOVE BOOTSTRAP 2
unset($this->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);
unset($this->_styleSheets[JURI::root(true).'/media/jui/css/bootstrap.min.css']);
unset($this->_styleSheets[JURI::root(true).'/media/jui/css/bootstrap-responsive.min.css']);

/* FOR BOOTSTRAP 3 */
//Attache Bootstrap 3 - CSS
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/boostrap3.css');

// Adjusting content width. If position exists, use the given column size.
/*if ($this->countModules('position-1'))
{
  $span_p1 = "span6";
}*/

//Use the following to detect front page
$menu = $app->getMenu();
$active    = $menu->getActive();
/*if ($menu->getActive() == $menu->getDefault()) {
        echo 'This is the front page';
}*/
// if ($menu->getActive() == $menu->getDefault()) {
//     $frontpage=true;
// } else {
//     $frontpage=false;
// }

$temp_path = JURI::base(true).'/templates/'.$app->getTemplate().'/';  
$session = JFactory::getSession();

    if (isset($_GET["date"])) {
        $_SESSION["date"] = $_GET["date"];


    }
 
?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" rel="stylesheet" type="text/css" />

<!-- FOR BOOTSTRAP 3 - Attache Bootstrap 3 - JS -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap3.js" ></script>

<!--[if lt IE 9]>
<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
<![endif]-->
<!--[if lte IE 7]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template_IEold.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 8]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template_IE8.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 9]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template_IE9.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
</head>

<body id="<?php echo ($itemid ? 'itemid-' . $itemid : ''); ?>">

<!-- For Images use following method
<img class="img-responsive" src="<?php echo $temp_path; ?>images/logo.png" alt="logo"/>-->

  <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
          <?php if ($this->countModules('advertisment1')): ?>
            <div class="advertisment1 advertisments">
                <jdoc:include type="modules" name="advertisment1" style="xhtml" />
               
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="detail-menu-row">
        <div class="row">
          <div class="col-xs-6 col-sm-2 col-md-3 col-lg-3">
          <?php //die("aa"); ?>
            <!-- <script type="text/javascript">
                tday=new Array("ඉරිදා", "සඳුදා", "අඟහරුවාදා", "බදාදා", "බ්‍රහස්පතින්දා", "සිකුරාදා", "සෙනසුරාදා");
                tmonth=new Array("ජන", "පෙබ", "මාර්", "අප්‍රේ", "මැයි", "ජූනි", "ජූලි", "අගෝ", "සැප්", "ඔක්", "නොවැ", "දෙසැ");

                function GetClock(){
                var d=new Date();
                var nday=d.getDay() - d.getDay(),nmonth=d.getMonth(),ndate=d.getDate() - d.getDay(),nyear=d.getYear();
                if(nyear<1000) nyear+=1900;
                var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                // var curr = new Date; // get current date
                var first = d.getDate() - d.getDay(); // First day is the day of the month - the day of the week
                var last = first + 6; // last day is the first day + 6

                var firstday = new Date(d.setDate(first));


                if(nhour==0){ap=" AM";nhour=12;}
                else if(nhour<12){ap=" AM";}
                else if(nhour==12){ap=" PM";}
                else if(nhour>12){ap=" PM";nhour-=12;}

                if(nmin<=9) nmin="0"+nmin;
                if(nsec<=9) nsec="0"+nsec;

                // document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
               document.getElementById('clockbox').innerHTML=""+nyear+" "+tmonth[nmonth]+" "+ndate+" "+tday[nday]+"";
                  // document.getElementById('clockbox').innerHTML=""+nyear+" "+tmonth[nmonth]+" "+ndate+"";
                }

                window.onload=function(){
                GetClock();
                setInterval(GetClock,1000);
                }

            </script> -->
                      <?php
date_default_timezone_set('Asia/Colombo');

      $assigned_date = date('Y-m-d');

$entered_date= date('Y-m-d',time()+( 7 - date('w'))*24*3600);

// print_r($entered_date);
// print_r($assigned_date);die;
$A = strtotime($assigned_date);
$B = strtotime($entered_date);

if($A != $B) {
    ?>
<script type="text/javascript">
                tday=new Array("ඉරිදා", "සඳුදා", "අඟහරුවාදා", "බදාදා", "බ්‍රහස්පතින්දා", "සිකුරාදා", "සෙනසුරාදා");
                tmonth=new Array("ජන", "පෙබ", "මාර්", "අප්‍රේ", "මැයි", "ජූනි", "ජූලි", "අගෝ", "සැප්", "ඔක්", "නොවැ", "දෙසැ");

                function GetClock(){
                var d=new Date();
                // var nday=d.getDay() - d.getDay(),nmonth=d.getMonth(),ndate=d.getDate() - d.getDay(),nyear=d.getYear();
                var nday=d.getDay() - d.getDay(),nmonth=d.getMonth(),ndate=d.getDate() - d.getDay(),nyear=d.getYear();
                if(nyear<1000) nyear+=1900;
                var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                // var curr = new Date; // get current date
                var first = d.getDate() - d.getDay(); // First day is the day of the month - the day of the week
                var last = first + 6; // last day is the first day + 6

                var firstday = new Date(d.setDate(first));


                // if(nhour==0){ap=" AM";nhour=12;}
                // else if(nhour<12){ap=" AM";}
                // else if(nhour==12){ap=" PM";}
                // else if(nhour>12){ap=" PM";nhour-=12;}

                // if(nmin<=9) nmin="0"+nmin;
                // if(nsec<=9) nsec="0"+nsec;

                // document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
               document.getElementById('clockbox').innerHTML=""+nyear+" "+tmonth[nmonth]+" "+ndate+" "+tday[nday]+"";
                  // document.getElementById('clockbox').innerHTML=""+nyear+" "+tmonth[nmonth]+" "+ndate+"";
                }

                window.onload=function(){
                GetClock();
                setInterval(GetClock,1000);
                }

            </script>

<?php
} else {
    ?>
<script type="text/javascript">
                tday=new Array("ඉරිදා", "සඳුදා", "අඟහරුවාදා", "බදාදා", "බ්‍රහස්පතින්දා", "සිකුරාදා", "සෙනසුරාදා");
                tmonth=new Array("ජන", "පෙබ", "මාර්", "අප්‍රේ", "මැයි", "ජූනි", "ජූලි", "අගෝ", "සැප්", "ඔක්", "නොවැ", "දෙසැ");

                function GetClock(){
                var d=new Date();
                // var nday=d.getDay() - d.getDay(),nmonth=d.getMonth(),ndate=d.getDate() - d.getDay(),nyear=d.getYear();
                var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
                if(nyear<1000) nyear+=1900;
                var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                // var curr = new Date; // get current date
                var first = d.getDate() - d.getDay(); // First day is the day of the month - the day of the week
                var last = first + 6; // last day is the first day + 6

                var firstday = new Date(d.setDate(first));


                // if(nhour==0){ap=" AM";nhour=12;}
                // else if(nhour<12){ap=" AM";}
                // else if(nhour==12){ap=" PM";}
                // else if(nhour>12){ap=" PM";nhour-=12;}

                // if(nmin<=9) nmin="0"+nmin;
                // if(nsec<=9) nsec="0"+nsec;

                // document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
               document.getElementById('clockbox').innerHTML=""+nyear+" "+tmonth[nmonth]+" "+ndate+" "+tday[nday]+"";
                  // document.getElementById('clockbox').innerHTML=""+nyear+" "+tmonth[nmonth]+" "+ndate+"";
                }

                window.onload=function(){
                GetClock();
                setInterval(GetClock,1000);
                }

            </script>
<?php
}

?>
                     
            <div class="today-date" id="clockbox">
             
            </div>

            <?php 
           
      //echo $prevMonday;
             ?>

          </div>
          <!-- <div class="col-xs-6 col-sm-2 col-md-1 col-lg-1">
            <?php if ($this->countModules('social-icon')): ?>
            <div class="social-icon">
                <jdoc:include type="modules" name="social-icon" style="xhtml" />
              
            </div>
            <?php endif; ?>
          </div> -->
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <?php if ($this->countModules('subdetail-menu')): ?>
                <div class="subdetail-menu">
                    <jdoc:include type="modules" name="subdetail-menu" style="xhtml" />
               
                </div>
            <?php endif; ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <?php if ($this->countModules('paper-menu1')): ?>
                <div class="paper-menu1">
                    <jdoc:include type="modules" name="paper-menu1" style="xhtml" />
             
                </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="main-logo-row">
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <?php if ($this->countModules('advertisment2')): ?>
                <div class="advertisment2 advertisments">
                    <jdoc:include type="modules" name="advertisment2" style="xhtml" />
               
                </div>
            <?php endif; ?>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="mainlogo">
              <a href="#"><img src="images/logo.png" class="img-responsive" alt="Diwaina"></a>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <?php if ($this->countModules('advertisment3')): ?>
                <div class="advertisment3 advertisments">
                    <jdoc:include type="modules" name="advertisment3" style="xhtml" />
              
                </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="main-menu-row">
        <div class="row">
          <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo JUri::base(); ?>"><img src="images/home-icon.png" class="img-responsive" alt="Home"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php if ($this->countModules('main-menu')): ?>
                        <jdoc:include type="modules" name="main-menu" style="xhtml" />
                    <?php endif; ?>
                 <ul class="nav menu nav navbar-nav" id="nav1">
                 <?php if($active->alias=="puwath"){ ?>
                      <li class="active"><a href="../sunday_preview_1/index.php/puwath/?date=<?php echo $_SESSION["date"]?>">පුවත්</a></li>
                  <?php }else{ ?>
                      <li><a href="../sunday_preview_1/index.php/puwath/?date=<?php echo $_SESSION["date"]?>">පුවත්</a></li>
                  <?php } ?>

                  <?php if($active->alias=="pradeshiyapuwath"){ ?>
                      <li class="active"><a href="../sunday_preview_1/index.php/pradeshiyapuwath/?date=<?php echo $_SESSION["date"]?>">ප්‍රාදේශීය පුවත්</a></li>
                  <?php }else{ ?>
                      <li><a href="../sunday_preview_1/index.php/pradeshiyapuwath/?date=<?php echo $_SESSION["date"]?>">ප්‍රාදේශීය පුවත්</a></li>
                  <?php } ?>

                  <?php if($active->alias=="visheshanga"){ ?>
                      <li class="active"><a href="../sunday_preview_1/index.php/visheshanga/?date=<?php echo $_SESSION["date"]?>">විශේෂාංග</a></li>
                  <?php }else{ ?>
                      <li><a href="../sunday_preview_1/index.php/visheshanga/?date=<?php echo $_SESSION["date"]?>">විශේෂාංග</a></li>
                  <?php } ?>

                  <?php if($active->alias=="kathuwakiya2"){ ?>
                      <li class="active"><a href="../sunday_preview_1/index.php/kathuwakiya2/?date=<?php echo $_SESSION["date"]?>">කතුවැකිය</a></li>
                  <?php }else{ ?>
                      <li><a href="../sunday_preview_1/index.php/kathuwakiya2/?date=<?php echo $_SESSION["date"]?>">කතුවැකිය</a></li>
                  <?php } ?>

                  <?php if($active->alias=="krida"){ ?>
                      <li class="active"><a href="../sunday_preview_1/index.php/krida/?date=<?php echo $_SESSION["date"]?>">ක්‍රීඩා</a></li>
                  <?php }else{ ?>
                      <li><a href="../sunday_preview_1/index.php/krida/?date=<?php echo $_SESSION["date"]?>">ක්‍රීඩා</a></li>
                  <?php } ?>

                  <?php if($active->alias=="cartoon"){ ?>
                      <li class="active"><a href="../sunday_preview_1/index.php/cartoon/?date=<?php echo $_SESSION["date"]?>">කාටුන්</a></li>
                  <?php }else{ ?>
                      <li><a href="../sunday_preview_1/index.php/cartoon/?date=<?php echo $_SESSION["date"]?>">කාටුන්</a></li>
                  <?php } ?>

                   <?php if($active->alias=="2017-08-10-08-58-23"){ ?>
                      <li class="active"><a href="../sunday_preview_1/index.php/2017-08-10-08-58-23">ඇමතුම්</a></li>
                  <?php }else{ ?>
                      <li><a href="../sunday_preview_1/index.php/2017-08-10-08-58-23">ඇමතුම්</a></li>
                  <?php } ?>


                 </ul>

                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
            <?php if ($this->countModules('paper-menu2')): ?>
                <div class="paper-menu2">
                    <jdoc:include type="modules" name="paper-menu2" style="xhtml" />
                    
                </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if ($this->countModules('advertisment4')): ?>
      <div class="advertisment4 advertisments">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                <jdoc:include type="modules" name="advertisment4" style="xhtml" />
            
          </div>
        </div>
      </div>
      <?php endif; ?>


      <div class="body-content">
<div class="archive-date">
<?php
if($_GET['date']){
  echo $_GET['date'].' වන දින කලාපය';
}else{
  
  echo "";
}
?>
</div>
      <?php if ($menu->getActive() == $menu->getDefault()) { ?>

        <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <?php if ($this->countModules('advertisment12')): ?>
                  <div class="advertisment12 advertisments">
                    <jdoc:include type="modules" name="advertisment12" style="xhtml" />
                    
                  </div>
              <?php endif; ?>
              <?php if ($this->countModules('pradana_puwath')): ?>
                  <div class="pradana_puwath">
                    <jdoc:include type="modules" name="pradana_puwath" style="xhtml" />
                    
                  </div>
              <?php endif; ?>
            <?php if ($this->countModules('puwath')): ?>
                <div class="puwath-col">
                <div class="puwath">
                    <jdoc:include type="modules" name="puwath" style="xhtml" />
                </div>
                </div>
            <?php endif; ?>
            <?php if ($this->countModules('advertisment6')): ?>
                <div class="advertisment6 advertisments">
                  <jdoc:include type="modules" name="advertisment6" style="xhtml" />
                  
                </div>
            <?php endif; ?>
          </div>
          <div class="middle-content-main">
            <!-- Error Message -->
            <jdoc:include type="message" />
            <!-- Content -->
            <jdoc:include type="component" />

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <?php if ($this->countModules('hot-news')): ?>
                <div class="hot-news">
                    <jdoc:include type="modules" name="hot-news" style="xhtml" />
                   
                </div>
              <?php endif; ?>
              <?php if ($this->countModules('advertisment5')): ?>
                <div class="advertisment5 advertisments">
                    <jdoc:include type="modules" name="advertisment5" style="xhtml" />
               
                </div>
              <?php endif; ?>
              <?php if ($this->countModules('main-news')): ?>
                <div class="main-news">
                    <jdoc:include type="modules" name="main-news" style="xhtml" />
                    
                </div>
              <?php endif; ?>
             
              <?php if ($this->countModules('advertisment7')): ?>
                <div class="advertisment7 advertisments">
                    <jdoc:include type="modules" name="advertisment7" style="xhtml" />
                
                </div>
              <?php endif; ?>
              <?php if ($this->countModules('visheshanga')): ?>
                <div class="visheshanga">
                    <jdoc:include type="modules" name="visheshanga" style="xhtml" />
               
                </div>
              <?php endif; ?>
              <?php if ($this->countModules('welanda')): ?>
                <div class="welanda">
                    <jdoc:include type="modules" name="welanda" style="xhtml" />
               
                </div>
              <?php endif; ?>
              <?php if ($this->countModules('advertisment8')): ?>
                <div class="advertisment8 advertisments">
                    <jdoc:include type="modules" name="advertisment8" style="xhtml" />
               
                </div>
              <?php endif; ?>
              <?php if ($this->countModules('krida')): ?>
                <div class="krida">
                    <jdoc:include type="modules" name="krida" style="xhtml" />
              
                </div>
              <?php endif; ?>
              
              <?php if ($this->countModules('videspuwath')): ?>
                <div class="videspuwath">
                    <jdoc:include type="modules" name="videspuwath" style="xhtml" />
             
                </div>
            <?php endif; ?>
              <?php if ($this->countModules('cartoon')): ?>
                <div class="cartoon">
                    <jdoc:include type="modules" name="cartoon" style="xhtml" />
                
                </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pradeshiyapuwath-col">
            <?php if ($this->countModules('advertisment11')): ?>
              <div class="advertisment11 advertisments" style="margin-bottom: 10px;">
                <jdoc:include type="modules" name="advertisment11" style="xhtml" />
              </div>
            <?php endif; ?>
            <?php if ($this->countModules('pradeshiya-puwath')): ?>
                <div class="pradeshiya-puwath">
                    <jdoc:include type="modules" name="pradeshiya-puwath" style="xhtml" />
             
                <?php if ($this->countModules('advertisment9')): ?>
                  <div class="advertisment9 advertisments">
                    <jdoc:include type="modules" name="advertisment9" style="xhtml" />
                   
                  </div>
                <?php endif; ?>
            
                </div>
            <?php endif; ?>
            
      <div class="archives clearfix">
        <div class="pull-left col-md-6" style="background-color:#C81018; height: 40px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">
           
       <div class="pull-left sidemenu-logo">
      <span class="" ><img src="images/archives.png" class="img-responsive" alt="Home"></span>
       </div>
       <div class="pull-left sidebar-txt">
        <p style="text-align:center; color: #fff; font-size: 15px; padding-top: 7px; text-transform:uppercase;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">Archives</p>
        </div>
        </div>
    <div class="pull-left col-md-6 input-cont"> 
        <form action="<?php echo JRoute::_('index.php');?>/?date=<?php echo $_GET['date'];?>" method="GET" class="form-inline">
        
           <input type="text" id="datepicker" name="date">
         
           <input type="submit" name="" value="" class="magnifier-archive">
          
        </form>
</div>
        <script>
          $( function() {
            $( "#datepicker" ).datepicker({
                beforeShowDay: function(date) {
                    var day = date.getDay();
                    return [(day == 0), ''];
                }
            });

          } );
        </script>
        
      </div>
      <div class="search clearfix">
          <div class="pull-left col-md-6" style="background-color:#C81018; height: 40px;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">
             <div class="pull-left sidemenu-logo">
                <span class="" ><img src="images/search1.png" class="img-responsive" alt="Home"></span>
             </div>
             <div class="pull-left sidebar-txt">
                   <p style="text-align:center; color: #fff; font-size: 15px; padding-top: 7px; text-transform:uppercase;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">Search</p>
             </div>
          </div>
          <div class="pull-left col-md-6 input-cont"> 
            <?php if ($this->countModules('search')): ?>
                  <jdoc:include type="modules" name="search" style="xhtml" />
            <?php endif; ?>
      
          </div>
      </div>

      <div class="socialicon clearfix">
          <div class="pull-left col-md-8" style="background-color:#C81018; height: 40px;">
              <div class="">
                   <p style="text-align:center; color: #fff; font-size: 15px; padding-top: 7px; text-transform:uppercase;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">Follow us on</p>
              </div>
          </div>
          <div class="pull-left col-md-4 input-cont"> 
            <?php if ($this->countModules('social-icon')): ?>
              <div class="social-icon">
                  <jdoc:include type="modules" name="social-icon" style="xhtml" />
              </div>
            <?php endif; ?>
          </div>
      </div>
      
    <div class="most-viewed-art">
      <!-- <div class="" style="background-color:#C81018; height: 50px;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">
        <a href="#"> Most Viewed Articles </a>
      </div> -->
<?php if ($this->countModules('most-viewed')): ?>
              <div class="most-viewed">
                  <jdoc:include type="modules" name="most-viewed" style="xhtml" />
              </div>
            <?php endif; ?>
            
    </div>
      
      </div>
    </div>

      <?php } else { ?>
    <div class="">
        <div class="row">
          <div class="middle-content-main innerpage">
          
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 col-mid-inner">
              
              <?php if ($this->countModules('hot-news')): ?>
                <div class="inner-category-hot-news">
                    <jdoc:include type="modules" name="hot-news" style="xhtml" />
                </div>
              <?php endif; ?>

                <!-- Error Message -->
                <jdoc:include type="message" />
                <!-- Content -->
                <jdoc:include type="component" />
             
             
            </div>
          </div>

         
          
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pradeshiyapuwath-col">
            <?php if ($this->countModules('advertisment11')): ?>
              <div class="advertisment11 advertisments" style="margin-bottom: 10px;">
                <jdoc:include type="modules" name="advertisment11" style="xhtml" />
              </div>
            <?php endif; ?>
            <?php if ($this->countModules('pradeshiya-puwath')): ?>
                <div class="pradeshiya-puwath">
                    <jdoc:include type="modules" name="pradeshiya-puwath" style="xhtml" />
             
                <?php if ($this->countModules('advertisment9')): ?>
                  <div class="advertisment9 advertisments">
                    <jdoc:include type="modules" name="advertisment9" style="xhtml" />
                  </div>
                <?php endif; ?>
             
                </div>
            <?php endif; ?>
                  <div class="archives clearfix">
        <div class="pull-left col-md-6" style="background-color:#C81018; height: 40px; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">
           
       <div class="pull-left sidemenu-logo">
      <span class="" href="<?php echo JUri::base(); ?>"><img src="images/archives.png" class="img-responsive" alt="Home"></span>
       </div>
       <div class="pull-left sidebar-txt">
        <p style="text-align:center; color: #fff; font-size: 15px; padding-top: 7px; text-transform:uppercase;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">Archives</p>
        </div>
        </div>
    <div class="pull-left col-md-6 input-cont"> 
        <form action="<?php echo JRoute::_('index.php');?>/?date=<?php echo $_GET['date'];?>" method="GET" class="form-inline">
        
           <input type="text" id="datepicker" name="date">
         
           <input type="submit" name="" value="" class="magnifier-archive">
          
        </form>
</div>
        <script>
          $( function() {
            $( "#datepicker" ).datepicker({
                beforeShowDay: function(date) {
                    var day = date.getDay();
                    return [(day == 0), ''];
                }
            });

          } );
        </script>
        
      </div>
      <div class="search clearfix">
          <div class="pull-left col-md-6" style="background-color:#C81018; height: 40px;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">
             <div class="pull-left sidemenu-logo">
                <span class="" ><img src="images/search1.png" class="img-responsive" alt="Home"></span>
             </div>
             <div class="pull-left sidebar-txt">
                   <p style="text-align:center; color: #fff; font-size: 15px; padding-top: 7px; text-transform:uppercase;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">Search</p>
             </div>
          </div>
          <div class="pull-left col-md-6 input-cont"> 
            <?php if ($this->countModules('search')): ?>
                  <jdoc:include type="modules" name="search" style="xhtml" />
            <?php endif; ?>
      
          </div>
      </div>

      <div class="socialicon clearfix">
          <div class="pull-left col-md-8" style="background-color:#C81018; height: 40px;">
              <div class="">
                   <p style="text-align:center; color: #fff; font-size: 15px; padding-top: 7px; text-transform:uppercase;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">Follow us on</p>
              </div>
          </div>
          <div class="pull-left col-md-4 input-cont"> 
            <?php if ($this->countModules('social-icon')): ?>
              <div class="social-icon">
                  <jdoc:include type="modules" name="social-icon" style="xhtml" />
              </div>
            <?php endif; ?>
          </div>
      </div>
      
    <div class="most-viewed-art">
      <div class="" style="background-color:#C81018; height: 50px;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">
        <a href="#"> Most Viewed Articles </a>
      </div>

    </div>
          </div>
        </div>
    </div>
      <?php } ?>

<div class="bottom-athiraka">
        <?php if ($this->countModules('advertisment10')): ?>
        <div class="advertisment10 advertisments">
            <jdoc:include type="modules" name="advertisment10" style="xhtml" />
          
        </div>
        <?php endif; ?>
        <div class="level2">
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <?php if ($this->countModules('cinema')): ?>
                <div class="cinema">
                    <jdoc:include type="modules" name="cinema" style="xhtml" />
               
                </div>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <?php if ($this->countModules('kathuwakiya')): ?>
                <div class="kathuwakiya">
                    <jdoc:include type="modules" name="kathuwakiya" style="xhtml" />
                
                </div>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <?php if ($this->countModules('diyaga')): ?>
                <div class="diyaga">
                    <jdoc:include type="modules" name="diyaga" style="xhtml" />
               
                </div>
              <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <?php if ($this->countModules('meewitha')): ?>
                <div class="meewitha">
                    <jdoc:include type="modules" name="meewitha" style="xhtml" />
                  
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php if ($this->countModules('level3')): ?>
        <div class="level3">
            <jdoc:include type="modules" name="level3" style="xhtml" />
         
        </div>
        <?php endif; ?>
      </div>



      <?php if ($this->countModules('left-banner-box')): ?>
        <div class="left-banner-box">
            <jdoc:include type="modules" name="left-banner-box" style="xhtml" />
          
        </div>
      <?php endif; ?>
      <?php if ($this->countModules('right-banner-box')): ?>
        <div class="right-banner-box">
            <jdoc:include type="modules" name="right-banner-box" style="xhtml" />
          
        </div>
      <?php endif; ?>
        
        
    </div>
</div>
    <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
              <img src="images/upali.png" class="img-responsive" alt="">
            </div>
            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7">
              <div class="copyrights">
                UPALI NEWSPAPERS (PVT) LTD Copyright © Upali Newspapers (Pvt) Ltd. All Rights Reserved. 
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="solution-by">
                Solution By LankaCom
              </div>
            </div>
          </div>
        </div>
    </div>


    <jdoc:include type="modules" name="debug" style="xhtml" />

</body>
</html>
