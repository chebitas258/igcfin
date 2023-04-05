<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../public/css/estilos2.css">
</head>
<body>
     
    <div class="container">
        <div class="form-box">
        
            <div class="cabezal">
                <a href="https://igc.edu.pe/"><img src="https://i.ibb.co/BzkBQvd/igclogo.jpg" alt="igclogo" border="0"></a>
            </div>

    
            <form  action="../public/ingresar/registrar_datos.php" method="POST" id="datos_registrarse" class="input-group">
                <span class="e">Completa los campos requeridos con tus datos</span>
                <input type="text" class="input-field" placeholder="Usuario" name="usuario_reg" required>
                <input type="email" class="input-field" placeholder="correo electrónico" name="correo_reg" required>
                <input type="password" class="input-field" placeholder="Contraseña" name="contraseña_reg"  required>
                <input type="password" class="input-field" placeholder="Confirmar Contraseña" name="confirm_reg"  required>
                <input type="text" class="input-field" placeholder="Nombres completos" name="nombre_completo" required>
                <input type="number" class="input-field" placeholder="DNI" name="DNI" requiered>
                <input type="number" class="input-field" placeholder="Celular" name="n_celular" required>
                <input type="text" class="input-field" placeholder="Dirección de domicilio" name="domicilio" required>
            
                <select type="range" class="input-field" name="cursos" id="range" required>
                <option disabled selected="" >Selecciona el curso de tu interés</option>
                    <optgroup name="cursos" label="Diplomas de Especialización" >
                        <option value="D Financiera y Tesorería" >Diploma de Especialización en gestión Financiera y Tesorería Gubernamental</option>
                        <option value="D Administración Financiera Gubernamental" >Diploma de Especialización Administración Financiera Gubernamental</option>
                        <option value="D Finanzas Públicas" >Diploma de Especialización en Finanzas Públicas</option>
                        <option value="D Gestión y Gerencia Pública" >Diploma de Especialización en Gestión y Gerencia Pública </option>
                        <option value="D Gestión Logística y Contrataciones del Estado"  >Diploma de Especialización en Gestión Logística y Contrataciones del Estado </option>
                        <option value="D SIAF - SP" >Diploma de Especialización en el SIAF - SP </option>
                        <option value="D Gestión de Recursos Humanos" >Diploma de Especialización en Gestión de Recursos Humanos </option>
                        <option value="D Gestión y Control Patrimonial de Bienes Estatales">Diploma de Especialización en Gestión y Control Patrimonial de Bienes Estatales</option>
                        <option value="D Gestión de Almacenes" >Diploma de Especialización en Diploma de Gestión de Almacenes </option>
                        <option value="D Derecho Administrativo " >Diploma de Especialización en Derecho Administrativo </option>
                        <option value="D Derecho Penal en la Función Pública" >Diploma de Especialización en Derecho Penal en la Función Pública </option>
                        <option value="D Asistente de Gerencia" >Diploma de Especialización en Asistente de Gerencia </option>
                    </optgroup>
                    <optgroup name="cursos" label="Cursos de Especialización" >
                        <option value="Inversión Pública Invierte.pe" >Nuevo Sistema de Inversión Pública Invierte.pe</option>
                        <option value="Gestión Pública" >Gestión Pública</option>
                        <option value="Planeamiento Estratégico" >Planeamiento Estratégico</option>
                        <option value="Finanzas Públicas" >Finanzas Públicas</option>
                        <option value="Presupuesto Público por Resultados" >Presupuesto Público por Resultados</option>
                        <option value="Gestión Financiera y Operaciones de Tesorería" >Gestión Financiera y Operaciones de Tesorería</option>
                        <option value="Gestión de Contabilidad Gubernamental" >Gestión de Contabilidad Gubernamental</option>
                        <option value="Normas Internacionales de Contabilidad NICs Sector Público" >Normas Internacionales de Contabilidad NICs Sector Público</option>
                        <option value="Gestión Tributaria: Detracciones, Percepciones y Retenciones" >Gestión Tributaria: Detracciones, Percepciones y Retenciones</option>
                        <option value="Sistemas Electrónicos En La Gestión Pública" >Sistemas Electrónicos En La Gestión Pública</option>
                        <option value="Sistema Integrado de Administración Financiera SIAF" >Sistema Integrado de Administración Financiera SIAF</option>
                        <option value="Sistema Integrado de Gestión Administrativa SIGA" >Sistema Integrado de Gestión Administrativa SIGA</option>
                        <option value="Gestión Operativa y Práctica del SEACE" >Gestión Operativa y Práctica del SEACE</option>
                        <option value="Sistema De Abastecimiento Y Contrataciones Públicas" >Sistema De Abastecimiento Y Contrataciones Públicas</option>
                        <option value="Gestión del Abastecimiento Público como sistema" >Gestión del Abastecimiento Público como sistema</option>
                        <option value="Gestión de las Contrataciones del Estado" >Gestión de las Contrataciones del Estado</option>
                        <option value="Gestión y Control Patrimonial de Bienes Estatales" >Gestión y Control Patrimonial de Bienes Estatales</option>
                        <option value="Administración de Almacenes" >Administración de Almacenes</option>
                        <option value="Gestión de Obras Públicas" >Gestión de Obras Públicas</option>
                        <option value="Auditoria Y Control Gubernamental" >Auditoria Y Control Gubernamental</option>
                        <option value="Gestión de Control Interno" >Gestión de Control Interno</option>
                        <option value="Control Previo y su Fiscalización en la Gestión Pública" >Control Previo y su Fiscalización en la Gestión Pública</option>
                        <option value="Delitos de Corrupción en la Administración Pública" >Delitos de Corrupción en la Administración Pública</option>
                        <option value="Ética y Ley de Transparencia en la Función Pública" >Ética y Ley de Transparencia en la Función Pública</option>
                        <option value="Derecho Administrativo Público" >Derecho Administrativo Público</option>
                        <option value="Derecho Administrativo" >Derecho Administrativo</option>
                        <option value="Procedimiento Administrativo General" >Procedimiento Administrativo General</option>
                        <option value="Derecho Administrativo y el Proceso Contencioso Administrativo" >Derecho Administrativo y el Proceso Contencioso Administrativo</option>
                        <option value="Gestión del Fedatario Gubernamental" >Gestión del Fedatario Gubernamental</option>
                        <option value="Gestión De Recursos Humanos Y Servicio Civil" >Gestión De Recursos Humanos Y Servicio Civil</option>
                        <option value="Régimen Disciplinario y Procedimiento Sancionador" >Régimen Disciplinario y Procedimiento Sancionador</option>
                        <option value="Sistemas Pensionarios, Beneficios Sociales en los Regímenes Laborales" >Sistemas Pensionarios, Beneficios Sociales en los Regímenes Laborales</option>
                        <option value="Procesos Administrativos Disciplinarios" >Procesos Administrativos Disciplinarios</option>
                        <option value="Formulación de los Documentos de Gestión: ROF-MOF-CAP-MAPROS" >Formulación de los Documentos de Gestión: ROF-MOF-CAP-MAPROS</option>
                        <option value="Gestión de Planillas Electrónicas" >Gestión de Planillas Electrónicas</option>
                        <option value="Cursos De Habilidades Blandas" >Cursos De Habilidades Blandas</option>
                        <option value="Redacción Administrativa de Documentos" >Redacción Administrativa de Documentos</option>
                        <option value="Gestión Documentaría y Tecnología de Archivos" >Gestión Documentaría y Tecnología de Archivos</option>
                        <option value="Liderazgo, Motivación y Gestión de Equipos" >Liderazgo, Motivación y Gestión de Equipos</option>
                        <option value="Asistentes de Gerencia y Alta Dirección" >Asistentes de Gerencia y Alta Dirección</option>
                        <option value="Gestión Empresarial" >Gestión Empresarial</option>
                        <option value="Gestión Laboral" >Gestión Laboral</option>
                        <option value="Administración Logística" >Administración Logística</option>
                        <option value="Gestión de Finanzas" >Gestión de Finanzas</option>
                        <option value="Gestión Tributaria" >Gestión Tributaria</option>
                        <option value="Gestión de Recursos Humanos" >Gestión de Recursos Humanos</option>
                        <option value="Seguridad y Salud en el Trabajo Administrativo" >Seguridad y Salud en el Trabajo Administrativo</option>
                        <option value="Ofimática">Ofimática</option>
                        
                    </optgroup>

                    <optgroup name="cursos" label="Programa In-House" >
                        <option value="IH Inversión Pública Invierte.pe" >Nuevo Sistema de Inversión Pública Invierte.pe</option>
                        <option value="IH Gestión Pública" >Gestión Pública</option>
                        <option value="IH Planeamiento Estratégico" >Planeamiento Estratégico</option>
                        <option value="IH Finanzas Públicas" >Finanzas Públicas</option>
                        <option value="IH Presupuesto Público por Resultados" >Presupuesto Público por Resultados</option>
                        <option value="IH Gestión Financiera y Operaciones de Tesorería" >Gestión Financiera y Operaciones de Tesorería</option>
                        <option value="IH Gestión de Contabilidad Gubernamental" >Gestión de Contabilidad Gubernamental</option>
                        <option value="IH Normas Internacionales de Contabilidad NICs Sector Público" >Normas Internacionales de Contabilidad NICs Sector Público</option>
                        <option value="IH Gestión Tributaria: Detracciones, Percepciones y Retenciones" >Gestión Tributaria: Detracciones, Percepciones y Retenciones</option>
                        <option value="IH Sistemas Electrónicos En La Gestión Pública" >Sistemas Electrónicos En La Gestión Pública</option>
                        <option value="IH Sistema Integrado de Administración Financiera SIAF" >Sistema Integrado de Administración Financiera SIAF</option>
                        <option value="IH Sistema Integrado de Gestión Administrativa SIGA" >Sistema Integrado de Gestión Administrativa SIGA</option>
                        <option value="IH Gestión Operativa y Práctica del SEACE" >Gestión Operativa y Práctica del SEACE</option>
                        <option value="IH Sistema De Abastecimiento Y Contrataciones Públicas" >Sistema De Abastecimiento Y Contrataciones Públicas</option>
                        <option value="IH Gestión del Abastecimiento Público como sistema" >Gestión del Abastecimiento Público como sistema</option>
                        <option value="IH Gestión de las Contrataciones del Estado" >Gestión de las Contrataciones del Estado</option>
                        <option value="IH Gestión y Control Patrimonial de Bienes Estatales" >Gestión y Control Patrimonial de Bienes Estatales</option>
                        <option value="IH Administración de Almacenes" >Administración de Almacenes</option>
                        <option value="IH Gestión de Obras Públicas" >Gestión de Obras Públicas</option>
                        <option value="IH Auditoria Y Control Gubernamental" >Auditoria Y Control Gubernamental</option>
                        <option value="IH Gestión de Control Interno" >Gestión de Control Interno</option>
                        <option value="IH Control Previo y su Fiscalización en la Gestión Pública" >Control Previo y su Fiscalización en la Gestión Pública</option>
                        <option value="IH Delitos de Corrupción en la Administración Pública" >Delitos de Corrupción en la Administración Pública</option>
                        <option value="IH Ética y Ley de Transparencia en la Función Pública" >Ética y Ley de Transparencia en la Función Pública</option>
                        <option value="IH Derecho Administrativo Público" >Derecho Administrativo Público</option>
                        <option value="IH Derecho Administrativo" >Derecho Administrativo</option>
                        <option value="IH Procedimiento Administrativo General" >Procedimiento Administrativo General</option>
                        <option value="IH Derecho Administrativo y el Proceso Contencioso Administrativo" >Derecho Administrativo y el Proceso Contencioso Administrativo</option>
                        <option value="IH Gestión del Fedatario Gubernamental" >Gestión del Fedatario Gubernamental</option>
                        <option value="IH Gestión De Recursos Humanos Y Servicio Civil" >Gestión De Recursos Humanos Y Servicio Civil</option>
                        <option value="IH Régimen Disciplinario y Procedimiento Sancionador" >Régimen Disciplinario y Procedimiento Sancionador</option>
                        <option value="IH Sistemas Pensionarios, Beneficios Sociales en los Regímenes Laborales" >Sistemas Pensionarios, Beneficios Sociales en los Regímenes Laborales</option>
                        <option value="IH Procesos Administrativos Disciplinarios" >Procesos Administrativos Disciplinarios</option>
                        <option value="IH Formulación de los Documentos de Gestión ROF MOF CAP MAPROS" >Formulación de los Documentos de Gestión: ROF-MOF-CAP-MAPROS</option>
                        <option value="IH Gestión de Planillas Electrónicas" >Gestión de Planillas Electrónicas</option>
                        <option value="IH Cursos De Habilidades Blandas" >Cursos De Habilidades Blandas</option>
                        <option value="IH Redacción Administrativa de Documentos" >Redacción Administrativa de Documentos</option>
                        <option value="IH Gestión Documentaría y Tecnología de Archivos" >Gestión Documentaría y Tecnología de Archivos</option>
                        <option value="IH Liderazgo, Motivación y Gestión de Equipos" >Liderazgo, Motivación y Gestión de Equipos</option>
                        <option value="IH Asistentes de Gerencia y Alta Dirección" >Asistentes de Gerencia y Alta Dirección</option>
                        <option value="IH Gestión Empresarial" >Gestión Empresarial</option>
                        <option value="IH Gestión Laboral" >Gestión Laboral</option>
                        <option value="IH Administración Logística" >Administración Logística</option>
                        <option value="IH Gestión de Finanzas" >Gestión de Finanzas</option>
                        <option value="IH Gestión Tributaria" >Gestión Tributaria</option>
                        <option value="IH Gestión de Recursos Humanos" >Gestión de Recursos Humanos</option>
                        <option value="IH Seguridad y Salud en el Trabajo Administrativo" >Seguridad y Salud en el Trabajo Administrativo</option>
                        <option value="IH Ofimática">Ofimática</option>


                    </optgroup>

                    <optgroup name="cursos" label="Congresos y Eventos Especiales" >
                        <option value="C Asistentes de Gerencia y Secretarias">Congreso Internacional de Asistentes de Gerencia y Secretarias</option>
                        <option value="C Secretarias y Asistentes de Gerencia 2022 2023">Congreso Nacional de Secretarias y Asistentes de Gerencia 2022-2023</option>
                        <option value="C 12 secretarias y Asistentes de Gerencia en Gestión Pública">12° Congreso Nacional de secretarias y Asistentes de Gerencia en Gestión Pública</option>
                        <option value="C Gerencia y Gestión de finanzas públicas 2019">Congreso Internacional de Gerencia y Gestión de finanzas públicas 2019</option>
                        <option value="C 11 secretarias y asistentes de gerencia en gestión pública">11° congreso nacional de secretarias y asistentes de gerencia en gestión pública</option>
                        <option value="C XIV congreso nacional de asistentes de gerencia y secretaria">XIV congreso nacional de asistentes de gerencia y secretaria</option>
                        <option value="C IV congreso nacional de presupuesto y finanzas públicos">IV congreso nacional de presupuesto y finanzas públicos</option>
                        <option value="C 3 Presupuesto Público y Gestión de Finanzas Públicas">3er Congreso Nacional de Presupuesto Público y Gestión de Finanzas Públicas </option>
                        <option value="C Gerencia y Gestión De Finanzas Públicas">2do Congreso Internacional de Gerencia y Gestión De Finanzas Públicas</option>
                        <option value="C Administración Financiera del Sector Publico">1er Congreso Nacional de Administración Financiera del Sector Publico</option>
                    </optgroup>
                </select>
                
                <select type="range" class="input-field" name="tipo_usuario" id="range"  required>
                <option disabled selected="" >Seleccione su tipo de usuario</option>
                    <optgroup label="Tipo de Usuario">
                    
                        <option value="Independiente" >Independiente</option>
                        <option value="EmpresarialCorporativo" >Empresarial/Corporativo</option>

                    </optgroup>
                    
                </select>

                <span class="o">Llena los siguientes campos si eres empresarial/corporativo</span>
                <input type="text" class="input-field2" placeholder="Direccion oficina RRHH" name="oficina_rrhh" >
                <input type="text" class="input-field2" placeholder="Nombre de Jefe de la oficina RRHH" name="jefe_rrhh" >
                <input type="number" class="input-field2" placeholder="Contacto del Jefe de RRHH" name="contacto_jefe_rrhh">
                <input type="text" class="input-field2" placeholder="Nombre de Oficina de Capacitación" name="oficina_capa">
                <input type="text" class="input-field2" placeholder="Nombre del Jefe de Oficina de Capacitación" name="jefe_capa">
                <input type="number" class="input-field2" placeholder="Contacto del Jefe de Oficina de Capacitación" name="contacto_jefe_cap">
                <input type="checkbox" class="check-box" required><span>No soy un robot</span>
                <button type="submit" class="submit" value="$registrarse">Continuar</button>
        

            </form>
        </div>
    </div>

</body>
</html>