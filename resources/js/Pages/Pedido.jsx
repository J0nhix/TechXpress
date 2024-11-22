import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Carrito from "@/Components/Carrito/Carrito";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import '../Pages/bootstrap.css';
import "./carrito.css";
import "../Components/Buscador/buscador.css"; 

function Pedido( props ){
    console.log('seijass', props);
    if (props.auth.user) {
        const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    return(
        <div className="App">
			<AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
                <Carrito productosacomprar = {props.productos} usuario={props.auth}/>
                <Footer />
            </AuthenticatedLayout>
			
        </div>
    );
    } else{
        return(
            <div className="App">
                <Nav/>
                <Carrito productosacomprar = {props.productos.productos}/>
                <Footer />
            </div>
        );
    }
 
}
export default Pedido;