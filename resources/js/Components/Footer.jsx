import React from "react";
function Footer(){
    return(
        <div>
            <footer className="bg-black text-center text-white py-5">
                <div className="">
                    <div className="text-white-50 small">
                        <p>&copy; TechXpress 2023. Todos los derechos reservados.</p>
                        <a className="text-white" href="https://www.facebook.com/" target="_blank"><i className="bi-facebook fs-3 me-3"></i></a>
                        <a className="text-white" href="https://twitter.com/" target="_blank"><i className="bi-twitter fs-3 me-3"></i></a>
                        <a className="text-white" href="https://www.linkedin.com/" target="_blank"><i className="bi-linkedin fs-3 me-3"></i></a>
                        <a className="text-white" href="https://www.instagram.com/" target="_blank"><i className="bi-instagram fs-3 me-3"></i></a>
                        <br/>
                        <a href="#!">Privacidad</a>
                        <span className="mx-1">&middot;</span>
                        <a href="#!">Términos</a>
                        <span className="mx-1">&middot;</span>
                        <a href="#!">FAQ</a>
                    </div>
                </div>
            </footer>
        </div>
    );
}
export default Footer;
