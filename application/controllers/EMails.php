<?php
class  EMails extends  CI_Controller
{

	public function  sendmail(){
		$this->load->library('email');

		$subject = 'Test';
		$message = "Test data";
		$message .= "<p><br><br><br><br><br/>Este es un correo automatizado de la aplicación <b>Moulding Tool App.</b></p>";

		$result = $this->email
			->from('jgomez@martechmedical.com')
			->reply_to('noreply@martechmedical.com')    // Optional, an account where a human being reads.
			//->to('jgomez@martechmedical.com')
			->to('jgomez@martechmedical.com')
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
