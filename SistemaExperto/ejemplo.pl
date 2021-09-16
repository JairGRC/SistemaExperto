test :- write( 'jhan gutierrez flores' ).

:-dynamic carreras/1.

%%%%% BASE_DE_CONOCIMIENTO

%Declarando todas las carreras

%CiENCIAS AGROPECUARIAS
carrera(Ingeniero_Agricola).
carrera(Ingeniero_Zooctenista).
carrera(Ingeniero_Agronomo).

%CIENCIAS FISICAS Y MATEMATICAS
carrera(Ingeniero_Informatico).
carrera(Ingeniero_Estadistico).
carrera(Licenciado_en_Fisica).
carrera(Licenciado_en_Matematicas).

%CIENCIAS BIOLOGICAS
carrera(Biologo).
carrera(Biologo_Microbiologo).
carrera(Biologo_Pesquero).

%CIENCIAS_ECONOMICAS

carrera(Licenciado_en_Administracion).
carrera(Contador_Publico).
carrera(Economista).

%EDUCACION_Y_CIENCIAS_DE_LA_COMUNICACION
carrera(inicial).
carrera(primaria).
carrera(secundaria).
carrera(ccomunicacion).

%MEDICINA
carrera(Medico_Cirujano).
carrera(Cirujano_Dentista).

%CIENCIAS_SOCIALES

carrera(Antropologo_Social).
carrera(Arqueologo).
carrera(Trabajador_Social).
carrera(Licenciado_En_Turismo).
carrera(Licenciado_En_Historia).

%DERECHO_Y_CIENCIAS_POLITICAS
carrera(Abogado).

%ENFERMERIA
carrera(Enfermero).

%FARMACIA_Y_BIOQUIMICA
carrera(Quimico_Farmaceutico).

%INGENIERIA
carrera(Ingeniero_Industrial).
carrera(Ingeniero_Mecanico).
carrera(Ingeniero_Metalurgico).
carrera(Ingeniero_de_Sistemas).
carrera(Ingeniero_de_Materiales).
carrera(Ingeniero_de_Minas).
carrera(Ingeniero_Mecatronico).

%INGENIERIA_QUIMICA
carrera(Ingeniero_Quimico).
carrera(Ingeniero_Ambiental).

carrera(sin_resultado).


%Reglas para ir preguntando por los carreras

pregunta_carrera(Ingeniero_Agricola):-

    pregunta('1. ¿Tienes facilidad para entender matematica practica?'),
    pregunta('2. ¿Tienes iniciativa para resolver problemas?'),
    pregunta('3. ¿Tienes capacidad para ser servicial en el campo?').

pregunta_carrera(Ingeniero_Zooctenista):-

    pregunta('4. ¿Tienes el deseo de trabajar en cualquier region del pais?'),
    pregunta('5. ¿Tienes vocacion para la crianza de animales de granja?'),
    pregunta('6. ¿Tienes capacidad de analisis, prevencion y de solucion de problemas en el campo zootecnico?').


pregunta_carrera(Ingeniero_Agronomo):-

    pregunta('7. ¿Tienes capacidad de integracion y conciliacion agrosocial?'),
    pregunta('8. ¿Tienes manejo sustentable y produccion vegetal?'),
    pregunta('9. ¿Tienes predisposicion para realizar un buen manejo y conservacion de los suelos agricolas?').



%Descripcion de cada carrera
:- discontiguous descripcion/2.


descripcion_carrera(X):-descripcion(X,Y),write(Y).
descripcion(Ingeniero_Agricola,'La ingeniería agrícola es aquella en la que se aplica la ciencia y tecnología en los ámbitos de las explotaciones relacionadas con la agricultura, tanto extensivas como intensivas, la industria agroalimentaria, el desarrollo de maquinaria, motores y tecnología agrícola, la jardinería y el paisajismo, procurando las mejores condiciones sociales, económicas, ecológicas y cuidado del medio ambiente.').
descripcion(Ingeniero_Zooctenista,'Los ingenieros zootecnistas o zootecnistas son personas con capacidad de observar y analizar holísticamente todos los fenómenos involucrados con la producción animal, mejoramiento genético, pastos y forrajes, reproducción animal, sanidad preventiva, nutrición animal y economía animal.').
%Preguntadno

pregunta(X):-preguntando('',X).
preguntando(Incognita,X):-write(Incognita),write(' '),write(X),write(' '),write(',').










