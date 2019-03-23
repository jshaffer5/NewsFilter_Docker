<?php
class News_model extends CI_Model {

        public function __construct()
        {
                // $this->load->database();
        }

        public function get_news($slug = FALSE)
        {
            //get articles from newsAPI.org
            return $this->get_url();
            
        }

        private function get_url($url = FALSE) { // API KEY: 597116e2bbea465fa794a86c3d6708bc
            $response = file_get_contents('https://newsapi.org/v2/top-headlines?country=co&apiKey=597116e2bbea465fa794a86c3d6708bc'); // country=co (Colombia)
            // log_message('debug', $response);
            $articles = $this->format_response($response);
            return $articles;
        }

        private function format_response($response) {
            $obj = json_decode($response, true);
            $articles = $obj["articles"];
            log_message('debug', $articles[0]["title"]);
            return $articles;
        }

    }