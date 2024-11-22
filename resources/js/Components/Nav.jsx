import React, { useState } from "react";
import Buscador from "./Buscador/Buscador";
import { Link, Head } from '@inertiajs/react';


function Nav() {
    return (
        <div>
            <nav className="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
                <div className="container px-5">
                    <a className="navbar-brand fw-bold logo" href="/"><img id="logo" src="./../../img/logo.png"/></a>
                    <Buscador/>
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i className="bi-list"></i>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarResponsive">
                        <ul className="navbar-nav ms-auto me-4 my-3 my-lg-0">
                            <li className="nav-item"><a className="nav-link me-lg-3" href="/">Inicio</a></li>
                            <li className="nav-item"><a className="nav-link me-lg-3" href="#carrousel">Productos</a></li>
                            <li className="nav-item"><a className="nav-link me-lg-3" href={route("login")}>Venta</a></li>
                            <li className="nav-item"><a className="nav-link me-lg-3" href="/contacto">Contáctanos</a></li>


                        </ul>
                        <div className="botonesInicio">
                            <Link href={route('login')}>
                                <button className="botonNav">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" strokeWidth="0" fill="currentColor" stroke="currentColor" className="icon">
                                        <path d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z"></path>
                                    </svg>
                                </button>
                            </Link>
                            <a href={route("login")}>
                            <button className="botonNav">
                                <svg xmlns="http://www.w3.org/2000/svg" strokeLinejoin="round" strokeLinecap="round" viewBox="0 0 24 24" strokeWidth="2" fill="none" stroke="currentColor" className="icon">
                                    <circle r="1" cy="21" cx="9"></circle>
                                    <circle r="1" cy="21" cx="20"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    );
}

export default Nav;
