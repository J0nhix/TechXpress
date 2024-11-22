import React from "react";

const ProductoCard = (info) => {
  return (
    <div className="product_card">
      <div>
      <a href={`/producto/${info.id}`}><img className="product_img" src={`../../../img/${info.ruta}`} alt="..." /></a>
      </div>
      <div className="content">
        <div className="descripcion">
          <h5>{info.titulo}</h5>
          <span>{info.almacenamiento!=null?(`${info.almacenamiento}+${info.ram}`) : ("")}</span>
        </div>
        <div className="precio">
        <span>Desde</span>
          <br />
          <span>{info.precio}€</span>
        </div>
      </div>
    </div>

  );
};

export default ProductoCard;
