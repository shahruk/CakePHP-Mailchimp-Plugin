CakePHP-Mailchimp-Plugin
========================

 CakePHP Mailchimp Plugin to use the API in a CakePHP way.

<b>Getting Started</b>


1) Open your file bootstrap.php
2) Add the following: 

CakePlugin::load('Mailchimp', array('bootstrap' => array('config')));

3) Load the component in the Controller. When initializing, specify which list you are subscribing someone to. EG:

$this->Mailchimp->initialize($this, array('listId' => 1));

4) Fill out the settings in the Config folder located inside Plugin/Mailchimp 

Use as follows:

$this->Mailchimp->listSubscribe(EMAIL, FIRSTNAME);


5) lots of functions not available yet. You are free to write from the Mailchimp API and import them to the Component - it is VERY easy to do so!