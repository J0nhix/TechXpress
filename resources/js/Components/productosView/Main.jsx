import React, { useState } from "react";
import Product from "./Product";
import Aside from './Aside';
import '../../Pages/producto.css';
import '../../Components/Buscador/buscador.css'
export default function Main( prop ) {

    const [marcaSeleccionada, setMarcaSeleccionada] = useState(null);
    const [selectedModelo, setSelectedModelo] = useState(null);
    const [selectedAlmacenamiento, setSelectedAlmacenamiento] = useState(null)

    function getSelectedValue (nuevoValor){
        setSelectedModelo(null);
        setMarcaSeleccionada(nuevoValor);
    }

    function getModelo (modelo){
        setSelectedModelo(modelo);
    }

    function getAlmacenamiento(almacenamiento){
        setSelectedAlmacenamiento(almacenamiento)
    }
    console.log(selectedModelo, "aaaaa");
    console.log(marcaSeleccionada, "modelo seleccionado");
    console.log(prop.productos, "modelo seleccionado");

    return (
        <div>
            <div className="section">
                <div className="container">
                    <div className="row">
                        <div className="col-md-3 col-sm-3">
                        <Aside marcas={prop.marcas ? prop.marcas : null} funcion={prop.marca == null ? getSelectedValue : undefined} modelo={prop.marca == null ? getModelo : undefined} productos={prop.productos ? prop.productos : null} />
                        </div>
                        <div className="col-md-9 col-sm-9">
                        {prop.modelo != undefined &&  marcaSeleccionada==null? (
                        <Product modelo={prop.modelo} productos={prop.productos}/>
                        ) : (
                        <Product productos={prop.productos} marca={marcaSeleccionada} modeloselect={selectedModelo}  />
                        )}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}