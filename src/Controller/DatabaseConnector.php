<?php
namespace Sang\Unlock\Controller;

class DatabaseConnector {
    private static DatabaseConnector $instance;
    protected string $host = '';
    protected string $username = '';
    protected string $password = '';

    private function __construct(
        string $host = 'NFQ_Database', string $username = 'nfq', string $password =  'nfq'
    )
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public static function getInstance() : DatabaseConnector {
        if (!isset(self::$instance)) {
            self::$instance = new DatabaseConnector();
        }
        return self::$instance;
    }

    public function getDatabase() : void {
      echo  "host: ".$this->host."\n";
      echo  "username: ".$this->username."\n";
      echo  "password: ".$this->password."\n";
   }

}
