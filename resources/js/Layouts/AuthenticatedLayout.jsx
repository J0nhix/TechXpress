import { useState } from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link } from '@inertiajs/react';
import Buscador from "../Components/Buscador/Buscador";

export default function Authenticated({ user, header, children, admin}) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);

    return (
        <div className="">
            <nav className="navbar navbar-expand-lg navbar-light shadow-sm" id="mainNav">
                <div className="container px-5">
                    <a className="navbar-brand fw-bold logo" href="/dashboard"><img id="logo" src="./../../img/logo.png"/></a>
                    <Buscador/>
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i className="bi-list"></i>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarResponsive">
                        <ul className="navbar-nav ms-auto me-4 my-3 my-lg-0">
                            <li className="nav-item"><a className="nav-link me-lg-3" href="/dashboard">Inicio</a></li>
                            <li className="nav-item"><a className="nav-link me-lg-3" href="#carrousel">Productos</a></li>
                            <li className="nav-item"><a className="nav-link me-lg-3" href="/producto/venta">Venta</a></li>
                            <li className="nav-item"><a className="nav-link me-lg-3" href="/contacto">Contáctanos</a></li>
                            

                        </ul>
                        <div className="botonesInicio">
                        <Dropdown>
                            <Dropdown.Trigger>
                                <button className="botonNav">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" strokeWidth="0" fill="currentColor" stroke="currentColor" className="icon">
                                        <path d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z"></path>
                                    </svg>
                                </button>
                            </Dropdown.Trigger>
                                <Dropdown.Content>
                                <Dropdown.Link href={route('profile.edit')}>Profile</Dropdown.Link>
                                {admin ? <Dropdown.Link href={route('grafico')}>Grafico</Dropdown.Link>  : ''}
                                {admin ? <Dropdown.Link href={route('usuarios')}>Usuarios</Dropdown.Link>  : ''}
                                {admin ? <Dropdown.Link href={route('productos_gestion')}>Gestionar producto</Dropdown.Link>  : ''}
                                <Dropdown.Link href={route('logout')} method="post" as="button">
                                    Log Out
                                </Dropdown.Link>
                                </Dropdown.Content>
                        </Dropdown>
                            <button className="botonNav">
                                <a href="/pedido">
                                <svg xmlns="http://www.w3.org/2000/svg" strokeLinejoin="round" strokeLinecap="round" viewBox="0 0 24 24" strokeWidth="2" fill="none" stroke="currentColor" className="icon">
                                    <circle r="1" cy="21" cx="9"></circle>
                                    <circle r="1" cy="21" cx="20"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <div className={(showingNavigationDropdown ? 'block' : 'hidden') + ' sm:hidden'}>
                    <div className="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink href={route('dashboard')} active={route().current('dashboard')}>
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <div className="pt-4 pb-1 border-t border-gray-200">
                        <div className="px-4">
                            <div className="font-medium text-base text-gray-800">{user.name}</div>
                            <div className="font-medium text-sm text-gray-500">{user.email}</div>
                        </div>

                        <div className="mt-3 space-y-1">
                            <ResponsiveNavLink href={route('profile.edit')}>Profile</ResponsiveNavLink>
                            <ResponsiveNavLink method="post" href={route('logout')} as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>

                {header && (
                <header className="bg-white shadow">
                    <div className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">{header}</div>
                </header>
            )}

            <main>{children}</main>

            
        </div>
    );
}
