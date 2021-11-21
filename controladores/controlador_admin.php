<?php
include_once("conexion.php");
include_once("modelos/portafolio.php");


class ControladorAdmin{

    public function inicioAbout(){

        // Consulta de la tabla about
        $abouts= Portafolio::consultarAbout();

        include_once("vistas/about/inicioAbout.php");             

    }

     // Insertar en la tabla about
    public static function crearAbout(){
        if (isset($_POST['crear'])) {

            $titulo=$_POST['titulo'];
            $birthday=$_POST['birthday'];
            $phone=$_POST['phone'];
            $city=$_POST['city'];
            $age=$_POST['age'];
            $degree=$_POST['degree'];
            $email=$_POST['email'];
            $descripcion=$_POST['descripcion'];
            $descripcion_skills=$_POST['descripcion_skills'];
            $descripcion_facts=$_POST['descripcion_facts'];

            Portafolio::crearAbout($titulo,$birthday,$phone,$city,$age,$degree,$email,$descripcion,$descripcion_skills,$descripcion_facts);
            header("Location:?controlador=admin&accion=inicioAbout");
        }
        include_once("vistas/about/crearAbout.php");
    }

    // Borrar registros de la tabla about
    public static function borrarAbout(){
        if (isset($_GET['id'])) {
    
            $id=$_GET['id'];
            Portafolio::borrarAbout($id);
            header("Location:?controlador=admin&accion=inicioAbout");

        }
    }

// Actualizar registros de la tabla about
    public function editarAbout(){

        if (isset($_POST['editar'])) {
            
            $id=$_POST['id'];
            $titulo=$_POST['titulo'];
            $birthday=$_POST['birthday'];
            $phone=$_POST['phone'];
            $city=$_POST['city'];
            $age=$_POST['age'];
            $degree=$_POST['degree'];
            $email=$_POST['email'];
            $descripcion=$_POST['descripcion'];
            $descripcion_skills=$_POST['descripcion_skills'];
            $descripcion_facts=$_POST['descripcion_facts'];

            Portafolio::editarAbout($id,$titulo,$birthday,$phone,$city,$age,$degree,$email,$descripcion,$descripcion_skills,$descripcion_facts);        
            header("Location:?controlador=admin&accion=inicioAbout");

        }

        $id=$_GET['id'];
        $buscar=(Portafolio::buscarAbout($id));
        include_once("vistas/about/editarAbout.php");
    }   

    public function about(){
        $abouts= Portafolio::consultarAbout();
        include_once("vistas/about/about.php");

    }
// *-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*


    // Consultas y gestion a resume

    public function inicioResume(){

        $resumes=PortafolioResume::consultarResume();
        include_once("vistas/resume/inicioResume.php");

    }

    // Crear registros en resumes

    public function crearResume(){

        if (isset($_POST['crear'])) {
            $description_resume=$_POST['description_resume'];
            $name_references=$_POST['name_references'];
            $description_references=$_POST['description_references'];
            $address_references=$_POST['address_references'];
            $phone_references=$_POST['phone_references'];
            $email_references=$_POST['email_references'];

            PortafolioResume::crearResume($description_resume,$name_references,$description_references,$address_references,$phone_references,$email_references);
            header("Location:?controlador=admin&accion=inicioResume");

        }

        include_once("vistas/resume/crearResume.php");
    }

    // editar registros resumes

    public function editarResume(){

        if (isset($_POST['editarResume'])) {

            $id=$_POST['id'];
            $description_resume=$_POST['description_resume'];
            $name_references=$_POST['name_references'];
            $description_references=$_POST['description_references'];
            $address_references=$_POST['address_references'];
            $phone_references=$_POST['phone_references'];
            $email_references=$_POST['email_references'];

            PortafolioResume::editarResume($id,$description_resume,$name_references,$description_references,$address_references,$phone_references,$email_references);
            header("Location:?controlador=admin&accion=inicioResume");
        }

        $id=$_GET['id'];
        $buscar=(PortafolioResume::buscarResume($id));
        include_once("vistas/resume/editarResume.php");
    }

