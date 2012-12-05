<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Is It Vatable</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>
  <!-- typekit 
  <script type="text/javascript" src="//use.typekit.net/wry2lrs.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  -->
  <script type="text/javascript" src="jquery.js"></script>
  <script type='text/javascript' src='jquery.autocomplete.js'></script>

<script type="text/javascript">
$().ready(function() {
        $("#prodid").autocomplete("get_prodid_list.php", {
                //width: 100%,
                matchContains: true,
                //mustMatch: true,
                //minChars: 0,
                //multiple: true,
                //highlight: false,
                //multipleSeparator: ",",
                selectFirst: false
        });
});
</script>

</head>
<body>
  
  
  
  <!-- logo -->
    
  <div class="row">
    <div class="twelve columns logo">
     <img src="images/is-it-vatable.png">
    </div>
  </div>

  <!-- hidden answer -->

  <div class="full-width1">
    <div class="topjaw"></div>
    <div id="mouth">
      <div id="searchresultdata" class="faq-articles"> </div>
    </div>
      <div class="bottomjaw"></div>
  </div>

  <!-- Second Band (Image Left with Text) -->

  <div class="row">
    <div class="twelve columns question">
      <h1>Do you need to charge for VAT? Find out instantly...</h1>
    </div>
  </div>

  <!-- input field -->

  <div class="row">
    <div class="twelve columns">
<form autocomplete="on">
      <div class="row collapse">
        <div class="eight mobile-three columns offset-by-one">

              
                              <input type="text" name="prodid" id="prodid" />
                              <!--input type="button" value="Get Value" /-->
             

        </div>
        <div class="two mobile-one columns pull-one">
         <input type="submit" value="Go" class="button" />
        </div>
      </div> </form>
    </div>
  </div>
  
  <!-- Find out more -->

           
  <div class="full-width3">
    <div class="topjaw3">      
      <div id="clickmore">
        <a href="#" class="viewme" ><img src="images/click-me.png"><p>view all items</p></a>
      </div></div>
    <div id="mouth3">
      <div class="row">
        <div class="twelve columns viewlist">
            <ul class="full-list">
              <li>Books</li>
              <li>Booklets</li>
              <li>Brochures</li>
              <li>Catalogues</li>
              <li>Directories</li>
              <li>Flyers</li>
              <li>Journals</li>
              <li>Magazines</li>
              <li>Manuals</li>
              <li>Maps</li>
              <li>Sheet Music</li>
              <li>Newsletters</li>
              <li>Pamphlets</li>
              <li>Price lists</li>
              <li>Timetables</li>
            </ul>
          </div>
        </div>
    </div>
  </div>

  </div>

  <!-- Footer -->
  
  <footer class="row">
    <div class="twelve columns">

      </div>
    </div> 
  </footer>

  
  <!-- Included JS Files (Compressed)
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script> -->
  
  <!-- Initialize JS Plugins
  <script src="javascripts/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
  <!--
    <script>

      $( document ).ready( function()
        {
          $( '.topjaw' ).hover( function()
          {
            $('#mouth').animate({ height:'270px'});
          },
        function()
        {
          $('#mouth').animate({ height:'24px'});
        });
      });

        $( document ).ready( function()
    {
      $('.viewme').toggle( function()
      {
        $('#mouth3').animate({ height:'270px'});
      },
    function()
    {
      $('#mouth3').animate({ height:'40px'});
    });
  });

    </script>
  -->
</body>
</html>
