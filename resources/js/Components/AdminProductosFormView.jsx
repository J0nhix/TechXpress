import '../Pages/producto.css';
import { useEffect, useState } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';
import { Input } from 'postcss';

export default function FormularioVenta( props ) {

    const [error, setError] = useState(null);

    const { data, setData, post, processing, errors, reset } = useForm({
        marca: '',
        modelo: '',
        tipo: '',
        almacenamiento: '',
        ram: '',
        color: '',
        bluetooth: '',
        inalambrico: '',
        microfono: '',

        // Otros campos relacionados con la venta
    });

    console.log('debug', props);

    useEffect(() => {
        return () => {
            reset('marca', 'modelo', 'tipo', 'almacenamiento', 'ram', 'color', 'bluetooth', 'inalambrico', 'microfono');
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();

        post(route('añadirProducto'), {
            onSuccess: () => {
                // Lógica después de la venta exitosa, por ejemplo, redirigir a otra página
                ('Venta realizada con éxito');
            },
        });
    };

    const submit2 = async (e) => {
        e.preventDefault();

        try {
            const response = await post(route('eliminarProducto'));

            // Verifica si la respuesta tiene un código de estado 404
            if (response.status === 404) {
                const responseData = await response.json();
                setError({ mensaje: responseData.mensaje, estilos: { color: 'red', fontSize: '20px' } });
            } else {
                console.log('Eliminación realizada con éxito');
            }
        } catch (error) {
            if (error.response) {
                const responseData = await error.response.json();
                setError({ mensaje: responseData.mensaje, estilos: { color: 'red', fontSize: '20px' } });
            } else {
                setError({ mensaje: 'Error al eliminar el producto, no existe el producto o su stock es de 0', estilos: { color: 'red', fontSize: '20px' } });
            }
        }
    };

    const submit3 = (e) => {
        e.preventDefault();

        post(route('ana'), {
            onSuccess: () => {
                // Lógica después de la venta exitosa, por ejemplo, redirigir a otra página
                ('Venta realizada con éxito');
            },
        });
    };

    return (
        <section>
        <div className='container mt-5'>
            <div className='mt-5 p-5'>
                <Head title="Realizar Venta" />

                    {/* Campos del formulario */}
                    <div className="mt-4">
                        <h1>Gestion de Productos</h1>
                        {error && (
                            <div style={{ color: 'red', fontSize: '20px', marginTop: '10px' }}>
                                {error.mensaje}
                            </div>
                        )}
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
                                    <option value={marca.id}>{marca.marca}</option>
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
                            onChange={(e) => setData('modelo', e.target.value)}
                            
                        >
                                <option value="" disabled>
                                    Selecciona un modelo
                                </option>
                                {props.productos.map((product, index) => (
                                    (data.tipo == '' && data.marca == ''|| data.marca == '' && product.tipo == data.tipo || data.tipo == '' && product.marca_id == data.marca || data.tipo == product.tipo && product.marca_id == data.marca) ? (
                                        <option value={product.modelo}>{product.modelo}</option>
                                    ) : ''                          
                                ))}
                        </select>

                        <InputError message={errors.modelo} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="almacenamiento" value="Almacenamiento" />

                        <select
                            id="almacenamiento"
                            name="almacenamiento"
                            value={data.almacenamiento}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('almacenamiento', e.target.value)}
                            
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
                        <InputLabel htmlFor="ram" value="Ram" />

                        <select
                            id="ram"
                            name="ram"
                            value={data.ram}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('ram', e.target.value)}
                            
                        >
                                <option value="" disabled>
                                    Selecciona la cantidad de memoria ram
                                </option>
                                <option value="3 GB">3 GB</option>
                                <option value="6 GB">6 GB</option>
                                <option value="8 GB">8 GB</option>
                                <option value="12 GB">12 GB</option>
                                <option value="16 GB">16 GB</option>
                        </select>

                        <InputError message={errors.ram} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="color" value="Color" />

                        <select
                            id="color"
                            name="color"
                            value={data.color}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('color', e.target.value)}
                            
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
                        <InputLabel htmlFor="bluetooth" value="Bluetooth" />

                        <select
                            id="bluetooth"
                            name="bluetooth"
                            value={data.bluetooth}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('bluetooth', e.target.value)}
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
                        <InputLabel htmlFor="inalambrico" value="Inalambrico" />

                        <select
                            id="inalambrico"
                            name="inalambrico"
                            value={data.inalambrico}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('inalambrico', e.target.value)}
                            
                        >
                                <option value="" disabled>
                                    Es inalambrico
                                </option>
                                <option value={null}></option>
                                <option value={true}>Si</option>
                                <option value={false}>No</option>
                        </select>

                        <InputError message={errors.inalambrico} className="mt-2" />
                    </div>

                    <div className="mt-4">
                        <InputLabel htmlFor="microfono" value="Microfono" />

                        <select
                            id="microfono"
                            name="microfono"
                            value={data.microfono}
                            className="mt-1 block w-full"
                            onChange={(e) => setData('microfono', e.target.value)}
                            
                        >
                                <option value="" disabled>
                                    Tiene microfono
                                </option>
                                <option value={null}></option>
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
                        <form onSubmit={submit} style={{ marginTop: '70px' }}>
                            <button name="añadir" className="btn btn-outline-secondary ms-4 w-auto" disabled={processing}>
                                Añadir producto
                            </button>
                        </form>
                        <form onSubmit={submit2} style={{ marginTop: '70px' }}>
                            <button className="btn btn-outline-secondary ms-4 w-auto" disabled={processing}>
                                Eliminar producto
                            </button>
                        </form>
                    </div>
                
            </div>
        </div>
    </section>
    );
}