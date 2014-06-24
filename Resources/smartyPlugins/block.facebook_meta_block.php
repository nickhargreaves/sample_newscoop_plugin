function smarty_block_facebook_meta_block($params, $content, &$smarty, &$repeat) {
	if (!isset($content)) {
        	return '';
    	}
	$smarty->smarty->loadPlugin('smarty_shared_escape_special_chars');
    $context = $smarty->getTemplateVars('gimme');
	$html = '';
	if ($context->article->defined) {
		 $html .= '<meta property="og:title" content="'.$context->article->name.'" />'."\n";
		$html .= '<meta property="og:type" content="article" />'."\n";
		 $html .= '<meta property="og:url" content="http:/'.$context->publication->site. smarty_function_uri($params, $smarty) .'" />'."\n";
		$html .= '<meta property="og:site_name" content="'. $context->publication->name .'" />'."\n";
		$html .= '<meta property="og:description" content="'.strip_tags($context->article->deck).'" />'."\n";
			if ($context->article->image->imageurl) {
				$html .= '<meta property="og:image" content="'. $context->article->image->imageurl .'" />'."\n";
			 }  
	} else {
		$html .= '<meta property="og:site_name" content="'. $context->publication->name .'" />'."\n";
		 }
		return $html;
	}
