import React from "react";
import Carrousel_card from './Productos/Carrousel_card';

function CarrouselPrincipal(props) {
    var veces = [0, 1, 2];
    var partes = [];
    if (props.productos) {
        var productos = props.productos;
        for (let i = 0; i < productos.length; i += 4) {
            partes.push(productos.slice(i, i + 4));
        } 
    } else{
        var productos = props.productos;
        for (let i = 0; i < productos.length; i += 4) {
            partes.push(productos.slice(i, i + 4));
        }
    }
    return (
        <section id="carrousel">
            <h2 id="font">¡Pásate al reacondicionado!</h2>
            <div id="carouselExampleControls" className="carousel slide" data-bs-ride="carousel">
                <div className="carousel-inner">

                {veces.map((numero) => (
                    
                <div key={numero} className={`carousel-item ${numero === 0 ? 'active' : ''}`}>
                    <div className="cards-wrapper">
                    {partes[numero].map((product, index) => (
                        <Carrousel_card
                        key={index}
                        ruta={product.imagen}
                        titulo={product.modelo}
                        almacenamiento={product.almacenamiento}
                        ram={product.ram}
                        precio={product.precio}
                        id={product.id}
                        />
                    ))}
                    </div>
                </div>
                ))}

                </div>
                <button className="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                <span className="visually-hidden">Previous</span>
                </button>
                <button className="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span className="carousel-control-next-icon" aria-hidden="true"></span>
                <span className="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    );
}

export default CarrouselPrincipal;