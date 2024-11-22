import React from "react";


function Planes(){
    return(
        <section className="suscripciones" id="planes">
                <div className="plan" id="susrecomendada">
                    <div className="inner">
                        <span className="pricing">
                            <span>
                                50€ <small>/ año</small>
                            </span>
                        </span>
                        <p className="title">Premium</p>
                        <p className="info">La suscripción Premium es ideal para aquellos que desean maximizar su experiencia. Este plan incluye beneficios exclusivos para potenciar tus puntos:</p>
                        <ul className="features">
                            <li>
                                <span className="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                    </svg>
                                </span>
                                <span><strong>50%</strong> más de puntos en cada compra</span>
                            </li>
                            <li>
                                <span className="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                    </svg>
                                </span>
                                <span>Accede a ofertas exclusivas y promociones</span>
                            </li>
                            <li>
                                <span className="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                    </svg>
                                </span>
                                <span>Envíos inmediatos de tus pedidos</span>
                            </li>
                        </ul>
                        <div className="actionSuscripcion">
                            <form action={route("suscripcion")}>
                                <button className="botonsus">Suscribirse</button>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    )
}
export default Planes;