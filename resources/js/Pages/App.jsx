//import logo from './logo.svg';
import './App.css';
import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
//import reportWebVitals from './reportWebVitals';
import Nav from '../Components/Nav';
import Intro from '../Components/Intro'
import CarrouselPrincipal from '../Components/CarrouselPrincipal'
import CarrouselSecundario from '../Components/CarrouselSecundario'
import Categorias from '../Components/Categorias'
import Venta from '../Components/Venta'
import NuestrosServicios from '../Components/NuestrosServicios'
import Planes from '../Components/Planes'
import Footer from '../Components/Footer'
import "./css.css";

function App( props ) {
  return (
    <div className="App">
      <Nav />
      <Intro />
      <CarrouselPrincipal productos={props.productosCarrusel}/>
      <CarrouselSecundario productos={props.productosOfertas}/>
      <Categorias/>
      <Venta user={props.auth}/>
      <NuestrosServicios/>
      <Footer />
    </div>
  );
}

export default App;
