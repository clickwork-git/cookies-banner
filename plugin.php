<?php

class pluginCookiesBanner extends Plugin {

	public function init() {
		$this->dbFields = array(
			'text'=>'',
			'code'=>''
		);
	}

	public function form() {
		global $L;

		$html = '<div>';
		$html .= '<label>'.$L->get('Text').'</label>';
		$html .= '<textarea name="text" id="jstext">'.$this->getValue('text').'</textarea>';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>'.$L->get('Code').'</label>';
		$html .= '<textarea name="code" id="jscode">'.$this->getValue('code').'</textarea>';
		$html .= '</div>';

		return $html;
	}

	public function siteBodyBegin(){
		global $L;

		$text = $this->getValue('text');
		$text = htmlspecialchars_decode($text);

		$html = '<link rel="stylesheet" href="'.HTML_PATH_PLUGINS.'cookies-banner/css/cookies-eu-banner.default.css">'.PHP_EOL;
		$html .= '<div id="cookies-eu-banner" style="display: none;">'.PHP_EOL;
		$html .= nl2br($text).PHP_EOL;
		$html .= '<button id="cookies-eu-reject">'.$L->get('Reject').'</button>'.PHP_EOL;
		$html .= '<button id="cookies-eu-accept">'.$L->get('Accept').'</button>'.PHP_EOL;
		$html .= '</div>'.PHP_EOL;

		return $html;

	}

	public function siteBodyEnd(){

		$code = $this->getValue('code');
		$code = htmlspecialchars_decode($code);

		$html = '<script src="'.HTML_PATH_PLUGINS.'cookies-banner/js/cookies-eu-banner.js"></script>'.PHP_EOL;
		$html .= '<script>'.PHP_EOL;
		$html .= 'new CookiesEuBanner(function () {'.PHP_EOL;
		$html .= $code;
		$html .= '}, true);'.PHP_EOL;
		$html .= '</script>'.PHP_EOL;

		return $html;

	}
}
