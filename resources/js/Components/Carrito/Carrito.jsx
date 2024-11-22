import React, { useState,useEffect } from "react";
import { useForm } from '@inertiajs/react';

function Carrito(props) {
  console.log('nooo', props);
  var productosacomprar = "";
  var precioTotal = 0;


  const [quantities, setQuantities] = useState(
    props.productosacomprar? props.productosacomprar.map(() => 1):''
  );

  const [selectedPoints, setSelectedPoints] = useState(null);

  function resetpoints() {
    document.getElementById('miModal').className = 'mi-modal-hidden';
    setSelectedPoints(null);
  }

  const handlePointSelection = (points) => {
    // Manejar la selección de puntos aquí
    setSelectedPoints(points);
    setData('puntos',points);
    console.log('puntos1',points);
    console.log('puntos2',puntos);
  };

  const handleQuantityChange = (index, value) => {
    const newQuantities = [...quantities];
    newQuantities[index] = value;
    setQuantities(newQuantities);
  };

  var precioTotalGeneral = props.productosacomprar?props.productosacomprar.reduce((total, product, index) => {
    const cantidad = quantities[index] || 1;
    if (product.precio_oferta) return total + product.precio_oferta * cantidad;
    else return total + product.precio * cantidad;
  }, 0):0;

  const { data, setData, post, processing, errors, reset } = useForm({
    productos: props.productosacomprar,
    precio: precioTotalGeneral,
    puntos: selectedPoints
  });
  console.log(data);
  useEffect(() => {
    return () => {
      setData('precio', precioTotalGeneral);
      console.log('after',data.precio);
    };
}, [precioTotalGeneral]);

  function handleRedeemPoints() {
    setData('precio', precioTotalGeneral);
    document.getElementById('miModal').className = 'mi-modal-hidden';
  }

  if (selectedPoints != null) {
    var porcentaje = selectedPoints/1000;
    var descuento = precioTotalGeneral*porcentaje;
    precioTotalGeneral = precioTotalGeneral-descuento;
  }


  console.log(data.precio);
  const buttons = [];
  for (let points = 100; points <= 600; points += 50) {
    buttons.push(
      <button
        key={points}
        value={points/10}
        type="button"
        className={`btn btn-primary ${selectedPoints === points ? 'active btn-outline-secondary' : ''}`}
        onClick={() => handlePointSelection(points)}
        disabled={points > props.usuario.user.puntos}
      >
        {points}
      </button>
    );
  }

  const submit = (e) => {
      e.preventDefault();
      //setData('precio', precioTotalGeneral);
      post(route('pedido.comprar'), {
          onSuccess: () => {

              ('Venta realizada con éxito');
          },
      });
  };

  
  return (

    <section className="h-100 gradient-custom">
      <div className="container py-5">
        <div className="row d-flex justify-content-center my-4">
          <div className="col-md-8">
            <div className="card mb-4">
              <div className="card-header py-3">
                <h5 className="mb-0">Carrito</h5>
              </div>
              <div className="card-body">
                {props.productosacomprar &&
                  props.productosacomprar.length > 0 && (
                    props.productosacomprar.map((product, index) => (
                      <div className="row" key={index}>
                        <div className="col-lg-3 col-md-12 mb-4 mb-lg-0">
                          <div className="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                            <img src={`../../../img/${product.imagen}`} className="w-100" alt="Not img" />
                          </div>
                        </div>

                        <div className="col-lg-5 col-md-6 mb-4 mb-lg-0">
                          <p><strong><a href={`/producto/${product.id}`}>{product.modelo}</a></strong></p>
                          <p>Almacenamiento: {product.almacenamiento}</p>
                          <p>Ram: {product.ram}</p>
                          <p>Color: {product.color}</p>
                        </div>

                        <div className="col-lg-4 col-md-6 mb-4 mb-lg-0">
                          <div className="d-flex mb-4">
                            <div className="form-outline">
                              <input
                                id={`cantidad-${index}`}
                                name={`quantity-${index}`}
                                value={quantities[index]}
                                onChange={(e) =>
                                  handleQuantityChange(index, parseInt(e.target.value, 10))
                                }
                                type="number"
                                className="form-control"
                                min={1}
                              />
                             <label className="form-label" htmlFor={`cantidad-${index}`}>
                                Quantity
                              </label>
                            </div>
                            <form action={route('pedido.delete', [product.id])} method="GET">
                              <input type="submit" value="eliminar" />
                            </form>
                          </div>
                        </div>
                        <hr className="my-4" />
                      </div>
                    ))
                  )}
              </div>
            </div>
          </div>
          <div className="col-md-4">
            <div className="card mb-4">
              <div className="card-header py-3">
                <h5 className="mb-0">Precio a pagar</h5>
              </div>
              <div className="card-body">
                <b>Productos</b>
                <ul className="list-group list-group-flush">
                  <li>
                    {props.productosacomprar &&
                      props.productosacomprar.length > 0 && (
                        props.productosacomprar.map((product, index) => (
                          <div className="precios">
                            <span>{product.modelo}</span>
                            {product.precio_oferta !== null ? (
                            <span>{product.precio_oferta * quantities[index]}€</span>
                          ) : (
                            <span>{product.precio * quantities[index]}€</span>
                          )}
                          </div>
                        ))
                      )}
                  </li>
                  <li className="list-group-item d-flex justify-content-between align-items-center px-0">
                    Envio
                    <span>Gratis</span>
                  </li>
                  <li
                    className="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                      <strong>Total</strong>
                      <strong>
                        <p className="mb-0">(including VAT)</p>
                      </strong>
                    </div>
                    <span><strong>{precioTotalGeneral || 0}€</strong></span>
                  </li>
                </ul>
                <div className="d-flex gap-3">
                  <form onSubmit={submit}>
                    <button type="submit" className="btn btn-primary btn-lg btn-block">
                      Comprar
                    </button>
                  </form>
                  <form>
                  <button type="button" onClick={() => {document.getElementById('miModal').className = 'mi-modal'}} className="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#miModal">
                      Usa tus puntos
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="modal fade mi-modal-hidden" id="miModal" tabIndex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div className="modal-dialog modal-dialog-centered" role="document">
          <div className="modal-content">
            <div className="modal-header">
              <h5 className="modal-title" id="exampleModalLabel">Tienes {props.usuario.user.puntos} puntos</h5>
            </div>
            <div className="modal-body">
              {buttons}
            </div>
            <div className="modal-footer">
              <button
                type="button"
                className="btn btn-danger"
                data-dismiss="modal"
                onClick={resetpoints}
              >
                Cerrar
              </button>
              <button type="button" className="btn canjear" onClick={() => handleRedeemPoints(selectedPoints)}>
                Canjear puntos
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}

export default Carrito;
