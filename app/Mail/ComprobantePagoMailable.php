<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Transbank;
use DateTime;

class ComprobantePagoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $qr;
    public $uud;

    public $cantidad;

    public $nombre;
    public $id;
    public $email;
    public $direccion;
    public $region;
    public $ciudad;
    public $telefono;
    public $codigo_postal;
    public $fecha_db;

    public $fecha;
    public $hora;
    public $tipo_tarjeta;
    public $n_tarjeta;
    public $cuotas;
    /**
     * Create a new message instance.
     */
    public function __construct($qr, $uud)
    {
        $this->qr = $qr;
        $this->uud = $uud;

        $data = $this->get_datat();

        $this->nombre = $data->first()->nombre;
        $this->id = $data->first()->id;
        $this->email = $data->first()->email;
        $this->direccion = $data->first()->direccion;
        $this->region = $data->first()->region;
        $this->ciudad = $data->first()->ciudad;
        $this->telefono = $data->first()->telefono;
        $this->codigo_postal = $data->first()->codigo_postal;
        $this->fecha_db = $data->first()->fecha;

        $fecha_data = DateTime::createFromFormat('Y-m-d H:i:s', $this->fecha_db);
        $this->fecha = $fecha_data->format('d/m/Y');

        $this->hora = $fecha_data->format('H:i');

        $this->tipo_tarjeta = $data->first()->tipo_tarjeta;

        $this->n_tarjeta = $data->first()->n_tarjeta;

        $this->cuotas = $data->first()->cuotas;

        $this->cantidad = 1;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Comprobante Pago',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.comprobante-pago',
            // view: 'mail.demo-email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


    function get_datat()
    {
        $data = Transbank::select("transbank.id","transbank.uuid", "transbank.fecha","dc.nombre", "dc.email", "dc.direccion",
                            "dc.ciudad", "dc.telefono", "dc.region", "dc.codigo_postal", "tt.name AS tipo_tarjeta",
                            "transbank.cardNumber AS n_tarjeta", "transbank.installmentsNumber AS cuotas",
                            "transbank.installmentsAmount AS val_cuotas")
                            ->join("detalle_compra AS dc", "dc.id_tbk", "transbank.id_detalle_compra")
                            ->join("tipo_tarjeta AS tt", "tt.cod","transbank.paymentTypeCode")
                            ->where("transbank.uuid", $this->uud)
                            ->get();
        return $data;
    }

}
