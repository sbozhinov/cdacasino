<?php $meta_keywords = "coeur d'alene casino, hotel, resort, concerts, promotions, entertainment, boxing, house of fury, golf, circling raven"; ?>
<?php $meta_description = "Make reservations for one of our sleek hotel rooms, purchase merchandise at our online store, and buy your ticket to one of our many exciting events"; ?>
<?php $wrapper_bg = "search_bg"; ?>
<?php $page_title = "Coeur d'Alene Casino Resort: Search Results"; ?>
<?php include('includes_root/header.php'); ?>

<div id="search_results_page">


<style type="text/css">
  div .gsc-control-cse {
    font-family: Arial, sans-serif;
    border:0;
    background-color: #663300;
  }
  input.gsc-input {
    border-color: #BCCDF0;
  }


  .gsc-tabHeader.gsc-tabhInactive {
    border-color: #E9E9E9;
    background-color: #E9E9E9;
  }
  .gsc-tabHeader.gsc-tabhActive {
    border-top-color: #FF9900;
    border-left-color: #E9E9E9;
    border-right-color: #E9E9E9;
    background-color: #FFFFFF;
  }
  .gsc-tabsArea {
    border-color: #E9E9E9;
  }
  .gsc-webResult.gsc-result {
    border-color: #FFFFFF;
    background-color: #ffeedd;
  }

  .gs-webResult.gs-result a.gs-title:link,
  .gs-webResult.gs-result a.gs-title:link b {
    color: #000;
  }

  .gs-webResult.gs-result a.gs-title:hover,
  .gs-webResult.gs-result a.gs-title:hover b {
    color: purple;;
  }
  .gs-webResult.gs-result a.gs-title:active,
  .gs-webResult.gs-result a.gs-title:active b {
    color: #ffffff;
  }
  .gsc-cursor-page {
    color: white;
  }
.gsc-cursor{color:white !important;}
  a.gsc-trailing-more-results:link {
    color: #ffffff;
  }
  .gs-webResult .gs-snippet {
    color: #000000;
  }
  .gs-webResult div.gs-visibleUrl {
    color: #cc6600;
  }
  .gs-webResult div.gs-visibleUrl-short {
    color: #cc6600;
  }
  .gs-webResult div.gs-visibleUrl-short {
    display: none;
  }
  .gs-webResult div.gs-visibleUrl-long {
    display: block;
  }
  .gsc-cursor-box {
    border-color: #FFFFFF;
  }
  
  .gsc-results .gsc-cursor-page {
    border-color: #E9E9E9;
   
  }
  .gsc-results .gsc-cursor-page.gsc-cursor-current-page {
    border-color: #FF9900;
    
  }
  .gs-promotion {
    border-color: #336699;
    background-color: #FFFFFF;
  }
  .gs-promotion a.gs-title:link,
  .gs-promotion a.gs-title:link *,
  .gs-promotion .gs-snippet a:link {
    color: #ffffff;
  }
  .gs-promotion a.gs-title:visited,
  .gs-promotion a.gs-title:visited *,
  .gs-promotion .gs-snippet a:visited {
    color: #ffffff;
  }
  .gs-promotion a.gs-title:hover,
  .gs-promotion a.gs-title:hover *,
  .gs-promotion .gs-snippet a:hover {
    color: #ffffff;
  }
  .gs-promotion a.gs-title:active,
  .gs-promotion a.gs-title:active *,
  .gs-promotion .gs-snippet a:active {
    color: #ffffff;
  }
  .gs-promotion .gs-snippet,
  .gs-promotion .gs-title .gs-promotion-title-right,
  .gs-promotion .gs-title .gs-promotion-title-right *  {
    color: #000000;
  }

td.gsc-input input
{
   
    background-position:top right !important;
    margin-top:0px!important;
}

  .gs-promotion .gs-visibleUrl,
  .gs-promotion .gs-visibleUrl-short {
    color: #cc6600;
  }
</style>
      


        
        
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<div id="cse" style="width: 954px;">Loading</div>

<script type="text/javascript">
  google.load('search', '1');
  google.setOnLoadCallback(function(){
    var customSearchControl = new google.search.CustomSearchControl('009120595968342812063:y-ctete5fag');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
    jQuery(".gsc-input").val("<?php echo $_POST['q']; ?>");//insert into search field requested search text
    jQuery(".gsc-search-button").click();//call button click event, show results
  }, true);
</script>
<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />





    </div><!-- end main -->

<?php include('includes_root/footer.php'); ?>