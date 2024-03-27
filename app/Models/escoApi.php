<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class escoApi extends Model
{
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     PRODUCTOS                                    ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public static function guardarProducto(Request $request){
        try{
            $nombre        = $request->input('nombre');
            $descripcion       = $request->input('descripcion');
       
            $obj = new escoProducto();
            
            $obj->nombre          = $nombre;
            $obj->descripcion     = $descripcion;
            $obj->estado          = 1;

            $response = $obj->save();

            if($response){
                return 'true';
            }else {
                return 'false';
            }        
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function getProductos(){
        return escoProducto::orderBy('nombre')->get();
    }

    public static function editarProducto(Request $request){
        try{
            $idProducto     = $request->input('idProducto');
            $nombre         = $request->input('nombre');
            $descripcion    = $request->input('descripcion');
            $estado         = $request->input('estado');
            
            $response = escoProducto::where('idProducto', $idProducto)->update(['nombre' => $nombre, 'descripcion'=> $descripcion, 'estado'=> $estado]);

             if($response){
                return 'true';
            }else {
                return 'false';
            }         
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     DETALLES PRODUCTOS                           ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public static function guardarDetalleProducto(Request $request){
        try{
            $fechaRegistro          = date('Y-m-d');
            $idProducto             = $request->input('fechaCompra');
            $observaciones          = $request->input('observacion');
            $idMarca                = $request->input('precioCompra');
            $idAcabado              = $request->input('precioVenta');
            $idColor                = $request->input('fechaVencimiento');
            $idPresentacion         = $request->input('cantidadInicial');
            $codProducto            = $request->input('cantidadExistencia');
            
            $obj = new escoDetalleProducto();
            $obj->fechaRegistro           = $fechaRegistro;
            $obj->observaciones           = $observaciones;
            $obj->idProducto              = $idProducto;
            $obj->idMarca                 = $idMarca;
            $obj->idAcabado               = $idAcabado;
            $obj->idColor                 = $idColor;
            $obj->idPresentacion          = $idPresentacion;
            $obj->codProducto             = $codProducto;
            
            $response = $obj->save();

            if($response){
                return 'true';
            }else {
                return 'false';
            }         
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function getDetalleProductos(){
        return escoDetalleProducto::get();
    }


    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     LOTES PRODUCTOS                           ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public static function guardarLoteProducto(Request $request){
        try{
            $fechaCreacion          = date('Y-m-d');
            $fechaCompra            = $request->input('fechaCompra');
            $precioCompra           = $request->input('precioCompra');
            $precioVenta            = $request->input('precioVenta');
            $fechaVenciminento      = $request->input('fechaVencimiento');
            $cantidadInicial        = $request->input('cantidadInicial');
            $cantidadExistencia     = $request->input('cantidadExistencia');
            $idBodega               = $request->input('idBodega');
            $idRegistroDP           = $request->input('idRegistroDP');
            $observacion            = $request->input('obdervaciones');
       
            $obj = new escoLotes();
            $obj->fechaCreacion         = $fechaCreacion;
            $obj->fechaCompra           = $fechaCompra;
            $obj->PrecioCompra          = $precioCompra;
            $obj->PrecioVenta           = $precioVenta;
            $obj->fechaVenciminento     = $fechaVenciminento;
            $obj->cantidadInicial       = $cantidadInicial;
            $obj->CantidadExistencia    = $cantidadExistencia;
            $obj->idBodega              = $idBodega;
            $obj->idPresentacion        = $idRegistroDP;
            $obj->observaciones         = $observacion;

            $response = $obj->save();

            if($response){
                return 'true';
            }else {
                return 'false';
            }         
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function getLoteProductos(){
        return escoLotes::get();
    }

    public static function editarDetalleProducto(Request $request){
        try{
            $idRegistro             = $request->input('idRegistro');
            $cantidadExistencia     = $request->input('cantidadExistencia');
            $precioCompra           = $request->input('precioCompra');
            $precioVenta            = $request->input('precioVenta');
            $idProducto             = $request->input('idProducto');
            
            $response = escoDetalleProducto::where('IdRegistro', $idRegistro)->update(['cantidadExistencia' => $cantidadExistencia, 'precioCompra'=> $precioCompra, 'precioVenta'=> $precioVenta, 'IdProducto'=> $idProducto]);

            if($response){
                return 'true';
            }else {
                return 'false';
            }          
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     MARCAS                                       ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public static function guardarMarca(Request $request){
        try{
            $marca        = $request->input('marca');
       
            $obj = new escoMarca();
            
            $obj->marca          = $marca;
            $obj->estado         = 1;

            $response = $obj->save();

            if($response){
                return 'true';
            }else {
                return 'false';
            }        
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function getMarcas(){
        return escoMarca::orderBy('marca')->get();
    }

    public static function editarMarca(Request $request){
        try{
            $id             = $request->input('idMarca');
            $nombre         = $request->input('marca');
            $estado         = $request->input('estado');
            
            $response = escoMarca::where('idMarca', $id)->update(['marca' => $nombre, 'estado'=> $estado]);

             if($response){
                return 'true';
            }else {
                return 'false';
            }         
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     ACABADOS                                     ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public static function guardarAcabado(Request $request){
        try{
            $nombre        = $request->input('acabado');
       
            $obj = new Acabado();
            
            $obj->acabado          = $nombre;
            $obj->estado           = 1;

            $response = $obj->save();

            if($response){
                return 'true';
            }else {
                return 'false';
            }        
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function getAcabados(){
        return Acabado::orderBy('acabado')->get();
    }

    public static function editarAcabado(Request $request){
        try{
            $id             = $request->input('idAcabado');
            $nombre         = $request->input('acabado');
            $estado         = $request->input('estado');
            
            $response = Acabado::where('idAcabado', $id)->update(['acabado' => $nombre, 'estado'=> $estado]);

             if($response){
                return 'true';
            }else {
                return 'false';
            }         
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     COLORES                                      ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public static function guardarColores(Request $request){
        try{
            $nombre        = $request->input('color');
       
            $obj = new escoColor();
            
            $obj->color          = $nombre;
            $obj->estado         = 1;

            $response = $obj->save();

            if($response){
                return 'true';
            }else {
                return 'false';
            }        
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function getColores(){
        return escoColor::orderBy('color')->get();
    }

    public static function editarColor(Request $request){
        try{
            $id             = $request->input('idColor');
            $nombre         = $request->input('color');
            $estado         = $request->input('estado');
            
            $response = escoColor::where('idColor', $id)->update(['color' => $nombre, 'estado'=> $estado]);

             if($response){
                return 'true';
            }else {
                return 'false';
            }         
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     PRESENTACION                                 ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public static function guardarPresentacion(Request $request){
        try{
            $nombre        = $request->input('presentacion');

            $obj = new presentacion();
            
            $obj->presentacion          = $nombre;
            $obj->estado                = 1;

            $response = $obj->save();

            if($response){
                return 'true';
            }else {
                return 'false';
            }        
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function editarPresentacion(Request $request){
        try{
            $id             = $request->input('idPresentacion');
            $nombre         = $request->input('presentacion');
            $estado         = $request->input('estado');
            
            $response = Presentacion::where('idPresentacion', $id)->update(['presentacion' => $nombre, 'estado'=> $estado]);

             if($response){
                return 'true';
            }else {
                return 'false';
            }         
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function getpresentacion(){
        return presentacion::orderBy('presentacion')->get();
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     BODEGAS                                      ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public static function guardarBodega(Request $request){
        try{
            $descripcion       = $request->input('descripcion');
            $fecha        = $request->input('fecha');
       
            $obj = new Bodega();
            
            $obj->descripcion     = $descripcion;
            $obj->fechaCreacion   = $fecha;
            $obj->estado          = 1;

            $response = $obj->save();

            if($response){
                return 'true';
            }else {
                return 'false';
            }        
        }catch (Exception $e) {
            $mensaje =  'Excepción capturada: ' . $e->getMessage() . "\n";
            return response()->json($mensaje);
        }
    }

    public static function getBodega(){
        return Bodega::orderBy('descripcion')->get();
    }

}
