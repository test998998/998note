<?php
set_time_limit(0);
$list=file($argv[1]);
$aa=count($list);

for ($i=0; $i < $aa; $i++) { 
	preg_match_all('#//([\s\S]*?)/#', $list[$i] , $niu );
	$newlist[]=$niu[1][0];
}
$newslist=array_unique($newlist);
foreach ($newslist as $k => $v ) {
	echo $list[$k]."<br/>";
	$news.=$list[$k];
}
 filew('s2ok.txt',$news);
function filew($filename,$filecode)
{
    $handle = @fopen($filename,'w');
    $key = @fwrite($handle,$filecode);
    @fclose($handle);
    return $key ? true : false;
}
?>