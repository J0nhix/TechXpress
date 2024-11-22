import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Main from "@/Components/productosView/Main";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import "./producto.css";

function Relojes( props ){
    if (props.auth.user) {
        const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    return(
        <div className="App">
			<AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
                <Main productos={props.productos} marcas={props.marcas}/>
                <Footer />
            </AuthenticatedLayout>
			
        </div>
    );
    } else{
        return(
            <div className="App">
                    <Nav/>
                    <Main productos={props.productos} marcas={props.marcas}/>
                    <Footer />
            </div>
        );
    }
}
export default Relojes;