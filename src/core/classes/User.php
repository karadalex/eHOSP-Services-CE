<?php

class User {
    private $_db,
            $_data,
            $_sessionName,
            $_cookieName,
            $_isLoggedIn;

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        $this->_sessionName = config_get::get('session/session_name');
        $this->_cookieName = config_get::get('remember/cookie_name');

        if (!$user) {
            if (Session::exists($this->_sessionName)) {
                $user = Session::get($this->_sessionName);

                if($this->find($user)) {
                    $this->_isLoggedIn = true;
                } else {
                    // TODO: Process Log out
                }
            }
        } else {
            $this->find($user);
        }
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

    public function login($username = null, $password = null, $remember = false) {
        // var_dump($this->data());
        // var_dump(Hash::make($password, $this->data()->salt));

        if (!$username && !$password && $this->exists()) {
            // TODO: Check whether session_id works. If not replace with id or user_id
            Session::put($this->_sessionName, $this->data()->user_id);
        } else {
            $user = $this->find($username);

            if ($user) {
                if ($this->data()->password === Hash::make($password, $this->data()->salt)) {
                    Session::put($this->_sessionName, $this->data()->user_id);

                    if($remember) {
                        $hash = Hash::unique();
                        $hashCheck = $this->_db->get('user_sessions', array('user_id', '=', $this->data()->user_id));

                        if (!$hashCheck->count()) {
                            $this->_db->insert('user_sessions', array(
                                'user_id' => $this->data()->user_id,
                                'hash' => $hash
                            ));
                        } else {
                            $hash = $hashCheck->first()->hash;
                        }

                        Cookie::put($this->_cookieName, $hash, config_get::get('remember/cookie_expiry') );
                    }

                    return true;
                }
            }
        }

        return false;
    }

    public function exists() {
        return (!empty($this->_data)) ? true : false;
    }

    public function logout() {
        $this->_db->delete('user_sessions', array('user_id', '=', $this->data()->user_id));

        Session::delete($this->_sessionName);
        Cookie::delete($this->_cookieName);
    }

    public function data() {
        return $this->_data;
    }

    public function isLoggedIn() {
        return $this->_isLoggedIn;
    }

    public function role() {
        $data = $this->_db->get('groups', array('user_id', '=', $this->data()->user_id));
        $role = $data->first()->permissions;
        return $role;
    }
}
