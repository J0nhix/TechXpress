import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Link, useForm, usePage } from '@inertiajs/react';
import { Transition } from '@headlessui/react';
import { useEffect, useState } from 'react';
import axios from 'axios';

export default function UpdateProfileInformation({ mustVerifyEmail, status, className = '' }) {
    const user = usePage().props.auth.user;

    const [recentlySuccessful, setRecentlySuccessful] = useState(false);
    const [processing, setProcessing] = useState(false);

   const { data, setData, patch, reset, errors, setError} = useForm({
        name: user.name,
        email: user.email,
        dni: user.dni,
        alias: user.alias,
        municipio: user.municipio,
        suscripcion: user.suscripcione_id,
        puntos: user.puntos
    });

    const [counter, setCounter] = useState(0);

    //validacion
    function validarDNI(dni) {
        // Expresión regular para validar un DNI español
        
        const regexDNI = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i;
    
        /*if (!dni || !regexDNI.test(dni)) {
            return false;
        }*/
        console.log("d");
        const numeroDNI = dni.slice(0, 8);
        const letraDNI = dni.slice(8).toUpperCase();
        const letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        const letraEsperada = letras[numeroDNI % 23];
        
        console.log(letraDNI === letraEsperada);
        if (letraDNI === letraEsperada) {
            console.log("t");
            return true;
        }else{
            console.log("f");
            return false;
        }
        //return letraDNI === letraEsperada;
    }

    const validateForm = () => {
        const errors = {};

        if (!data.name.trim()) {
            errors.name = 'El nombre es obligatorio.';
            setCounter(1);

        } else if (data.name.length > 255) {
            errors.name = 'El nombre no debe tener más de 255 caracteres.';
            setCounter(1);
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

        return errors;
    };

    const handleChange = (e) => {
        setData({
        ...data,
        [e.target.name]: e.target.value,
        });
    };

    useEffect(() => {
        return () => {
            reset('password', 'password_confirmation');
        };
    }, []);


    const submit = async (e) => {
        e.preventDefault();
        const validationErrors = validateForm();
    
        console.log('Validation Errors:', validationErrors);
    
        if (Object.keys(validationErrors).length === 0) {
            setProcessing(true);
    
            try {
                console.log('Data to be sent:', data);
                await patch(route('profile.update'));
                console.log('Data successfully sent to the server.');
                setRecentlySuccessful(true);
            } catch (error) {
                console.error('Error sending data:', error);
                setError('general', 'Error al enviar el formulario');
            } finally {
                setProcessing(false);
            }
        } else {
            setError(validationErrors);
        }
    };

    const handleDowngrade = async () => {
        setProcessing(true);
    
        try {
            await axios.post(route('profile.downgrade')); // Realiza una solicitud a la nueva ruta
            alert('Su cuenta ha vuelto al plan gratuito.')
            console.log('Usuario ha vuelto al plan gratuito.');
            window.location.href = '/dashboard';
            // Actualiza el estado o realiza otras acciones necesarias.
        } catch (error) {
            console.error('Error al realizar el downgrade:', error);
            // Maneja el error de acuerdo a tus necesidades.
        } finally {
            setProcessing(false);
        }
    };


    return (
        <section className={className}>
            <header>
                <h2 className="text-lg font-medium text-gray-900">Información de tu perfil</h2>

                <p className="mt-1 text-sm text-gray-600">
                    Actualiza la información de tu cuenta y tu correo electrónico.
                </p>
            </header>

            <form onSubmit={submit} className="mt-6 space-y-6">
                <div>
                    <InputLabel htmlFor="name" value="Nombre" />

                    <TextInput
                        id="name"
                        className="mt-1 block w-full"
                        value={data.name}
                        onChange={(e) => setData('name', e.target.value)}
                        isFocused
                        autoComplete="name"
                    />

                    <InputError className="mt-2" message={errors.name} />
                </div>

                <div>
                    <InputLabel htmlFor="email" value="Email" />

                    <TextInput
                        id="email"
                        type="email"
                        className="mt-1 block w-full"
                        value={data.email}
                        onChange={(e) => setData('email', e.target.value)}
                        autoComplete="username"
                    />

                    <InputError className="mt-2" message={errors.email} />
                </div>

                {mustVerifyEmail && user.email_verified_at === null && (
                    <div>
                        <p className="text-sm mt-2 text-gray-800">
                            Your email address is unverified.
                            <Link
                                href={route('verification.send')}
                                method="post"
                                as="button"
                                className="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Click here to re-send the verification email.
                            </Link>
                        </p>

                        {status === 'verification-link-sent' && (
                            <div className="mt-2 font-medium text-sm text-green-600">
                                A new verification link has been sent to your email address.
                            </div>
                        )}
                    </div>
                )}

                <div>
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

                <div>
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

                <div>
                    <InputLabel htmlFor="municipio" value="Municipio" />

                    <TextInput
                        id="municipio"
                        name="municipio"
                        value={data.municipio}
                        className="mt-1 block w-full"
                        autoComplete="municipio"
                        onChange={(e) => setData('municipio', e.target.value)}
                    />

                    <InputError message={errors.municipio} className="mt-2" />
                </div>

                <div>
                    <InputLabel htmlFor="suscripcion" value="Suscripcion" />

                    <TextInput
                        id="suscripcion"
                        className="mt-1 block w-full text-muted"
                        value={data.suscripcion === 1 ? 'Gratuito' : data.suscripcion === 2 ? 'Premium' : data.suscripcion === 3 ? 'Administrador' : data.suscripcion === 4 ? 'Reacondicionador' : ''}
                        onChange={(e) => setData('suscripcione_id', e.target.value)}
                        required
                        disabled
                        autoComplete="suscripcione"
                    />

                    <InputError className="mt-2" message={errors.suscripcion} />
                </div>

                <div>
                    <InputLabel htmlFor="puntos" value="Puntos" />

                    <TextInput
                        id="puntos"
                        className="mt-1 block w-full text-muted"
                        value={data.puntos}
                        onChange={(e) => setData('puntos', e.target.value)}
                        required
                        disabled
                        autoComplete="puntos"
                    />
                    <InputError className="mt-2" message={errors.puntos} />
                </div>

                <div className="flex items-center gap-4">
                    <PrimaryButton disabled={processing}>Save</PrimaryButton>

                    <Transition
                        show={recentlySuccessful}
                        enter="transition ease-in-out"
                        enterFrom="opacity-0"
                        leave="transition ease-in-out"
                        leaveTo="opacity-0"
                    >
                        <p className="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
            {/* Botón para volver al plan gratuito */}
            {data.suscripcion === 2 && (
                <div className="mt-6">
                    <PrimaryButton onClick={() => handleDowngrade()} disabled={processing}>
                        Volver al plan gratuito
                    </PrimaryButton>
                </div>
            )}
        </section>
    );
}
