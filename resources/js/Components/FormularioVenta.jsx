import '../Pages/producto.css';
import { useEffect, useState } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';

export default function FormularioVenta(props) {
    const { data, setData, post, processing, errors, reset } = useForm({
        marca: '',
        modelo: '',
        otroModelo: '',
        tipo: '',
        calidad: '',
        almacenamiento: '',
        ram: '',
        color: '',
        bluetooth: '',
        inalambrico: '',
        microfono: '',
        // Otros campos relacionados con la venta
    });

    const [showInput, setShowInput] = useState(false);

    if (data.bluetooth === 'true') {
        console.log('1');
    }else{
        console.log('0');
    }

    useEffect(() => {
        return () => {
            reset('marca', 'modelo', 'tipo', 'caracteristicas', 'ram', 'color', 'bluetooth', 'inalambrico', 'microfono');
        };
    }, []);

    const handleCancelarClick = () => {
        // Realiza la redirección al dashboard
        window.location.href = '/dashboard';
    };

    const submit = (e) => {
        e.preventDefault();

        post(route('añadirProducto'), {
            onSuccess: () => {
                // Lógica después de la venta exitosa, por ejemplo, redirigir a otra página
                ('Venta realizada con éxito');
            },
        });
    };

    return (
        <div className='container mt-5'>
            <div className='mt-5 p-5'>
                <Head title="Realizar Venta" />

                    {/* Campos del formulario */}
                    <div className="mt-4">
                        <h1>Venta de tu Producto</h1>
                        <InputLabel htmlFor="tipo" value="Tipo" />

                        <select
                            id="tipo"
                            name="tipo"
                            value={data.tipo}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('tipo', e.target.value)}
                            
                        >
                                <option value="" disabled>
                                    Selecciona un tipo de dispositivo
                                </option>
                                <option value="Movil">Movil</option>
                                <option value="Smartwatch">Smartwatch</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Auriculares">Auriculares</option>
                                <option value="Portatil">Portatil</option>
                        </select>

                        <InputError message={errors.tipo} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="marca" value="Marca" />

                        <select
                            id="marca"
                            name="marca"
                            value={data.marca}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('marca', e.target.value)}
                            
                        >
                                <option value="" disabled>
                                    Selecciona una marca
                                </option>

                                {props.marcas.map((marca, index) => (
                                    <option key={index} value={marca.id}>
                                        {marca.marca}
                                    </option>
                                ))}
                        </select>

                        <InputError message={errors.marca} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="modelo" value="Modelo" />

                        <select
                            id="modelo"
                            name="modelo"
                            value={data.modelo}
                            className="mt-1 block w-full"
                            onChange={(e) => {const selectedModelo = e.target.value;
                                setData('modelo', selectedModelo);
                    
                                // Si se selecciona "Otro...", muestra el campo de entrada de texto
                                if (selectedModelo === 'otro') {
                                    setShowInput(true);
                                } else {
                                    setShowInput(false);
                                }
                            }}
                            
                        >
                                <option value="" disabled>
                                    Selecciona un modelo
                                </option>
                                {props.productos.map((product, index) => (
                                    (data.tipo == '' && data.marca == ''|| data.marca == '' && product.tipo == data.tipo || data.tipo == '' && product.marca_id == data.marca || data.tipo == product.tipo && product.marca_id == data.marca) ? (
                                        <option value={product.modelo}>{product.modelo}</option>
                                    ) : ''                          
                                    ))}
                                
                                <option value="otro">
                                    Otro...
                                </option>
                        </select>

                            {showInput && (
                                <TextInput
                                    type="text"
                                    id="otroModelo"
                                    name="otroModelo"
                                    value={data.otroModelo}
                                    className="mt-1 block w-full"
                                    onChange={(e) => setData('otroModelo', e.target.value)}
                                    placeholder="Escribe el modelo"
                                />
                            )}

                        <InputError message={errors.modelo} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="almacenamiento" value="Almacenamiento" hidden={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}/>

                        <select
                            id="almacenamiento"
                            name="almacenamiento"
                            value={data.almacenamiento}
                            onChange={(e) => setData('almacenamiento', e.target.value)}
                            disabled={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}
                            hidden={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}
                            className="mt-1 block w-full"
                        >
                                <option value="" disabled>
                                    Selecciona una almacenamiento
                                </option>
                                <option value="32 GB">32 GB</option>
                                <option value="64 GB">64 GB</option>
                                <option value="128 GB">128 GB</option>
                                <option value="256 GB">256 GB</option>
                                <option value="512 GB">512 GB</option>
                                <option value="1 TB">1 TB</option>
                        </select>

                        <InputError message={errors.almacenamiento} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="ram" value="Ram" hidden={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}/>

                        <select
                            id="ram"
                            name="ram"
                            value={data.ram}
                            onChange={(e) => setData('ram', e.target.value)}
                            disabled={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}
                            hidden={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}
                            className="mt-1 block w-full"
                        >
                                <option value="" disabled>
                                    Selecciona la cantidad de memoria ram
                                </option>
                                <option value="3 GB">3 GB</option>
                                <option value="6 GB">6 GB</option>
                                <option value="12 GB">12 GB</option>
                                <option value="16 GB">16 GB</option>
                        </select>

                        <InputError message={errors.ram} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="color" value="Color" hidden={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}/>

                        <select
                            id="color"
                            name="color"
                            value={data.color}
                            onChange={(e) => setData('color', e.target.value)}
                            className="mt-1 block w-full"
                            hidden={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}
                            disabled={data.tipo=='Smartwatch' ? true : data.tipo=='Auriculares' ? true : false}
                        >
                                <option value="" disabled>
                                    Selecciona el color
                                </option>
                                <option value="Negro">Negro</option>
                                <option value="Blanco">Blanco</option>
                                <option value="Gris">Gris</option>
                        </select>

                        <InputError message={errors.color} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="bluetooth" value="Bluetooth" hidden={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}/>

                        <select
                            id="bluetooth"
                            name="bluetooth"
                            value={data.bluetooth}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('bluetooth', e.target.value)}
                            disabled={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}
                            hidden={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}
                        >
                                <option value="" disabled>
                                    Tiene bluetooth 
                                </option>
                                <option value={true}>Si</option>
                                <option value={false}>No</option>
                        </select>

                        <InputError message={errors.color} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="inalambrico" value="Inalambrico" hidden={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}/>

                        <select
                            id="inalambrico"
                            name="inalambrico"
                            value={data.inalambrico}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('inalambrico', e.target.value)}
                            disabled={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}
                            hidden={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}
                            
                        >
                                <option value="" disabled>
                                    Es inalambrico
                                </option>
                                <option value={true}>Si</option>
                                <option value={false}>No</option>
                        </select>

                        <InputError message={errors.inalambrico} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="microfono" value="Microfono" hidden={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}/>

                        <select
                            id="microfono"
                            name="microfono"
                            value={data.microfono}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('microfono', e.target.value)}
                            disabled={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}
                            hidden={data.tipo=='Movil' ? true : data.tipo=='Tablet' ? true : data.tipo=='Portatil' ? true : false}
                            
                        >
                                <option value="" disabled>
                                    Tiene microfono
                                </option>
                                <option value={true}>Si</option>
                                <option value={false}>No</option>
                        </select>

                        <InputError message={errors.microfono} className="mt-2" />
                    </div>

                    {/* Otros campos del formulario de venta */}

                    <div className="flex items-center justify-end mt-4">
                        <Link
                            href={route('dashboard')}
                            className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Volver a la página principal
                        </Link>
                        <button name="no" className="btn btn-outline-secondary ms-4 w-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Quieres Vender?
                        </button>
                        <div className="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabIndex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div className="modal-dialog modal-dialog-centered">
                                <div className="modal-dialog">
                                    <div className="modal-content">
                                    <div className="modal-header">
                                        <h5 className="modal-title" id="staticBackdropLabel">¿Seguro de que quieres venderlo?</h5>
                                        <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div className="modal-body">
                                        <p>Puedes vendernos tu dispositivo {data.tipo}!</p>
                                        {data.tipo=="Smartwatch" || data.tipo=="Auriculares" ? (
                                            props.productos.map((producto, index) => (
                                            producto.modelo == data.modelo && producto.bluetooth == (data.bluetooth=='true'?1:0) && producto.inalambrico == (data.inalambrico=='true'?1:0) && producto.microfono == (data.microfono=='true'?1:0) ? (
                                                <div key={index}>
                                                  <p>Te lo compramos por: {Math.round(producto.precio * 0.80)}</p>
                                                  <p>O puedes conseguir siendo usuario Basico {Number(String(Math.round(producto.precio * 0.80)).charAt(0)) * 5} puntos o siendo usuario Premium {Number(String(Math.round(producto.precio * 0.80)).charAt(0)) * 10} puntos a cambio.</p>
                                                  <p>¡Tú decides!</p>
                                                </div>
                                              ) : null
                                        ))):(
                                            props.productos.map((producto, index) => (
                                            producto.modelo === data.modelo && producto.almacenamiento === data.almacenamiento && producto.ram === data.ram && producto.color === data.color? (
                                                <div key={index}>
                                                  <p>Te lo compramos por: {Math.round(producto.precio * 0.80)}€</p>
                                                  <p>O puedes conseguir siendo usuario Basico {Number(String(Math.round(producto.precio * 0.80)).charAt(0)) * 10} puntos o siendo usuario Premium {Number(String(Math.round(producto.precio * 0.80)).charAt(0)) * 10+((Number(String(Math.round(producto.precio * 0.80)).charAt(0)) * 10)/2)} puntos a cambio.</p>
                                                  <p>¡Tú decides!</p>
                                                </div>
                                              ) : null
                                        )))}
                                        
                                    </div>
                                    <div className="modal-footer">
                                        <form onSubmit={submit}>
                                            <button type="submit" name="añadir" className="btn btn-secondary" data-bs-dismiss="modal">Si</button>
                                        </form>
                                        <button type="button" className="btn btn-primary" data-bs-dismiss="modal">No</button>
                                        <button type="button" className="btn btn-warning" data-bs-dismiss="modal" onClick={handleCancelarClick}>Cancelar</button>
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