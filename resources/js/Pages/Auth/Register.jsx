import { useEffect, useState } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm, usePage } from '@inertiajs/react';

export default function Register() {
    var http;
    var documento;
    const { data,setData, post, errors, setError, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        dni: '',
        alias: '',
        municipio: ''
    });

    const [recentlySuccessful, setRecentlySuccessful] = useState(false);
    const [processing, setProcessing] = useState(false);
    const [counter, setCounter] = useState(0);


    function call(params) {
        if (!http) {
            http = new XMLHttpRequest();
        }

        var url = "https://opendata.euskadi.eus/contenidos/ds_registros/registro_entidades_locales/opendata/entidades.json";
    
        http.open('get', url, true);
    
        http.onreadystatechange = recoger;
    
        http.send();
    }


    function recoger() {
        if (http.readyState === 4) {
            if (http.status === 200) {
                documento = JSON.parse(http.responseText);
                mostrarprovincias();
            }
        }
    }

    function mostrarprovincias() {
        var provincias = document.getElementById('provincias');
        municipios.innerHTML = '';
        var index = document.createElement('option');
        index.textContent = "Seleccione su provincia";
        provincias.appendChild(index);
        var duplicados = [];
        for (let i in documento) {
            if (!duplicados.includes(documento[i].territorycode)) {
                let option = document.createElement('option');
                option.textContent = documento[i].territory;
                option.value = documento[i].territorycode;
                provincias.appendChild(option);
                duplicados.push(documento[i].territorycode);
            }
        }
            provincias.addEventListener('change', function (event) {
            mostrarmunicipios(event);
        });
    }
    
    function mostrarmunicipios(event) {
        let municipios = document.getElementById('municipios');
        municipios.innerHTML = '';

        let option = document.createElement('option');
        option.textContent = "Seleccione su municipio";
        municipios.appendChild(option);
    
        for (let i = 0; i < documento.length; i++) {
            if (documento[i].territorycode === event.target.value) {
                let opcion = document.createElement('option');
                opcion.textContent = documento[i].municipality;
                opcion.value = documento[i].municipality;
                municipios.appendChild(opcion);
            }
        }
    }
    

    //para poder validar el dni
    function validarDNI(dni) {
        // Expresión regular para validar un DNI español
        const regexDNI = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i;
      
        // Extraer el número y la letra del DNI
        const numeroDNI = dni.slice(0, 8);
        const letraDNI = dni.slice(8).toUpperCase();
      
        // Calcular la letra esperada
        const letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        const letraEsperada = letras[numeroDNI % 23];
      
        // Comparar la letra calculada con la letra del DNI
        return letraDNI === letraEsperada;
    }

    const verificarEmailEnUso = async () => {
        try {
          const response = await axios.post('/ruta/verificar-email', { email: data.email });
          if (response.data.enUso) {
            errors.email = 'Este correo electrónico ya está en uso.';
          }
        } catch (error) {
          console.error('Error al verificar el correo electrónico:', error);
        }
    };

    const validateForm = async() => {
        const errors = {};

        if (!data.name.trim()) {
            errors.name = 'El nombre es obligatorio.';
            setCounter(1);

        } else if (data.name.length > 255) {
            errors.name = 'El nombre no debe tener más de 255 caracteres.';
            setCounter(1);
        }

        if (!data.dni.trim()) {
            errors.dni = 'El DNI es obligatorio.';
            console.log("a");
            setCounter(1);
        } else if (data.dni.length != 9) {
            errors.dni = 'El DNI debe tener 9 caracteres en total.';
            console.log("b");
            setCounter(1);
        }else if(validarDNI(data.dni)===false){
            errors.dni = "El DNI está mal puesto.";
            console.log("c");
            setCounter(1);
        }

        if (!data.alias.trim()) {
            errors.alias = 'El alias es obligatorio.';
            setCounter(1);
        } else if (data.alias.length > 50) {
            errors.alias = 'El alias no puede tener más de 50 caracteres.';
            setCounter(1);
        }

        if (!data.municipio.trim()) {
            errors.municipio = 'El municipio es obligatorio.';
            setCounter(1);
        } else if (data.municipio.length > 250) {
            errors.municipio = 'El municipio no puede tener más de 250 caracteres.';
            setCounter(1);
        }

        if (Object.values(errors).length === 0) {
            setCounter(0); // Reinicia el contador en caso de validación exitosa
        }

        if (!data.email.trim()) {
            errors.email = 'El correo electrónico es obligatorio.';
            setCounter(1);
        } else if (!/^\S+@\S+\.\S+$/.test(data.email)) {
            errors.email = 'Ingresa un correo electrónico válido.';
            setCounter(1);
        } else if (data.email.length > 255) {
            errors.email = 'El correo electrónico no debe tener más de 255 caracteres.';
            setCounter(1);
        }else{
            await verificarEmailEnUso();
        }

        return errors;
    };

    const handleChange = (e) => {
        setData({
        ...data,
        [e.target.name]: e.target.value,
        });
    };

    useEffect(() => {
        call();
        return () => {
            reset('password', 'password_confirmation');
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();

        const validationErrors = validateForm();
        console.log(Object.keys(validationErrors).length);

        if (Object.keys(validationErrors).length === 0) {
            post(route('register'));
        } else {
            setError(validationErrors);
        }

        
    };

    return (
        <GuestLayout>
            <Head title="Register" />

            <form onSubmit={submit}>
                <div>
                    <InputLabel htmlFor="name" value="Name" />

                    <TextInput
                        id="name"
                        name="name"
                        value={data.name}
                        className="mt-1 block w-full"
                        autoComplete="name"
                        isFocused={true}
                        onChange={(e) => setData('name', e.target.value)}
                        
                    />

                    <InputError message={errors.name} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel htmlFor="email" value="Email" />

                    <TextInput
                        id="email"
                        type="email"
                        name="email"
                        value={data.email}
                        className="mt-1 block w-full"
                        autoComplete="username"
                        onChange={(e) => setData('email', e.target.value)}
                        
                    />

                    <InputError message={errors.email} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel htmlFor="password" value="Password" />

                    <TextInput
                        id="password"
                        type="password"
                        name="password"
                        value={data.password}
                        className="mt-1 block w-full"
                        autoComplete="new-password"
                        onChange={(e) => setData('password', e.target.value)}
                        
                    />

                    <InputError message={errors.password} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel htmlFor="password_confirmation" value="Confirm Password" />

                    <TextInput
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        value={data.password_confirmation}
                        className="mt-1 block w-full"
                        autoComplete="new-password"
                        onChange={(e) => setData('password_confirmation', e.target.value)}
                        
                    />

                    <InputError message={errors.password_confirmation} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel htmlFor="dni" value="DNI" />

                    <TextInput
                        id="dni"
                        name="dni"
                        value={data.dni}
                        className="mt-1 block w-full"
                        autoComplete="dni"
                        onChange={(e) => setData('dni', e.target.value)}
                        
                    />

                    <InputError message={errors.dni} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel htmlFor="alias" value="Alias" />

                    <TextInput
                        id="alias"
                        name="alias"
                        value={data.alias}
                        className="mt-1 block w-full"
                        autoComplete="alias"
                        onChange={(e) => setData('alias', e.target.value)}
                        
                    />

                    <InputError message={errors.alias} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel htmlFor="provincias" value="Provincia" />

                    <select
                        id="provincias"
                        name="provincias"
                        className="mt-1 block w-full"
                        autoComplete="provincias"
                        onChange={(e) => setData('provincia', e.target.value)}
                        
                    >

                    </select>

                    <InputError message={errors.direccion} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel htmlFor="municipio" value="Municipio" />

                    <select
                        id="municipios"
                        name="municipios"
                        className="mt-1 block w-full"
                        autoComplete="municipios"
                        onChange={(e) => setData('municipio', e.target.value)}
                        
                    >

                    </select>

                    <InputError message={errors.municipio} className="mt-2" />
                </div>


                <div className="flex items-center justify-end mt-4">
                    <Link
                        href={route('login')}
                        className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Ya tienes cuenta?
                    </Link>

                    <PrimaryButton className="ms-4 w-auto" disabled={processing}>
                        Register
                    </PrimaryButton>
                </div>
            </form>
        </GuestLayout>
    );
}
