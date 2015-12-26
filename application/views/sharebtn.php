<!-- FB share -->
<div class="col-md-3 col-xs-3 text-center" style="margin: 10px 0px 10px 0px;">
    <a href="http://www.facebook.com/sharer.php?u=<?=current_url();?>" target="_blank"><img src="assets/img/btn/sharefb.png" alt="分享於FB" title="分享於FB"></a>
</div>
<!-- google share -->
<div class="col-md-3 col-xs-3 text-center" style="margin: 10px 0px 10px 0px;">
    <a href="https://plus.google.com/share?url=<?=current_url();?>" target="_blank"><img src="assets/img/btn/sharegoogle.png" alt="分享於google" title="分享於google"></a>
</div>
<!-- twitter share -->
<div class="col-md-3 col-xs-3 text-center" style="margin: 10px 0px 10px 0px;">
    <a href="http://twitter.com/home/?status=<?=str_replace("|","",$note_data[0]->note_title); ?> <?=current_url();?>" target="_blank"><img src="assets/img/btn/sharetwitter.png" alt="分享於twitter" title="分享於twitter"></a>
</div>
<!-- LINE share -->
<div class="col-md-3 col-xs-3 text-center" style="margin: 10px 0px 10px 0px;">
    <a href="http://line.naver.jp/R/msg/text/?<?='shrhe筆記-'.str_replace("|","",$note_data[0]->note_title).'%0D%0A'.current_url();?>" target="_blank"><img src="assets/img/btn/shareline.png" alt="分享於line" title="分享於line" /></a>
</div>