<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="zh"><![endif]-->
<!--[if gt IE 7]><!-->
<html lang="zh">
<!--<![endif]-->
<head>
    <!--  <base href="<%=basePath%>"> -->
    <title>熊出没啦</title>
    <meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="xiongchumo,timeline">
	<meta http-equiv="description" content="个人主页">
	
	<link rel="shortcut icon" href="images/favicon-1.ico" type="image/x-icon" />
	
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/comm.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/zoomimage.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/custom.css" />
	
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/zoomimage.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/control.js"></script>
	
</head>
<body>
 <div class="content">
  <div class="wrapper">
    <div class="light"><i></i></div>
    <hr class="line-top">
	<hr class="line-bottom">
    <div class="main">	
    <h1 class="title" id="ourTime">用美物消磨时间,time line</h1>

      
   <?php 
	require_once "class/BizUtils.php";
	$util=new BizUtils();
	$years = $util->getYears();
	for($i=0;$i<count($years);$i++){
		?>
		<div class="year">
		<h2 class="year_"><a href="#"><?php echo $years[$i].'年'; ?><i></i></a></h2>
		<div class="list">
		<ul>
		
		<?php 
			$arrTimeRec = $util->getTimeRecs('0',$years[$i]);
			for($j=0;$j<count($arrTimeRec);$j++){
				$timeRec = $arrTimeRec[$j];
				if(strlen($timeRec->getTitle())%2==0){
				?>
				<li class="cls highlight">
				<?php 
				}else{
				?>
				<li class="cls">
				<?php
				}
				?>
			
				<p class="date">
				<?php echo $timeRec->getDate(); ?><br/>
				<span class="silverstyle"><?php echo $timeRec->getAddress(); ?></sapn><br/>
				<span class="silverstyle"><?php echo $timeRec->getAuthor(); ?></sapn>
				</p>
				<p class="intro">
					<?php echo $timeRec->getTitle(); ?>
					<div class="more" style="font-size: 12px;">
						<div><?php echo $timeRec->getContent(); ?></div>
						<?php 
							if(count($timeRec->getImages()) >0){
						?>
							<div>
							<?php 
								$images = $timeRec->getImages();
								foreach ($images as $img){
									$image = 'files/'.$img->getName();
									if(!file_exists($image))
										continue;
							?>
								<?php echo $img->getName(); ?><a href="files/<?php echo $img->getName(); ?>" title="<?php echo $timeRec->getTitle(); ?>" class="customGal"><img src="files/<?php echo $img->getName(); ?>" width="60" height="60"  alt="<?php echo $timeRec->getTitle(); ?>" /></a>
							<?php	
							}
							?>
							</div>
						<?php		
							}
						?>
					</div>
				</p>
				</li>
		<?php	
			}
		?>
		</ul>
		</div>
		</div>
	<?php
	}
	$util->closeDbCon();
	?>
    </div>
    
  </div>
    <div align="center" style="padding-top:10px;"> Power by 魏观武 </div>
  </div>
</div>

<div id="elevator_item">
        <a id="elevator" onclick="return false;" title="回到顶部"></a>
        <a class="qr"></a>
  	<div class="qr-popup">
    	<a class="code-link"><img class="code" width="150" height="150" src="images/wx.png"/></a>
        <span>扫码加微信</span>
    <div class="arr"></div>
	</div>
</div>

<script>
	$(".main .year .list").each(function (e, target) {
	    var $target=  $(target),
	        $ul = $target.find("ul");
	    $target.height($ul.outerHeight()), $ul.css("position", "absolute");
	}); 
	$(".main .year>h2>a").click(function (e) {
	    e.preventDefault();
	    $(this).parents(".year").toggleClass("close");
	});
	</script>
	
</body>
</html>