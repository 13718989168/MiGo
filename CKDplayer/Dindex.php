<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>M3U8视频解析P2P版</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="Dplayer/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="Dplayer/player.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="Dplayer/player.css" />
</head>
<body>
    <script type="text/javascript"> var play = {"auto":true,"live":false,"trys":"0","seek":"0","take":vfed.cookie.put("<?php echo($_REQUEST['url']);?>"),"urls":"<?php echo($_REQUEST['url']);?>","jump":"","logo":"","pics":"Dplayer/loading.gif"};</script>
    <div id="video" style="width:100%;height:100%"></div><div class="play"></div><div class="total"><span class="peer"></span><span class="load"></span><span class="line"></span></div>
    <link rel="stylesheet" type="text/css" href="Dplayer/dplayer.css" />
    <script src="Dplayer/p2p.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="Dplayer/hls.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="Dplayer/dplayer.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">vfed.player.eplayer(play.auto, play.live, play.trys, play.seek, play.take, play.urls, play.jump, play.logo, play.pics);</script>
    <span style="display: none;"></span>
<!-- <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?eed641a0f69e62b88baa55eff3bc60e8";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script> -->
</body>
</html>