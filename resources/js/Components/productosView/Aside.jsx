import React, { useState } from "react";

function Aside(prop) {
  const [showAllBrands, setShowAllBrands] = useState(false);
  const [modelos, setModelos] = useState([]);

  function sendSelectedValue(event) {
    const value = event.target.value;
    const modeloss = [];

    for (let product of prop.productos) {
      if (product.marca_id == event.target.value) {
        modeloss.push(product.modelo);
      }
    }

    setModelos(modeloss);
    prop.funcion(value);
  }

  function displayModelo(event) {
    const value = event.target.value;
    prop.modelo(value);
  }

  const containerStyle = {
    maxHeight: showAllBrands ? "auto" : "120px",
    overflowY: showAllBrands ? "hidden" : "auto",
  };

  const uniqueMarcas =
    prop.marcas !== null
      ? prop.marcas.filter(
          (marca, index, self) => self.findIndex((m) => m.id === marca.id) === index
        )
      : [];

  // Filtrar modelos únicos
  const uniqueModelos = [...new Set(modelos)];

  return (
    <div>
      <div id="aside" className="col-md-3">
        <h5 className="aside-title">Marcas</h5>
        <div className="aside" style={containerStyle}>
          <label htmlFor="">
            <input type="radio" name="marcas" id="" value="todos" onChange={sendSelectedValue} /> Todo
          </label>
          {uniqueMarcas.map((marca) => {
            const productosMarca = prop.productos.filter((producto) => producto.marca_id === marca.id);
            if (productosMarca.length > 0) {
              return (
                <div key={marca.id}>
                  <input
                    onChange={sendSelectedValue}
                    name={"marcas"}
                    type="radio"
                    value={marca.id}
                  />
                  <label htmlFor={`marcas-${marca.id}`}>
                    <span></span>
                    {marca.marca}
                    <small></small>
                  </label>
                </div>
              );
            } else {
              return null; 
            }
          })}
        </div>

        <h5 className="aside-title">Modelo </h5>
        <div className="aside" style={containerStyle}>
          <label htmlFor="">
            <input type="radio" name="modelo" id="" /> Todo
          </label>
          {uniqueModelos.map((p) => (
            <div key={p}>
              <input
                onChange={displayModelo}
                name={"modelo"}
                type="radio"
                value={p}
              />
              <label htmlFor={`modelo-${p.id}`}>
                <span></span>
                {p}
                <small></small>
              </label>
            </div>
          ))}
        </div>

        
      </div>
    </div>
  );
}

export default Aside;
