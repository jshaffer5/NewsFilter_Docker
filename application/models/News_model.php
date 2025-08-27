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
            $context = stream_context_create([
                'http' => [
                    'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36\r\n"
                ]
            ]);
            $response = file_get_contents('http://newsapi.org/v2/top-headlines?country=us&apiKey=597116e2bbea465fa794a86c3d6708bc', false, $context);

            
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