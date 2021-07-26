<?php
    //宣告 Human 類別
    class User {
        //屬性
        public $name;
        public $gender;
        public $height;
        public $weight;
        public $skin;
        public $level=0;
        public $race;


        //方法
        public function walk(){

        }
        public function run(){

        }
        public function attack(){
            switch($this->race){
                case "人類":
                    echo "傷害 10";
                    break;
                case "獸":
                    echo "傷害 30";
                    break;
                case "神族":
                    echo "傷害 20";
                    break;
            }
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