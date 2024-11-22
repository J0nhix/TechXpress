
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Pago from "@/Components/suscribirse/Pago";
import Modalsuscripcion from "@/Components/suscribirse/modalsuscripcion";
import Footer from "@/Components/Footer";
import "../Components/Buscador/buscador.css"
import "./suscribirse.css"

function Pagoview( props ){
    const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
        return(
            <div>
                <AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
                
                </AuthenticatedLayout>
                <main>
                    <Pago data={props.pagodata}/>
                </main>
                <Footer/>
            </div>
        );
    
    }


export default Pagoview;

