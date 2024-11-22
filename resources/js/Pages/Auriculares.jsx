import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Main from "@/Components/productosView/Main";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import "./footer-invitado.css";
import "./producto.css";
function Auriculares( props ){
    if (props.auth.user) {
        const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    return(
        <div className="App">
			<AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
            </AuthenticatedLayout>
            <Main productos={props.productos} marcas={props.marcas}/>
            <footer className="footer-invitado">
                        <Footer />
            </footer>
        </div>
    );
    } else{
        return(
            <div className="App">
                    <Nav/>
                    <Main productos={props.productos} marcas={props.marcas}/>
                        <footer className="footer-invitado">
                            <Footer />
                        </footer>
            </div>
        );
    }
}
export default Auriculares;