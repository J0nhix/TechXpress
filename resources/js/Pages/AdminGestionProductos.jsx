import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import FormularioProductosGestion from "@/Components/AdminProductosFormView";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import "./producto.css";

function VentaForm(props){
    if (props.auth.user) {
        const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    return(
        <div className="App">
			<AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
                <FormularioProductosGestion marcas={props.marcas} productos={props.productos}/>
                <Footer />
            </AuthenticatedLayout>
			
        </div>
    );
    } else{
        return(
            <div className="App">
                    <Nav/>
                    <FormularioProductosGestion marcas={props.marcas}/>
                    <Footer />
            </div>
        );
    }
}
export default VentaForm;