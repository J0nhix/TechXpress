import React from "react";
import "./css.css";
import Usuarios from '../Components/Usuarios'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function ListaUsuarios({ auth, users , admin}) {
    return (
        <div className="App">
            <AuthenticatedLayout
                user={auth.user}
                header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>} 
                admin={admin}>
                        
                <Usuarios usuarios={users}/>
            </AuthenticatedLayout>
            
        </div>
    );
}