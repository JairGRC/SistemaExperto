test :- write( 'jhan gutierrez flores' ).

:-dynamic carreras/1.

%%%%% BASE_DE_CONOCIMIENTO

%%%% Declarando todas las carreras

%CIENCIAS AGROPECUARIAS
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


%%%% Reglas para ir preguntando por los carreras

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
preguntaCirujano_Dentista(Cirujano_Dentista):-
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


descripcion_Ingeniero_Agricola(X):-descripcion(X,Y),write(Y).
descripcion(Ingeniero_Agricola,'La ingeniería agrícola es aquella en la que se aplica la ciencia y tecnología en los ámbitos de las explotaciones relacionadas con la agricultura, tanto extensivas como intensivas, la industria agroalimentaria, el desarrollo de maquinaria, motores y tecnología agrícola, la jardinería y el paisajismo, procurando las mejores condiciones sociales, económicas, ecológicas y cuidado del medio ambiente.').
descripcion_Ingeniero_Zooctenista(X):-descripcion1(X,Y),write(Y).
descripcion1(Ingeniero_Zooctenista,'Los ingenieros zootecnistas o zootecnistas son personas con capacidad de observar y analizar holísticamente todos los fenómenos involucrados con la producción animal, mejoramiento genético, pastos y forrajes, reproducción animal, sanidad preventiva, nutrición animal y economía animal.').
descripcion_Ingeniero_Agronomo(X):-descripcion2(X,Y),write(Y).
descripcion2(Ingeniero_Agronomo,'El ingeniero agrónomo se encarga de sacarle provecho al suelo, al agua, al clima y al hombre, sin dañarlos. De esta manera genera alimentos que beneficiarán al desarrollo de la sociedad”, indicó este analista en el Ministerio de Agricultura (Minag). Según este profesional, todo aquel que quiera estudiar ingeniería agrónoma deberá tener cierta afición por la biología, la geografía y la matemática.').
descripcion_Ingeniero_Informatico(X):-descripcion3(X,Y),write(Y).
descripcion3(Ingeniero_Informatico,'La ingeniería informática es la rama de la ingeniería que aplica los fundamentos de la ciencia de la computación, la ingeniería en computadores, la ingeniería de sistemas de información, la ingeniería de software y la ingeniería de redes y comunicaciones, para el desarrollo de soluciones integrales de cómputo y comunicaciones, capaces de procesar información de manera automática.').
descripcion_Ingeniero_Estadistico(X):-descripcion4(X,Y),write(Y).
descripcion4(Ingeniero_Estadistico,'La Ingeniería Estadística es una carrera profesional dirigida al estudio de fenómenos naturales, sociales e industriales a través de la formulación de modelos estadísticos.').
descripcion_Licenciado_en_Fisica(X):-descripcion5(X,Y),write(Y).
descripcion5(Licenciado_en_Fisica,'Los físicos estudian el funcionamiento de la Tierra y el universo. Ayudan a comprender desde los orígenes del universo hasta las diminutas partículas de las que estamos hechos. Muchos físicos aplican sus conocimientos a resolver problemas y crear productos útiles de un amplio abanico de ámbitos como la tecnología médica y la aeroespacial, la meteorología y el medio ambiente.').
descripcion_Licenciado_en_Matematicas(X):-descripcion6(X,Y),write(Y).
descripcion6(Licenciado_en_Matematicas,'La Licenciatura en Matemáticas es la carrera que forma profesionistas con una base científica sólida con capacidad para aplicar conocimientos y destrezas adquiridas en la industria u organizaciones donde es necesario el análisis de datos, la optimización de procesos, la solución de problemas complejos y el proponer y validar modelos matemáticos de situaciones teóricas y prácticas congruentes con la realidad observada.').
descripcion_Biologo(X):-descripcion7(X,Y),write(Y).
descripcion7(Biologo,'Los biólogos estudian todos los seres vivos, desde las plantas y animales hasta los microorganismos, y el modo en que estos se relacionan entre sí y con el medio ambiente. Muchos biólogos usan sus descubrimientos para resolver problemas o desarrollar nuevos productos y procesos. La biología es una materia muy amplia y abarca muchas especialidades.').
descripcion_Biologo_Microbiologo(X):-descripcion8(X,Y),write(Y).
descripcion8(Biologo_Microbiologo,'Los microbiólogos estudian la biología y la química de los microbios. Aplican sus conocimientos para resolver problemas en áreas como la agricultura, la producción de alimentos, la industria del agua, la medicina y los productos farmacéuticos, y se encargan de gestionar y proteger el medio ambiente.').
descripcion_Biologo_Pesquero(X):-descripcion9(X,Y),write(Y).
descripcion9(Biologo_Pesquero,'El Biólogo Pesquero se dedica al estudio de los seres vivos del medio acuático, con capacidad crítica. Desarrollará competencias para solucionar problemas de los recursos pesqueros y los ecosistemas acuáticos de las diferentes empresas e instituciones del área pesquera y ambiental. Analiza y propone políticas de desarrollo pesquero, monitorea los recursos pesqueros comerciales con criterios sustentables, evalúa los procesos productivos promoviendo el cultivo de organismos acuáticos y la transformación de estos como fuente de trabajo y alimentación.').
descripcion_Licenciado_en_Administracion(X):-descripcion10(X,Y),write(Y).
descripcion10(Licenciado_en_Administracion,'La carrera de Administración presenta una gama de conocimientos teóricos y prácticos que te permitirán desarrollarte en cualquier tipo de empresa. La Administración es una disciplina que busca la gestión eficiente de recursos. Sean estos humanos, financieros o materiales para conseguir sostenibilidad y crecimiento.').
descripcion_Contador_Publico(X):-descripcion11(X,Y),write(Y).
descripcion11(Contador_Publico,'Un contador público  es un profesional que ejerce la disciplina de la contabilidad o contaduría dentro de un ámbito económico. Habitualmente, se desarrolla dentro de empresas, organizaciones e incluso para ayudar personas en sus finanzas personales o sus empresas.').
descripcion_Economista(X):-descripcion12(X,Y),write(Y).
descripcion12(Economista,'Un economista es aquella persona que estudia y analiza tanto las causas como consecuencias de los fenómenos económicos que involucran costos y beneficios, a través del cual estructura, interpreta y elabora modelos y leyes').
descripcion_inicial(X):-descripcion13(X,Y),write(Y).
descripcion13(inicial,'La Educación Inicial, constituye el primer nivel del sistema educativo y está destinada a brindar atención integral al niño menor de seis años, con la participación activa de los padres de familia y de la comunidad, por cuanto se considera que la influencia del entorno en el niño es un aspecto decisivo, para la formación de su personalidad.').
descripcion_primaria(X):-descripcion14(X,Y),write(Y).
descripcion14(primaria,'La Licenciatura en Educación Primaria forma profesionales con una visión integral de los procesos educativos y capacitados para la planear, administrar, dirigir, supervisar y evaluar el proceso de la educación.').
descripcion_secundaria(X):-descripcion15(X,Y),write(Y).
descripcion15(secundaria,'Esta carrera apunta a la formación integral de los y las adolescentes como personas y como futuros sujetos productivos en una serie de competencias generales y específicas en el campo humanístico y científico, así como en el desarrollo de actitudes y valores.').
descripcion_ccomunicacion(X):-descripcion16(X,Y),write(Y).
descripcion16(ccomunicacion,'Las Ciencias de la Comunicación son una rama de las ciencias sociales cuyo objetivo principal es estudiar, analizar y discutir los fenómenos relacionados a la transmisión de información, a su vez su principal objeto de estudio es la manera en la que los humanos llevamos a cabo nuestro proceso comunicativo.').
descripcion_Medico_Cirujano(X):-descripcion17(X,Y),write(Y).
descripcion17(Medico_Cirujano,'El Médico Cirujano es un profesional formado para ofrecer servicios de medicina general de alta calidad, capaz de atender integralmente, tanto desde el punto de vista individual, familiar o comunitario las necesidades de promoción, prevención, recuperación y/o rehabilitación de la salud').
descripcion_Cirujano_Dentista(X):-descripcion18(X,Y),write(Y).
descripcion18(Cirujano_Dentista,'Su labor se enfoca hacia la solución de: caries dental, enfermedad periodontal (tejidos de sostén del diente), malposiciones dentarias, alteraciones de la articulación temporomandibular, cáncer bucal y malformaciones de labio y paladar.').
descripcion_Antropologo_Social(X):-descripcion19(X,Y),write(Y).
descripcion19(Antropologo_Social,'Un antropólogo social estudia la cultura y las instituciones sociales en diversos grupos humanos, ya sean cazadores, recolectores, horticultores, campesinos, obreros, agentes de bolsa, industriales, etcétera.').
descripcion_Trabajador_Social(X):-descripcion20(X,Y),write(Y).
descripcion20(Trabajador_Social,'El trabajo social es una profesión y ciencia social basada en la práctica y una disciplina académica que promueve el cambio y el desarrollo social, la cohesión social, el fortalecimiento y la liberación de las personas.').
descripcion_Licenciado_En_Turismo(X):-descripcion21(X,Y),write(Y).
descripcion21(Licenciado_En_Turismo,'El Licenciado en Turismo es un profesionista altamente competitivo para planificar espacios turísticos, para dirigir y fortalecer la competitividad y calidad de empresas y organizaciones, principalmente, de gestión y operación en servicios de alojamiento, de alimentos y bebidas y las relacionadas con servicios de viajes.').
descripcion_Licenciado_En_Historia(X):-descripcion22(X,Y),write(Y).
descripcion22(Licenciado_En_Historia,'La Licenciatura en Historia es una carrera que tiene como objetivo en el estudio detallado y crítico del desarrollo de los acontecimientos históricos políticos, sociales, artísticos, naturales, económicos, de gran y pequeña escala para comprender mejor la actualidad a través de la revisión del pasado.').
descripcion_Abogado(X):-descripcion23(X,Y),write(Y).
descripcion23(Abogado,'El Derecho es un grupo de reglamentaciones, leyes y resoluciones que se enmarcan en un sistema de instituciones, principios y normas que regulan la conducta y las relaciones de las personas, tanto físicas como jurídicas, con el fin de alcanzar el bien común, la seguridad y la justicia.').
descripcion_Enfermero(X):-descripcion24(X,Y),write(Y).
descripcion24(Enfermero,'La carrera de Enfermería se basa en estudiar el cuidado de la enfermedad del ser humano así como los procesos biológicos, psicológicos, epidemiológicos, administrativos y técnicos para su trato integral.').
descripcion_Quimico_Farmaceutico(X):-descripcion25(X,Y),write(Y).
descripcion25(Quimico_Farmaceutico,'El Químico Farmacéutico podrá planificar, proyectar, instalar, poner en marcha, dirigir y controlar los procesos de producción y control de calidad, tanto de los medicamentos, como de los productos fabricados por la industria cosmética.').
descripcion_Ingeniero_Industrial(X):-descripcion26(X,Y),write(Y).
descripcion26(Ingeniero_Industrial,'La Ingeniería Industrial es la rama que se ocupa de la optimización de procesos y recursos humanos, técnicos e informativos; así como el manejo de los sistemas de producción, llevando a su organización a ser más competitiva y sostenible.').





%% Preguntando

pregunta(X):-preguntando('',X).
preguntando(Incognita,X):-write(Incognita),write(' '),write(X),write(' '),write(',').










