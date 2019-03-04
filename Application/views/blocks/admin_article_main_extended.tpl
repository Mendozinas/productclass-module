[{$smarty.block.parent}]

[{assign var="valueProductClass" value=$edit->oxarticles__oxproductclass->value}]
<tr>
	<td class="edittext">
		[{oxmultilang ident="GMT_PRODUCTCLASS_ADMIN_TITLE"}]&nbsp;
	</td>
	<td class="edittext">
		<select class="editinput" name="editval[oxarticles__oxproductclass]" [{$readonly}]>
			<option value="0" [{if $valueProductClass == 0}] selected[{/if}]>[{oxmultilang ident="GMT_PRODUCTCLASS_ADMIN_VALUE0"}]</option>
			<option value="1" [{if $valueProductClass == 1}] selected[{/if}]>[{oxmultilang ident="GMT_PRODUCTCLASS_ADMIN_VALUE1"}]</option>
			<option value="2" [{if $valueProductClass == 2}] selected[{/if}]>[{oxmultilang ident="GMT_PRODUCTCLASS_ADMIN_VALUE2"}]</option>
			<option value="3" [{if $valueProductClass == 3}] selected[{/if}]>[{oxmultilang ident="GMT_PRODUCTCLASS_ADMIN_VALUE3"}]</option>
		</select>
		[{oxinputhelp ident="GMT_PRODUCTCLASS_HELP"}]
	</td>
</tr>
