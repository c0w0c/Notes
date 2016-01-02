<!-- modal按鈕 -->
<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-2x fa-share-alt"> 分享文章</i></button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-3x fa-times"></i></span></button>
        <h1 class="modal-title text-center" id="myModalLabel">分享文章</h1>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<!-- FB -->
      		<div class="col-md-12 col-xs-12" style="margin: 10px 0px 10px 0px;">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-like" data-href="<?=current_url();?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
					</div>
					<!-- ./FB -->
					<!-- google -->
					<div class="col-md-2 col-xs-3" style="margin: 10px 0px 10px 0px;">
						<!-- 在您要顯示「+1 按鈕」的位置放上這個標記。 -->
						<span class="g-plusone" data-href="<?=current_url();?>"></span>
					</div>
					<div class="col-md-10 col-xs-9" style="margin: 10px 0px 10px 0px;">
						<!-- 在您要顯示「分享按鈕」的位置放上這個標記。 -->
						<span class="g-plus" data-action="share"  data-height="24" data-href="<?=current_url();?>"></span>
						<!-- 在最後一個「分享」標記之後放置這個標記。 -->
						<script type="text/javascript">window.___gcfg = {lang: 'zh-TW'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/platform.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script>
					</div>
					<!-- ./google -->
					<!-- twitter -->
					<div class="col-md-2 col-xs-3" style="margin: 10px 0px 10px 0px;">
						<a href="https://twitter.com/share" class="twitter-share-button"{count} data-url="<?=current_url();?>" data-text="<?='shrhe筆記-'.str_replace("|","",$note_data[0]->note_title); ?>" data-lang="zh-tw" data-size="large" data-dnt="true">分享文章</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
					<!-- ./twitter -->
					<!-- LINE -->
					<div class="col-md-3 col-xs-3" style="margin: 10px 0px 10px 0px;">
						<span><script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script>
						<script type="text/javascript">
						new media_line_me.LineButton({"pc":false,"lang":"zh-hant","type":"c","text":"<?='shrhe筆記-'.str_replace("|","",$note_data[0]->note_title); ?>","withUrl":true});
						</script>
						</span>
					</div>
					<!-- ./LINE -->
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" data-dismiss="modal">完成</button>
      </div>
    </div>
  </div>
</div>