    // borrar registros resumes

    public function borrarResume(){
        if (isset($_GET['id'])) {
    
            $id=$_GET['id'];
            PortafolioResume::borrarResume($id);
            header("Location:?controlador=admin&accion=inicioResume");

        }
    }

    public function resume(){

        include_once("vistas/resume/resume.php");
        
    }

// *-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*

    // Consultas a la tabla education_resume

    public function inicioEducation(){

        $busquedas=EducationResume::consultarEducation();
        include_once("vistas/education_resume/inicioEducation.php");

    }

    // Crear registros en la tabla education_resume

    public function crearEducation(){

        if (isset($_POST['crear_education'])) {
            $title_education=$_POST['title_education'];
            $time_education=$_POST['time_education'];
            $school_education=$_POST['school_education'];
            $description_education=$_POST['description_education'];

            EducationResume::crearEducation($title_education,$time_education,$school_education,$description_education);
            header("Location:?controlador=admin&accion=inicioEducation");
        }

        include_once("vistas/education_resume/crearEducation.php");

    }

    // Editar registros de la tabla education_resume

    public function editarEducation(){

        if (isset($_POST['editar_education'])) {

            $id=$_POST['id'];
            $title_education=$_POST['title_education'];
            $time_education=$_POST['time_education'];
            $school_education=$_POST['school_education'];
            $description_education=$_POST['description_education'];

            EducationResume::editarEducation($id,$title_education,$time_education,$school_education,$description_education);
            header("Location:?controlador=admin&accion=inicioEducation");

        }

        $id=$_GET['id'];
        $busca=(EducationResume::buscarEducation($id));

        include_once("vistas/education_resume/editarEducation.php");

    }

    // Borrar registros de la tabla education_resume

    public function borrarEducation(){

        if (isset($_GET['id'])) {
    
            $id=$_GET['id'];
            EducationResume::borrarEducation($id);
            header("Location:?controlador=admin&accion=inicioEducation");

        }

        include_once("vistas/education_resume/borrarEducation.php");

    }

// *--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
    
    // Consultar registros a la tabla experience_resume 

    public function inicioExperience(){

        $busquedas=ExperienceResume::consultarExperience();
        include_once("vistas/experience_resume/inicioExperience.php");

    }

    // Crear registros en la tabla experience_resume

    public function crearExperience(){

        if (isset($_POST['crear_experience'])) {
            $title_experience=$_POST['title_experience'];
            $time_experience=$_POST['time_experience'];
            $description_work1_experience=$_POST['description_work1_experience'];
            $description_work2_experience=$_POST['description_work2_experience'];
            $description_work3_experience=$_POST['description_work3_experience'];
            $description_work4_experience=$_POST['description_work4_experience'];

            ExperienceResume::crearExperience($title_experience,$time_experience,$description_work1_experience,$description_work2_experience,$description_work3_experience,$description_work4_experience);
            header("Location:?controlador=admin&accion=inicioExperience");
        }

        include_once("vistas/experience_resume/crearExperience.php");

    }

    // Editar registros de la tabla experience_resume

    public function editarExperience(){

        if (isset($_POST['editar_experience'])) {

            $id=$_POST['id'];
            $title_experience=$_POST['title_experience'];
            $time_experience=$_POST['time_experience'];
            $description_work1_experience=$_POST['description_work1_experience'];
            $description_work2_experience=$_POST['description_work2_experience'];
            $description_work3_experience=$_POST['description_work3_experience'];
            $description_work4_experience=$_POST['description_work4_experience'];

            ExperienceResume::editarExperience($id,$title_experience,$time_experience,$description_work1_experience,$description_work2_experience,$description_work3_experience,$description_work4_experience);
            header("Location:?controlador=admin&accion=inicioExperience");

        }

        $id=$_GET['id'];
        $crear=(ExperienceResume::buscarExperience($id));

        include_once("vistas/experience_resume/editarExperience.php");

    }

    // Borrar registros de la tabla experience_resume

