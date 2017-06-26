<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/19
 * Time: 上午11:03
 */

   class abstrct02 extends abstrct01
{
      public function abstract_func1()
      {
          echo "implement the abstract_func1 in class A/n";
      }
      public function abstract_func2()
      {
          echo "implement the abstract_func2 in class A/n";
      }
      /** 这么写在zend studio 8中会报错*/
//      abstract protected function abstract_func2();
}