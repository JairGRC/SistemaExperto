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

preguntaIngeniero_Agricola(Ingeniero_Agricola):-

    pregunta('1. ¿Tienes facilidad para entender matematica practica?'),
    pregunta('2. ¿Tienes iniciativa para resolver problemas?'),
    pregunta('3. ¿Tienes capacidad para ser servicial en el campo?').

preguntaIngeniero_Zooctenista(Ingeniero_Zooctenista):-

    pregunta('4. ¿Tienes el deseo de trabajar en cualquier region del pais?'),
    pregunta('5. ¿Tienes vocacion para la crianza de animales de granja?'),
    pregunta('6. ¿Tienes capacidad de analisis, prevencion y de solucion de problemas en el campo zootecnico?').


preguntaIngeniero_Agronomo(Ingeniero_Agronomo):-

    pregunta('7. ¿Tienes capacidad de integracion y conciliacion agrosocial?'),
    pregunta('8. ¿Tienes manejo sustentable y produccion vegetal?'),
    pregunta('9. ¿Tienes predisposicion para realizar un buen manejo y conservacion de los suelos agricolas?').

preguntaIngeniero_Informatico(Ingeniero_Informatico):-
    pregunta('¿Tienes habilidad para el manejo de lenguaje simbolico logico?'),
    pregunta('¿Tienes poder de abstraccion e imaginacion?'),
    pregunta('¿Tienes predisposicion para trabajar en equipo?').

preguntaIngeniero_Estadistico(Ingeniero_Estadistico):-
    pregunta('¿Tienes inclinacion por la matematica a la solucion de problemas industriales?'),
    pregunta('¿Tienes vocacion por el manejo de gran cantidad de informacion y procesarla con el apoyo de computadoras?'),
    pregunta('¿Tienes capacidad de liderazgo para interactuar en equipos de trabajo multidisciplinario?').

preguntaLicenciado_en_Fisica(Licenciado_en_Fisica):-
    pregunta('¿Tienes predisposicion para el trabajo cientifico?'),
    pregunta('¿Tienes curiosidad e interes por los fenomenos naturales?'),
    pregunta('¿Tienes ingenio y creatividad para desarrollar modelos concretos basados en aplicacion de las leyes fisicas?').
preguntaLicenciado_en_Matematicas(Licenciado_en_Matematicas):-
    pregunta('¿Tienes capacidad para la abstraccion y el pensamiento logico?'),
    pregunta('¿Tienes habilidad para el manejo de las matematicas?'),
    pregunta('¿Tienes alto grado de responsabilidad y disciplina para el trabajo?').
preguntaBiologo(Biologo):-
    pregunta('¿Tienes vocacion para las ciencias biologicas y afines?'),
    pregunta('¿Tienes identificacion con la naturaleza?'),
    pregunta('¿Tienes inquietud por investigar la dinamica de los seres vivos?').
preguntaBiologo_Microbiologo(Biologo_Microbiologo):-
    pregunta('¿Tienes aptitud para trabajar en laboratorios manipulando instrumentos?'),
    pregunta('¿Tienes vocacion para trabajar en laboratorios manipulando sustancias?'),
    pregunta('¿Tienes aptitud para trabajar en laboratorios manipulando microorganismos?').
preguntaBiologo_Pesquero(Biologo_Pesquero):- 
    pregunta('¿Tienes vocacion de servicio para investigar organismos y ambientes acuaticos?'),
    pregunta('¿Tienes capacidad  creativa, juicio critico y etica  para solucionar problemas en el sector pesquero?'),
    pregunta('¿Tienes salud fisica y mental para trabajar en ambientes acuaticos con destreza en la natacion?').
preguntaLicenciado_en_Administracion(Licenciado_en_Administracion):- 
    pregunta('¿Tienes aptitudes para ejercer el liderazgo organizacional?'),
    pregunta('¿Tienes vocacion para promover el trabajo en equipo?'),
    pregunta('¿Tienes aptitudes para asumir responsabilidades en la toma de decisiones?').
preguntaContador_Publico(Contador_Publico):-
    pregunta('¿Tienes aptitudes para ejercer el liderazgo personal y en grupos de trabajo?'),
    pregunta('¿Tienes vocacion para  asumir responsabilidades  en  la adopcion de decisiones?'),
    pregunta('¿Tienes habilidad matematica general, mercantil y financiera?').
