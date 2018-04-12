<?php 
// Start the session
session_start();
/*if($_SESSION['timeout'] + 10 * 60 < time()){
    echo "<script type=\"text/javascript\">
						alert(\"Please Login to continue.\");
						window.location = \"login.php\"
					</script>";
}
if($_SESSION["log"]!="en"){
    echo "<script type=\"text/javascript\">
						alert(\"Please Login to continue.\");
						window.location = \"login.php\"
					</script>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="/kisancraft.org/src/css/megafish.css" media="screen">
    
    <style>
      html, body, .wrap {
        width: 99%;
        height: 100%;
        padding: 0;
        margin: 0;
      }
      .wrap {
        padding: 1em;
        height: auto;
        min-height: 10%;
      }
      h1 {
        font-size: 1.125em;
      }
      .sf-mega ul {
        list-style-type: auto;
        margin: 0;
        padding-left: 1.2em;
      }
      .sf-mega li {
        margin-left: 0;
      }
      .sf-mega h2 {
        font-size: 1em;
        margin: .5em 0;
        color: #13a;
       
      }
      
      a:focus, a:hover, a:active {
        text-decoration: none;
      }
    </style>
    <script src="/kisancraft.org/src/js/jquery.js"></script>
    <script src="/kisancraft.org/src/js/hoverIntent.js"></script>
    <script src="/kisancraft.org/src/js/superfish.js"></script>
    <script>

    (function($){ //create closure so we can safely use $ as alias for jQuery

      $(document).ready(function(){
        
        var exampleOptions = {
          speed: 'fast'
        }
        // initialise plugin
        var example = $('#example').superfish(exampleOptions);

        // buttons to demonstrate Superfish's public methods
        $('.destroy').on('click', function(){
          example.superfish('destroy');
        });

        $('.init').on('click', function(){
          example.superfish(exampleOptions);
        });

        $('.open').on('click', function(){
          example.children('li:first').superfish('show');
        });

        $('.close').on('click', function(){
          example.children('li:first').superfish('hide');
        });
      });

    })(jQuery);


    </script>
  </head>
  <body>
    <div class="wrap">
    <img src="/kisancraft.org/images/KK-LOGO.JPG" alt="Smiley face" height="60" width="30%">
     <h1 style="text-align:center; background-color: lightblue; "> Kisankraft Reports</h1>
      <ul class="sf-menu" id="example">
        <li class="current">
          <a href="#">Purchase Report</a>
           <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2; padding: 10px;">
              <h2></h2>
              <ul>
                <li class="current">
                <a href="#">Item Wise</a></li><br>
                <li><a href="/kisancraft.org/supplier.php">Supplier Wise</a></li><br>
                <li><a href="/kisancraft.org/preportforall.php">Both</a></li><br>
                
              </ul>
            </div>
           </div>
            
        </li>
        <li>
          <a href="followed.html">Ageing Analysis</a>
          <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">
              <h2></h2>
              <ul>
                <li class="current">
                <a href="#">Standerd</a></li><br>
                <li><a href="#">Quaterly</a></li><br>
                <li><a href="#">Half Yearly</a></li><br>
                <li><a href="#">Annually</a></li><br>
                
              </ul>
            </div>
           </div>
        </li>
        <li>
          <a href="#">Order Planning</a>
          <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">              
              <ul>
                <li class="current">
                <a href="#">Projected</a></li><br>
                <li><a href="#">Actual</a></li><br>
                <li><a href="#">Both</a></li><br>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <a href="#">Cash Flow</a>
           <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">              
              <ul>
                <li class="current">
                <a href="#">Projected</a></li><br>
                <li><a href="#">Actual</a></li><br>
                <li><a href="#">Both</a></li><br>
              </ul>
            </div>
          </div>
        </li> 
        <li>
          <a href="#">Profitability</a>
           <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">              
              <ul>
                <li class="current">
                <a href="#">SKU wise</a></li><br>
                <li><a href="#">Group wise</a></li><br>
                <li><a href="#">Both</a></li><br>
              </ul>
            </div>
          </div>
        </li> 
        <li>
          <a href="#">Target</a>
           <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">              
              <ul>
                <li class="current">
                <a href="#">Projected</a></li><br>
                <li><a href="#">Actual</a></li><br>
                <li><a href="#">Both</a></li><br>
              </ul>
            </div>
          </div>
        </li>
        <li>
          <a href="/kisancraft.org/incentives.php">Incentives</a>
        </li> 
        <li>
          <a href="#">Quaterly Meeting</a>
        </li> 
        <li>
          <a href="#">Master File Updation</a>
          <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">
              <h2></h2>
              <ul>
                <li class="current">
                <a href="/kisancraft.org/branchmst.php">Branch Master</a></li><br>
                <li><a href="/kisancraft.org/suppliermaster.php">Supplier Master</a></li><br>
                <li><a href="#">Bank Master</a></li><br>
                <li><a href="#">Accounts Head</a></li><br>
                <li><a href="/kisancraft.org/executive.php">Executive Master</a></li><br>
                <li><a href="/kisancraft.org/zonemaster.php">Zone Master</a></li><br>
                <li><a href="/kisancraft.org/employee.php">Employee Master</a></li><br>
                <li><a href="/kisancraft.org/statemst.php">State Master</a></li><br>
                <li><a href="#">State Employee Mapping</a></li><br>
                <li><a href="#">Distict Master</a></li><br>
                <li><a href="/kisancraft.org/itemid.php">Item Master</a></li><br>
                <li><a href="/kisancraft.org/dealermst.php">Dealer Master</a></li><br>
                <li><a href="#">Trial Balance Master</a></li><br>
              </ul>
            </div>
           </div>
        </li> 
        <li>
          <a href="#">Sales</a>
          <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">
              <h2></h2>
              <ul>
                <li class="current">
                <a href="/kisancraft.org/salesupload.php">Upload sales</li><br>
                <li><a href="/kisancraft.org/discountupload.php">Credit Note</li><br>
                <li><a href="/kisancraft.org/salesdailyreport.php">Sales Daily Report</a></li><br>
                <li><a href="/kisancraft.org/salesemp.php">Sales WRT Employees</a></li><br>
                <li><a href="/kisancraft.org/saleswrtstate.php">Sales WRT State And Distict wise</a></li><br>
                <li><a href="#">Sales WRT SKU Wise</a></li><br>
                <li><a href="/kisancraft.org/saleswrtdea.php">Sales WRT Dealer Wise</a></li><br>
                <li><a href="#">Target V/s Actual</a></li><br>
              </ul>
            </div>
           </div>
        </li> 
         <li>
          <a href="#">Trial Balance</a>
          <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">
              <h2></h2>
              <ul>
                <li class="current">
                <a href="#">Updation</a></li><br>
              </ul>
            </div>
           </div>
          </li>
           
           <li>
          <a href="#">Trade Discount</a>
           <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">
              <h2></h2>
              <ul>
                <li class="current">
                <a href="#">Updation</a></li><br>
              </ul>
            </div>
           </div>
          </li>
          <li>
          <a href="#">Stock</a>
           <div class="sf-mega">
            <div class="sf-mega-section" style="background-color: #f2f2f2">
              <h2></h2>
              <ul>
                <li class="current">
                <a href="#">Updation</a></li><br>
              </ul>
            </div>
           </div>
          </li>
      </ul>
    </div>
  </body>
</html>
