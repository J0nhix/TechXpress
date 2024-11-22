import React from "react";
import "./css.css";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { LineChart, Line, BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, Legend, ResponsiveContainer } from 'recharts';

export default function Grafico({ auth, pedidosM, pedidosA, productos, admin}) {
    console.log(pedidosM);
    const data = pedidosM.map(pedido => ({
        name: pedido.fecha,
        Pedidos: pedido.cantidad,
    }));

    const maxCantidad = Math.max(...pedidosM.map(pedido => pedido.cantidad));

    const data2 = productos.map(producto => ({
        nombre: producto.marca,
        Stock: parseInt(producto.cantidad),
    }));

    const data3 = pedidosA.map(pedido => ({
        name: pedido.anio,
        Pedidos: pedido.cantidad,
    }));

    const maxCantidad3 = Math.max(...pedidosA.map(pedido => pedido.cantidad));

    return (
        <div>
            <AuthenticatedLayout
                user={auth.user}
                admin={admin}>

                <div className="container abs-center mt-5">
                    <h1>Gráfico de cantidad de pedidos los últimos 12 meses</h1>
                    <br />
                    <br />

                    <LineChart
                        width={1200}
                        height={300}
                        data={data}
                        margin={{
                            top: 5,
                            right: 30,
                            left: 20,
                            bottom: 5,
                        }}
                        >
                        <XAxis dataKey="name" />
                        <YAxis tickCount={maxCantidad} />
                        <Tooltip />
                        <Legend />
                        <Line type="monotone" dataKey="Pedidos" stroke="#725AC1" />
                    </LineChart>

                    <br />
                    <br />

                    <h1>Gráfico de cantidad de pedidos los últimos 3 años</h1>
                    <br />
                    <br />

                    <LineChart
                        width={1200}
                        height={300}
                        data={data3}
                        margin={{
                            top: 5,
                            right: 30,
                            left: 20,
                            bottom: 5,
                        }}
                        >
                        <XAxis dataKey="name" />
                        <YAxis tickCount={maxCantidad3} />
                        <Tooltip />
                        <Legend />
                        <Line type="monotone" dataKey="Pedidos" stroke="#725AC1" />
                    </LineChart>

                    <br />
                    <br />

                    <h1>Gráfico de cantidad de stock por marcas</h1>
                    <br />
                    <br />

                    <BarChart
                        width={1200}
                        height={300}
                        data={data2}
                        margin={{
                            top: 5,
                            right: 30,
                            left: 20,
                            bottom: 5,
                        }}
                    >
                        <XAxis dataKey="nombre" />
                        <YAxis domain={['auto', 'auto']} />
                        <Tooltip />
                        <Legend />
                        <Bar dataKey="Stock" fill="#725AC1" />
                    </BarChart>
                </div>
            </AuthenticatedLayout>
            
        </div>
    );
}