    public function borrarExperience(){

        if (isset($_GET['id'])) {
    
            $id=$_GET['id'];
            ExperienceResume::borrarExperience($id);
            header("Location:?controlador=admin&accion=inicioExperience");

        }

    }

// *-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
// Controlador tabla portfolio

// Consultar registros de la tabla portfolio
    public function inicioPortfolio(){

        $busquedas=Portfolio::consultarPortfolio();
        include_once("vistas/portfolio/inicioPortfolio.php");

    }

// Insertar registros en la tabla portfolio
    public function crearPortfolio(){

        if (isset($_POST['crear_portfolio'])) {

            $desc_port=$_POST['desc_port'];
            $montajes=$_FILES['montajes']['name'];
            $marketing=$_FILES['marketing']['name'];
            $fantasia=$_FILES['fantasia']['name'];          

            Portfolio::crearPortfolio($desc_port,$montajes,$marketing,$fantasia);
            header("Location:?controlador=admin&accion=inicioPortfolio");
            
        }

        include_once("vistas/portfolio/crearPortfolio.php");

    }

// Borrar registros en la tabla portfolio
    public function borrarPortfolio(){

        if (isset($_GET['id'])) {
    
            $id=$_GET['id'];
            Portfolio::borrarPortfolio($id);
            header("Location:?controlador=admin&accion=inicioPortfolio");

        }

    }

// Editar datos de la tabla portfolio
    public function editarPortfolio(){

        if (isset($_POST['editar_portfolio'])) {

            $id=$_POST['id'];
            $desc_port=$_POST['desc_port'];
            $montajes=$_POST['montajes'];
            $marketing=$_POST['marketing'];
            $fantasia=$_POST['fantasia'];

            Portfolio::editarPortfolio($id,$desc_port,$montajes,$marketing,$fantasia); 
            header("Location:?controlador=admin&accion=inicioPortfolio");
            
        }

        $id=$_GET['id'];
        $busca=(Portfolio::buscarPortfolio($id));

        include_once("vistas/portfolio/editarPortfolio.php");

    }

    public function portfolio(){

        include_once("vistas/portfolio/portfolio.php");
        
    }

    public function portfolio_details(){
        include_once("vistas/portfolio/portfolio-details.php");
    }

// *-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
// Controlador de la tabla services           

    // Consultas a la tabla services 
    public function inicioServices(){

        $busquedas=Services::consultarServices();
        include_once("vistas/services/inicioServices.php");

    }

    // Crear registros en la tabla services
    public function crearServices(){

        if (isset($_POST['crear_services'])) {
            $description_services=$_POST['description_services'];
            $name_services=$_POST['name_services'];
            $resume_services=$_POST['resume_services'];

            Services::crearServices($description_services,$name_services,$resume_services);
            header("Location:?controlador=admin&accion=inicioServices");
        }

        include_once("vistas/services/crearServices.php");

    }

    // Editar registros de la tabla services
    public function editarServices(){

        if (isset($_POST['editar_services'])) {
            $id=$_POST['id'];
            $description_services=$_POST['description_services'];
            $name_services=$_POST['name_services'];
            $resume_services=$_POST['resume_services'];

            Services::editarServices($id,$description_services,$name_services,$resume_services);
            header("Location:?controlador=admin&accion=inicioServices");
        }

        $id=$_GET['id'];
        $busca=(Services::buscarServices($id));
        include_once("vistas/services/editarServices.php");

    }

    // Borrar registros de la tabla services
    public function borrarServices(){

        if (isset($_GET['id'])) {
    
            $id=$_GET['id'];
            Services::borrarServices($id);
            header("Location:?controlador=admin&accion=inicioServices");

        }

    }

    public function services(){

        include_once("vistas/services/services.php");
        
    }

// *-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*

    public function contact(){

        include_once("vistas/contact/contact.php");
        
    }

// *-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
// Controlador de controladores(Valga la redundancia)

public function inicioAdmin(){
    include_once("vistas/admin/administracion.php");
}

}

?>