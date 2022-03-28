<?php

// Das Plugin öffnet in den Einstellungen vier Slots zur Eingabe von Affiliate oder
// CTA-Links. Sie können Titel, Beschreibung, Bild, Link und einen Button-Text
// vergeben. Stellen Sie zudem den Zufallsgenerator auf korrekte Werte, zum Beispiel
// 1...4 ein, damit dieser vier zufällige Banner beim Hook pageBegin() anzeigt.

class pluginAffiliate extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'start'             => '',
			'end'               => '',

			'cta-title-1'       => '',
			'cta-description-1' => '',
			'cta-picture-1'     => '',
			'cta-link-1'        => '',
			'cta-button-1'      => '',

			'cta-title-2'       => '',
			'cta-description-2' => '',
			'cta-picture-2'     => '',
			'cta-link-2'        => '',
			'cta-button-2'      => '',

			'cta-title-3'       => '',
			'cta-description-3' => '',
			'cta-picture-3'     => '',
			'cta-link-3'        => '',
			'cta-button-3'      => '',

			'cta-title-4'       => '',
			'cta-description-4' => '',
			'cta-picture-4'     => '',
			'cta-link-4'        => '',
			'cta-button-4'      => '',

			'btncolor'          => ''
		);
	}

	public function form()
	{
		global $L;

		$html  = '<div class="alert alert-primary" role="alert">';
		$html .= $this->description();
		$html .= '</div>';

		$html .= '<p class="lead mt-4">CTA, Affiliate 1</p>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-titel').'" name="cta-title-1" id="jscta-title-1" value="'.$this->getValue('cta-title-1').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<textarea placeholder="'.$L->get('placeholder-beschreibung').'" name="cta-description-1" id="jscta-description-1" rows="3">'.$this->getValue('cta-description-1').'</textarea>';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-bild').'" name="cta-picture-1" id="jscta-picture-1" value="'.$this->getValue('cta-picture-1').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-link').'" name="cta-link-1" id="jscta-link-1" value="'.$this->getValue('cta-link-1').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-button').'" name="cta-button-1" id="jscta-button-1" value="'.$this->getValue('cta-button-1').'" class="w-100">';
		$html .= '</div>';

		$html .= '<p class="lead mt-4">CTA, Affiliate 2</p>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-titel').'" name="cta-title-2" id="jscta-title-2" value="'.$this->getValue('cta-title-2').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<textarea placeholder="'.$L->get('placeholder-beschreibung').'" name="cta-description-2" id="jscta-description-2" rows="3">'.$this->getValue('cta-description-2').'</textarea>';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-bild').'" name="cta-picture-2" id="jscta-picture-2" value="'.$this->getValue('cta-picture-2').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-link').'" name="cta-link-2" id="jscta-link-2" value="'.$this->getValue('cta-link-2').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-button').'" name="cta-button-2" id="jscta-button-2" value="'.$this->getValue('cta-button-2').'" class="w-100">';
		$html .= '</div>';

		$html .= '<p class="lead mt-4">CTA, Affiliate 3</p>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-titel').'" name="cta-title-3" id="jscta-title-3" value="'.$this->getValue('cta-title-3').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<textarea placeholder="'.$L->get('placeholder-beschreibung').'" name="cta-description-3" id="jscta-description-3" rows="3">'.$this->getValue('cta-description-3').'</textarea>';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-bild').'" name="cta-picture-3" id="jscta-picture-3" value="'.$this->getValue('cta-picture-3').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-link').'" name="cta-link-3" id="jscta-link-3" value="'.$this->getValue('cta-link-3').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-button').'" name="cta-button-3" id="jscta-button-3" value="'.$this->getValue('cta-button-3').'" class="w-100">';
		$html .= '</div>';

		$html .= '<p class="lead mt-4">CTA, Affiliate 4</p>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-titel').'" name="cta-title-4" id="jscta-title-4" value="'.$this->getValue('cta-title-4').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<textarea placeholder="'.$L->get('placeholder-beschreibung').'" name="cta-description-4" id="jscta-description-4" rows="3">'.$this->getValue('cta-description-4').'</textarea>';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-bild').'" name="cta-picture-4" id="jscta-picture-4" value="'.$this->getValue('cta-picture-4').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-link').'" name="cta-link-4" id="jscta-link-4" value="'.$this->getValue('cta-link-4').'" class="w-100">';
		$html .= '</div>';
		$html .= '<div class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-button').'" name="cta-button-4" id="jscta-button-4" value="'.$this->getValue('cta-button-4').'" class="w-100">';
		$html .= '</div>';

		$html .= '<p class="lead mt-4">Start und Endpunkt des Zufallsgenerators</p>';
		$html .= '<div>';
		$html .= '<input placeholder="'.$L->get('placeholder-start').'" size="1" name="start" id="jsstart" value="'.$this->getValue('start').'" class="m-1">';
		$html .= '<input placeholder="'.$L->get('placeholder-end').'" size="1" name="end" id="jsend" value="'.$this->getValue('end').'" class="m-1">';
		$html .= '<span class="tip">'.$L->get('tipp-range').'</span>';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label class="lead">Color</label>';
		$html .= '<input name="btncolor" id="jsbtncolor" value="'.$this->getValue('btncolor').'">';
		$html .= '<span class="tip">'.$L->get('tipp').'</span>';
		$html .= '</div><br><br>';

		return $html;
	}

	public function pageBegin()
	{
		global $L;

		//$rnd = rand($L->get('start'), $L->get('end'));
		$rnd = rand($this->getValue('start'), $this->getValue('end'));
      
		$html .= '<div class="row">';
		$html .= 	'<div class="col-sm-2 mb-3">';
		$html .= 		'<img src="'.$this->getValue('cta-picture-'.$rnd).'" class="img-fluid blurin" alt="'.$this->getValue('cta-title-'.$rnd).'" title="'.$this->getValue('cta-title-'.$rnd).'" />';
		$html .= 	'</div>';
		$html .= 	'<div class="col-sm">';
		$html .= 		'<p><strong>'.$this->getValue('cta-title-'.$rnd).'</strong> - '.html_entity_decode($this->getValue('cta-description-'.$rnd)).'</p>';
		$html .= 		'<a href="'.$this->getValue('cta-link-'.$rnd).'" class="move btn text-light '.$this->getValue('btncolor').'" title="'.$this->getValue('cta-title-'.$rnd).'">'.$this->getValue('cta-button-'.$rnd).'</a>';
		$html .= 	'</div>';
		$html .= '</div>';
		
		return $html;
	}
}