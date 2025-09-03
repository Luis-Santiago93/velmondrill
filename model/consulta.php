<?php
require_once("../lib/Conexion.php");
$info=array();
$data=array();
$programa= $_POST["pPrograma"];
$db = Connection();
	
				$sql = "SELECT
                        	c_personas.NombreCompleto AS Nombre,
                        	p.Programa,
                        	DATE_FORMAT( c.Fecha, '%d/%m/%Y' ) AS Fecha,
                        	DATE_FORMAT( c.Vigencia, '%d/%m/%Y' ) AS Vigencia,
                        	e.Nombre AS Estatus,
                        	cr.Nombre AS Curso 
                        FROM
                        	t_programas AS p
                        	INNER JOIN t_controldatos AS c ON c.ProgramaID = p.ProgramaID
                        	INNER JOIN t_estatus AS e ON c.EstatusID = e.EstatusID
                        	INNER JOIN c_cursos AS cr ON c.CursoID = cr.CursoID
                        	INNER JOIN c_personas ON p.PersonaID = c_personas.PersonaID 
                        WHERE
							p.Programa = ? AND c.EstatusID=1 AND p.Activo=1
						ORDER BY
							cr.Nombre";
		$Datos = $db->query($sql,array($programa));
		while($cdatos = $db->next()) {
			
			$data = array(
				"nombre" =>$cdatos->Nombre,
				"programa" =>$cdatos->Programa,
				"estatus" =>$cdatos->Estatus,
				"fecha" =>$cdatos->Fecha,
				"vigencia" =>$cdatos->Vigencia,
				"curso" =>$cdatos->Curso);
			array_push($info,$data);
		} 
		
header('Content-type: application/json; charset=utf-8');
echo json_encode($info);
exit();
?>