<div id="main_footer" data="161">
	<div class="block_btn_bottom_box box_width_common margin_bottom_0">
		<div class="divbutton txtcenter">
			<b><a class="txt_1_1em txt_link backtop" rel="external">Về đầu trang
				<img class="img-smallicon" src="images/icons/top-arrow.png"></a> </b>
		</div>
		<!-- trở về đầu trang -->
		<script>
		  $(".backtop").click(function(){
		    $("html, body").animate({
		      scrollTop : 0
		    },700)
		  })
		</script>
	</div>
  	<div class="txt_coppyright box_width_common common_space"> Copyright © 2022-2032 Hoàng.</div>

</div>

<script>
$('#filter').click(function() {
	$('#sort').toggle('slow');
});
$('#onoffdiv').click(function() {
	$('#bottom-menu').toggle('slow');
});
$('#docincol').click(function() {
	$('#bottom-menu1').toggle('slow');
});
$('#onoffdivsearch').click(function() {

	$('#search').toggle('slow');
});

var page    = 1;
var strType = 'groupdoc';
var vt      = '';
var cate    = '0';
var subcate = '0';
function getdata()
{
	page++;
	$.ajax({
		type: "POST",
		url: DOMAIN + "index/getdata",
		data: {page:page,strType:strType,vt:vt,cate:cate,subcate:subcate},
		success: function(data)
		{
			$('#arrData').append(data);
		}
	});

}
function getdatacatemobile()
{
	page++;
	$.ajax({
		type: "POST",
		url: DOMAIN + "index/getdatacatemobile",
		data: {page:page,cate:cate},
		success: function(data)
		{
			$('#arrData').append(data);
		}
	});

}
function getdatasearch(keyword)
{
	page++;
	$.ajax({
		type: "POST",
		url: DOMAIN + "index/getdatasearch",
		data: {page:page,keyword:keyword},
		success: function(data)
		{
			$('#arrData').append(data);
		}
	});

}
function SearchMobile(txtKeyword)
{
	var strKey = document.getElementById(txtKeyword).value;
	var strURL = DOMAIN + "tim-kiem/tai-lieu/" + $.trim(strKey.replace("tag:","")) + ".html";
	window.location.href = strURL;
}

function showmore(val)
{
	if(val==1)
	{
		$('#more_desc').css("display","block");
		$('#hide1').css("display","inline");
		$('#show1').css("display","none");
	}
	else
	{
		$('#more_desc').css("display","none");
		$('#show1').css("display","inline");
		$('#hide1').css("display","none");
	}
}

</script>


<!-- <script defer src="//d4.hadarone.com/ads-sync.js?placement=1470"></script> --><!-- <div data="debug arrBanner" style="display:none;">popupslide2=2Array -->

<div class="clear"></div>




</body>
</html>
