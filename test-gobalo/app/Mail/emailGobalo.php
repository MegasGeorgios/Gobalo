<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class emailGobalo extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $descripcion;
    public $pathToFile;

    public function __construct($nombre, $descripcion, $pathToFile)
    {
        $this->nombre= $nombre;
        $this->descripcion= $descripcion;
        $this->pathToFile= $pathToFile;
    }

    public function build()
    {
        return $this->subject('Prueba backender PHP góbalo')->view('email.email');
    }
}
