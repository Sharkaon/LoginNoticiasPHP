<?php
/**
 * Classe Comentario
 * Desenvolvida em aulas no Curso Técnico em Informática do CIMOL
 * @author Artur arturkontzm@gmail.com
 * @author Cândido candido.cimol@gmail.com
 * @version 0.1
 * @access public
 * @copyright GPL 2020, Inf63
 * @since 09/07/2020
*/
class Comentario{
    /**
     * @access private
     * @name id
    */ 
    private $id;

    /**
     * @access private
     * @name comentario
    */ 
    private $comentario;
    
    /**
     * @access private
     * @name data
    */ 
    private $data;
    
    /**
     * @access private
     * @name noticia
    */ 
    private $noticia;
    
    /**
     * @access private
     * @name usuario
    */ 
    private $usuario;

    /**
     * @access public
     * @param int
    */ 
    public function setId($id){
        $this->id=$id;
    }
    
    /**
     * @access public
     * @return int
    */ 
    public function getId(){
        return $this->id;
    }

    /**
     * @access public
     * @param String
    */
    public function setComentario($comentario){
        $this->comentario=$comentario;
    }
    
    /**
     * @access public
     * @return String
    */ 
    public function getComentario(){
        return $this->comentario;
    }

    /**
     * @access public
     * @param String
    */
    public function setData($data){
        $this->data=$data;
    }
    
    /**
     * @access public
     * @return String
    */
    public function getData(){
        return $this->data;
    }

    /**
     * @access public
     * @param String
    */
    public function setNoticia($noticia){
        $this->noticia=$noticia;
    }
    
    /**
     * @access public
     * @return String
    */
    public function getNoticia(){
        return $this->noticia;
    }

    /**
     * @access public
     * @param String
    */
    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    
    /**
     * @access public
     * @return String
    */
    public function getUsuario(){
        return $this->usuario;
    }
}