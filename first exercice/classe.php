<?php
    abstract class person{
        protected $name;
        protected $email;
        
        public function __construct($name,$email) {
            $this->name = $name;
            $this->email = $email;
        }
        abstract public function getdetails(); 
    }


    class author extends person{
        private $books = [];

        public function link_book($book){
            $this->books = $book;
        }

        public function getdetails(){
            return $this->books; 
         }
    }


    class book{
        private $title;
        private $genre;
        private $authors = [];

        public function __construct($title, $genre){
            $this->title = $title;
            $this->genre = $genre;
        }

        public function retrieve_book_authors(){
           return $this->authors; 
        }

        public function linkauthors($author){
           $this->authors = $author;
        }
    }


    $book1 = new book('victor hugo', 'francais');
    $book2 = new book('phpmyadmin', 'Database');
    $book3 = new book('hrml_css', 'frontend');

    $author1 = new author('abdorrahmane', 'abdorrahmane@gmail.com');
    $author2 = new author('hamza', 'hamza@gmail.com');

    $member = new member('mohamed', 'mohamed@gmail.com');



?>