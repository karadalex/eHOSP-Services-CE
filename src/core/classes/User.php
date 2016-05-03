<?php

class User {
    private $_db,
            $_data,
            $_sessionName;

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        $this->_sessionName = config_get::get('session/session_Name');
    }

    public function create($fields = array()) {
        if (!$this->_db->insert('user_registry', $fields)) {
            throw new Exception('There was a problem creating an account!');
        }
    }

    public function find($user = null) {
        if($user) {
            $field = (is_numeric($user)) ? 'user_id' : 'username';
            $data = $this->_db->get('user_registry', array($field, '=', $user));

            if($data->count()) {
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }

    public function login($username = null, $password = null) {
        $user = $this->find($username);
        // var_dump($this->data()->password);
        // var_dump(Hash::make($password, $this->data()->salt));
        if ($user) {
            if ($this->data()->password === Hash::make($password, $this->data()->salt)) {
                Session::put($this->_sessionName, $this->data()->id);
                return true;
            }
        }

        return false;
    }

    private function data() {
        return $this->_data;
    }
}
