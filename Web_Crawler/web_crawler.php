<?php

$ws = new WebScrawler();
$url = "www.google.com";
$ws->PageFetch($url);
//$ws->PrintPage();
$data = $ws->ExtractLink();
//echo $data[0];
//echo $ws->GetContent($url);
$ws->Scrawler($url,3);
$ws->PrintUrlArray();
// foreach ($data as $result) {
	// echo $result;
	// echo "<br>";
// 
// // /// store each $result in database or create a new spider to spider next page
// // 
// }
class WebScrawler{
	var $ch;
	var $htmlContent;
	var $url;
	var $urlArray = array();
	var $topTen = array();
	var $maxPage = 100;
	
	function WebScrawler(){
		$this->htmlContent = "";
	}
	
	function PageFetch($url){
		$this ->url = $url;
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_URL, $this->url);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->ch, CURLOPT_HEADER, 0);
		$this->htmlContent = curl_exec($this->ch);
		curl_close($this->ch);
		if($this->htmlContent===false){
			return false;
		}
		else{
			return true;
		}
	}
	
	
	function ExtractLink()
	{
		/*#rex = '#<a.+?href="(.+?)".*?>(.+?)</a>#';*/
		$rex = "/([hH][rR][eE][Ff])\s*=\s*['\"]*([^>'\"\s]+)[\"'>]*\s*/i"; 
		preg_match_all($rex, $this->htmlContent, $dataArray);
		return $dataArray[2];
	}
	
	function PrintPage(){
		if($this->htmlContent===FALSE){
			echo "Error! Empty Page";
		}
		else{
			echo $this->htmlContent;
		}		
	}
	
	function Scrawler($seedUrl,$level){
		$parents = array();
		array_push($parents,$seedUrl);
		$this->urlArray [$seedUrl] = 1;
		
		$pageVisited = 0;
		
		while(count($parents)!=0 && $level != 0 && count($this->urlArray)<$this->maxPage){
			$buffer = array();
			
			foreach($parents as $parent){
				
				if($this->PageFetch($parent)){	
					$pageVisited++;
					if($pageVisited == $this->maxPage){
						return;
					}	
					$children = $this->ExtractLink();
					foreach($children as $child){ // Add a Check function to find if the links  work
						if(!isset($this->urlArray[$child])){
							$this->urlArray[$child] = 1;
							array_push($buffer,$child); 
						}
						else{
							$this->urlArray[$parent] ++;
						}
					}				
				}
									
			}
			$parents = $buffer;
			echo count($parents);
			unset($buffer);
			$level --;
		}		
	}
	
	
	function PrintUrlArray(){
		foreach($this->urlArray as $url => $num){
			echo count($this->urlArray);	
			echo $url;
			echo "<br>";
		}
	}
	// function GetContent($url){
		// return file_get_contents($url);
// 
	// }
};

?>