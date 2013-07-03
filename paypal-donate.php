/*两个左右并排容器，左侧可放置微信二维码，右侧可放置捐赠按钮.
paypal代码为_xclick属性解决中文用户无法成功捐赠困扰，代码可放心使用，若要使用中文图标将图片地址中en_US替换成zh_XC即可。
*/
<div style="margin:auto; overflow:hidden;">
	<div style="float:left;">
<a href="http://www.keege.com/archives/1148.html" title="必须生猛-微信订阅"><img src="http://pic.yupoo.com/joojen/CLKNHs9P/iG2UW.jpg" alt="必须生猛-微信订阅" width="125" height="125" border="0" /></a>
	</div>

	<div style="float:left;">
<a href="http://me.alipay.com/***"><img alt="" src="https://img.alipay.com/sys/personalprod/style/mc/btn-index.png" /></a>
<br><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="***@163.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="www.keege.com donate">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal——最安全便捷的在线支付方式！">
<img alt="" border="0" src="https://www.paypalobjects.com/zh_XC/i/scr/pixel.gif" width="1" height="1">
</form>
	</div>
</div>