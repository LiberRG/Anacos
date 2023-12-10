<?php

namespace Database\Seeders;

use App\Models\Transporte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transporte::firstOrCreate([
            'nombre' => 'Transporte Publico',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 40,
            'telefono' => '(+34)988687800',
            'web' => 'www.bus.gal/gl/descargas/concellos',
            'descripcion' => 'Horario de contacto:
            L-V: 08:00h-20:00h 
            S: 8:00h-14:00h',            
        ]);
        Transporte::firstOrCreate([
            'nombre' => 'Donde aparcar',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 41,
            'descripcion' => 'Aparcamiento de Combarro (Paseo de As Redeiras, Parking Club Náutico de Combarro (pago) y exterior del Colegio Público de Chancelas)',            
        ]);








        Transporte::firstOrCreate([
            'nombre' => 'Solicitud de autorización',
            'lugar_id' => 2,
        ],
        [
            'web' => 'autorizacionillasatlanticas.xunta.gal/illasr/inicio#',
            'descripcion' => 'Todo visitante debe contar con una autorización previa, que garantiza un número máximo de visitantes en el paraje natural protegido. Esta es totalmente gratuita. La autorización para su visita se puede realizar hasta con 90 días de antelación.',   
            'detalles' => 'Recuerda que debes solicitar la autorización obligatoria de desembarco para realizar la visita, tanto en navieras públicas como en embarcación privada. En temporada baja, estas autorizaciones son gestionadas por las propias navieras autorizadas. Te aconsejamos verificar las fechas de temporada alta, ya que pueden cambiar según el año.' 
            
        ]);
        Transporte::firstOrCreate([
            'nombre' => 'Mar de Ons',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 62,
            'telefono' => '(+34)986225272',
            'web' => 'www.mardeons.es',
            'email' => 'info@mardeons.com',
            'direccion' =>'Múltiples puertos',
            'descripcion' => 'Te ofrece la mayor frecuencia horaria para visitar las Islas Cíes desde los puertos de Vigo, Cangas, Baiona, Sanxenxo y Portonovo.',   
            'detalles' => 'Recuerda que antes de reservar el billete, debes solicitar la autorización obligatoria de desembarco para realizar la visita.' 
            
        ]);
        Transporte::firstOrCreate([
            'nombre' => 'Piratas de Nabia',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 63,
            'telefono' => '(+34)986320048',
            'web' => 'www.piratasdenabia.com',
            'email' => 'info@piratasdenabia.com',
            'direccion' =>'Estación Marítima de Vigo c/ Cánovas del Castillo s/n 36202, Vigo, Pontevedra',
            'descripcion' => 'Además de realizar viajes a las islas durante todo el año, también cuenta con visitas guiadas y otras actividades para conocer las Cíes de una manera diferente. En temporada estival, dispone de más puertos que el vigués.',   
            'detalles' => 'Recuerda que antes de reservar el billete, debes solicitar la autorización obligatoria de desembarco para realizar la visita.' 
            
        ]);
        Transporte::firstOrCreate([
            'nombre' => 'Cruceros Rías Baixas',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 64,
            'telefono' => '(+34)986731343',
            'web' => 'www.crucerosriasbaixas.com',
            'email' => 'info@crucerosriasbaixas.com',
            'direccion' =>'c/ Reboredo nº 76, 36989, O Grove, Pontevedra​',
            'descripcion' => 'En su página web, además de comprar los boletos del barco, puedes obtener información sobre rutas y lugares de interés. Aunque su ubicación principal es O Grove, cuenta con más puntos.',   
            'detalles' => 'Recuerda que antes de reservar el billete, debes solicitar la autorización obligatoria de desembarco para realizar la visita.' 
            
        ]);

    }
}
