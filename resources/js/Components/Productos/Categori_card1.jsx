import React from "react";

const Categori_card = (info) => {
    return (
        <div className="col-md-12 col-lg-6 mb-4">
            <a className="categoricard_link" href={`/producto/${info.pagina}`}>
                <div>
                    <div className="categori-card">
                        <div>
                            <img height="300" width="300" alt="" decoding="async" loading="lazy" sizes="100vw" src= {`img/${info.ruta}`}/>
                            <h3>{info.dispositivo}</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    );
};

export default Categori_card;