import React, { useEffect, useState } from "react";
import Product_card from "../Productos/Product_card";

function Product( props ){
	console.log('props', props);
	const [productdef,setProductdef] = useState([]);
	
	var http;
	useEffect (() => {
		if (props.productos && !props.modelo) {
			if (props.marca) {
				var productos = [];
				if (props.marca === "todos") {
					for (let producto of props.productos) {
						productos.push(producto);
					}
				}
				for (let producto of props.productos) {
					if (producto.marca_id == props.marca && props.modeloselect == null || producto.modelo == props.modeloselect) {
						productos.push(producto);
					}
				}
				setProductdef(productos);
			} else {

				setProductdef(props.productos);
			}
		} else {
			if (!http) {
				http = new XMLHttpRequest();
			}
		
			var url = "../../../../apiPropietaria.php?modelo="+ props.modelo;
		
			http.open('get', url, true);
		
			http.onreadystatechange = recoger;
		
			http.send();
		}
	}, [props]);

	

	function recoger() {
		if (http.readyState == 4) {
			if (http.status == 200) {
				setProductdef(JSON.parse(http.responseText).items);
				console.log('holaa',productdef);

			}
		}
	}	
    return(
        <div>	
			<div className="products">
			{productdef.map((product) => (
				<Product_card
					key={product.id} 
					id={product.id}
					ruta={product.imagen}
					titulo={product.modelo}
					almacenamiento={product.almacenamiento}
					ram={product.ram}
					precio={product.precio}
					descripcion={product.descripcion}
				/>	
				))}

				
			</div>
			
		</div>
    );
}
export default Product;
