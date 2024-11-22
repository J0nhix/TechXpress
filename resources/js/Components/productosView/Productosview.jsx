import '../../Pages/producto.css';
import React, { useState } from 'react';
import { Head, Link, useForm } from '@inertiajs/react';
import PrimaryButton from '../PrimaryButton';

const ProductosView = (info) => {
    var producto = info.producto;
    console.log('Información: ',info);
    // Estado para mantener el botón seleccionado de la calidad
    const { data, setData, post, processing, errors, reset } = useForm({
        producto: producto,
        // Otros campos relacionados con la venta
    });
    console.log('datos:',data);
    const submit = (e) => {
        e.preventDefault();

        post(route('añadirCarrito'), {
            onSuccess: () => {
                // Lógica después de la venta exitosa, por ejemplo, redirigir a otra página
                ('Venta realizada con éxito');
            },
        });
    };
    console.log(producto.precio);
    return (
        <div>
            <div className="section mt-5">
                <div className="container mt-5">
                    <div className="row">
                        <div className="col-md-3 col-sm-3">
                            <img src={`../../../img/${producto.imagen}`} alt="" />
                        </div>
                        <div className="col-md-9 col-sm-9">
                            <div className='row'>
                                <div className="col-md-7 col-sm-7">
                                    <h1>{producto.modelo}</h1>
                                    <div className="product-details">
                                        <h3>Caracteristicas</h3>
                                        {producto.procesador !== null && (
                                            <>
                                                <p className="feature">Procesador: {producto.procesador}</p>
                                                <hr/>
                                            </>
                                        )}
                                        {producto.almacenamiento !== null && (
                                            <>
                                                <p className="feature">Almacenamiento: {producto.almacenamiento}</p>
                                                <hr/>
                                            </>
                                        )}
                                        {producto.ram !== null && (
                                            <>
                                                <p className="feature">Memoria: {producto.ram}</p>
                                                <hr/>
                                            </>
                                        )}
                                        {producto.tamaño !== null && (
                                            <>
                                                <p className="feature">Tamaño: {producto.tamaño}</p>
                                                <hr/>
                                            </>
                                        )}
                                        {producto.color !== null && (
                                            <>
                                                <p className="feature">Color: {producto.color}</p>
                                                <hr/>
                                            </>
                                        )}
                                        {producto.bluetooth !== null && (
                                            <>
                                                <p className="feature">Bluetooth: {producto.bluetooth == 1 ? "Si": "No"}</p>
                                                <hr/>
                                            </>
                                        )}
                                        {producto.inalambrico !== null && (
                                            <>
                                                <p className="feature">Inalámbricos: {producto.inalambrico == 1 ? "Si": "No"}</p>
                                                <hr/>
                                            </>
                                        )}
                                        {producto.microfono !== null && (
                                            <>
                                                <p className="feature">Microfono: {producto.microfono == 1 ? "Si": "No"}</p>
                                                <hr/>
                                            </>
                                        )}
                                    </div>
                                    <br />
                                    
                                </div>
                                <div className="col-md-5 col-sm-5">
                                    {producto.precio_oferta ? (
                                        <h1 className="productprice">{producto.precio_oferta} €</h1>
                                        ) : (
                                        <h1 className="productprice">{producto.precio} €</h1>
                                    )}
                                    
                                    
                                    {info.user !== null ? (
                                        <form onSubmit={submit} method='POST'>
                                            {/* Contenido del formulario cuando info.user no es null */}
                                            <button type="submit" className="btn btn-outline-secondary ml-3">COMPRAR <i className="bi bi-cart-plus"></i></button>
                                        </form>
                                        ) : (
                                            <a href={route('login')}>
                                                <button type="submit" className="btn btn-outline-secondary ml-3">COMPRAR</button>
                                            </a>    
                                    )}
                                </div>
                            </div>
                            <div className="card">
                                <div className="card-body">
                                    <h5>Descripción</h5>
                                        <p>
                                            {producto.descripcion}
                                        </p>
                                    </div>
                            </div>
                            <hr />
                            <div className="card">
                                <h5 className="card-header"><i className="bi bi-info-square"></i> Quieres ahorrar más? <i className="bi bi-chevron-double-down"></i><i className="bi bi-currency-euro"></i></h5>
                                <div className="card-body">
                                    <p className="card-text">Puedes llevartelo por un precio inferior al que cuesta éste dispositivo ahora mismo.</p>
                                    <button type="button" className="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#renove">¡Mira el plan!</button>
                                </div>
                            </div>
                            <div className="modal fade" id="renove" tabIndex="-1" aria-labelledby="renoveLabel" aria-hidden="true">
                                <div className="modal-dialog modal-dialog-centered">
                                    <div className="modal-content">
                                        <div className="modal-header">
                                            <h5 className="modal-title" id="renoveLabel"><i className="bi bi-info-square"></i> Quieres ahorrar más? <i className="bi bi-chevron-double-down"></i><i className="bi bi-currency-euro"></i></h5>
                                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div className="modal-body">
                                            <p>Puedes hacer un plan para ahorrar con tu móvil nuevo, vendenos un dispositivo y ahorrar dinero comprando tu movil nuevo.</p>
                                            <div className="d-grid gap-2">
                                                <a href='/producto/venta' className='btn btn-secondary'>Sí</a>
                                                <button className="btn btn-secondary" type="button" data-bs-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
export default ProductosView;