preguntaEconomista(Economista):-
    pregunta('¿Tienes sentido realista y practico?'),
    pregunta('¿Tienes aptitudes y actitudes para asumir posiciones de liderazgo?'),
    pregunta('¿Tienes vision  futurista  para  proyectar politicas de largo alcance?').
preguntainicial(inicial):-
    pregunta('¿Tienes equilibrio emocional estable?'),
    pregunta('¿Tienes  expresion  adecuada  a  la  edad  de  los  ni¿os, mediante el lenguaje hablado y gestos?'),
    pregunta('¿Tienes creatividad y dinamicidad?').
preguntaprimaria(primaria):-
    pregunta('¿Tienes expresion adecuada a la edad de los ni¿os, mediante el lenguaje hablado, escrito y gestos?'),
    pregunta('¿Tienes sensibilidad social y artistica?'),
    pregunta('¿Tienes amabilidad y empatia?').

preguntasecundaria(secundaria):-
    pregunta('¿Tienes preocupacion por la formacion integral de la juventud?'),
    pregunta('¿Tienes facilidad de expresion oral y corporal?'),
    pregunta('¿No tienes deficiencia de audicion u otros defectos fisicos que afecten el ejercicio profesional?').

preguntaccomunicacion(ccomunicacion):-
    pregunta('¿Tienes empatia comunicacional?'),
    pregunta('¿Tienes sensibilidad y responsabilidad social?'),
    pregunta('¿Tienes habilidad para la comunicacion oral, escrita y audiovisual?').
preguntaMedico_Cirujano(Medico_Cirujano):-
    pregunta('¿Tienes vocacion de servicio ysensibilidad social?'),
    pregunta('¿Tienes buena salud fisica y mental?'),
    pregunta('¿Tienes capacidad de liderazgo y etica moral?').
preguntaMedico_Cirujano(Medico_Cirujano):-
    pregunta('¿Tienes capacidad de analisis, sintesis y evaluacion?'),
    pregunta('¿Tienes destreza manual y agudeza visual?'),
    pregunta('¿Tienes comportamiento guiado por valores morales?').
preguntaAntropologo_Social(Antropologo_Social):-
    pregunta('¿Tienes capacidad  de  analisis, observacion y descripcion del medio natural y cultural?'),
    pregunta('¿Tienes serenidad de juicio a las distintas realidades?'),
    pregunta('¿Tienes vista normal, habilidades manualesy de dibujo').
preguntaTrabajador_Social(Trabajador_Social):-
    pregunta('¿Tienes capacidad  de observacion, comprension, analisis y sintesis a problemas sociales?'),
    pregunta('¿Tienes capacidad de liderazgo?'),
    pregunta('¿Tienes vocacion de servicio y sensibilidad social?').
preguntaLicenciado_En_Turismo(Licenciado_En_Turismo):-
    pregunta('¿Tienes comprension de la naturaleza y sus motivaciones?'),
    pregunta('¿Tienes critica frente a la realidad social vigente?'),
    pregunta('¿Tienes actitud favorable haciael desarrollo sostenible?').
preguntaLicenciado_En_Historia(Licenciado_En_Historia):-
    pregunta('¿Tienes dominio del frances o ingles como segunda lengua?'),
    pregunta('¿Tienes actitud para la investigacion?'),
    pregunta('¿Tienes predisposicion para el trabajo de archivo y biblioteca?').

preguntaAbogado(Abogado):-
    pregunta('¿Tienes habilidad para la comunicacion escrita y oral?'),
    pregunta('¿Tienes habilidad para resolver problemas?'),
    pregunta('¿Tienes control de emociones?').

preguntaEnfermero(Enfermero):-
    pregunta('¿Tienes aptitud de servicio al ser humano, persona,familia y grupos comunitarios?'),
    pregunta('¿Tienes aptitud para comunicarse e interelacionarse?'),
    pregunta('¿Tienes dominio emocional asi como tener afinidad por las ciencias biologicas, psicologicas y sociales?').
preguntaQuimico_Farmaceutico(Quimico_Farmaceutico):-
    pregunta('¿Tienes vocacion por el estudio de la biologia y la quimica?'),
    pregunta('¿Tienes interes por el servicio en el  area  de  la  salud  con relacion al uso de medicamentos?'),
    pregunta('¿Tienes inclinaciones y destreza para manipular aparatos, equipos y sustancias en laboratorios?').
