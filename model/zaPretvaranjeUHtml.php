function nl2p($str) {
    $arr=explode("\n",$str);
    $out='';

    for($i=0;$i<count($arr);$i++) {
        if(strlen(trim($arr[$i]))>0)
            $out.='<p>'.trim($arr[$i]).'</p>';
    }
    return $out;
}