<?php
return array(
    // set your paypal credential
    'client_id' => 'AR3zjM_1Cn0GZDoCTsU8sN2wShGkmZPmQHmh_csHfyAXXjNSt08dfauVA0u7_rSo3Cyr7jZnVLWPTVey',
    'secret' => 'ENTcE7JU-cpcHW7bkwoOfji6hCl3pSeorwjemziu3DwpiZBpjXU3QP-pU3dzb5-vhZKhJ-KA_Zsih-i-',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    )
);
