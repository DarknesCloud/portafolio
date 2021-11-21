<?php
// CRUD Tabla about

class Portafolio{

    public $id;
    public $titulo;
    public $birthday;
    public $phone;
    public $city;
    public $age;
    public $degree;
    public $email;
    public $descripcion;
    public $descripcion_skills;
    public $descripcion_facts;

    public function __construct($id,$titulo,$birthday,$phone,$city,$age,$degree,$email,$descripcion,$descripcion_skills,$descripcion_facts)  {
        
        $this->id=$id;
        $this->titulo=$titulo;
        $this->birthday=$birthday;
        $this->phone=$phone;
        $this->city=$city;
        $this->age=$age;
        $this->degree=$degree;
        $this->email=$email;
        $this->descripcion=$descripcion;
        $this->descripcion_skills=$descripcion_skills;
        $this->descripcion_facts=$descripcion_facts;

    }

    public static function consultarAbout(){
        $listaAbout=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM about");
        
        foreach ($sql->fetchAll() as $about) {
            $listaAbout[]=new Portafolio($about['id'],$about['titulo'],$about['birthday'],$about['phone'],$about['city'],$about['age'],$about['degree'],$about['email'],$about['descripcion'],$about['descripcion_skills'],$about['descripcion_facts']);

        }

        return $listaAbout;
    }

    public static function crearAbout($titulo,$birthday,$phone,$city,$age,$degree,$email,$descripcion,$descripcion_skills,$descripcion_facts){
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("INSERT INTO about(titulo,birthday,phone,city,age,degree,email,descripcion,descripcion_skills,descripcion_facts) VALUES(?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($titulo,$birthday,$phone,$city,$age,$degree,$email,$descripcion,$descripcion_skills,$descripcion_facts));

    }

    public static function borrarAbout($id){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM about WHERE id=?");
        $sql->execute(array($id));
    }

    public static function buscarAbout($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM about WHERE id=?");
        $sql->execute(array($id));
        $buscar=$sql->fetch();

        return new Portafolio($buscar['id'],$buscar['titulo'],$buscar['birthday'],$buscar['phone'],$buscar['city'],$buscar['age'],$buscar['degree'],$buscar['email'],$buscar['descripcion'],$buscar['descripcion_skills'],$buscar['descripcion_facts']);

    }

    public static function editarAbout($id,$titulo,$birthday,$phone,$city,$age,$degree,$email,$descripcion,$descripcion_skills,$descripcion_facts){
       
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE about SET titulo=?, birthday=?, phone=?, city=?, age=?, degree=?, email=?, descripcion=?, descripcion_skills=?, descripcion_facts=? WHERE id=?");

        $sql->execute(array($titulo,$birthday,$phone,$city,$age,$degree,$email,$descripcion,$descripcion_skills,$descripcion_facts,$id));


    }

}
// *---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
// CRUD Tabla resumes

class PortafolioResume{
    public $id;
    public $description_resume;
    public $name_references;
    public $description_references;
    public $address_references;
    public $phone_references;
    public $email_references;

    public function __construct($id,$description_resume,$name_references,$description_references,$address_references,$phone_references,$email_references){

        $this->id=$id;
        $this->description_resume=$description_resume;
        $this->name_references=$name_references;
        $this->description_references=$description_references;
        $this->address_references=$address_references;
        $this->phone_references=$phone_references;
        $this->email_references=$email_references;

    }

    public static function consultarResume(){

        $listaResume=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM resumes");

        foreach ($sql->fetchAll() as $resume) {
            $listaResume[]=new PortafolioResume($resume['id'],$resume['description_resume'],$resume['name_references'],$resume['description_references'],$resume['address_references'],$resume['phone_references'],$resume['email_references']);
        }
        return $listaResume;
    }

    public static function crearResume($description_resume,$name_references,$description_references,$address_references,$phone_references,$email_references){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO resumes(description_resume,name_references,description_references,address_references,phone_references,email_references) VALUES(?,?,?,?,?,?)");
        $sql->execute(array($description_resume,$name_references,$description_references,$address_references,$phone_references,$email_references));
    }

