<amp-animation id="showAnim" layout="nodisplay">
  <script type="application/json">
	{
	  "duration": "200ms",
	  "fill": "both",
	  "iterations": "1",
	  "direction": "alternate",
	  "animations": [{
		"selector": "#scrollToTopButton",
		"keyframes": [{
		  "opacity": "1",
		  "visibility": "visible"
		}]
	  }]
	}
  </script>
</amp-animation>

<amp-animation id="hideAnim" layout="nodisplay">
  <script type="application/json">
	{
	  "duration": "200ms",
	  "fill": "both",
	  "iterations": "1",
	  "direction": "alternate",
	  "animations": [{
		"selector": "#scrollToTopButton",
		"keyframes": [{
		  "opacity": "0",
		  "visibility": "hidden"
		}]
	  }]
	}
  </script>
</amp-animation>

<div id="marker">
  <amp-position-observer on="enter:hideAnim.start; exit:showAnim.start" layout="nodisplay"></amp-position-observer>
</div>
<button id="scrollToTopButton" on="tap:top-page.scrollTo(duration=200)" class="content_center scrollToTop">
  <?php require ($_SERVER['HH'].'img/icon/back-to-top.svg')?>
</button>



</body>
</html>