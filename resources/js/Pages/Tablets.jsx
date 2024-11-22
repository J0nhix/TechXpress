import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Main from "@/Components/productosView/Main";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import "./producto.css";
import "./footer-invitado.css";

function Tablets( props ){
    if (props.auth.user) {
        const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    return(
        <div className="App">
			<AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
                <Main productos={props.productos} marcas={props.marcas}/>
                <footer className="footer-invitado">
                    <Footer />
                </footer>
            </AuthenticatedLayout>
			
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
export default Tablets;