<?php

function smarty_function_file($params, $template) {
	$s = $template->smarty;
	$form = $s->viewHelper('file', 'form');
	$s->fixHtmlAttributes($params);
	
	$name = $s->fetchVar($params, 'name', 'fieldName');
	
	return $form->file($name, $params);
}

