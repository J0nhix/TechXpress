import React from "react";
import Categori_card from './Productos/Categori_card1';
import Categori_card2 from './Productos/Categori_card2';

function Venta( props ) {
    console.log(props);
    return (
        <section id="vender" className="bg-light">
            <div className="venta">
                <div className="imgVender">
                    <img className="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." />
                </div>
                <div id="content">
                    <h3>Si no te sirve, danoslo</h3>
                    <p>Vendenos tu producto para obtener puntos, intercambiarlo por una rebaja en otro producto o dinero</p>
                    {props.user ? (
                        <a href={route('login')}><button id="renueva">Renueva ahora</button></a>
                    ) : (
                        <a href="/producto/venta"><button id="renueva">Renueva ahora</button></a>
                    )}
                </div>
            </div>
        </section>
    );
}

export default Venta;