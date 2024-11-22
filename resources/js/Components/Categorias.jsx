import React from "react";
import Categori_card from './Productos/Categori_card1';
import Categori_card2 from './Productos/Categori_card2';

function Categorias() {
    return (
        <section className="categorias">
                <div className="container">
                    <div className="mb-8">
                            <nav>
                                <div className="row"> 
                                <Categori_card dispositivo="Móviles" ruta="iphone13.png" pagina="mobiles"/>
                                <Categori_card dispositivo="Tablets" ruta="ipad.png" pagina="tablets"/>
                                </div>
                                <div className="row">
                                <Categori_card2 dispositivo="Auriculares" ruta="auriculares.avif" pagina="auriculares"/>
                                <Categori_card2 dispositivo="Portátiles" ruta="laptop.webp" pagina="portatiles"/>
                                <Categori_card2 dispositivo="Smartwatchs" ruta="watch.avif" pagina="relojes"/>
                                </div>
                            </nav>
                        </div>
                    </div>
            </section>
    );
}

export default Categorias;