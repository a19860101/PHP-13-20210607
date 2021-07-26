<?php
    //宣告 User 類別
    class User {

        //建構子
        function __construct(){
            echo "伺服器:水蛇許德拉";
            echo "<br>";
        }

        //屬性
        public $name;
        public $gender;
        public $height;
        public $weight;
        public $skin;
        public $level=0;
        public $race;
        private $skills = 0;
        protected $damage = 0;

        // 權限 public private protected

        //方法
        public function walk(){
            echo $this->skills;
        }
        public function run(){

        }
        public function attack(){
            switch($this->race){
                case "人類":
                    $this->damage = 10;
                    break;
                case "獸":
                    $this->damage = 30;
                    break;
                case "神族":
                    $this->damage = 20; 
                    break;
            }
            echo "傷害:" .$this->damage;
        }
    }
    //非玩家腳色
    class NPC extends User{ 
        public $computer;
        public function talk(){
            echo $this->skills;
        }
        public function combo(){
            $this->damage = 50;
            echo "傷害:" .$this->damage;
        }
    }
    
    
    //實體 物件實體 實例

    $jannifer = new User;
    $jannifer -> name = 'Jannifer';
    $jannifer -> gender = '男';
    $jannifer -> height = '183cm';
    $jannifer -> weight = '50kg';
    $jannifer -> skin = 'black';
    $jannifer -> race = "人類";

    $jannifer->walk();

    $jannifer -> attack();

    echo "<hr>";

    $lopez = new User;
    $lopez -> name = 'Lopez';
    $lopez -> gender = '女';
    $lopez -> height = '153cm';
    $lopez -> weight = '30kg';
    $lopez -> skin = 'yellow';
    $lopez -> race = "神族";
    $lopez -> attack();

    echo "<hr>";
    
    $john = new User;
    $john -> name = 'john';
    $john -> gender = '男';
    $john -> height = '173cm';
    $john -> weight = '60kg';
    $john -> skin = 'white';
    $john -> race = "獸";

    $john -> attack();
    echo "<hr>";
    // print_r($lopez);

    $mario = new NPC;
    // print_r($mario);
    // echo $mario->talk();

    $mario ->combo();

    // $mario->damage;