    public static function borrarResume($id){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM resumes WHERE id=?");
        $sql->execute(array($id));
    }

    public static function editarResume($id,$description_resume,$name_references,$description_references,$address_references,$phone_references,$email_references){

        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE resumes SET description_resume=?, name_references=?, description_references=?, address_references=?, phone_references=?, email_references=? WHERE id=?");

        $sql->execute(array($description_resume,$name_references,$description_references,$address_references,$phone_references,$email_references,$id));

    }

    public static function buscarResume($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM resumes WHERE id=?");
        $sql->execute(array($id));
        $buscar=$sql->fetch();

        return new PortafolioResume($buscar['id'],$buscar['description_resume'],$buscar['name_references'],$buscar['description_references'],$buscar['address_references'],$buscar['phone_references'],$buscar['email_references']);

    }

}

// *---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
// CRUD Tabla education_resume

class EducationResume{

    public $id;
    public $title_education;
    public $time_education;
    public $school_education;
    public $description_education;

    public function __construct($id,$title_education,$time_education,$school_education,$description_education){

        $this->id=$id;
        $this->title_education=$title_education;
        $this->time_education=$time_education;
        $this->school_education=$school_education;
        $this->description_education=$description_education;

    }

    public function consultarEducation(){

        $listaEducation=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM education_resume");

        foreach ($sql->fetchAll() as $education) {
            $listaEducation[]=new EducationResume($education['id'],$education['title_education'],$education['time_education'],$education['school_education'],$education['description_education']);
        }

        return $listaEducation;

    }

    public function crearEducation($title_education,$time_education,$school_education,$description_education){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO education_resume(title_education,time_education,school_education,description_education) VALUES(?,?,?,?)");
        $sql->execute(array($title_education,$time_education,$school_education,$description_education));
    }

    public function borrarEducation($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM education_resume WHERE id=?");
        $sql->execute(array($id));

    }

    public function buscarEducation($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM education_resume WHERE id=?");
        $sql->execute(array($id));
        $busca=$sql->fetch();

        return new EducationResume($busca['id'],$busca['title_education'],$busca['time_education'],$busca['school_education'],$busca['description_education']);

    }

    public function editarEducation($id,$title_education,$time_education,$school_education,$description_education){

        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE education_resume SET title_education=?, time_education=?, school_education=?, description_education=? WHERE id=?");

        $sql->execute(array($title_education,$time_education,$school_education,$description_education,$id));

    }

}

// *---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
// CRUD Tabla experience_resume

class ExperienceResume{

    public $id;
    public $title_experience;
    public $time_experience;
    public $description_work1_experience;
    public $description_work2_experience;
    public $description_work3_experience;
    public $description_work4_experience;

    public function __construct($id,$title_experience,$time_experience,$description_work1_experience,$description_work2_experience,$description_work3_experience,$description_work4_experience){
        
        $this->id=$id;
        $this->title_experience=$title_experience;
        $this->time_experience=$time_experience;
        $this->description_work1_experience=$description_work1_experience;
        $this->description_work2_experience=$description_work2_experience;
        $this->description_work3_experience=$description_work3_experience;
        $this->description_work4_experience=$description_work4_experience;

    }

    public function consultarExperience(){

        $listaExperience=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM experience_resume");

        foreach ($sql->fetchAll() as $experience) {
            $listaExperience[]=new ExperienceResume($experience['id'],$experience['title_experience'],$experience['time_experience'],$experience['description_work1_experience'],$experience['description_work2_experience'],$experience['description_work3_experience'],$experience['description_work4_experience']);
        }

        return $listaExperience;

    }

    public function crearExperience($title_experience,$time_experience,$description_work1_experience,$description_work2_experience,$description_work3_experience,$description_work4_experience){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO experience_resume(title_experience,time_experience,description_work1_experience,description_work2_experience,description_work3_experience,description_work4_experience) VALUES(?,?,?,?,?,?)");
        $sql->execute(array($title_experience,$time_experience,$description_work1_experience,$description_work2_experience,$description_work3_experience,$description_work4_experience));

    }

