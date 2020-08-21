<?php
    /**
     * Classe Notícia
     * Desenvolvida em aulas no Curso Técnico em Informática do CIMOL
     * @author Artur arturkontzm@gmail.com
     * @version 0.1
     * @access public
     * @copyright GPL 2020, Inf63
     * @since 09/07/2020
     */
    class Noticia{
        /**
         * @access private
         * @name id
         */
        private $id;
        /**
         * @access private
         * @name titulo
         */
        private $titulo;
        /**
         * @access private
         * @name descricao
         */
        private $descricao;
        /**
         * @access private
         * @name comentarios
         */
        private $comentarios;
        /**
         * @access private
         * @name data
         */
        private $data;
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
        public function setTitulo($titulo){
            $this->titulo=$titulo;
        }
        
        /**
         * @access public
         * @return String
         */
        public function getTitulo(){
            return $this->titulo;
        }

        /**
         * @access public
         * @param String
         */
        public function setDescricao($descricao){
            $this->descricao=$descricao;
        }
        
        /**
         * @access public
         * @return String
         */
        public function getDescricao(){
            return $this->descricao;
        }

        /**
         * @access public
         * @param String
         */
        public function setComentarios($comentarios){
            $this->comentarios=$comentarios;
        }
        
        /**
         * @access public
         * @return String
         */
        public function getComentarios(){
            return $this->comentarios;
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

        /**
         * Método responsável por carregar a página inícial
         * @access public
         * @author Artur
         * @since 09/07/2020
         */
        public function index(){
            $this->listar();
        }

        /**
         * Método responsável por listar as notícias
         * @access public
         * @author Artur
         * @since 09/07/2020
         */
        public function listar(){
            include HOME_DIR."view/paginas/noticias/noticias.php";
        }

    }
?>