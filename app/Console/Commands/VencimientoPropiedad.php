<?php

namespace App\Console\Commands;

use App\Mail\VencionPropiedad;
use Illuminate\Console\Command;
use DB;
use Mail;

class VencimientoPropiedad extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:vencimientoPropiedad';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cronb para avisar del vencimiento de la propiedad';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fecha_actual = date("Y-m-d");
        $fechaHasta = date("Y-m-d",strtotime($fecha_actual."+ 2 days"));
        $propiedades = DB::select('
            SELECT a.*, c.email, b.fecha_hasta FROM propiedades a 
            INNER JOIN ordenes b ON (a.orden_id = b.id)
            LEFT JOIN clientes c ON (a.user_id = c.id_cliente)
            WHERE b.fecha_hasta < "'.$fechaHasta.'"
        ');

        foreach ($propiedades as $item) {
            Mail::to($item->email)->send(new VencionPropiedad($item));
        }

    }
}
