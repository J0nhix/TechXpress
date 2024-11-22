
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Modalsuscripcion from "@/Components/suscribirse/modalsuscripcion";
import Footer from "@/Components/Footer";
import "./bootstrap.css";
import "./suscribirse.css";
import "../Components/Buscador/buscador.css"



function Pagoview( props ){
    const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    console.log("stgsfyduytdu");
        return(
            <AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
                <Modalsuscripcion/>
                <Footer />
            </AuthenticatedLayout>
        );
    
    }


export default Pagoview;