package org.libspark.betweenas3.core.easing 
{
    public class CubicEaseInOut extends Object implements org.libspark.betweenas3.core.easing.IEasing
    {
        public function CubicEaseInOut()
        {
            super();
            return;
        }

        public function calculate(arg1:Number, arg2:Number, arg3:Number, arg4:Number):Number
        {
            var loc1:*;
            arg1 = loc1 = arg1 / (arg4 / 2);
            if (!(loc1 < 1)) 
            {
                arg1 = loc1 = arg1 - 2;
            }
            return undefined;
        }
    }
}
