import React from "react";

const Categori_card2 = (info) => {
    return (
            <div className="espacio">
                <div className="service" id="servicios">
                    <div className="image">
                        <img src={`../../../img/${info.ruta}`}/>
                    </div>
                    <div className="content">
                        <a href="#">
                            <span className="title">
                                { info.titulo }
                            </span>
                        </a>
                        <p className="desc">
                            {info.descripcion}
                        </p>
                    </div>
                </div>
            </div>
    );
};

export default Categori_card2;