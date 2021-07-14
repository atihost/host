<?php
class Sender extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

    // ENVIO DE E-MAIL UTILIZANDO A API DO ELASTICEMAIL
    /* ENVIO DE E-MAIL UTILIZANDO A API DO ELASTICEMAIL

    public function enviaEmail()
    {
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $msg = "";
        $msg .= '<h3>' . $assunto .'</h3>';
        $msg .= '<p><b>Nome:</b> ' . $_POST['nome'] . '<br>';
        $msg .= '<b>Email:</b> ' . $_POST['email'] . '<br>';
        $msg .= '<b>Mensagem:</b> ' . $_POST['mensagem'] . '<br>';
        $msg .= '<b>Data:</b> ' . date('d/m/Y H:s') . '</p><br>';

//        API elasticemail
        $url = 'https://api.elasticemail.com/v2/email/send';
        try{
            $post = array('from' => 'orlando.eal_@hotmail.com',
                'fromName' => 'Orlando Almeida Desenvolvedor PHP',
                'apikey' => '17827481-74cd-4974-9c2b-348d35056b6d',
                'charset' => 'utf-8',
                'sender' => 'orlando.eal_@hotmail.com',
                'senderName' => 'Orlando Almeida Desenvolvedor PHP',
                'replyTo' => "$email",
                'subject' => "Contato do site Orlando Almeida - $assunto",
                'to' => "orlando.ealmeida@gmail.com;$email",
                'bodyHtml' => "$msg",
                'isTransactional' => false);

            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $post,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_SSL_VERIFYPEER => false
            ));

            $result=curl_exec ($ch);
            curl_close ($ch);

            echo $result;
        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
        $this->session->set_flashdata('email', TRUE);
        redirect('');
    }

    */

    public function enviaEmail()
    {
        $this->load->model('Smtp_model');
        $smtp = $this->Smtp_model->get_all();

        //Configurações do email
        $config['protocol'] = 'mail';
        $config['smtp_host'] = $smtp['smtp_host'];
        $config['smtp_user'] = $smtp['smtp_email'];
        $config['smtp_pass'] = $smtp['smtp_senha'];
        $config['charset'] = 'utf-8';
        $config['validate'] = TRUE;
        $config['mailtype'] = 'html';
        $config['newline'] = '\r\n';
        $config['smtp_port'] = $smtp['smtp_porta'];
        $this->email->initialize($config);

        $this->email->from($smtp['smtp_email'], $smtp['smtp_nome']);
        $this->email->to($smtp['smtp_email']);
        $this->email->reply_to($_POST['email']);
        $this->email->bcc($smtp['smtp_copia_oculta']);
        //$this->email->bcc($smtp['smtp_email']); // opcional
        $this->email->subject('Contato do site' . $smtp['smtp_nome']);

        $msg = "";
        $msg .= 'Nome: ' . $_POST['nome'] . '<br>';
        $msg .= 'Email: ' . $_POST['email'] . '<br>';
        $msg .= 'Telefone: ' . $_POST['telefone'] . '<br>';
//        $msg .= 'Assunto: ' . $_POST['assunto'] . '<br>';
        $msg .= 'Mensagem: ' . $_POST['mensagem'] . '<br>';
        $msg .= 'Data: ' . date('d/m/Y H:i') . '<br>';

        $this->email->message($msg);

        if ( ! $this->email->send() ) {
            echo '0';exit;
        }else{
            echo '1';exit;
        }
        //$this->session->set_flashdata('email', TRUE);
        //redirect('');
    }
}