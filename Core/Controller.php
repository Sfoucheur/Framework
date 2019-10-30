<?php
    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function loadModel($name){
            $file = ROOT . 'Models/' . ucfirst($name.'Modele') . '.php';
            if (!file_exists($file)) {
                throw new modelNotFoundException;
            }
            require_once($file);
        }

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        function render($filename)
        {
            extract($this->vars);
            ob_start();
            $file = ROOT . "Views/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php';
            if (!file_exists($file)) {
                throw new viewNotFoundException;
            }
            require_once($file);
            $content = ob_get_clean();

            if ($this->layout == false)
            {
                $content;
            }
            else
            {
                require_once(ROOT . "Views/Layouts/" . $this->layout . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>