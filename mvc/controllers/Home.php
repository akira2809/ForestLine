<?php
class Home extends Controller
{
    public function index()
    {
        // Mailer::send('huynvps39718@gmail.com', 'test mail', 'This is the HTML message body <b>in bold!</b>');

        $this->view('layout/layout_client');
    }
}
