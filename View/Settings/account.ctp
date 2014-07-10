<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>
<div class="account form">
<?php
	echo $this->Form->create('Setting');
	echo $this->Form->input('name', array('label' => __d('webzash', 'Name')));
	echo $this->Form->input('address', array('type' => 'textarea', 'label' => __d('webzash', 'Address'), 'rows' => '3'));
	echo $this->Form->input('email', array('label' => __d('webzash', 'Email')));
	echo $this->Form->input('currency_symbol', array('label' => __d('webzash', 'Currency symbol')));
	echo $this->Form->input('date_format', array('type' => 'select', 'options' => array('dd/mm/yyyy' => 'Day/Month/Year', 'mm/dd/yyyy' => 'Month/Day/Year', 'yyyy/mm/dd' => 'Year/Month/Day'), 'label' => __d('webzash', 'Date format')));
	echo $this->Form->input('fy_start', array('label' => __d('webzash', 'Financial year start')));
	echo $this->Form->input('fy_end', array('label' => __d('webzash', 'Financial year end')));
	echo $this->Form->input('timezone', array('type' => 'select', 'options' => $this->Timezone->show(), 'default' => 'US/Eastern', 'label' => __d('webzash', 'Timezone')));
	echo $this->Form->end(__d('webzash', 'Submit'));
	echo $this->Html->link(__d('webzash', 'Back'), array('controller' => 'settings', 'action' => 'index'));
?>
</div>