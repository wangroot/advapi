<?php

class MDConfigController extends RESTController{
	public function preupload() {
		Qiniu_SetKeys(QINIU_ACCESS_KEY, QINIU_SECRET_KEY);
		$putPolicy = new Qiniu_RS_PutPolicy(QINIU_PREUPLOAD_BUKECT);
		$upToken = $putPolicy->Token(null);
		$data = "<preupload>";
		$data .= "<timestamp>".time()."</timestamp>";
		$data .= "<uptoken>".$upToken."</uptoken>";
		$data .= "</preupload>";
		$this->outputXml($data);
	}
}