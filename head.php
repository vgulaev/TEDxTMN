<?php
require("global.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name='yandex-verification' content='6aa20153161df0f4' />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta debug = "just for pleasure">
  <title>TEDxTMN</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/tedxtmn.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
if (location.hostname == "tedx-tmn.ru") {
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter24263395 = new Ya.Metrika({id:24263395,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
}
</script>
<noscript><div><img src="//mc.yandex.ru/watch/24263395" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<header style = "border-top: solid 15px #EB392E;">
</header>
<div id = "logo" class="container">
<!--span class = "tedxred">TED</span>
<span class = "tedxred"></span>
<span class = "tedxx">X</span-->
<span class = "tedxred">TMN</span>
<span class = "tedxblack">Tyumen</span>
<p><span style = "color: #ff2b06; font-weight: bold;">x</span><span style = "font-weight: bold;">=independently organized TMN event</span></p>
</div>
  <div class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button id = "togglebutton" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--a class="navbar-brand" href="/">EZsp</a-->
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
        <?php
        foreach ($menuitem as $key => $item){
            $li = "<li";
            if ( $key == $currentmenuitem) {
                $li = $li.' class = "active"';
            }
            $li = $li.">";
            echo $li.$item."</li>";
        }
        ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
