import React, { useEffect } from "react";
import CarrouselCard from './Productos/Carrousel_card';

function CarrouselSecundario(props) {
  console.log('secundario', props);
  var veces = [0, 1, 2];
  var partes = [];
  
  if (props.productos) {
    for (let i = 0; i < props.productos.length; i += 4) {
      partes.push(props.productos.slice(i, i + 4));
    } 
  }

  return (
    <section id="carrousel">
      <h2 id="font">Top ofertas</h2>
      <div id="carouselSecundario" className="carousel slide" data-bs-ride="carousel">
        <div className="carousel-inner">
          {veces.map((numero) => (
            <div key={numero} className={`carousel-item ${numero === 0 ? 'active' : ''}`}>
              <div className="cards-wrapper">
                {partes[numero] && partes[numero].map((product, index) => (
                  <CarrouselCard
                    key={index}
                    ruta={product.imagen}
                    titulo={product.modelo}
                    almacenamiento={product.almacenamiento}
                    ram={product.ram}
                    precio={product.precio}
                    precio_oferta={product.precio_oferta}
                    id={product.id}
                  />
                ))}
              </div>
            </div>
          ))}
        </div>
        <button className="carousel-control-prev" type="button" data-bs-target="#carouselSecundario" data-bs-slide="prev">
          <span className="carousel-control-prev-icon" aria-hidden="true"></span>
          <span className="visually-hidden">Previous</span>
        </button>
        <button className="carousel-control-next" type="button" data-bs-target="#carouselSecundario" data-bs-slide="next">
          <span className="carousel-control-next-icon" aria-hidden="true"></span>
          <span className="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  );
}

export default CarrouselSecundario;
  