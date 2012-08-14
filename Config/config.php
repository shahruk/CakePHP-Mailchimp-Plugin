<?php
    //API Key - see http://admin.mailchimp.com/account/api
    $config['Mailchimp']['apikey'] = '';
    
    // A List Id to run examples against. use lists() to view all
    // Also, login to MC account, go to List, then List Tools, and look for the List ID entry
    $config['Mailchimp']['listId'] = '';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $config['Mailchimp']['campaignId'] = '';

    //some email addresses used in the examples:
    $config['Mailchimp']['my_email'] = 'INVALID@example.org';
    $config['Mailchimp']['boss_man_email'] = 'INVALID@example.com';

    //just used in xml-rpc examples
    $config['Mailchimp']['apiUrl'] = 'http://api.mailchimp.com/1.3/';
	
?>
