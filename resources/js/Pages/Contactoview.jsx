import React from "react";
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import Contacto from "@/Components/Contacto";
import Nav from "@/Components/Nav";
import Footer from "@/Components/Footer";
import "./bootstrap.css"
import "./pago.css"
import "../Components/Buscador/buscador.css"
function Contactoview(props){
    console.log('siioioi', props);
    if (props.auth.user) {

        const isAdmin = props.auth.user && props.auth.user.suscripcione_id === 3;
    return(
        <div>
            <AuthenticatedLayout
                user={props.auth.user}
                admin={isAdmin}>
            </AuthenticatedLayout>
            <Contacto users ={props.users} pedidos={props.pedidos}/>
            <Footer/>
        </div>
    );
    }else{
        return(
            <div>
                <Nav/>
                <Contacto users ={props.users} pedidos={props.pedidos}/>
                <Footer/>
            </div>
        );
    }
}
export default Contactoview;