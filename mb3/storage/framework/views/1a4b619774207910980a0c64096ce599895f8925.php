<div class="m_header">
    <div class="m_container">
        <div class="pullLeft">
            <img class="logo" src="<?php echo e($_system_config->m_site_logo); ?>" alt="">
        </div>
        <div class="pullRight m_header-info">
            <?php if(Auth::guard('member')->guest()): ?>
            <?php else: ?>
                <div><?php echo e($_member->name); ?></div>
                <div><?php echo e($_member->money); ?>&nbsp;RMB</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?38de67e8eb5fe11e77912770f1dc32a5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>