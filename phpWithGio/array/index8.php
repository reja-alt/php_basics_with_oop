<?php
    use App\Config;
    // $array[] = 'item1';
    // echo '<pre>';
    // print_r($array);

    // $arrayList[][][] = 'item1';
    // echo '<pre>';
    // print_r($arrayList);

    class UserCollection implements ArrayAccess {
        protected $_conn;
       
        protected $_requiredParams = ['username','password','email'];
       
        public function __construct() {
            $config = new Configuration();
            //    GoalKicker.com – PHP Notes for Professionals 76
            $connectionParams = [
            //your connection to the database
            ];
        
            $this->_conn = DriverManager::getConnection($connectionParams, $config);
        }
       
        protected function _getByUsername($username) {
            $ret = $this->_conn->executeQuery('SELECT * FROM `User` WHERE `username` IN (?)',
            [$username]
            )->fetch();
        
            return $ret;
        }
       
        // START of methods required by ArrayAccess interface
        public function offsetExists($offset) {
            return (bool) $this->_getByUsername($offset);
        }
        
        public function offsetGet($offset) {
            return $this->_getByUsername($offset);
        }

        public function offsetSet($offset, $value) {
            if (!is_array($value)) {
            throw new \Exception('value must be an Array');
        }

        $passed = array_intersect(array_values($this->_requiredParams), array_keys($value));
            if (count($passed) < count($this->_requiredParams)) {
            throw new \Exception('value must contain at least the following params: ' . implode(',', $this->_requiredParams));
            }
        $this->_conn->insert('User', $value);
        }

        public function offsetUnset($offset) {
            if (!is_string($offset)) {
            throw new \Exception('value must be the username to delete');
        }

        if (!$this->offsetGet($offset)) {
            throw new \Exception('user not found');
        }

        $this->_conn->delete('User', ['username' => $offset]);
        }
        // END of methods required by ArrayAccess interface
       }

       $users = new UserCollection();
       var_dump($users);
?>