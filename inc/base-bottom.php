<div id="btt" class="content_center hide" title="Return To Top">
  <?php require ($_SERVER['HH'].'img/icon/back-to-top.svg')?>
</div>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function(){window.setTimeout(loadDeferredStyles,0);});
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-hold="js/rancak.js"></script>
<?php if($page == 'detail') { ?>
  <div id="fb-root"></div>
  <script>
  $(document).ready(function(){
    var handler = function(e){
      var js = document.createElement('script');
      js.src = '//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0&appId=221947151281666&autoLogAppEvents=1';
      document.body.appendChild(js);
    };
    $("body,html").unbind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", handler).one("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", handler);
  });
  </script>
<?php } ?>


</body>
</html>