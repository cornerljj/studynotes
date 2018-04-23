<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/18
 * Time: 23:13
 */
define('BASEDIR',__DIR__);

include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');//自动加载类


//Common\Object::test();
//App\Controller\Home\Index::test();

//php链式操作,Database 类中的方法必须返回一个$this,才能用链式操作
/*$db = new Common\Database();
$db->where("id=1")->order("id asc")->limit('1');*/

//php魔术方法
//__get/__set
//  当对象调用不存在的属性并进行赋值之后，就会自动调用__set
// 当读取一个对象不存在的属性的时候会自动调用__get
//$obj = new Common\Object();
//$obj->title = "hello";
//echo $obj->title;  //hello
//__call/callStatic
//当调用对象的一个不存在的方法的时候就会调用__call
//echo $obj->test("hello1",123);// test  array(0=>'hello1',1=>'123') "magic static function"
//当调用对象的一个不存在的静态方法的时候就会调用__callStatic
//echo $obj::test("hello2",1234); // magic static function
//__toSring 当对象转换成字符串的时候自动调用
//echo $obj; //Common\Object
//__invoke 当把对象当成函数执行的时候自动调用
//echo $obj('test1');//test1


//简单工厂 用来统一创建类避免多个地方new
//$mysqlDb  = \Common\Factory::createDb('mysql');
//echo $mysqlDb->connect();
//$mysqliDb  = \Common\Factory::createDb('mysqli');
//echo $mysqliDb->connect();


//工厂模式：开放两个接口，一个是Factory创建数据库，一个是Db链接数据库
//$factory = new \Common\MysqlFactory();
//$mysqlDb = $factory->createDb();
//echo $mysqlDb->connect();
//
//$factory = new \Common\MysqliFactory();
//$mysqliDb = $factory->createDb();
//echo $mysqliDb->connect();

//单例模式：实例化对象，只实例化一次，避免针对单个类重复实例化，浪费资源和内存
//$db = \Common\Database::getInstance();
//$db = \Common\Database::getInstance();//调用多少次都只会实例化一次
//$temp = $db->test('freya');
//var_dump($temp);

//注册模式：对象第一次实例之后注册到全局树上，以后就可以在项目的任何地方直接使用注册方法调用不需要在实例化
//$mysqlDb2 = \Common\Register::get('db1');
//if($mysqlDb === $mysqlDb2){
//    echo 111;
//}else{
//    echo 222;
//}

//观察者模式
//比如我们平时开发添加课程成功之后还要处理一连串别的表的更新或者添加操作逻辑。当处理的逻辑增多的时候就很难维护。
//观察者模式实现低耦合，当一个对象发生改变，一来它的对象全部会受到通知，并自动更新
//
//$event = new \Common\Event();
//$observer1 = new \Common\Observer1();
//$event->addObserver($observer1);
//$event->trigger();

//职责链模式
//实例完成举报功能,每个对象存储着上一级的引用，自己处理不了就交给上一级处理
//$group = new \Common\Responsibility\GroupLeader();
//$ret = $group->handle(3);
//var_dump($ret);


//策略模式，跟工厂模式很相近