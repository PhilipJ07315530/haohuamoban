package org.libspark.betweenas3.core.easing 
{
    public class EaseNone extends Object implements org.libspark.betweenas3.core.easing.IEasing
    {
        public function EaseNone()
        {
            super();
            return;
        }

        public function calculate(arg1:Number, arg2:Number, arg3:Number, arg4:Number):Number
        {
            return arg3 * arg1 / arg4 + arg2;
        }
    }
}
