<?php

/**
 * BUtil short summary.
 *
 * BUtil description.
 *
 * @version 1.0
 * @author BARRUETA
 */
class BUtil
{
    public static function money_format($format, $number) 
    { 
        $regex  = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'. 
                  '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/'; 
        if (setlocale(LC_MONETARY, 0) == 'C') { 
            setlocale(LC_MONETARY, ''); 
        } 
        $locale = localeconv(); 
        preg_match_all($regex, $format, $matches, PREG_SET_ORDER); 
        foreach ($matches as $fmatch) { 
            $value = floatval($number); 
            $flags = array( 
                'fillchar'  => preg_match('/\=(.)/', $fmatch[1], $match) ? 
                               $match[1] : ' ', 
                'nogroup'   => preg_match('/\^/', $fmatch[1]) > 0, 
                'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ? 
                               $match[0] : '+', 
                'nosimbol'  => preg_match('/\!/', $fmatch[1]) > 0, 
                'isleft'    => preg_match('/\-/', $fmatch[1]) > 0 
            ); 
            $width      = trim($fmatch[2]) ? (int)$fmatch[2] : 0; 
            $left       = trim($fmatch[3]) ? (int)$fmatch[3] : 0; 
            $right      = trim($fmatch[4]) ? (int)$fmatch[4] : $locale['int_frac_digits']; 
            $conversion = $fmatch[5]; 

            $positive = true; 
            if ($value < 0) { 
                $positive = false; 
                $value  *= -1; 
            } 
            $letter = $positive ? 'p' : 'n'; 

            $prefix = $suffix = $cprefix = $csuffix = $signal = ''; 

            $signal = $positive ? $locale['positive_sign'] : $locale['negative_sign']; 
            switch (true) { 
                case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+': 
                    $prefix = $signal; 
                    break; 
                case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+': 
                    $suffix = $signal; 
                    break; 
                case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+': 
                    $cprefix = $signal; 
                    break; 
                case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+': 
                    $csuffix = $signal; 
                    break; 
                case $flags['usesignal'] == '(': 
                case $locale["{$letter}_sign_posn"] == 0: 
                    $prefix = '('; 
                    $suffix = ')'; 
                    break; 
            } 
            if (!$flags['nosimbol']) { 
                $currency = $cprefix . 
                            ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) . 
                            $csuffix; 
            } else { 
                $currency = ''; 
            } 
            $space  = $locale["{$letter}_sep_by_space"] ? ' ' : ''; 

            $value = number_format($value, $right, $locale['mon_decimal_point'], 
                     $flags['nogroup'] ? '' : $locale['mon_thousands_sep']); 
            $value = @explode($locale['mon_decimal_point'], $value); 

            $n = strlen($prefix) + strlen($currency) + strlen($value[0]); 
            if ($left > 0 && $left > $n) { 
                $value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0]; 
            } 
            $value = implode($locale['mon_decimal_point'], $value); 
            if ($locale["{$letter}_cs_precedes"]) { 
                $value = $prefix . $currency . $space . $value . $suffix; 
            } else { 
                $value = $prefix . $value . $space . $currency . $suffix; 
            } 
            if ($width > 0) { 
                $value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ? 
                         STR_PAD_RIGHT : STR_PAD_LEFT); 
            } 

            $format = str_replace($fmatch[0], $value, $format); 
        } 
        return $format; 
    } 
    public static function EnviarMail($destino, $asunto, $html, $text="",  $cc=""){
        
        
        $mail = new PHPMailer;

        $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->CharSet = 'UTF-8';
        //$mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'jcbarrueta@arcaba.com.mx';                 // SMTP username
        $mail->Password = 'jcbarrueta87';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;      
        // TCP port to connect to

        $mail->setFrom('jcbarrueta@arcaba.com.mx','noreply');

        if($cc === NULL) {

            $mail->addCC($cc);
        }

        $mail->addAddress($destino);  

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $asunto;
        $mail->Body    = $html;

        if($text === NULL) {

            $mail->AltBody = $text;
        }
        if(!$mail->send()) {
            
            throw new Exception($mail->ErrorInfo);

        } 
        return true;
    }

    public static function Encoding($string){
        
        return mb_convert_encoding($string, "UTF-8", mb_detect_encoding($string, "UTF-8, ISO-8859-1, ISO-8859-15", true));
    }

    public static function raw_json_encode($array) {
        
        array_walk_recursive($array, 
            function(&$string, $key) {
                if (is_string($string)) {

                    //$value= utf8_encode($value);
                    
                    $string=  mb_convert_encoding($string, "UTF-8", mb_detect_encoding($string, "UTF-8, ISO-8859-1, ISO-8859-15", true));

                    //$value = iconv('windows-1252', 'UTF-8', $value);
                }
        });

        return json_encode($array);

    }
    /**
     * On
     *
     * @param  DBObject	$db	objeto db
     * @return array
     */
    public static function ToObject($db, $index=-1){
        
        $lista= array();

        while($row = $db->next()) {
            
            array_push($lista ,json_decode(json_encode($row),true));
        }

        if($index>-1){
            
            return count($lista)>0? $lista[$index]: null;
        }

        return $lista;
    }

    public static function filterArray($input, $callback = null){
        
        $items=array();

        for($i=0; $i< count($input);$i++){
            
            if($callback!=null){

                $r= $callback((object)$input[$i], $input);

                if($r!=null){
                    $items[]= $r;
                }
            }
        }

        return $items;
    }

    public static function GroupBy($data,$keys, $index=0){

        $result= array();

        $keysItems= array();

        if(is_array ($keys)){
            
            $keysItems= $keys;

        }else{
            
            $keysItems= array($keys);
        }

        BUtil::_Grouping($data,$result,$keysItems,$index);

        return $result;

    }
    private static function _Grouping($data,&$result,$keys, $index=0){

        
        $key= $keys[$index];

        $n= count($data);

        $keyValues= array();

        $groupingValues= array();

        
        $j=0;

        for($i=0; $i < $n; $i++){
            
            $groupKey= $data[$i][$key];

            if (isset($keyValues[$groupKey])) {

                $groupingValues[$keyValues[$groupKey]]["d"][]= $data[$i];

                //array_push( $groupingValues[$j-1]["d"],$data[$i]);
            }
            else{

                $groupingValues[]= array("key"=>$key, "value"=> $groupKey, "d"=> [$data[$i]]);

                $keyValues[$groupKey]= $j;

                $j++;
            } 
        }

        $index++;

        for($i=0; $i< count($groupingValues); $i++){
            
            $result[$i]= array($groupingValues[$i]["key"]=> $groupingValues[$i]["value"]);

            if($index < count($keys)){
                
                $result[$i]["Items"]=[];

                BUtil::_Grouping($groupingValues[$i]["d"],  $result[$i]["Items"],$keys, $index);
            }else{
                
                $result[$i]["Items"]= $groupingValues[$i]["d"];
            }
        }
    }
}
