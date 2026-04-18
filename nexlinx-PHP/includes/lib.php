<?php
	function sql_connect() 
	{
     global $db_host, $db_user, $db_pass, $db_name;
		 $SQLID = @mysql_connect($db_host, $db_user, $db_pass) or die ("Unable to connect to MySQL Server");
     @mysql_select_db($db_name, $SQLID) or die ("Unable to get database. Please reload in a minute");
     return $SQLID;
	}
	
	function sql_query($sql) 
	{
		$sql=str_replace("\'","'",str_replace("\\\'","''",$sql));
		//print $sql;
		
		$result = @mysql_query($sql);
		return $result;
	}
	function sql_query_staff($sql) 
	{
		$sql=str_replace("\'","''",$sql);
		//print $sql;
		
		$result = @mysql_query($sql);
		return $result;
	}
	function sql_exist($sql)
	{
    $result  = mysql_query($sql);
    $numrows = mysql_num_rows($result);
    if($numrows>0) { return true; }
	}
	
	function sql_total($sql)
	{
	  $result  = mysql_query($sql);
    $numrows = mysql_num_rows($result);
    return $numrows;
	}
	
	function sql_insert($sql)
	{
		$result = @mysql_query($sql);
		// or die ("Unable to process MySQL query");
		return mysql_insert_id();
	}
	
	function sql_data($sql) 
	{
		$result = @mysql_query($sql);
		 //or die ("Unable to process MySQL query");
		$data   = mysql_fetch_array($result);
		return $data;
	}
	function validate_phone($number)
	{
		$formats = array('###-###-####', '####-###-###',
				 '(###) ###-###', '####-####-####',
				 '##-###-####-####', '####-####', '###-###-###',
				 '#####-###-###', '##########');
		$format = trim(ereg_replace("[0-9]", "#", $number));
	
		return (in_array($format, $formats)) ? true : false;
	}
	function validateUSAZip($zip_code)
	{
	  if(preg_match("/^([0-9]{5})(-[0-9]{4})?$/i",$zip_code))
		return true;
	  else
		return false;
	}
	function check_email($email) {
        // First, we check that there's one @ symbol, and that the lengths are right
        if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
            // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
            return false;
        }
        // Split it into sections to make life easier
        $email_array = explode("@", $email);
        $local_array = explode(".", $email_array[0]);
        for ($i = 0; $i < sizeof($local_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
                return false;
            }
        }
        if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
            $domain_array = explode(".", $email_array[1]);
            if (sizeof($domain_array) < 2) {
                return false; // Not enough parts to domain
            }
            for ($i = 0; $i < sizeof($domain_array); $i++) {
                if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                    return false;
                }
            }
        }

        return true;
    }
	function convertDateYMD($cdateYMD)
	{
		$dateArray=explode("-",$cdateYMD);
		$year=$dateArray[0];
		$month=$dateArray[1];
		$day=$dateArray[2];
		
		if($year<2000 or strlen($year)!=4 or substr($year,2)=="19")
			$year="20".substr($year,-2);
			
		return "$month/$day/$year";
	}
	
	function convertDateMDY($cdateMDY)
	{
		$cdateMDY=trim($cdateMDY);
		$dateArray=explode("/",$cdateMDY);
		$year=$dateArray[2];
		$month=$dateArray[0];
		$day=$dateArray[1];
		
		if($year<2000 or strlen($year)!=4 or substr($year,2)=="19")
		{
			$year="20".substr($year,-2);
			
			$pageURL = 'http'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			$sql_systemLog="INSERT INTO `system_log` (`fmrID` ,`entryDate`,`browser` ,`invalid_date` ,`URL`)
			VALUES (".$_SESSION['UserID']." ,now(), '".$_SERVER["HTTP_USER_AGENT"]."', '$cdateMDY', '$pageURL')";
			//print $sql_systemLog;
			sql_query($sql_systemLog);
		}
		$newDate="$year-$month-$day";
		
		//$newDate="09-3-3";
		if(!preg_match('#^((20|20)?[0-9]{2}[- /.](0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01]))*$#', $newDate))
		{
			//print "not valid";
			$newDate=date("Y")."-".date("m")."-".date("d");
			$pageURL = 'http'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			$sql_systemLog="INSERT INTO `system_log` (`fmrID` ,`entryDate`,`browser` ,`invalid_date` ,`URL`)
			VALUES (".$_SESSION['UserID']." ,now(), '".$_SERVER["HTTP_USER_AGENT"]."', '$cdateMDY', '$pageURL')";
			//print $sql_systemLog;
			sql_query($sql_systemLog);
		}
		if (($month < 1 || $month > 12) or ($day < 1 || $day > 31))
		{
			$newDate=date("Y")."-".date("m")."-".date("d");
			$pageURL = 'http'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			$sql_systemLog="INSERT INTO `system_log` (`fmrID` ,`entryDate`,`browser` ,`invalid_date` ,`URL`)
			VALUES (".$_SESSION['UserID']." ,now(), '".$_SERVER["HTTP_USER_AGENT"]."', '$cdateMDY', '$pageURL')";
			//print $sql_systemLog;
			sql_query($sql_systemLog);
		}
		/*else
			print "valid";
			print $newDate;
			exit;*/
		return $newDate;
	
	}
	
	function cuttext($value, $length)
	{   
		if(is_array($value)) list($string, $match_to) = $value;
		else { $string = $value; $match_to = $value{0}; }
	
		$match_start = stristr($string, $match_to);
		$match_compute = strlen($string) - strlen($match_start);
	
		if (strlen($string) > $length)
		{
			if ($match_compute < ($length - strlen($match_to)))
			{
				$pre_string = substr($string, 0, $length);
				$pos_end = strrpos($pre_string, " ");
				if($pos_end === false) $string = $pre_string."...";
				else $string = substr($pre_string, 0, $pos_end)."...";
			}
			else if ($match_compute > (strlen($string) - ($length - strlen($match_to))))
			{
				$pre_string = substr($string, (strlen($string) - ($length - strlen($match_to))));
				$pos_start = strpos($pre_string, " ");
				$string = "...".substr($pre_string, $pos_start);
				if($pos_start === false) $string = "...".$pre_string;
				else $string = "...".substr($pre_string, $pos_start);
			}
			else
			{       
				$pre_string = substr($string, ($match_compute - round(($length / 3))), $length);
				$pos_start = strpos($pre_string, " "); $pos_end = strrpos($pre_string, " ");
				$string = "...".substr($pre_string, $pos_start, $pos_end)."...";
				if($pos_start === false && $pos_end === false) $string = "...".$pre_string."...";
				else $string = "...".substr($pre_string, $pos_start, $pos_end)."...";
			}
	
			$match_start = stristr($string, $match_to);
			$match_compute = strlen($string) - strlen($match_start);
		}
	   
		return $string;
	}
	function cleanASCII($str){
		return preg_replace('/[^(\x20-\x7F)]*/','', $str);
	}
?>