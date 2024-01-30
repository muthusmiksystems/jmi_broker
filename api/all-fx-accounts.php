<?php


include('common.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {

   


   
    $sql = "SELECT id,account_type,account_group,account_radio_type,account_id,password FROM fx_accounts where website_accounts_id= ? order by id desc";
    $accountStmt = $conn->prepare($sql);
    $accountStmt->bind_param("i",$websiteAccountId);
    $accountStmt->execute();
    $accountStmtResult = $accountStmt->get_result();
    $accounts= $accountStmtResult->fetch_all(MYSQLI_ASSOC);

    $i=0;
    foreach ($accounts as $account) {

       
        $ret = 'error';
        $accountId = $account['account_id'];
        $accountPassword = $account['password'];
        //---- open socket
        //$ptr=@fsockopen('92.204.139.189','443',$errno,$errstr,5);

        /*$ptr=fsockopen('89.116.30.28','443',$errno,$errstr,5);
        //---- check connection
           if($ptr)
             {
              //---- send request
            
              if(fputs($ptr,"WUSERINFO-login=$accountId|password=$accountPassword\nQUIT\n"))
                {
                 //---- clear default answer
                
                 $ret='';
                 //---- receive answer
                 while(!feof($ptr))
                  {
                   $line=fgets($ptr,128);
                   if($line=="end\r\n") break;
                   $ret.= $line;
                  }
                }

            }*/
        if ($ret == Null or $ret == 'error') {
            //---- open socket
            //$ptr=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
            $ptr = @fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
            //---- check connection
            if ($ptr) {
                //---- send request

                if (fputs($ptr, "WUSERINFO-login=$accountId|password=$accountPassword\nQUIT\n")) {
                    //---- clear default answer
                    $ret = '';
                    //---- receive answer

                    while (!feof($ptr)) {
                        $line = fgets($ptr, 128);
                        if ($line == "end\r\n")
                            break;
                        $ret .= $line;
                    }
                }

            }

        }

        


        //account history
        $startTime = mktime(0, 0, 0, 1, 1, date('Y') - 3);    //last 3 years
        $endTime = time();  // current time
        $ret3 = 'error';

        //$ptr2=@fsockopen('92.204.139.189','443',$errno,$errstr,5);
        /*$ptr2=fsockopen('89.116.30.28','443',$errno,$errstr,5);

          //---- check connection
             if($ptr2)
               {
                //---- send request
               
               if(fputs($ptr2,"WUSERHISTORY-login=$accountId|password=$accountPassword|from=$startTime|to=$endTime\nQUIT\n"))
                  {
                   //---- clear default answer
                   $ret3='';
                  
                   //---- receive answer
                   while(!feof($ptr2))
                    {
                     $line2=fgets($ptr2,128);
                     if($line2=="end\r\n") break;
                     $ret3.= $line2;
                    }
                  }
              }*/
        if ($ret3 == Null or $ret3 == 'error') {
            $ptr2 = fsockopen('92.204.139.189', '443', $errno, $errstr, 5);
            //$ptr2=@fsockopen('89.116.30.28','443',$errno,$errstr,5);
            //---- check connection
            if ($ptr2) {
                //---- send request

                if (fputs($ptr2, "WUSERHISTORY-login=$accountId|password=$accountPassword|from=$startTime|to=$endTime\nQUIT\n")) {
                    //---- clear default answer
                    $ret3 = '';

                    //---- receive answer
                    while (!feof($ptr2)) {
                        $line2 = fgets($ptr2, 128);
                        if ($line2 == "end\r\n")
                            break;
                        $ret3 .= $line2;
                    }
                }
            }
        }

        $fx_balance = get_string_between($ret, 'Balance:', 'Equity');
        $fx_equity = get_string_between($ret, 'Equity:', 'Margin');
        $fx_name = get_string_between($ret, $accountId, '202');

        $ret2 = $ret3;

        // array_push($balances, $fx_balance);
// array_push($equities, $fx_equity);
// array_push($names, $fx_name);
// array_push($account_history, $ret2);

        $accounts[$i]['balances'] = $fx_balance != null ? $fx_balance : '';
        $accounts[$i]['equities'] = $fx_equity != null ? $fx_equity : '';
        $accounts[$i]['names'] = $fx_name != null ? $fx_name : '';
     
      
        $i++;

        // $accounts[$i]['details'] = array(
        //     'balances' => $fx_balance != null ? $fx_balance : '',
        //     'equities' => $fx_equity != null ? $fx_equity : '',
        //     'names' => $fx_name != null ? $fx_name : '',
        //     'account_history' => $ret2 != null ? $ret2 : ''
        // );
        // $i++;

        unset($account['password']);

    }

    http_response_code(200);
    echo json_encode(array("status"=>"success","message" => GET_ALL_ACCOUNT_SUCCESS_MESSAGE,"data"=>$accounts));
    exit();
    

}
http_response_code(405);






?>