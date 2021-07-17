<?php
 $color = ['red','yellow','green','blue','indigo','purple','pink'];
 $random = rand(0,6);
?>
<div class="box-border rounded-full h-16 w-16 px-4 py-2 border-4 bg-{{ $color[$random] }}-600 text-white text-3xl	">
    {{ $letter }}
</div>