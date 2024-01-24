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
        return escoProducto::get();
    }

    public static function editarProducto(Request $request){
        try{
            $idProducto     = $request->input('idProducto');
            $nombre         = $request->input('nombre');
            $descripcion    = $request->input('descripcion');
            
            $response = escoProducto::where('idProducto', $idProducto)->update(['nombre' => $nombre, 'descripcion'=> $descripcion]);

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
            $idProducto             = $request->input('idProducto');
            $idColor                = $request->input('idColor');
            $idMarca                = $request->input('idMarca');
            $idAcabado              = $request->input('idAcabado');
            $idPresentacion         = $request->input('idPresentacion');
       
            $obj = new escoDetalleProducto();
            $obj->fechaCreacion         = $fechaCreacion;
            $obj->fechaCompra           = $fechaCompra;
            $obj->PrecioCompra          = $precioCompra;
            $obj->PrecioVenta           = $precioVenta;
            $obj->fechaVenciminento     = $fechaVenciminento;
            $obj->cantidadInicial       = $cantidadInicial;
            $obj->CantidadExistencia    = $cantidadExistencia;
            $obj->idBodega              = $idBodega;
            $obj->idProducto            = $idProducto;
            $obj->idColor               = $idColor;
            $obj->idMarca               = $idMarca;
            $obj->idAcabado             = $idAcabado;
            $obj->idPresentacion        = $idPresentacion;

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
        return escoDetalleProducto::get();
    }

    public static function editarDetalleProducto(Request $request){
        try{
            $idRegistro              = $request->input('idRegistro');
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
        return escoMarca::get();
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
        return Acabado::get();
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
        return escoColor::get();
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

    public static function getpresentacion(){
        return presentacion::get();
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
        return Bodega::get();
    }

}
