<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarEmailCadastro extends Mailable
{
    use Queueable, SerializesModels;

    private $informacoes;

    public function __construct($informacoes)
    {
        $this->informacoes = $informacoes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'))
        ->subject('Novo cadastro efetuado')
        ->markdown('email-cadastro')
        ->with(['informacoes' => $this->informacoes]);
    }
}
