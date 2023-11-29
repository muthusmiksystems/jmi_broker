<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Title Here</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="partner-banner money-banner ">
        <div class="container banner-pt1 banner-pb1 pdX5">
            <div class="partnerBannner-cont">
               <div class="banner-cont mn-hd mn-btn">
                  <h2 class="tx-white"><?php echo getPageMetaByIDKeyGroup(7,'Banner Heading 1','Banner');?></h2>
                  <div class="banner-btn">
                     <a class="gd-btn signUp" href="#"><?php echo getPageMetaByIDKeyGroup(7,'Banner Button Text','Banner');?> 
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                              <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                     </a>
                     <a class="ol-btn loginUp" href="#">Open Live Account</a>
                  </div>
               </div>

               <div class="banner-img fs-0">
                  <img src="assets/images/banner/mt4-img.png" alt="">
               </div>
            </div>
        </div>
      </section>

      <section class="grey-section mt4Section1">
         <div class="container">
            <div class="pdX5">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont moneySec1-cont businessSec1-cont">
                        <h3 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(7,'Heading','JMI Trading');?></h3>
                        <p class="p-fs3"><?php echo getPageMetaByIDKeyGroup(7,'Description','JMI Trading');?></p>
                     </div>
                     <div class="mn-btn partnerSec1-cont pdT1">
                        <a class="gd-btn" href="download-file.php"><?php echo getPageMetaByIDKeyGroup(7,'Buton text','JMI Trading');?></a>
                     </div>
                  </div>

                  <div class="col-md-6 text-center">
                     <div class="moneySec1-img">
                        <img src="assets/images/mt4/mt4_mobile_trading.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="platformSection">
         <div class="container">
            <div class="pdX5">
               <div class="mn-hd text-center hd-pad">
                  <h3 class="tx-blue fw-bold">Platform Tour</h3>
               </div>

               <div class="platformSec-nav">
                  <ul>
                     <li class="current"><a href="#overviews">Overview</a></li>
                     <li><a href="#market">Market Watch</a></li>
                     <li><a href="#charts">Charts</a></li>
                     <li><a href="#navigator">Navigator</a></li>
                     <li><a href="#trade">Trade Terminal</a></li>
                     <li><a href="#order">Order Form</a></li>
                     <!-- <li><a href="#">Trailing Stops</a></li> -->
                  </ul>
               </div>

               <div class="overviewSec-main padY2 page-section" id="overviews">
                  <div class="row align-items-center">
                     <div class="col-md-6 text-center">
                        <div class="img-wapper">
                           <img src="assets/images/mt4/mockup-mt4-page.png" alt="">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="overviewSecMain-cont mn-hd mn-btn">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(7,'Heading','Overview');?></h3>
                           <p class="tx-grey300 p-fs5"><?php echo getPageMetaByIDKeyGroup(7,'Description','Overview');?></p>
                           <a class="gd-btn" href="download-file.php">Download Meta Trader 4 FX Demo</a>

                           <span class="p-fs2 bld d-block">Download App</span>

                           <ul class="applist">
                              <li>
                                 <a href="#"><img src="assets/images/google-play.png" alt=""></a>
                              </li>
                              <li>
                                 <a href="#"><img src="assets/images/apple-store.png" alt=""></a>
                              </li>
                              <li>
                                 <a href="#"><img src="assets/images/app-galler.png" alt=""></a>
                              </li>
                           </ul>

                           <em class="tx-grey300 p-fs5">Trading Platform : MetaTrader 4System Requirements : iPhone 3GS, 4, 4S, iPod touch, iPad1, iOS 4.0 and later, 3G / Wi-Fi</em>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tourSec-main page-section" id="market">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="tourSec-cont mn-hd">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(7,'Heading','Market Watch');?></h3>
                           <p>
                             <?php echo getPageMetaByIDKeyGroup(7,'Description','Market Watch');?>
                           </p>
                        </div>
                     </div>

                     <div class="col-md-6 text-center">
                        <div class="tourSec-img">
                           <img src="assets/images/mt4/marker-watch.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tourSec-main page-section odd" id="charts">
                  <div class="row align-items-center">
                     <div class="col-md-6 text-center">
                        <div class="tourSec-img">
                           <img src="assets/images/mt4/charts.png" alt="">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="tourSec-cont mn-hd">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(7,'Heading','Charts');?></h3>
                           <p>
                              <?php echo getPageMetaByIDKeyGroup(7,'Description','Charts');?>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tourSec-main page-section" id="navigator">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="tourSec-cont mn-hd">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(7,'Heading','Navigator');?></h3>
                           <p>
                              <?php echo getPageMetaByIDKeyGroup(7,'Description','Navigator');?>
                           </p>
                        </div>
                     </div>

                     <div class="col-md-6 text-center">
                        <div class="tourSec-img">
                           <img src="assets/images/mt4/navigator.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tourSec-main page-section odd" id="trade">
                  <div class="row align-items-center">
                     <div class="col-md-6 text-center">
                        <div class="tourSec-img">
                           <img src="assets/images/mt4/trade-terminal.png" alt="">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="tourSec-cont mn-hd">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(7,'Heading','Trade Terminal');?></h3>
                           <p class="pb-4">
                              <?php echo getPageMetaByIDKeyGroup(7,'Description','Trade Terminal');?>
                           </p>

                           <span class="tx-blue p-fs2 d-block pt-4 pb-2"><?php echo getPageMetaByIDKeyGroup(7,'Trade Tab Heading','Trade Terminal');?></span>

                           <em class="tx-grey400 fst-italic lh150 w-75 d-block"><?php echo getPageMetaByIDKeyGroup(7,'Trade Tab Description','Trade Terminal');?></em>
                        </div>
                     </div>

                     <div class="col-md-12">
                        <div class="tradeTerminal-hd mn-hd text-center">
                           <h6 class="fw-bold">Trade Terminal</h6>
                        </div>
                     </div>
                     
                     <div class="col-md-6">
                        <div class="tourSec-cont">
                           <ul>
                              <li><span>-</span> New Order : will open order form window</li>
                              <li><span>-</span> Close Order : will open the close order form window</li>
                              <li><span>-</span> Modify or Delete Order : use this option to edit your stop-loss and take-profit orders</li>
                              <li><span>-</span> Trailing Stop : you can select a predefined trailing stop or set up a custom one.</li>
                              <li><span>-</span> Profit : Choose to show your profit as points, as term currency or as deposit currency</li>
                           </ul>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="tourSec-cont">
                           <ul>
                              <li><span>-</span> Commissions : This toggles the Commissions fields on and off in your trade terminal</li>
                              <li><span>-</span> Taxes : This toggles the Taxes field on and off in your trade terminal</li>
                              <li><span>-</span> Comments : This toggles your Comments field on and off in your trade terminal</li>
                              <li><span>-</span> Auto Arrange : When off, this allows you to rearrange your trade columns however you like (width, placement, etc.)</li>
                              <li><span>-</span> Grid : show and hide the grid to separate the columns.</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tourSec-main page-section" id="order">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="tourSec-cont mn-hd">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(7,'Heading','Order Form');?></h3>
                           <p class="pb-4">A position can be opened in several ways:</p>

                           <ul class="pb-5">
                              <li><span>-</span> From the menu options Tools > New Order</li>
                              <li><span>-</span> By pressing the F9 key on your keyboard</li>
                              <li><span>-</span> By double-clicking a currency pair in your Market Watch window.</li>
                              <li><span>-</span> By right-clicking the Trade Terminal window and choosing New Order</li>
                           </ul>

                           <em class="tx-grey400 fst-italic lh150 w-75 d-block">The Order Form window appears and you can open a position or place an order. </em>
                        </div>
                     </div>

                     <div class="col-md-6 text-center">
                        <div class="tourSec-img">
                           <img src="assets/images/mt4/navigator.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>



      <?php include("includes/news-letter.php"); ?>

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>