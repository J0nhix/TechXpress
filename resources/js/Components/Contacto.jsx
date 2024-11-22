import React, { useState } from "react";

function Contacto(props){
    console.log(props.pedidos.length);
    const [formulario, setFormulario] = useState({
        name: "",
        email: "",
        message: "",
      });
    
      const handleChange = (event) => {
        const { name, value } = event.target;
        setFormulario((prevFormulario) => ({
          ...prevFormulario,
          [name]: value,
        }));
      };
    
      const handleSubmit = (event) => {
        event.preventDefault();
    
        // Aquí puedes agregar la lógica de envío del formulario si es necesario
        console.log("Formulario enviado:", formulario);
    
        // Puedes reiniciar el formulario si es necesario
        setFormulario({
          name: "",
          email: "",
          message: "",
        });
      };

      
    return(
        <div>
            <section className="page-heading">
                    <div className="container">
                    <div className="row">
                        <div className="col-lg-12">
                        <div className="header-text">
                            <h1>Contáctanos</h1>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>

                <section className="more-info">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-5">
                            <div className="section-heading">
                                <h6>Más información</h6>
                                <h4>Descubre más <em>sobre nosotros</em></h4>
                            </div>
                            <p>Nuestra empresa se especializa en la compra y venta de dispositivos tecnológicos reacondicionados, incluyendo smartphones, tablets y portátiles. Nos enorgullece ofrecer productos de alta calidad y contribuir a la sostenibilidad ambiental mediante la reutilización de dispositivos.</p>
                            <ul>
                                <li>- Explora nuestras últimas ofertas y descuentos en productos reacondicionados.</li>
                                <li>- Comprometidos con la calidad y la satisfacción del cliente.</li>
                                <li>- Conoce nuestro equipo y la pasión que tenemos por la tecnología responsable.</li>
                                <li>- Únete a nuestra comunidad y sé parte del cambio hacia un consumo más consciente.</li>
                            </ul>
                        </div>
                        <div className="col-lg-6 offset-lg-1 align-self-center">
                            <div className="row">
                                <div className="col-6">
                                    <div className="count-area-content">
                                        <div className="count-digit">{props.pedidos.length}</div>
                                        <div className="count-title">Ventas realizadas</div>
                                    </div>
                                </div>
                                <div className="col-6">
                                    <div className="count-area-content">
                                        <div className="count-digit">3</div>
                                        <div className="count-title">Años de Experiencia</div>
                                    </div>
                                </div>
                                <div className="col-6">
                                    <div className="count-area-content">
                                        <div className="count-digit">{props.users.length}</div>
                                        <div className="count-title">Clientes Satisfechos</div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <section class="contact-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.3734197734157!2d-1.973322023360145!3d43.32737447344259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a54183b87fed%3A0x6b3f34b4f0c14472!2sIES%20Xabier%20Zubiri%20Manteo%20BHI!5e0!3m2!1ses!2ses!4v1707305195146!5m2!1ses!2ses" width="100%" height="420px" frameborder="0"  allowfullscreen=""></iframe>
                                    <div class="row">
                                        <div class="col-lg-4 offset-lg-1">
                                            <div class="contact-info">
                                                <div class="icon">
                                                    <a className="text-white" href="https://www.facebook.com/" target="_blank"><i className="bi bi-telephone-fill"></i></a>
                                                </div>
                                                <h4>Teléfono</h4>
                                                <span>010-020-0340</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <form id="contact"  onSubmit={ handleSubmit }>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-heading">
                                                <h6>Ponte en contacto</h6>
                                                <h4>TechXpress</h4>
                                                <p>Si tienes alguna duda sobre nosotros, haznos saberlo! O si tienes alguna queja sobre nosotros, haznos saberlo también!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                            <input
                                                type="text"
                                                name="name"
                                                id="name"
                                                placeholder="Nombre y Apellido"
                                                autoComplete="on"
                                                value={formulario.name}
                                                onChange={handleChange}
                                                required
                                            />
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <input
                                                    type="text"
                                                    name="email"
                                                    id="email"
                                                    pattern="[^ @]*@[^ @]*"
                                                    placeholder="Correo electrónico"
                                                    value={formulario.email}
                                                    onChange={handleChange}
                                                    required
                                                />
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea
                                                    name="message"
                                                    id="message"
                                                    placeholder="Comentario"
                                                    value={formulario.message}
                                                    onChange={handleChange}
                                                    required
                                                ></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit">Enviar</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <script src="assets/js/isotope.min.js"></script>
                <script src="assets/js/owl-carousel.js"></script>
                <script src="assets/js/lightbox.js"></script>
                <script src="assets/js/tabs.js"></script>
                <script src="assets/js/video.js"></script>
                <script src="assets/js/slick-slider.js"></script>
                <script src="assets/js/custom.js"></script>
        </div>
    );
}

export default Contacto;