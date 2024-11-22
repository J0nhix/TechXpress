import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import ProductosView from "@/Components/productosView/Productosview";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import "./producto.css";

function Producto(props){
    if (props.auth.user) {
        const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    return(
        <div className="App">
			<AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
            </AuthenticatedLayout>
                <ProductosView producto={props.producto} user={props.auth.user} descuento={props.precioConDescuento}/>
                <Footer />
			
        </div>
    );
    } else{
        return(
            <div className="App">
                    <Nav/>
                    <ProductosView producto={props.producto} user={props.auth.user} descuento={props.precioConDescuento}/>
                    <Footer />
            </div>
        );
    }
}
export default Producto;