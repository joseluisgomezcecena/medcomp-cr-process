<?php
class  EMails extends  CI_Controller
{

	public function  sendmail(){
		$this->load->library('email');

		$subject = 'Test';
		$message = "Test data...<br>Please confirm if you received this email.";
		$message .= "<p><br><br><br><br><br/>This is an automated test from <b>Change Request Application.</b></p>";

		$result = $this->email
			->from('jgomez@martechmedical.com')
			->reply_to('noreply@martechmedical.com')    // Optional, an account where a human being reads.
			//->to('jgomez@martechmedical.com')
			->to('jgomez@martechmedical.com,dcheng@medcompnet.com,dwitt@medcompnet.com')
			->subject($subject)
			->message($message)
			->send();

		var_dump($result);
		//echo '<br />';
		//echo $this->email->print_debugger();
		//exit;
		//email test end
	}
}
