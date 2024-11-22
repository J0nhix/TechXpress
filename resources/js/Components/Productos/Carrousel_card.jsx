import React from "react";

const CarrouselCard = (info) => {
  return (
    <div className="card">
      <div className="image-wrapper">
        <a href={`/producto/${info.id}`}><img src={`../../../img/${info.ruta}`} alt="..." /></a>
      </div>
      <div className="card-body">
        <div className="descripcion">
          <h5>{info.titulo}</h5>
          <span>{info.almacenamiento!=null?(`${info.almacenamiento}+${info.ram}`) : ("")}</span>
          <br />
          <i className="bi bi-star-fill"></i>
          <i className="bi bi-star-fill"></i>
          <i className="bi bi-star-fill"></i>
          <i className="bi bi-star-fill"></i>
          <i className="bi bi-star-fill"></i>
        </div>
        <div className="precio">
          {info.precio_oferta ? (
            <>
              <span className="precio-nuevo">{info.precio_oferta.toFixed(2)}€</span>
              <span className="precio-antiguo">{info.precio.toFixed(2)}€</span>

            </>
          ) :
          (
            <span>{info.precio.toFixed(2)}€</span>
          )}
        </div>
      </div>
    </div>
  );
};

export default CarrouselCard;
