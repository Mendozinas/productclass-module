[{$smarty.block.parent}]

[{oxstyle include=$oViewConf->getModuleUrl("gmtproductclass", "out/src/css/gmtproductclass.css") }]

[{assign var="productClass" value=$oDetailsProduct->getProductClassValue()}]
[{assign var="productClassColor" value=$oDetailsProduct->getProductClassColor()}]
[{assign var="productClassText" value=$oDetailsProduct->getProductClassText()}]
[{if $productClass > 0 }]
<div >
        <p class="productclasstitle [{$productClassColor}]">[{$productClassText}]</p>
</div>
[{/if}]