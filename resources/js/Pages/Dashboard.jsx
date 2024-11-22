import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Intro from '../Components/Intro';
import CarrouselPrincipal from '../Components/CarrouselPrincipal';
import CarrouselSecundario from '../Components/CarrouselSecundario';
import Categorias from '../Components/Categorias';
import Venta from '../Components/Venta';
import NuestrosServicios from '../Components/NuestrosServicios';
import Planes from '../Components/Planes';
import Footer from '../Components/Footer';
import "./css.css";

export default function Dashboard({ productos, productosOfertas, auth }) {
    const isAdmin = auth.user && auth.user.suscripcione_id === 3;
    return (
        <div className="App">
            <AuthenticatedLayout
                user={auth.user}
                admin={isAdmin}
            >
                <Intro />
                <CarrouselPrincipal productos={productos}/>
                <CarrouselSecundario productos={productosOfertas}/>
                <Categorias />
                <Venta />
                <NuestrosServicios />
                <Planes />
                <Footer />
            </AuthenticatedLayout>
        </div>
    );
}
