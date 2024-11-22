import React, { useState } from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Main from "@/Components/productosView/Main";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import "./producto.css";
const productoBusqueda = ( props ) => {
    console.log("search productos",props.productos);
    console.log("search modelo",props.modelo);
    if (props.auth) {
        const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    return(
        <div className="App">
			<AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
                <Main modelo={props.productos} productos={props.productos} marcas={props.marcas} />
                <Footer />
            </AuthenticatedLayout>
			
        </div>
    );
    } else{
        return(
            <div className="App">
                    <Nav/>
                        <Main modelo={props.modelo} productos={props.productos} marcas={props.marcas}/>
                    <Footer />
            </div>
        );
    }
};

export default productoBusqueda;