preguntaIngeniero_Industrial(Ingeniero_Industrial):-
    pregunta('¿Tienes aptitudes para el desarrollo de capacidades de las areas fisicas y matematicas?'),
    pregunta('¿Tienes alto potencial creativo para el dise¿o e interpretacion de procesos?'),
    pregunta('¿Tienes habilidad de ser proactivo y dinamico?').
    pregunta('¿Tienes inclinaciones y destreza para manipular aparatos, equipos y sustancias en laboratorios?').
preguntaIngeniero_Mecanico(Ingeniero_Mecanico):-
    pregunta('¿Tienes elevada aptitud analitica?'),
    pregunta('¿Tienes habilidad para representar graficamente?'),
    pregunta('¿Tienes habilidad de crear y modificar cosas?').
preguntaIngeniero_Metalurgico(Ingeniero_Metalurgico):-
    pregunta('¿Tienes habilidad  y  destreza  para  discriminacionvisual y manipulacion de equipos e instrumentos?'),
    pregunta('¿Tienes habilidad en quimica fisica y matematica?'),
    pregunta('¿Tienes capacidad de liderazgo y sentido comun?').
preguntaIngeniero_de_Sistemas(Ingeniero_de_Sistemas):-
	pregunta('¿Tienes  capacidades  analiticas   para  la  evaluacion  de problemas que plantean la realidad profesional?'),
    pregunta('¿Tienes liderazgo  para  gerenciar  los  sistemas  integrales de informacion computarizada?'),
    pregunta('¿Tienes capacidades organizativas para estructurar sistemas sociales y su interelacion comunicativa en tiempo real?').
preguntaIngeniero_de_Materiales(Ingeniero_de_Materiales):-
    pregunta('¿Tienes capacidad de abstraccion sentido logico y habilidad para discriminar actividades abstractas?'),
    pregunta('¿Tienes amplia habilidad de fisica, quimica y matematicas?'),
    pregunta('¿Tienes aptitud vocacional, coeficiente intelectual mayor al promedio?').
preguntaIngeniero_de_Minas(Ingeniero_de_Minas):-
    pregunta('¿Tienes capacidad de liderazgo y vocacion por la carrera?'),
    pregunta('¿Tienes estado fisico bueno?'),
    pregunta('¿Tienes aptitud para elaborar en las alturas de las cordilleras?').
preguntaIngeniero_Mecatronico(Ingeniero_Mecatronico):-
    pregunta('¿Tienes   elevada   aptitud   analitica   para   investigar   el mundo como es?'),
    pregunta('¿Tienes  inventiva  para  crear  el  mundo  que  nunca  has ido?'),
    pregunta('¿Tienes  capacidad  para  desarrollar  nuevas  soluciones tecnologicas?').
preguntaIngeniero_Quimico(Ingeniero_Quimico):-
    pregunta('¿Tienes buenas condiciones sensoriales y memoria?'),
    pregunta('¿Tienes capacidad deductiva?'),
    pregunta('¿Tienes capacidad para plantear soluciones de tipo practico?').
preguntaIngeniero_Ambiental(Ingeniero_Ambiental):-
    pregunta('¿Tienes capacidad para desarrollar soluciones tecnologicas limpias?'),
    pregunta('¿Tienes actitud analitica proactiva?'),
    pregunta('¿Tienes vocacion para investigar, planificar, dise¿ar y solucionar problemas sobre nuestro medio ambiente?').


%Descripcion de cada carrera
:- discontiguous descripcion/2.


descripcion_carrera(X):-descripcion(X,Y),write(Y).
descripcion(Ingeniero_Agricola,'La ingeniería agrícola es aquella en la que se aplica la ciencia y tecnología en los ámbitos de las explotaciones relacionadas con la agricultura, tanto extensivas como intensivas, la industria agroalimentaria, el desarrollo de maquinaria, motores y tecnología agrícola, la jardinería y el paisajismo, procurando las mejores condiciones sociales, económicas, ecológicas y cuidado del medio ambiente.').
descripcion(Ingeniero_Zooctenista,'Los ingenieros zootecnistas o zootecnistas son personas con capacidad de observar y analizar holísticamente todos los fenómenos involucrados con la producción animal, mejoramiento genético, pastos y forrajes, reproducción animal, sanidad preventiva, nutrición animal y economía animal.').
%Preguntadno

pregunta(X):-preguntando('',X).
preguntando(Incognita,X):-write(Incognita),write(' '),write(X),write(' '),write(',').










