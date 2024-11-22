import React from "react";
import Servicios from './Servicios/Servicios';


function NuestrosServicios() {
    return (
        <section>
                <h2 id="font2">Cuenta con nuestros servicios</h2>
                <div id="servicios">
                    <Servicios ruta="enviosgratis.jpeg" titulo="Envios Gratis" descripcion="En TechXpress, nos complace ofrecer envíos gratuitos como parte de nuestro compromiso con la satisfacción del cliente. Disfruta de la conveniencia de recibir tus productos sin costo adicional a tu puerta. Consulta nuestras políticas de envío para obtener más información sobre esta oferta o descuentos especiales."/>
                    <Servicios ruta="asistente.jpeg" titulo="Asistente Personal" descripcion="Descubre la comodidad de tener tu propio asistente personal con TechXpress. Nuestro asistente personal está aquí para ayudarte en cada paso del camino, brindándote asistencia personalizada y recomendaciones adaptadas a tus necesidades. Simplifica tu vida con nuestro asistente personalizado hoy mismo."/>
                    <Servicios ruta="recompra.jpg" titulo="Recompra" descripcion="El programa de recompra de TechXpress está diseñado para premiar a nuestros clientes leales. Disfruta de descuentos exclusivos al volver a elegir nuestros productos o servicios. Cuanto más compras, más ahorras. Únete a nuestro programa de recompra y descubre las ventajas de ser parte de la familia TechXpress."/>
                    <Servicios ruta="serviciotecnico.webp" titulo="Servicio Tecnico" descripcion="En TechXpress, entendemos la importancia de un servicio técnico confiable. Nuestro equipo de expertos está dedicado a resolver cualquier problema que puedas enfrentar. Ya sea que necesites asistencia técnica, mantenimiento o reparaciones, estamos aquí para garantizar que disfrutes de la mejor experiencia."/>
                </div>

        </section>
    );
}

export default NuestrosServicios;