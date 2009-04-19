<?php
class CronController extends AppController{
    var $name = 'Cron';
    var $components = array('Email');

    function run($key = null){
        if($key == '7fU9*dspdksj739874DHDR!'){
            $filename = $this->_backupDatabase();
            $this->_sendMail($filename);
        }
    }
    function _backupDatabase(){
        $connection = ConnectionManager::getInstance();
        $database = $connection->config->default;

        $user = $database['login'];
        $pass = $database['password'];
        $host = $database['host'];
        $database = $database['database'];
        $fileDir = ROOT . '/database_backups/';
        $filename = date('Y_m_d_') . $database;
        // path to mysqldump
        $mysqldump = '/usr/bin/mysqldump';
        // Change this to point to the location of your tar
        $tarCmd = '/bin/tar';

        // Dump the database
        $command = "$mysqldump -h$host -u$user -p$pass $database > " . $fileDir . $filename . '.sql';
        exec($command);
        // Archive the dump
        $command = "$tarCmd --directory $fileDir -czf " . $fileDir . $filename . '.tar.gz ' . $filename . '.sql';
        exec($command);
        // Delete the dump
        unlink($fileDir . $filename . '.sql');

        return $fileDir . $filename . '.tar.gz';
    }
    function _sendMail($attachment = null){
        $this->Email->from    = 'Books <Books@madesecure.net>';
        $this->Email->to      = 'Support <support@madesecure.com>';
        $this->Email->subject = 'Cron database backup';
        if(isset($attachment)){
            $this->Email->attachments = array($attachment);
        }
        $this->Email->send(date('Y-m-d h:m:s'));
    }
}

