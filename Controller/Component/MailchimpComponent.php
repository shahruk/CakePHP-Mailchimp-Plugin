<?php
/** 
 * Mailchimp Component
 * This will let me subscribe, unsubscribe, and manage other email newsletter functions easily.
 * #author      Shahruk Khan
 * #date        08/09/12
 */
 
App::import('Vendor', 'Mailchimp.MCAPI');
class MailchimpComponent extends Component {

	
	public function initialize($controller, $settings = NULL) {
		if ($controller->request->is('ajax')) {
			Configure::write('debug', 0);

			// Must disable security component for AJAX
			if (isset($controller->Security)) {
				$controller->Security->validatePost = false;
			}

			// If not from this domain, destroy
			if (($this->allowRemote === false) && (strpos(env('HTTP_REFERER'), trim(env('HTTP_HOST'), '/')) === false)) {
				if (isset($controller->Security)) {
					$controller->Security->blackHole($controller, 'Invalid referrer detected for this request.');
				} else {
					$controller->redirect(null, 403, true);
				}
			}
		}

		$this->controller = $controller;
		Configure::load('Mailchimp.config');
		$this->api = new MCAPI(Configure::read('Mailchimp.apikey'));
		if($settings['listId'] == NULL)
		{
			$this->listId = Configure::read('Mailchimp.listId');
		}	
		else
			$this->listId = $settings['listId'];

	}

	public function startup($controller) {
		$this->controller = $controller;
	}

	public function listSubscribe($email=NULL, $name=NULL){

		$merge_vars = array('FNAME'=>$name);

		$retval = $this->api->listSubscribe( $this->listId, $email, $merge_vars, NULL, false );
		if ($this->api->errorCode){
			return false;
		} else {
			return true;
		}

	}


}
