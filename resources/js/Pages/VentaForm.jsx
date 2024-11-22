import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import FormularioVenta from "@/Components/FormularioVenta";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import "./producto.css";
import "../Components/Buscador/buscador.css"

function VentaForm(props){
    console.log(props);
    const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;

    return(
        <div className="App">
			<AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
                <FormularioVenta marcas={props.marcas} productos={props.productos}/>
                <Footer />
            </AuthenticatedLayout>
        </div>
    );
}
export default VentaForm;
