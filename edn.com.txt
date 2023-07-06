http_header(User-agent): Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0

body: //article

strip_id_or_class: jetpack-lazy-image
strip_id_or_class: sp-block

strip: //img[@alt='pdf']/parent::div
strip: //footer
strip: //nav

replace_string(<noscript): <div
replace_string(</noscript>): </div>

test_url: https://www.edn.com/bootstrapping-your-op-amp-yields-wide-voltage-swings/
