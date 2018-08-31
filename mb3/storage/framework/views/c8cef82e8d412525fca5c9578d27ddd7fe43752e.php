<?php $__env->startSection('content'); ?>
    <style>
        .pay_way_wrap .inp{
            width: 350px;
        }
    </style>
    <div class="userbasic_head">
        <a href="<?php echo e(route('member.finance_center')); ?>" class="active">会员存款</a>
        <a href="<?php echo e(route('member.member_drawing')); ?>" >会员提款</a>
        <a href="<?php echo e(route('member.indoor_transfer')); ?>">户内转账</a>
        
    </div>

    <!--第二个页面开始-->
    <div class="userbasic_body">
        <div class="bank_tips">温馨提示: 如当前支付方式未能支付成功，请您尝试其他支付方式进行支付！</div>
        <div class="pay_way_wrap">
            <form action="<?php echo e(route('quick_pay_apply')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <div class="pay_way_line">
                    <div class="tit">选择银行</div>
                    <div class="con">
                        <select name="cardType">
                            <option value="1">借记卡</option>
                            
                        </select>
                    </div>
                </div>
                <div class="pay_way_line">
                    <div class="tit">银行卡号</div>
                    <div class="con">
                        <p><input type="text" class="inp" name="cardNo" required> </p>
                    </div>
                </div>
                <div class="pay_way_line">
                    <div class="tit">开户姓名</div>
                    <div class="con">
                        <p><input type="text" class="inp" name="cardName" required> </p>
                    </div>
                </div>
                <div class="pay_way_line">
                    <div class="tit">身份证号</div>
                    <div class="con">
                        <p><input type="text" class="inp" name="idCardNo" required> </p>
                    </div>
                </div>
                <div class="pay_way_line">
                    <div class="tit">银行预留手机号</div>
                    <div class="con">
                        <p><input type="text" class="inp" name="mobile" required> </p>
                    </div>
                </div>

                <div class="pay_way_line">
                    <div class="tit">转账金额</div>
                    <div class="con">
                        <p><input type="text" class="inp" name="amount" required> 元</p>
                    </div>
                </div>
                <div class="pay_way_line">
                    <div class="tit"></div>
                    <div class="con">
                        <button type="submit" class="account_save">获取验证码</button> <a href="<?php echo e(route('member.finance_center')); ?>" class="account_save">返回</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('after.js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('member.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>