    public function borrarExperience($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM experience_resume WHERE id=?");
        $sql->execute(array($id));

    }

    public function buscarExperience($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM experience_resume WHERE id=?");
        $sql->execute(array($id));
        $busca=$sql->fetch();

        return new ExperienceResume($busca['id'],$busca['title_experience'],$busca['time_experience'],$busca['description_work1_experience'],$busca['description_work2_experience'],$busca['description_work3_experience'],$busca['description_work4_experience']);

    }

    public function editarExperience($id,$title_experience,$time_experience,$description_work1_experience,$description_work2_experience,$description_work3_experience,$description_work4_experience){

        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE experience_resume SET title_experience=?, time_experience=?, description_work1_experience=?, description_work2_experience=?, description_work3_experience=?, description_work4_experience=? WHERE id=?");

        $sql->execute(array($title_experience,$time_experience,$description_work1_experience,$description_work2_experience,$description_work3_experience,$description_work4_experience,$id));


    }

}

// *---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
// CRUD Tabla services

class Services{

    public $id;
    public $description_services;
    public $name_services;
    public $resume_services;

    public function __construct($id,$description_services,$name_services,$resume_services){

        $this->id=$id;
        $this->description_services=$description_services;
        $this->name_services=$name_services;
        $this->resume_services=$resume_services;
        
    }

    public function consultarServices(){

        $listaServices=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM services");

        foreach ($sql->fetchAll() as $experience) {
            $listaServices[]=new Services($experience['id'],$experience['description_services'],$experience['name_services'],$experience['resume_services']);
        }

        return $listaServices;

    }

    public function crearServices($description_services,$name_services,$resume_services){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO services(description_services,name_services,resume_services) VALUES(?,?,?)");
        $sql->execute(array($description_services,$name_services,$resume_services));

        
    }

    public function borrarServices($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM services WHERE id=?");
        $sql->execute(array($id));
        
    }

    public function buscarServices($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM services WHERE id=?");
        $sql->execute(array($id));
        $busca=$sql->fetch();

        return new Services($busca['id'],$busca['description_services'],$busca['name_services'],$busca['resume_services']);
        
    }

    public function editarServices($id,$description_services,$name_services,$resume_services){

        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE services SET description_services=?, name_services=?, resume_services=? WHERE id=?");

        $sql->execute(array($description_services,$name_services,$resume_services,$id));
        
    }

}

// *---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*
// CRUD Tabla portfolio

class Portfolio{

    public $id;
    public $desc_port;
    public $montajes;
    public $marketing;
    public $fantasia;

    public function __construct($id,$desc_port,$montajes,$marketing,$fantasia){
        
        $this->id=$id;
        $this->desc_port=$desc_port;
        $this->montajes=$montajes;
        $this->marketing=$marketing;
        $this->fantasia=$fantasia;

    }

    public function consultarPortfolio(){

        $listaImages=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM portfolio");

        foreach ($sql->fetchAll() as $experience) {
            $listaImages[]=new Portfolio($experience['id'],$experience['desc_port'],$experience['montajes'],$experience['marketing'],$experience['fantasia']);
        }

        return $listaImages;

    }

    public function crearPortfolio($desc_port,$montajes,$marketing,$fantasia){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO portfolio(desc_port,montajes,marketing,fantasia) VALUES(?,?,?,?)");
        $sql->execute(array($desc_port,$montajes,$marketing,$fantasia));


    }

    public function borrarPortfolio($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM portfolio WHERE id=?");
        $sql->execute(array($id));

    }

    public function buscarPortfolio($id){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM portfolio WHERE id=?");
        $sql->execute(array($id));
        $busca=$sql->fetch();

        return new Portfolio($busca['id'],$busca['desc_port'],$busca['montajes'],$busca['marketing'],$busca['fantasia']);

    }

    public function editarPortfolio($id,$desc_port,$montajes,$marketing,$fantasia){

        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("UPDATE portfolio SET desc_port=?, montajes=?, marketing=?, fantasia=? WHERE id=?");

        $sql->execute(array($desc_port,$montajes,$marketing,$fantasia,$id));
        
    }

}

?>