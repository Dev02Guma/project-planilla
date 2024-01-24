<?php

namespace App\Http\Controllers;

use App\Models\escoApi;
use Illuminate\Http\Request;

class escoApiController extends Controller
{
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     PRODUCTOS                                    ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function guardarProducto(Request $request){
        $obj = escoApi::guardarProducto($request);
        return response()->json($obj);
    }

    public function getProducto(){
        $obj = escoApi::getProductos();
        return response()->json($obj);
    }

    public function eliminarProducto(Request $request){
        $obj = escoApi::eliminarProucto($request);
        return response()->json($obj);
    }

    public function editarProducto(Request $request){
        $obj = escoApi::editarProducto($request);
        return response()->json($obj);
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     DETALLES PRODUCTOS                           ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function guardarDetalleProducto(Request $request){
        $obj = escoApi::guardarDetalleProducto($request);
        return response()->json($obj);
    }

    public function getDetalleProducto(){
        $obj = escoApi::getDetalleProductos();
        return response()->json($obj);
    }

    public function editarDetalleProducto(Request $request){
        $obj = escoApi::editarDetalleProducto($request);
        return response()->json($obj);
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     MARCAS                                       ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function guardarMarca(Request $request){
        $obj = escoApi::guardarMarca($request);
        return response()->json($obj);
    }

    public function getMarca(){
        $obj = escoApi::getMarcas();
        return response()->json($obj);
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     ACABADOS                                     ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function guardarAcabado(Request $request){
        $obj = escoApi::guardarAcabado($request);
        return response()->json($obj);
    }

    public function getAcabado(){
        $obj = escoApi::getAcabados();
        return response()->json($obj);
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     COLORES                                      ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function guardarColores(Request $request){
        $obj = escoApi::guardarColores($request);
        return response()->json($obj);
    }

    public function getColores(){
        $obj = escoApi::getColores();
        return response()->json($obj);
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     PRESENTACION                                 ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function guardarPresentacion(Request $request){
        $obj = escoApi::guardarPresentacion($request);
        return response()->json($obj);
    }

    public function getPresentacion(){
        $obj = escoApi::getPresentacion();
        return response()->json($obj);
    }

    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    //---                                                  ---\\
    //---     BODEGAS                                      ---\\
    //---                                                  ---\\
    //||||||||||||||||||||||||||||||||||||||||||||||||||||||||||

    public function guardarBodega(Request $request){
        $obj = escoApi::guardarBodega($request);
        return response()->json($obj);
    }

    public function getBodega(){
        $obj = escoApi::getBodega();
        return response()->json($obj);
    }

}
